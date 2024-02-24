<?php

namespace App\Controller;

use App\Entity\Message;
use App\Form\MessageFormType;
use App\Repository\MessageRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\User; // Import the User entity
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Filesystem\Filesystem;

class DashboardController extends AbstractController
{
    #[Route('/dashboard', name: 'dashboard')]
    public function index(EntityManagerInterface $entityManager, Request $request, MessageRepository $messageRepository): Response
    {
        $users = $entityManager->getRepository(User::class)->findAll(); // Fetch all users
        $messages = $messageRepository->findAll();

        $message = new Message();

        // Create the message form
        $form = $this->createForm(MessageFormType::class, $message);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Set the sender of the message
            $message->setSender($this->getUser()->getUserIdentifier());
            $message->setCreatedAt(new \DateTimeImmutable('now'));
            
            $reason = $form->get('reason')->getData();
            $message->setReason($reason);

            // Save the message to the database
            $entityManager->persist($message);
            $entityManager->flush();

            $this->addFlash('success', 'Message sent successfully.');

            return $this->redirectToRoute('dashboard');
        }

        // Handling message deletion
        if ($request->isMethod('POST')) {
            $messageId = $request->request->get('id');
            $message = $entityManager->getRepository(Message::class)->find($messageId);
            if ($message) {
                $entityManager->remove($message);
                $entityManager->flush();
                $this->addFlash('success', 'Message deleted successfully.');
                return $this->redirectToRoute('dashboard');
            } else {
                $this->addFlash('error', 'Message not found.');
            }
        }

        $filesystem = new Filesystem();
        $recipientAvatars = [];
        foreach ($messages as $message) {
            $recipient = $message->getRecipient();
            $avatarPath = 'avatars/avatar_' . $recipient . '.png';
            if ($filesystem->exists($avatarPath)) {
                $recipientAvatars[$recipient] = $avatarPath;
            } else {
                // If avatar doesn't exist, use default avatar
                $recipientAvatars[$recipient] = 'avatars/default_avatar.jpg';
            }
        }

        return $this->render('dashboard/index.html.twig', [
            'controller_name' => 'DashboardController',
            'users' => $users, // Pass users to the template
            'form' => $form->createView(),  
            'messages' => $messages,
            'recipientAvatars' => $recipientAvatars,
        ]);
    }

    #[Route('/dashboard/edit', name: 'edit_message')]
    public function editMessage(Request $request, EntityManagerInterface $entityManager): Response
    {
        $messageId = $request->request->get('message_id');
        $editedContent = $request->request->get('edited_content');
    
        $message = $entityManager->getRepository(Message::class)->find($messageId);
    
        if (!$message) {
            throw $this->createNotFoundException('Message not found');
        }
    
        $message->setContent($editedContent);
        $entityManager->flush();
    
        $this->addFlash('success', 'Message edited successfully.');
    
        return $this->redirectToRoute('dashboard');
    }


    public function deleteMessage(Request $request, EntityManagerInterface $entityManager): Response
{
    $messageId = $request->attributes->get('id');
    $message = $entityManager->getRepository(Message::class)->find($messageId);

    if (!$message) {
        throw $this->createNotFoundException('Message not found');
    }

    $entityManager->remove($message);
    $entityManager->flush();

    $this->addFlash('success', 'Message deleted successfully.');

    return $this->redirectToRoute('dashboard');
}

}

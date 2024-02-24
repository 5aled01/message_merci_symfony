<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* dashboard/index.html.twig */
class __TwigTemplate_3b90bc6d61bcdb787cbc7c4f36769ef0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Dashboard";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <div>
        <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">Logout</a>
    </div>
    <h1>Bienvenue sur le tableau de bord</h1>
    <table>
        <tr>
            
        </tr>
    </table>
    
    <hr> ";
        // line 18
        echo "    
    <h2>Messages: Liste complète des \"merci\".</h2>

    ";
        // line 22
        echo "    <form method=\"get\" action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        echo "\">
        <label for=\"showSentMessages\">Filtrer pour voir uniquement les mercis qui me concernent:</label>
        <input type=\"checkbox\" id=\"showSentMessages\" name=\"showSentMessages\" ";
        // line 24
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "request", [], "any", false, false, false, 24), "query", [], "any", false, false, false, 24), "get", ["showSentMessages"], "method", false, false, false, 24) == "on")) {
            echo "checked";
        }
        echo ">
        <button type=\"submit\">Apply Filter</button>
    </form>

    <table border=\"1\">
        <tr>
            <th>Expéditeur</th>
            <th>Destinataire</th>
            <th>Contenu</th>
            <th>Créé à:</th>
            <th>Raison</th>
            <th>Action</th>
        </tr>
        ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 37, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 38
            echo "            ";
            if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "request", [], "any", false, false, false, 38), "query", [], "any", false, false, false, 38), "get", ["showSentMessages"], "method", false, false, false, 38) || (twig_get_attribute($this->env, $this->source, $context["message"], "sender", [], "any", false, false, false, 38) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "user", [], "any", false, false, false, 38), "email", [], "any", false, false, false, 38)))) {
                // line 39
                echo "                <tr>
                    <td>";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "sender", [], "any", false, false, false, 40), "html", null, true);
                echo "</td>
                    <td>
                        <img src=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["recipientAvatars"]) || array_key_exists("recipientAvatars", $context) ? $context["recipientAvatars"] : (function () { throw new RuntimeError('Variable "recipientAvatars" does not exist.', 42, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["message"], "recipient", [], "any", false, false, false, 42), [], "array", false, false, false, 42)), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "recipient", [], "any", false, false, false, 42), "html", null, true);
                echo "\" width=\"50\" height=\"50\">
                        ";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "recipient", [], "any", false, false, false, 43), "html", null, true);
                echo "
                    </td>
                    <td>";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "content", [], "any", false, false, false, 45), "html", null, true);
                echo "</td>
                    <td>";
                // line 46
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "createdAt", [], "any", false, false, false, 46), "Y-m-d H:i:s"), "html", null, true);
                echo "</td>
                    <td>";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "reason", [], "any", false, false, false, 47), "html", null, true);
                echo "</td>
                    <td>
                        <form style=\"display: inline-block;\" method=\"post\" action=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_message", ["id" => twig_get_attribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 49)]), "html", null, true);
                echo "\" onsubmit=\"return confirm('Are you sure you want to delete this message?')\">
                            <button type=\"submit\">Supprimer</button>
                        </form>
                        <button onclick=\"openEditForm('";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "content", [], "any", false, false, false, 52), "html", null, true);
                echo "', ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 52), "html", null, true);
                echo ")\">Modifier</button>
                    </td>
                </tr>
                <tr id=\"editFormRow";
                // line 55
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 55), "html", null, true);
                echo "\" style=\"display: none;\">
                    <td colspan=\"6\">
                        <div id=\"editForm";
                // line 57
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 57), "html", null, true);
                echo "\">
                            <h3>Modifier le message </h3>
                            <form method=\"post\" action=\"";
                // line 59
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_message");
                echo "\">
                                <input type=\"hidden\" name=\"message_id\" value=\"";
                // line 60
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 60), "html", null, true);
                echo "\">
                                <textarea name=\"edited_content\" rows=\"4\" cols=\"50\"></textarea>
                                <button type=\"submit\">Sauvegarder</button>
                            </form>
                        </div>
                    </td>
                </tr>
            ";
            }
            // line 68
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "    </table>

    <hr> ";
        // line 72
        echo "
    <h2>Envoyer un message \"merci\".</h2>

    ";
        // line 76
        echo "    <form method=\"post\" action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        echo "\">
        <table>
            <tr>
                <td>";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "content", [], "any", false, false, false, 79), 'label');
        echo "</td>
                <td>";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "content", [], "any", false, false, false, 80), 'errors');
        echo "</td>
                <td>";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "content", [], "any", false, false, false, 81), 'widget', ["attr" => ["rows" => "4"]]);
        echo "</td>
                ";
        // line 83
        echo "            </tr>
            <tr>
                <td>";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "recipient", [], "any", false, false, false, 85), 'label');
        echo "</td>
                <td>";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "recipient", [], "any", false, false, false, 86), 'errors');
        echo "</td>
                <td>";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "recipient", [], "any", false, false, false, 87), 'widget');
        echo "</td>
            </tr>
            <tr>
                <td>";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "reason", [], "any", false, false, false, 90), 'label');
        echo "</td>
                <td>";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "reason", [], "any", false, false, false, 91), 'errors');
        echo "</td>
                <td>";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "reason", [], "any", false, false, false, 92), 'widget');
        echo "</td>
            </tr>
            <tr>
                <td colspan=\"3\"><button type=\"submit\">Envoyer un message</button></td>
            </tr>
        </table>
        ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), 'rest');
        echo "
    </form>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 103
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 104
        echo "<script>
    function openEditForm(content, messageId) {
        // Hide all edit forms
        document.querySelectorAll('[id^=editFormRow]').forEach(function(element) {
            element.style.display = 'none';
        });

        // Set content in the edit form
        document.querySelector('#editFormRow' + messageId).style.display = 'table-row';
        document.querySelector('#editForm' + messageId + ' textarea').value = content;
    }
</script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "dashboard/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  305 => 104,  295 => 103,  281 => 98,  272 => 92,  268 => 91,  264 => 90,  258 => 87,  254 => 86,  250 => 85,  246 => 83,  242 => 81,  238 => 80,  234 => 79,  227 => 76,  222 => 72,  218 => 69,  212 => 68,  201 => 60,  197 => 59,  192 => 57,  187 => 55,  179 => 52,  173 => 49,  168 => 47,  164 => 46,  160 => 45,  155 => 43,  149 => 42,  144 => 40,  141 => 39,  138 => 38,  134 => 37,  116 => 24,  110 => 22,  105 => 18,  93 => 8,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Dashboard{% endblock %}

{% block body %}

    <div>
        <a href=\"{{ path('app_logout') }}\">Logout</a>
    </div>
    <h1>Bienvenue sur le tableau de bord</h1>
    <table>
        <tr>
            
        </tr>
    </table>
    
    <hr> {# Horizontal line to separate form sections #}
    
    <h2>Messages: Liste complète des \"merci\".</h2>

    {# Filter form #}
    <form method=\"get\" action=\"{{ path('dashboard') }}\">
        <label for=\"showSentMessages\">Filtrer pour voir uniquement les mercis qui me concernent:</label>
        <input type=\"checkbox\" id=\"showSentMessages\" name=\"showSentMessages\" {% if app.request.query.get('showSentMessages') == 'on' %}checked{% endif %}>
        <button type=\"submit\">Apply Filter</button>
    </form>

    <table border=\"1\">
        <tr>
            <th>Expéditeur</th>
            <th>Destinataire</th>
            <th>Contenu</th>
            <th>Créé à:</th>
            <th>Raison</th>
            <th>Action</th>
        </tr>
        {% for message in messages %}
            {% if not app.request.query.get('showSentMessages') or message.sender == app.user.email %}
                <tr>
                    <td>{{ message.sender }}</td>
                    <td>
                        <img src=\"{{ asset(recipientAvatars[message.recipient]) }}\" alt=\"{{ message.recipient }}\" width=\"50\" height=\"50\">
                        {{ message.recipient }}
                    </td>
                    <td>{{ message.content }}</td>
                    <td>{{ message.createdAt|date('Y-m-d H:i:s') }}</td>
                    <td>{{ message.reason }}</td>
                    <td>
                        <form style=\"display: inline-block;\" method=\"post\" action=\"{{ path('delete_message', {'id': message.id}) }}\" onsubmit=\"return confirm('Are you sure you want to delete this message?')\">
                            <button type=\"submit\">Supprimer</button>
                        </form>
                        <button onclick=\"openEditForm('{{ message.content }}', {{ message.id }})\">Modifier</button>
                    </td>
                </tr>
                <tr id=\"editFormRow{{ message.id }}\" style=\"display: none;\">
                    <td colspan=\"6\">
                        <div id=\"editForm{{ message.id }}\">
                            <h3>Modifier le message </h3>
                            <form method=\"post\" action=\"{{ path('edit_message') }}\">
                                <input type=\"hidden\" name=\"message_id\" value=\"{{ message.id }}\">
                                <textarea name=\"edited_content\" rows=\"4\" cols=\"50\"></textarea>
                                <button type=\"submit\">Sauvegarder</button>
                            </form>
                        </div>
                    </td>
                </tr>
            {% endif %}
        {% endfor %}
    </table>

    <hr> {# Horizontal line to separate form sections #}

    <h2>Envoyer un message \"merci\".</h2>

    {# Render the message form #}
    <form method=\"post\" action=\"{{ path('dashboard') }}\">
        <table>
            <tr>
                <td>{{ form_label(form.content) }}</td>
                <td>{{ form_errors(form.content) }}</td>
                <td>{{ form_widget(form.content, {'attr': {'rows': '4'}}) }}</td>
                {# Set the 'rows' attribute to control the height of the textarea #}
            </tr>
            <tr>
                <td>{{ form_label(form.recipient) }}</td>
                <td>{{ form_errors(form.recipient) }}</td>
                <td>{{ form_widget(form.recipient) }}</td>
            </tr>
            <tr>
                <td>{{ form_label(form.reason) }}</td>
                <td>{{ form_errors(form.reason) }}</td>
                <td>{{ form_widget(form.reason) }}</td>
            </tr>
            <tr>
                <td colspan=\"3\"><button type=\"submit\">Envoyer un message</button></td>
            </tr>
        </table>
        {{ form_rest(form) }}
    </form>

{% endblock %}

{% block javascripts %}
<script>
    function openEditForm(content, messageId) {
        // Hide all edit forms
        document.querySelectorAll('[id^=editFormRow]').forEach(function(element) {
            element.style.display = 'none';
        });

        // Set content in the edit form
        document.querySelector('#editFormRow' + messageId).style.display = 'table-row';
        document.querySelector('#editForm' + messageId + ' textarea').value = content;
    }
</script>

{% endblock %}
", "dashboard/index.html.twig", "/Users/khaledihitt/Downloads/symfony-6-login-register-main/templates/dashboard/index.html.twig");
    }
}

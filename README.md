# Symfony Message Board Application

This is a simple Symfony application for managing messages between users.

## Prerequisites

Before running the application, make sure you have the following installed on your system:

- PHP (>= 7.4)
- Composer
- Symfony CLI
- MySQL 

## Installation

1. Clone the repository or download ZIP.

2. Install dependencies:

    ```
    cd symfony-message-board
    composer install
    ```

3. Configure the Database:

    - Create a new MySQL database for the application : ```message_exo```.

    - Edit `.env` and set your database credentials:

        ```
        DATABASE_URL="mysql://root:pass@127.0.0.1:3306/message_exo?serverVersion=8&charset=utf8mb4"
        ```

4. Run Migrations:

    ```
    php bin/console doctrine:migrations:migrate
    ```
    
    - Insert default users and messages by running the SQL queries in the data.sql file.
    ```
    mysql -u root -p message_exo < data.sql

    ```
    

## Usage

To start the Symfony development server, run the following command:

    ```
    symfony serve:start

    ```
- Register your default user


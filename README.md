# Blogsmate

Blogsmate is a PHP-based blogging application that allows users to create, edit, and delete blog posts. It also includes a commenting system for users to leave comments on blog posts.

## Features

- User Authentication
- Create, Edit, and Delete Blog Posts
- Commenting System
- Article Categorization
- Author Management
- Rich Text Editing with CKEditor

## Technologies Used

- PHP
- MySQL
- PDO (PHP Data Objects)
- CKEditor
- Bootstrap

## Installation

### Prerequisites

- PHP 7.4 or higher
- MySQL 5.7 or higher
- Composer (for dependency management)

### Steps

1. **Clone the repository:**

    ```bash
    git clone https://github.com/anirban-saha/blogsmate.git
    cd blogsmate
    ```

2. **Install dependencies:**

    ```bash
    composer install
    ```

3. **Set up the database:**

    - Create a MySQL database.
    - Import the provided SQL file to set up the database schema and initial data.

    ```sql
    CREATE DATABASE blogsmate;
    USE blogsmate;
    SOURCE path/to/your/sql/file.sql;
    ```

4. **Configure the application:**

    - Rename `config.sample.php` to `config.php`.
    - Update the database credentials and other configuration settings in `config.php`.

    ```php
    define('DB_SERVER', 'your_database_server');
    define('DB_USERNAME', 'your_database_username');
    define('DB_PASSWORD', 'your_database_password');
    define('DB_NAME', 'blogsmate');
    ```

5. **Run the application:**

    - Start your local PHP server:

    ```bash
    php -S localhost:8000
    ```

    - Open your browser and navigate to `http://localhost:8000`.

## Usage

### User Registration

- Navigate to the registration page (`/registration.php`) to create a new account.

### User Login

- Navigate to the login page (`/login.php`) to log in to your account.

### Creating a Blog Post

- After logging in, navigate to the create post page (`/add_article.php`) to create a new blog post.

### Editing a Blog Post

- Navigate to the edit post page (`/update_article.php`) to edit an existing blog post.

### Deleting a Blog Post

- Navigate to the delete post page (`/delete_post.php`) to delete an existing blog post.

### Commenting on a Blog Post

- Navigate to a single article page (`/single_article.php`) to leave a comment on a blog post.

## File Structure

- `index.php`: Main page of the application, displays a list of all blog posts.
- `login.php`: Page for user login.
- `logout.php`: Page for logging out the user.
- `registration.php`: Page for user registration.
- `add_article.php`: Page for creating a new blog post.
- `update_article.php`: Page for editing an existing blog post.
- `delete_post.php`: Page for deleting an existing blog post.
- `single_article.php`: Page for displaying a single blog post and its comments.
- `add_author.php`: Page for adding a new author.
- `update_author.php`: Page for updating an existing author.
- `add_category.php`: Page for adding a new category.
- `update_category.php`: Page for updating an existing category.
- `categories.php`: Page for displaying all categories.
- `author.php`: Page for displaying all authors.
- `db.php`: Script for connecting to the MySQL database using PDO.
- `config.php`: Configuration settings for the application.

## Contributing

Contributions are welcome! Please fork the repository and submit a pull request with your changes.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

## Acknowledgements

- [CKEditor](https://ckeditor.com/)
- [Bootstrap](https://getbootstrap.com/)

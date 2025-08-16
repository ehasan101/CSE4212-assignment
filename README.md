# Simple Blog Site with Registration and Login

This is a simple blog website built with PHP and MySQL that includes user registration, login functionality and an admin panel for managing blog posts.

## Features

* **User Authentication:**
    * User registration with validation for username, phone number, and password patterns.
    * User login and session management to protect pages.
    * Logout functionality that destroys the session.
* **Admin Panel:**
    * Separate login for the administrator.
    * CRUD (Create, Read, Update, Delete) functionality for blog posts.
    * A dedicated control panel to manage all blog entries.
* **Blog:**
    * A home page that displays all blog posts for logged-in users.
    * A clean and simple user interface styled with Bootstrap.

## Technologies Used

* **Frontend:**
    * HTML5
    * CSS3
    * Bootstrap
* **Backend:**
    * PHP
* **Database:**
    * MySQL

## Setup and Installation

1.  **Database Setup:**
    * Start your Apache and MySQL servers.
    * Create a new database in phpMyAdmin and name it `webt1`.
    * Create two tables in the `webt1` database:
        * `reg` for user registration details with columns: `id` (INT, AUTO\_INCREMENT, PRIMARY KEY), `username` (VARCHAR), `email` (VARCHAR), `phone` (VARCHAR), `pass` (VARCHAR).
        * `crud` for blog posts with columns: `id` (INT, AUTO\_INCREMENT, PRIMARY KEY), `name` (VARCHAR), `price` (VARCHAR, can be repurposed for a subtitle or date), `image` (VARCHAR).

2.  **File Placement:**
    * Place the entire project folder (`SimpleblogsitewithRegsistration+Login`) into your web server's root directory (e.g., `htdocs` for XAMPP or `www` for WAMP).

3.  **Database Connection:**
    * Open the `config.php` file and ensure the database credentials (`$servername`, `$username`, `$password`, `$dbName`) match your local setup. The default is usually correct for a standard XAMPP/WAMP installation.

4.  **Run the Project:**
    * Open your web browser and navigate to `http://localhost/SimpleblogsitewithRegsistration+Login/loginPHP.html`.

## Work-Flow

1.  **Register:** New users can create an account by clicking the "Regsister" link on the login page or navigating directly to `regsis.html`.
2.  **Login:** Registered users can log in from the `loginPHP.html` page. Upon successful login, they are redirected to the blog homepage `Bhome.php`.
3.  **Admin Login:** The administrator has a separate login page at `adminLogin.html`. Successful admin login redirects to the `controlP.php` admin panel.
4.  **Manage Posts:** From the admin control panel, the admin can add new blog posts, and for each existing post, there are options to edit or delete it.


<br> 

## Contributing

Contributions to improve this project are welcome. You can contribute in several ways:

- **Reporting Bugs**: If you find a bug, please open an issue and describe it in detail.
- **Suggesting Enhancements**: Have an idea for a new feature or an improvement to an existing one? Feel free to open an issue to discuss it.
- **Pull Requests**: If you'd like to contribute code, you can fork the repository and submit a pull request. Some areas for improvement could be:
- Adding a **user profile page**.
- Implementing a **comments section** for blog posts.
- **Improving the UI/UX** of the site.
- **Refactoring the code** for better performance and security.

Feel free to fork this repo and make your changes. <br>
**Jazakallahu Khairan** *(May Allah reward you with goodness)*



---

### #HappyCoding

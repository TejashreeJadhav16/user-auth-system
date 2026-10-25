# 🔐 User Authentication System

A secure web application built using Core PHP, MySQL, jQuery, and AJAX for user registration, login, and profile management without page reloads.
[![Architecture diagram of tejashreejadhav16/user-auth-system](https://gitdiagram.com/tejashreejadhav16/user-auth-system/diagram.png)](https://gitdiagram.com/tejashreejadhav16/user-auth-system?utm_source=readme&utm_medium=picture)
## ✨ Features
- User registration and login
- AJAX-based form submission
- Dashboard with user details
- Profile view and edit
- Change password
- Session-based authentication
- Password hashing and verification
- Prepared statements to prevent SQL injection
- Google reCAPTCHA integration

## 🛠️ Tech Stack
- PHP (Core PHP)
- MySQL
- jQuery & AJAX
- HTML5 & CSS3
- Google reCAPTCHA

## 📂 Project Structure
```text
user-auth/
├── config/
├── ajax/
├── dashboard/
├── database.sql
└── README.md
```

## ⚙️ Installation & Running

1. Clone the repository:
   ```bash
   git clone YOUR_GITHUB_REPOSITORY_URL
   ```
2. Move the project into `C:\xampp\htdocs\user-auth`.
3. Start Apache and MySQL in XAMPP.
4. Import `database.sql` using [phpMyAdmin](http://localhost/phpmyadmin).
5. Configure database credentials in the `config/` directory.
6. Open the application:

   `http://localhost/user-auth/`


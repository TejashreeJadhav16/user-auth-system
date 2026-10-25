# 🔐 User Authentication System

A secure web application built using Core PHP, MySQL, jQuery, and AJAX for user registration, login, and profile management without page reloads.

## 🏗️ Architecture

[![User Authentication System Architecture](https://gitdiagram.com/tejashreejadhav16/user-auth-system/diagram.png)](https://gitdiagram.com/tejashreejadhav16/user-auth-system)

## ✨ Features

- User registration and login
- AJAX-based form submission without page reloads
- Dashboard with user details
- Profile viewing and editing
- Change password functionality
- Session-based authentication
- Secure password hashing and verification
- Prepared statements to prevent SQL injection
- Google reCAPTCHA integration for bot protection

## 🛠️ Tech Stack

- **Backend:** Core PHP
- **Database:** MySQL
- **Frontend:** HTML5, CSS3
- **JavaScript:** jQuery and AJAX
- **Security:** Password hashing, prepared statements, Google reCAPTCHA
- **Development Environment:** XAMPP, Visual Studio Code

## 📂 Project Structure

```text
user-auth-system/
├── config/          # Database configuration
├── ajax/            # Login and registration handlers
├── dashboard/       # Dashboard, profile, and settings
├── database.sql     # Database schema
└── README.md        # Project documentation
```

## ⚙️ Installation & Setup

**1. Clone the repository**

```bash
git clone https://github.com/TejashreeJadhav16/user-auth-system.git
cd user-auth-system
```

**2. Configure XAMPP**

Move the project folder into:

```text
C:\xampp\htdocs\user-auth-system
```

Start **Apache** and **MySQL** from the XAMPP Control Panel.

**3. Set up the database**

- Open [phpMyAdmin](http://localhost/phpmyadmin).
- Create the required database.
- Import `database.sql`.
- Update the database credentials in the appropriate file inside `config/`.

**4. Run the application**

Open your browser and visit:

```text
http://localhost/user-auth-system/
```

## 🔒 Security

- Passwords are hashed using `password_hash()` and verified using `password_verify()`.
- Prepared statements help prevent SQL injection.
- Session-based authentication protects user access.
- Google reCAPTCHA helps reduce automated submissions.


---

*Developed to demonstrate secure authentication, AJAX integration, database management, and backend development using PHP and MySQL.*

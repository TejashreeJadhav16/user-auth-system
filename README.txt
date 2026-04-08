User Authentication System

1. Project Overview
I developed a User Registration and Login system using Core PHP, MySQL, jQuery, and AJAX. The application allows users to register, log in, and access a dashboard without page reloads using AJAX.

2. Security Features
- Password hashing using `password_hash()`
- Password verification using `password_verify()`
- Prepared statements to prevent SQL Injection
- Google reCAPTCHA integration for bot protection

3. Features
- User Registration & Login
- AJAX-based form submission (no page reload)
- Dashboard with user details
- Profile view & edit functionality
- Change password feature
- Session-based authentication

4.Tech Stack
- PHP (Core PHP)
- MySQL
- jQuery & AJAX
- HTML, CSS

5. Project Structure
- `config/` → Database connection
- `ajax/` → Backend logic (login/register)
- `dashboard/` → Dashboard, profile, settings
- `database.sql` → Database file

6. How to Run
1. Import `database.sql` in phpMyAdmin
2. Place project in XAMPP `htdocs`
3. Start Apache & MySQL
4. Open `http://localhost/user-auth/`

Conclusion
This project demonstrates backend development, AJAX integration, database handling, and security practices in a real-world authentication system.

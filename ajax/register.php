<?php
session_start();
include("../config/db.php");

/* GOOGLE RECAPTCHA VERIFY */
$secretKey = "6LflqKwsAAAAAJ6pmIPK79nVi7N3o483KpDCe8G3";
$response = $_POST['g-recaptcha-response'];

$verify = file_get_contents(
    "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$response"
);

$captcha_success = json_decode($verify);

if (!$captcha_success->success) {
    echo "<span style='color:red;'>Captcha verification failed!</span>";
    exit();
}

/* USER DATA */
$name = trim($_POST['name']);
$email = trim($_POST['email']);
$phone = trim($_POST['phone']);
$password = $_POST['password'];

/* CHECK EMAIL */
$stmt = $conn->prepare("SELECT id FROM users WHERE email=?");
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    echo "<span style='color:red;'>Email already exists!</span>";
    exit();
}

/* HASH PASSWORD */
$hashed = password_hash($password, PASSWORD_DEFAULT);

/* INSERT */
$stmt = $conn->prepare("INSERT INTO users(name,email,phone,password) VALUES(?,?,?,?)");
$stmt->bind_param("ssss", $name, $email, $phone, $hashed);

if ($stmt->execute()) {
    echo "<span style='color:green;'>Registration Successful!</span>";
} else {
    echo "Error!";
}
?>
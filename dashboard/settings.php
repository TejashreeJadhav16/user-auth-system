<?php
session_start();
include("../config/db.php");

$email = $_SESSION['user'];

$msg = "";

if($_SERVER['REQUEST_METHOD']=="POST"){
    $old = $_POST['old_password'];
    $new = $_POST['new_password'];

    $res = mysqli_query($conn,"SELECT * FROM users WHERE email='$email'");
    $user = mysqli_fetch_assoc($res);

    if(password_verify($old, $user['password'])){
        $newHash = password_hash($new, PASSWORD_DEFAULT);

        mysqli_query($conn,"UPDATE users SET password='$newHash' WHERE email='$email'");
        $msg = "Password updated!";
    } else {
        $msg = "Wrong old password!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Settings</title>

<style>
body { margin:0; font-family:'Segoe UI'; background:#f4f6f9; }
.container { display:flex; }
.main { flex:1; padding:30px; }

.card {
    background:white;
    padding:30px;
    border-radius:10px;
    width:400px;
}

input {
    width:100%;
    padding:10px;
    margin:10px 0;
}

button {
    padding:10px;
    background:#5b7cff;
    color:white;
    border:none;
}
</style>

</head>

<body>

<div class="container">

<?php include("sidebar.php"); ?>

<div class="main">
    <div class="card">
        <h2>Change Password</h2>

        <form method="POST">
            <input type="password" name="old_password" placeholder="Old Password" required>
            <input type="password" name="new_password" placeholder="New Password" required>

            <button type="submit">Update Password</button>
        </form>

        <p><?php echo $msg; ?></p>
    </div>
</div>

</div>

</body>
</html>
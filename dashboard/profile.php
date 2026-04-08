<?php
session_start();
include("../config/db.php");

if(!isset($_SESSION['user'])){
    header("Location: ../index.php");
    exit();
}

$email = $_SESSION['user'];

$result = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
$user = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
<title>Profile</title>

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

button {
    margin-top:15px;
    padding:10px;
    background:#5b7cff;
    color:white;
    border:none;
    border-radius:5px;
}
</style>

</head>

<body>

<div class="container">

<?php include("sidebar.php"); ?>

<div class="main">
    <div class="card">
        <h2>User Profile</h2>

        <p><b>Name:</b> <?php echo $user['name']; ?></p>
        <p><b>Email:</b> <?php echo $user['email']; ?></p>
        <p><b>Phone:</b> <?php echo $user['phone']; ?></p>

        <a href="edit_profile.php">
            <button>Edit Profile</button>
        </a>
    </div>
</div>

</div>

</body>
</html>
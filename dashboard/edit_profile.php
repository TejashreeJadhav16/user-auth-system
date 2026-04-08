<?php
session_start();
include("../config/db.php");

$email = $_SESSION['user'];

if($_SERVER['REQUEST_METHOD']=="POST"){
    $name = $_POST['name'];
    $phone = $_POST['phone'];

    mysqli_query($conn,"UPDATE users SET name='$name', phone='$phone' WHERE email='$email'");

    header("Location: profile.php");
}

$result = mysqli_query($conn,"SELECT * FROM users WHERE email='$email'");
$user = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
<title>Edit Profile</title>

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
        <h2>Edit Profile</h2>

        <form method="POST">
            <input type="text" name="name" value="<?php echo $user['name']; ?>">
            <input type="text" name="phone" value="<?php echo $user['phone']; ?>">

            <button type="submit">Update</button>
        </form>
    </div>
</div>

</div>

</body>
</html>
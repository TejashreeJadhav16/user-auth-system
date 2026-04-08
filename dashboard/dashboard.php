<?php
session_start();
include("../config/db.php");

/* CHECK LOGIN */
if(!isset($_SESSION['user'])){
    header("Location: ../index.php");
    exit();
}

$email = $_SESSION['user'];

/* FETCH USER */
$stmt = $conn->prepare("SELECT * FROM users WHERE email=?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

/* SAFE FETCH */
if($result->num_rows > 0){
    $user = $result->fetch_assoc();
} else {
    die("User not found. Please login again.");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>

<style>
body {
    margin: 0;
    font-family: 'Segoe UI', sans-serif;
    background: #f4f6f9;
}

.container {
    display: flex;
}

/* MAIN */
.main {
    flex: 1;
    padding: 20px;
}

/* HEADER */
.header {
    background: white;
    padding: 15px 20px;
    border-radius: 8px;
    margin-bottom: 20px;
}

/* CARDS */
.cards {
    display: flex;
    gap: 20px;
    flex-wrap: wrap;
}

.card {
    background: white;
    padding: 20px;
    border-radius: 10px;
    width: 250px;
    box-shadow: 0 3px 10px rgba(0,0,0,0.1);
}

.card h3 {
    margin-bottom: 10px;
    color: #5b7cff;
}
</style>

</head>

<body>

<div class="container">

<!-- SIDEBAR -->
<?php include("sidebar.php"); ?>

<!-- MAIN -->
<div class="main">

    <div class="header">
        <h2>Welcome, <?php echo htmlspecialchars($user['name']); ?> 👋</h2>
    </div>

    <div class="cards">

        <div class="card">
            <h3>👤 Name</h3>
            <p><?php echo htmlspecialchars($user['name']); ?></p>
        </div>

        <div class="card">
            <h3>📧 Email</h3>
            <p><?php echo htmlspecialchars($user['email']); ?></p>
        </div>

        <div class="card">
            <h3>📱 Phone</h3>
            <p><?php echo htmlspecialchars($user['phone']); ?></p>
        </div>

    </div>

</div>

</div>

</body>
</html>
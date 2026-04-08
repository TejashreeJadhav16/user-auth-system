<?php
if(!isset($_SESSION)) session_start();
?>

<style>
.sidebar {
    width:250px;
    background:linear-gradient(135deg,#5b7cff,#6c8cff);
    color:white;
    padding:20px;
    height:100vh;
}

.user-icon {
    width:70px;height:70px;background:white;color:#5b7cff;
    border-radius:50%;display:flex;justify-content:center;
    align-items:center;font-size:30px;margin:20px auto;
}

.menu a {
    display:block;padding:10px;margin:8px 0;
    color:white;text-decoration:none;border-radius:5px;
}

.menu a:hover {
    background:rgba(255,255,255,0.2);
}
</style>

<div class="sidebar">

    <h2 style="text-align:center;">My App</h2>

    <div class="user-icon">👤</div>

    <div style="text-align:center;">
        <?php echo $_SESSION['user']; ?>
    </div>

    <div class="menu">
        <a href="dashboard.php">Dashboard</a>
        <a href="profile.php">Profile</a>
        <a href="settings.php">Settings</a>
        <a href="../logout.php">Logout</a>
    </div>

</div>
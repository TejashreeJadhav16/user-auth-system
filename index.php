<!DOCTYPE html>
<html>
<head>
<title>Login</title>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<style>
body {
    margin: 0;
    font-family: 'Segoe UI', sans-serif;
}

/* MAIN */
.container {
    display: flex;
    height: 100vh;
}

/* LEFT SIDE */
.left {
    width: 50%;
    background: linear-gradient(135deg, #5b7cff, #6c8cff);
    color: white;
    position: relative;
    padding: 80px 70px;

    display: flex;
    flex-direction: column;
    justify-content: center;   /* vertical center */
    align-items: flex-start;   /* left align */

    overflow: hidden;
}

/* TEXT */
.left h3 {
    font-size: 20px;
    font-weight: 600;
    margin-bottom: 20px;
}

.left p {
    font-size: 16px;
    margin-bottom: 20px;
    opacity: 0.9;
}

.left h1 {
    font-size: 52px;
    line-height: 1.3;
    font-weight: 700;
    margin-bottom: 30px;
}

/* SHAPES */
.circle {
    position: absolute;
    border-radius: 50%;
    background: rgba(255,255,255,0.2);
}

.circle1 {
    width: 220px;
    height: 220px;
    top: 50px;
    left: -80px;
}

.circle2 {
    width: 320px;
    height: 320px;
    bottom: -120px;
    right: -120px;
}

/* RIGHT SIDE */
.right {
    width: 50%;
    background: #f7f7f7;
    display: flex;
    justify-content: center;
    align-items: center;
}

/* FORM */
.form-box {
    width: 100%;
    max-width: 320px;   /* better control */
}

/* TITLE */
.form-box h1 {
    font-size: 36px;
    color: #5b7cff;
    margin-bottom: 25px;
}

/* LABEL */
label {
    font-weight: 600;
    font-size: 14px;
}

/* INPUT */
input {
    width: 100%;
    padding: 12px;
    margin: 8px 0 18px;
    border-radius: 30px;
    border: 1px solid #ccc;
    outline: none;
}

/* REMEMBER */
.remember {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 20px;

    white-space: nowrap;   /* IMPORTANT */
}

.remember input {
    width: auto;
    transform: scale(1.1);
}
/* BUTTON */
button {
    width: 100%;
    padding: 12px;
    border-radius: 30px;
    border: none;
    background: linear-gradient(to right, #5b7cff, #6c8cff);
    color: white;
    font-size: 15px;
    cursor: pointer;
}

/* RESPONSE */
#loginResponse {
    margin-top: 10px;
    font-size: 14px;
}

/* RESPONSIVE */
@media(max-width: 900px){
    .left {
        display: none;
    }
    .right {
        width: 100%;
    }
}

.signup {
    margin-top: 15px;
    font-size: 14px;
    text-align: center;
}

.signup a {
    color: #5b7cff;
    text-decoration: none;
    font-weight: 600;
}
</style>

</head>

<body>

<div class="container">

    <!-- LEFT DESIGN -->
    <div class="left">
        <h3>SK INFO TECHIES</h3>
        <p>User Authentication System</p>

        <h1>
            <b>Secure Access.</b><br>
            Smarter Control.
        </h1>

        <!-- shapes -->
        <div class="circle circle1"></div>
        <div class="circle circle2"></div>
    </div>

    <!-- RIGHT FORM -->
    <div class="right">
        <div class="form-box">

            <h1>Welcome Back!</h1>

            <form id="loginForm">

                <label>Email Address</label>
                <input type="email" name="email" placeholder="Enter your email" required>

                <label>Password</label>
                <input type="password" name="password" placeholder="Enter your password" required>

                <label class="remember">
    <input type="checkbox">
    Remember me
</label>

                <button type="submit">Login</button>

                <div class="signup">
    Don't have an account? <a href="register.php">Sign Up</a>
</div>

            </form>

            <div id="loginResponse"></div>

        </div>
    </div>

</div>

<script>
$("#loginForm").submit(function(e){
    e.preventDefault();

    $.ajax({
        url:"ajax/login.php",
        type:"POST",
        data:$(this).serialize(),
        success:function(res){
            if(res==="success"){
                window.location="dashboard/dashboard.php";
            } else {
                $("#loginResponse").html(res);
            }
        }
    });
});
</script>

</body>
</html>
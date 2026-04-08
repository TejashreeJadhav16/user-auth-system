<!DOCTYPE html>
<html>
<head>
<title>Register</title>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

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

/* LEFT SIDE (SAME AS LOGIN) */
.left {
    width: 50%;
    background: linear-gradient(135deg, #5b7cff, #6c8cff);
    color: white;
    position: relative;
    padding: 80px 70px;

    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: flex-start;

    overflow: hidden;
}

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
    max-width: 340px;
}

/* TITLE */
.form-box h1 {
    font-size: 34px;
    color: #5b7cff;
    margin-bottom: 25px;
}

/* INPUT */
input {
    width: 100%;
    padding: 12px;
    margin: 8px 0 16px;
    border-radius: 30px;
    border: 1px solid #ccc;
    outline: none;
}

/* CAPTCHA */
.recaptcha-box {
    display: flex;
    justify-content: center;
    margin: 15px 0;
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

/* LINK */
.link {
    margin-top: 15px;
    font-size: 14px;
}

.link a {
    color: #5b7cff;
    text-decoration: none;
}

/* RESPONSE */
#response {
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
</style>

</head>

<body>

<div class="container">

    <!-- LEFT -->
    <div class="left">
        <h3>SK INFO TECHIES</h3>
        <p>User Authentication System</p>

        <h1>
            <b>Join Us.</b><br>
            Start Your Journey.
        </h1>

        <div class="circle circle1"></div>
        <div class="circle circle2"></div>
    </div>

    <!-- RIGHT -->
    <div class="right">
        <div class="form-box">

            <h1>Create Account</h1>

            <form id="registerForm">

                <input type="text" name="name" placeholder="Full Name" required>
                <input type="email" name="email" placeholder="Email Address" required>
                <input type="text" name="phone" placeholder="Phone Number" required>
                <input type="password" name="password" placeholder="Password" required>

                <div class="recaptcha-box">
                    <div class="g-recaptcha" data-sitekey="6LflqKwsAAAAADyriVaaf59WllekRtzdJ18Jyl1K"></div>
                </div>

                <button type="submit">Register</button>

            </form>

            <div id="response"></div>

            <div class="link">
                Already have an account? <a href="index.php">Login</a>
            </div>

        </div>
    </div>

</div>

<script>
$("#registerForm").submit(function(e){
    e.preventDefault();

    var captcha = grecaptcha.getResponse();

    if(captcha.length === 0){
        $("#response").html("<span style='color:red;'>Please verify captcha</span>");
        return;
    }

    $.ajax({
        url:"ajax/register.php",
        type:"POST",
        data:$(this).serialize() + "&g-recaptcha-response=" + captcha,
        beforeSend:function(){
            $("#response").html("Processing...");
        },
        success:function(res){
            $("#response").html(res);
            grecaptcha.reset();
        }
    });
});
</script>

</body>
</html>
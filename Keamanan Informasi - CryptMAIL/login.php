<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="./style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/CR1.png">
    <title>CryptMAIL - Email cryptography security app.</title>
    <script type="text/javascript">
	function displayTime(){
	 var time = new Date();
	 var sh = time.getHours() + "";
	 var sm = time.getMinutes() + "";
	 var ss = time.getSeconds() + "";
	 document.getElementById("clock").innerHTML = (sh.length==1?"0"+sh:sh) + ":" + (sm.length==1?"0"+sm:sm) + ":" + (ss.length==1?"0"+ss:ss);
}
</script>
</head>
<body>
    <section class="side">
        <img src="./images/login.svg" widht="300" alt="">
    </section>

    <section class="main">
        <div class="login-container">
        <img src="assets/images/CR1.png" alt="homepage" class="dark-logo" />
            <div class="separator"></div>
            <p class="welcome-message">Welcome Back! Please, provide login credential to proceed and have access to all our services</p>

            <form action="auth.php" method="POST" class="login-form">
                <div class="form-control">
                    <input type="email" name="email" placeholder="Email" required autofocus autocomplete="off">
                    <i class="fas fa-user"></i>
                </div>
                <div class="form-control">
                    <input type="password" name="pswd" placeholder="Password" required >
                    <i class="fas fa-lock"></i>
                </div>
                <button type="submit" name="login" class="submit">Login</button>
            </form>
        </div>
    </section>
    <script src="./assets/plugins/jquery/jquery.min.js"></script>
    <script src="./assets/plugins/bootstrap/js/tether.min.js"></script>
    <script src="./assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="./assets/js/jquery.slimscroll.js"></script>
    <script src="./assets/js/waves.js"></script>
    <script src="./assets/js/sidebarmenu.js"></script>
    <script src="./assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="./assets/js/custom.min.js"></script>
</body>
</html>
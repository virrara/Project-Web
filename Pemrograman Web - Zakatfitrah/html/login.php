<?php 
 
include 'config.php';
 
error_reporting(0);
 
session_start();
 
if (isset($_SESSION['username'])) {
    header("Location: \zakatfitrah/index.php");
}
 
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
 
    $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: \zakatfitrah/index.php");
    } else {
        echo "<script>alert('Username atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="./style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <title>Login</title>
</head>
<body>
    <section class="side">
        <img src="./images/img1.svg" widht="300" alt="">
    </section>

    <section class="main">
        <div class="login-container">
            <p class="title"><img src="../assets/images/logo1.png" alt="homepage" class="light-logo" /></p>
            <div class="separator"></div>
            <p class="welcome-message">Welcome Back! Please, provide login credential to proceed and have access to all our services</p>

            <form action="" method="POST" class="login-form">
                <div class="form-control">
                    <input type="username" placeholder="Username" name="username" value="<?php echo $username; ?>">
                    <i class="fas fa-user"></i>
                </div>
                <div class="form-control">
                    <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>">
                    <i class="fas fa-lock"></i>
                </div>
                <button name="submit" class="submit">Login</button>
            </form>
        </div>
    </section>
    
</body>
</html>
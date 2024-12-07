<?php  
require 'main/function.php';
session_start();

// menjalankan fitur remember dan mencegah user mengedit cookie
// cek cookie
if(isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
  $id = $_COOKIE['id'];
  $key = $_COOKIE['key'];

  // ambil username berdasarkan id
  $result = mysqli_query($conn, "SELECT email FROM akun WHERE id = $id ");
  $row = mysqli_fetch_assoc($result);

  // cek cookie dan username
  if( $key === hash('sha256', $row['email']) ) {
    $_SESSION['id'] = $id;
    $_SESSION['login'] = true;
  }
}

// user yng sudah login tidak bisa kembali ke halaman login
if ( isset($_SESSION['login']) ) {
  header("Location: index1.php");
  exit;
}

if ( isset($_POST['login']) ) {
  $email = $_POST["email"];
  $password = $_POST["password"];

  $result = mysqli_query($conn, "SELECT * FROM akun WHERE email = '$email' ");
  $row = mysqli_fetch_assoc($result);


  // cek username
  if ( isset($row) ) {

    // cek password
    if (password_verify($password,$row["password"])) {
      $_SESSION['id'] = $row['id'];
      $_SESSION['login'] = true;

      // set cookie
      if ( isset($_POST['remember']) ) {
        setcookie('id', $row['id'], time() + (60 * 60));
        setcookie('key', hash('sha256', $row['email']), time()+ (60*60));
      }

      header("Location: index1.php");
      exit;
    }
    else{
      $error = true;
    }

  }
  else{
    $error = true;
  }
}
if ( isset($_POST['login']) ) {
  if ( registrasi($_POST) > 0 ) {
      echo "<script>
          document.location.href = 'login1.php?id=1';
          </script>";
  } elseif ( registrasi($_POST) == 0 ) {
      $error1 = true;
  } else {
      $error2 = true;
  } 
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="css/style.css" />
    <title>Sign in & Sign up Form</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form method="POST" action="" class="sign-in-form">
          <h2 class="title"><center>Welcome To Monitoring Tubuh Setelah Vaksin</h2>
          <h2 class="title2"><center>Login here!</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="email" placeholder="E-mail" id="exampleInputEmail" name="email" required />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" id="exampleInputPassword" placeholder="Password" name="password" required />
            </div>
            <button class="btn btn-primary btn-user btn-block" name="login">
             Login
             </button>
            <?php
              if ( isset($_GET['id']) ) : ?>
              <p style="font-style: italic; color: green; text-align: center;">*User berhasil ditambahkan, silahkan login</p>
              <?php endif;
              if ( isset($error) ) : ?>
              <p style="font-style: italic; color: red; text-align: center;">*Username atau password salah</p>
              <?php endif; ?>
            <p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
              <a href="facebook.com" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="twitter.com" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="gmail.com" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
            </div>
          </form>

          <form method="POST" action="" class="sign-up-form">
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
                <input type="text" class="form-control form-control-user" id="exampleFirstName" 
                placeholder="First Name" name="first_name" required>
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
                <input type="text" class="form-control form-control-user" id="exampleLastName"
                placeholder="Last Name" name="last_name" required>
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
                <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                placeholder="Email Address" name="email" required>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
                <input type="password" class="form-control form-control-user"
                id="exampleInputPassword" placeholder="Password" name="password1" required>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
                <input type="password" class="form-control form-control-user"
                id="exampleRepeatPassword" placeholder="Repeat Password" name="password2" required>
            </div>
            <button name="login" class="btn btn-primary btn-user btn-block">
              Register
            </button>
            <?php
            if ( isset($error1) ) : ?>
            <p style="font-style: italic; color: red; text-align: center;">*Username / email tidak tersedia</p>
            <?php endif;
            if ( isset($error2) ) : ?>
            <p style="font-style: italic; color: red; text-align: center;">*Password tidak sesuai</p>
            <?php endif; ?>
            <p class="social-text">Or Sign up with social platforms</p>
            <div class="social-media">
              <a href="facebook.com" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="twitter.com" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="google.com" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
              Create an Account Now!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="img/register2.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
              Click here to Login!
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="img/login1.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="js/app.js"></script>
  </body>
</html>

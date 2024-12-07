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
  header("Location: index.php");
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

      header("Location: index.php");
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

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Monitoring Tubuh Setelah Vaksin - Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-success" style="background-image: url(img/bg-2.jpg);">

    <div class="container" >

        <!-- Outer Row -->
           <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <!-- <div class=" o-hidden border-top-0 shadow-lg my-5"> -->
                
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <!-- <div class="row"> -->
                            <div class="col-lg-6 d-none d-lg-block"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4"><b>Welcome To Monitoring Tubuh Setelah Vaksin</b></h1>
                                    </div>
                                    <form class="user" action="" method="post">
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address..." name="email" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password" name="password" required>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck" value="remember-me" name="remember">
                                                <label class="custom-control-label" for="customCheck " style="color:#DC143C;">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary btn-user btn-block" name="login">
                                            Login
                                        </button><?php
                                        if ( isset($_GET['id']) ) : ?>
                                          <p style="font-style: italic; color: green; text-align: center;">*User berhasil ditambahkan, silahkan login</p>
                                        <?php endif;

                                        if ( isset($error) ) : ?>
                                          <p style="font-style: italic; color: red; text-align: center;">*Username atau password salah</p>
                                        <?php endif; ?>
                                        <hr>
                                        <a href="index.html" class="btn btn-google btn-user btn-block">
                                            <i class="fab fa-google fa-fw"></i> Login with Google
                                        </a>
                                        <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                            <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                        </a>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.php"style="color:#DC143C;">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="register.php"style="color:#DC143C;">Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div></center>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
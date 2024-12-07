<?php
require 'main/function.php';
session_start();

if ( !isset($_SESSION['login']) ) {
  header("Location: login.php");
  exit;
}

$id = $_SESSION['id'];

$akun = query("SELECT username FROM akun WHERE id = $id")[0];
$username = $akun['username'];

$email = query("SELECT email FROM akun WHERE id = $id")[0];
$email = $email['email'];

$temp = explode(" ", $username);
$first_name = $temp[0];

if ( isset($_GET['delete']) ) {
    if ( $_GET['delete'] == "akun" ) {
        mysqli_query($conn, "DELETE FROM akun WHERE id = $id");
        mysqli_query($conn,"DROP TABLE data$first_name");
        header("Location: logout.php");
    } elseif ( $_GET['delete'] == "data" ) {
        mysqli_query($conn,"DROP TABLE data$first_name");
        mysqli_query($conn,"DROP TABLE history$first_name");
        header("Location: index1.php?delete=data");
    }
}
?>


<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--========== BOX ICONS ==========-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

        <!--========== CSS ==========-->
        <link rel="stylesheet" href="css/styles.css">

        <!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Monitoring Pasca Vaksinasi</title>

        <!-- CSS FILES -->        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/owl.carousel.min.css" rel="stylesheet">

        <link href="css/owl.theme.default.min.css" rel="stylesheet">

        <link href="css/templatemo-medic-care.css" rel="stylesheet">

        <!--========== BOX ICONS ==========-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

        <!--========== CSS ==========-->
        <link rel="stylesheet" href="css/styles.css">

        <!--=============== REMIX ICONS ===============-->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Hind&display=swap" rel="stylesheet">


        <title>Profile</title>
        <style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg bg-light fixed-top shadow-lg">
                <div class="container">
                    <a class="navbar-brand mx-auto d-lg-none" href="index.html">
                        Medic Care
                        <strong class="d-block">Monitor ur Health</strong>
                    </a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="index1.php#hero">Home</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="index1.php#about">Check Symptoms</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="index1.php#timeline">Timeline</a>
                            </li>

                            <a class="navbar-brand d-none d-lg-block" href="index1.php">
                                Medic Care
                                <strong class="d-block">Health Specialist</strong>
                            </a>

                            <li class="nav-item">
                                <a class="nav-link" href="index1.php#reviews">Testimonials</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="index1.php#booking">Booking</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="index1.php#contact">Contact</a>
                            </li>

                            <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </nav>

        <section class="card">
            <div class="card__container bd-container">
                <div class="card__glass">
                    <p>Profile</p>
                    <img src="img/img2.jpg" alt="" class="card__img">
    
                    <div class="card__data">
                        <h3 class="card__title"><?= ucwords($username); ?></h3>
                        <span class="card__profession"><?= $email; ?></span>
                    </div>

                    <a href="settings.php?delete=akun" class="card__button">Hapus Akun</a>
    
                    <div class="card__social">
                        <a href="#" class="card__link"><i class='bx bxl-instagram' ></i></a>
                        <a href="#" class="card__link"><i class='bx bxl-facebook'></i></a>
                        <a href="#" class="card__link"><i class='bx bxl-twitter' ></i></a>
                    </div>
                </div>
                <div class="card__glass">    
                    <div class="card__data">
                        <h3 class="card__title"><br><br>History</h3>
                        <span class="card__profession"></span>
                    </div>

                    <a id="myBtn" class="card__button">See History</a>

                </div>
                    <div id="myModal" class="modal">

                    <!-- Modal content -->
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">History</h1>
                    </div>

                    <!-- Content Row -->

                    <div class="row">
                        <?php 
                        $temp = explode(" ", $username);
                        $first_name = $temp[0];

                        if (isset($_GET['id'])) {
                            $id = $_GET['id'];
                            $date = date("d-m-Y");
                            table_history($first_name,$id,$date); 
                        }

                        if ( $rows = mysqli_query($conn, "SELECT * FROM history$first_name")) {
                            $indeks = query("SELECT id FROM history$first_name");
                            foreach ($indeks as $key) {
                                $object[] = $key['id'];
                            }
                            if (in_array(1, $object) && count($object) == 1) {
                                $id2 = "1";
                            } elseif (in_array(0, $object) && count($object) == 1) {
                                $id1 = "0";
                            } elseif (count($object) == 2) {
                                $id1 = "0";
                                $id2 = "1";
                            }
                            
                            if ( $id == "0" || (isset($id1) && $id1 == "0") ) : ?>
                                <div class="col-xl-6 col-lg-5">
                                    <div class="card shadow mb-4">
                                        <!-- Card Header - Dropdown -->
                                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                            <h6 class="m-0 font-weight-bold text-success">Vaksinasi tahap 1</h6>
                                        </div>
                                        <!-- Card Body -->
                                        <div class="card-body">
                                            <div class="chart-area">
                                                <table border="0" cellpadding="10"> <?php 
                                                // hasil dari pilihan user tampil disini
                                                $rows = query("SELECT * FROM history$first_name WHERE id = $id1");
                                                foreach ($rows as $key) : ?>
                                                    <tr>
                                                        <th>Tercatat</th>
                                                        <td><?= $key['tanggal']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Nama</th>
                                                        <td><?= ucwords($username); ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Jenis Vaksin</th>
                                                        <td><?= $key['jenis_vaksin']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Keterangan</th>
                                                        <td><?= $key['ket']; ?></td>
                                                    </tr>

                                                    <?php if ( isset($_POST['tgl']) ) : ?>
                                                    <tr>
                                                        <th>Penjadwalan</th>
                                                        <td><?= $key['penjadwalan']; ?></td>
                                                    </tr>
                                                    <?php endif; ?>
                                                    
                                                    <tr>
                                                        <th>Gejala</th>
                                                        <td><?= $key['gejala']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Tindakan</th>
                                                        <td><?= $key['tindakan']; ?></td>
                                                    </tr>
                                                </table>
                                            <?php endforeach; ?> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endif;
                            if ( $id == "1" || (isset($id2) && $id2 == "1")  ) : ?>
                                <div class="col-xl-6 col-lg-5">
                                    <div class="card shadow mb-4">
                                        <!-- Card Header - Dropdown -->
                                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                            <h6 class="m-0 font-weight-bold text-success">Vaksinasi tahap 2</h6>
                                        </div>
                                        <!-- Card Body -->
                                        <div class="card-body">
                                            <div class="chart-area">
                                                <table border="0" cellpadding="10"> <?php 
                                                // hasil dari pilihan user tampil disini
                                                $rows = query("SELECT * FROM history$first_name WHERE id = $id2");
                                                foreach ($rows as $key) : ?>
                                                    <tr>
                                                        <th>Tercatat</th>
                                                        <td><?= $key['tanggal']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Nama</th>
                                                        <td><?= ucwords($username); ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Jenis Vaksin</th>
                                                        <td><?= $key['jenis_vaksin']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Keterangan</th>
                                                        <td><?= $key['ket']; ?></td>
                                                    </tr>

                                                    <?php if ( isset($_POST['tgl']) ) : ?>
                                                    <tr>
                                                        <th>Penjadwalan</th>
                                                        <td><?= $key['penjadwalan']; ?></td>
                                                    </tr>
                                                    <?php endif; ?>
                                                    
                                                    <tr>
                                                        <th>Gejala</th>
                                                        <td><?= $key['gejala']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Tindakan</th>
                                                        <td><?= $key['tindakan']; ?></td>
                                                    </tr>
                                                </table>
                                            <?php endforeach; ?> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endif;
                        } else { ?>
                            <div class="container-fluid">

                                <!-- 404 Error Text -->
                                <div class="text-center">
                                    <div class="error mx-auto" data-text="404">404</div>
                                    <p class="lead text-gray-800 mb-5">Not Found</p>
                                    <a href="index1.php">&larr; Back to Home</a>
                                </div>

                            </div>
                        <?php } ?>
                        <a type="button" class="card__button" href="profile1.php?delete=data">Hapus History</a>
                    </div>
                    </div>
                    <script>
                    // Get the modal
                    var modal = document.getElementById("myModal");

                    // Get the button that opens the modal
                    var btn = document.getElementById("myBtn");

                    // Get the <span> element that closes the modal
                    var span = document.getElementsByClassName("close")[0];

                    // When the user clicks the button, open the modal 
                    btn.onclick = function() {
                    modal.style.display = "block";
                    }

                    // When the user clicks on <span> (x), close the modal
                    span.onclick = function() {
                    modal.style.display = "none";
                    }

                    // When the user clicks anywhere outside of the modal, close it
                    window.onclick = function(event) {
                    if (event.target == modal) {
                        modal.style.display = "none";
                    }
                    }
                    </script>
                </div>
                </div>
                </div>
        </section>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    </body>
</html>
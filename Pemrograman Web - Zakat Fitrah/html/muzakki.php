<?php 
 
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/logo2.png">
    <title>YukZakat | Admin</title>
    <!-- This page css -->
    <!-- Custom CSS -->
    <link href="../dist/css/style.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-brand">
                        <!-- Logo icon -->
                        <a href="\zakatfitrah/index.php">
                            <b class="logo-icon">
                                <!-- Dark Logo icon -->
                                <img src="../assets/images/logo1.png" alt="homepage" class="dark-logo" />
                                <!-- Light Logo icon -->
                                <img src="../assets/images/logo1.png" alt="homepage" class="light-logo" />
                            </b>
                            <!--End Logo icon -->
                        </a>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                        data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                            class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto ml-3 pl-1">
                        <!-- ============================================================== -->
                        <!-- create new -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i data-feather="settings" class="svg-icon"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item d-none d-md-block">
                            <a class="nav-link" href="javascript:void(0)">
                                <div class="customize-input">
                                    <select
                                        class="custom-select form-control bg-white custom-radius custom-shadow border-0">
                                        <option selected>EN</option>
                                    </select>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item d-none d-md-block">
                            <a class="nav-link" href="javascript:void(0)">
                                <form>
                                    <div class="customize-input">
                                        <input class="form-control custom-shadow custom-radius border-0 bg-white"
                                            type="search" placeholder="Search" aria-label="Search">
                                        <i class="form-control-icon" data-feather="search"></i>
                                    </div>
                                </form>
                            </a>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <img src="../assets/images/users/profile-pic.jpg" alt="user" class="rounded-circle"
                                    width="40">
                                <span class="ml-2 d-none d-lg-inline-block"><span>Hello,</span> <span
                                        class="text-dark"><?php echo "" . $_SESSION['username'] ."!". ""; ?></span> <i data-feather="chevron-down"
                                        class="svg-icon"></i></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                                <a class="dropdown-item" href="logout.php"><i data-feather="power"
                                        class="svg-icon mr-2 ml-1"></i>
                                    Logout</a>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar" data-sidebarbg="skin6">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="\zakatfitrah/index.php"
                                aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span
                                    class="hide-menu">Dashboard</span></a></li>
                        <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu">Master Data</span></li>

                        <li class="sidebar-item"> <a class="sidebar-link" href="muzakki.php"
                                aria-expanded="false"><i data-feather="users" class="feather-icon"></i><span
                                    class="hide-menu">Muzakki
                                </span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="mustahik.php"
                                aria-expanded="false"><i data-feather="pocket" class="feather-icon"></i><span
                                    class="hide-menu">Mustahik</span></a>
                        </li>
                        <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu">Pengumpulan Zakat Fitrah</span></li>

                        <li class="sidebar-item"> <a class="sidebar-link" href="pengumpulan-zakat.php"
                                aria-expanded="false"><i data-feather="book" class="feather-icon"></i><span
                                    class="hide-menu">Data Pengumpulan
                                </span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link" href="lap-pengumpulan.php"
                                aria-expanded="false"><i data-feather="clipboard" class="feather-icon"></i><span
                                    class="hide-menu">Laporan Pengumpulan
                                </span></a>
                        </li>
                        <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu">Distribusi Zakat Fitrah</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                                aria-expanded="false"><i data-feather="check-circle" class="feather-icon"></i><span
                                    class="hide-menu">Data Distribusi Zakat</span></a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                <li class="sidebar-item"><a href="distribusi-warga.php" class="sidebar-link"><i data-feather="home" class="feather-icon"></i><span
                                            class="hide-menu"> Warga
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="distribusi-mustahiklain.php" class="sidebar-link"><i data-feather="globe" class="feather-icon"></i><span
                                            class="hide-menu"> Mustahik Lainnya
                                        </span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                                aria-expanded="false"><i data-feather="book-open" class="feather-icon"></i><span
                                    class="hide-menu">Laporan Distribusi Zakat </span></a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                <li class="sidebar-item"><a href="lap-distibusi-warga.php" class="sidebar-link"><i data-feather="home" class="feather-icon"></i><span
                                            class="hide-menu"> Warga
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="lap-distibusi-lain.php" class="sidebar-link"><i data-feather="globe" class="feather-icon"></i><span
                                            class="hide-menu"> Mustahik Lainnya
                                        </span></a>
                                </li>
                            </ul>
                        </li>


                        <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu">About</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                                aria-expanded="false"><i data-feather="slack" class="feather-icon"></i><span
                                    class="hide-menu">About </span></a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                <li class="sidebar-item"><a href="about-app.php" class="sidebar-link"><i data-feather="github" class="feather-icon"></i><span
                                            class="hide-menu"> Application
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="about-me.php" class="sidebar-link"><i data-feather="smile" class="feather-icon"></i><span
                                            class="hide-menu"> Profile
                                        </span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Data Muzakki</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="index.html" class="text-muted">Master Data</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Muzakki</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-5 align-self-center">
                        <div>
                        <button type="button" class="btn btn-rounded btn-outline-primary float-right" data-toggle="modal" data-target="#add_data_Modal" name="insert" id="insert"><i data-feather="plus" class="svg-icon"></i> Add Data</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- basic table -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div id="muzakki_table" class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Jumlah Tanggungan</th>
                                                <th>Keterangan</th>
                                                <th>Bayar Zakat</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <?php
                                        include "config.php";
                                        $no = 1;
                                        $query = mysqli_query($conn, 'SELECT * FROM muzakki');
                                        while ($data = mysqli_fetch_array($query)) {
                                        ?>
                                        <tbody>
                                            <tr>
                                                <td><span class="badge badge-light-warning"><?php echo $no++ ?></span></td>
                                                <td><a class="font-weight-medium link"><?php echo $data['nama_muzakki'] ?></a></td>
                                                <td><a class="font-bold link"><?php echo $data['jumlah_tanggungan'] ?></a></td>
                                                <td><a href="javascript:void(0)" class="font-bold link"><?php echo $data['keterangan'] ?></a></td>
                                                <td>
                                                    <div class="form-group text-center">
                                                        <button type="button" id_muzakki="<?php echo $data["id_muzakki"]; ?>" name="bayar" value="Bayar" class="btn btn-rounded btn-outline-primary bayar" data-toggle="modal" data-target="#add_bayar_Modal" name="insert_bayar" id="insert_bayar">
                                                            Bayar</button>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i data-feather="more-vertical" class="svg-icon"></i>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                        <a <input type="button" name="view" value="Lihat Detail" id_muzakki="<?php echo $data["id_muzakki"]; ?>" class="dropdown-item btn btn-info btn-xs view_data"><i data-feather="eye" class="svg-icon"></i> See Details</a>
                                                        <a <input type="button" name="edit" value="Edit" id_muzakki="<?php echo $data["id_muzakki"]; ?>" class="dropdown-item btn btn-info btn-xs edit_data"><i data-feather="edit-3" class="svg-icon"></i> Edit</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="delete_muzakki.php?id_muzakki=<?php echo $data['id_muzakki']; ?>"><i data-feather="x-circle" class="svg-icon"></i> Delete</a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <?php } ?>
                                    </table>
                                    <ul class="pagination float-right">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                                        </li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">Next</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center text-muted">
                Virra Retnowati A'izzah - 207006020.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <!-- apps -->
    <script src="../dist/js/app-style-switcher.js"></script>
    <script src="../dist/js/feather.min.js"></script>
    <script src="../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../dist/js/custom.min.js"></script>

    <!-- Input modal content -->
    <div id="add_data_Modal" class="modal fade" tabindex="-1" role="dialog"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"
                    aria-hidden="true">×</button>
            </div>
            <h4 class="mt-2"><center>Insert Data Muzakki</center></h4>
                <div class="modal-body">
                    <div class="text-center mt-2 mb-4">
                    </div>

                    <form id="fupForm" class="pl-3 pr-3" action="" method="POST">

                        <div class="form-group">
                            <label for="nama_muzakki">Name</label>
                            <input class="form-control" type="text" id="nama_muzakki"
                                required="" placeholder="Nama Muzakki">
                        </div>

                        <div class="form-group">
                            <label for="jumlah_tanggungan">Jumlah Tanggungan</label>
                            <input class="form-control" type="text" id="jumlah_tanggungan"
                                required="" placeholder="Jumlah Tanggungan">
                        </div>

                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <input class="form-control" type="text" required=""
                                id="keterangan" placeholder="Keterangan">
                        </div>

                        <div class="form-group text-center">
                            <button class="btn btn-primary" name="save" id="butsave" type="submit">Add Data
                                </button>
                        </div>

                    </form>

                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

</body>
</html>

<script>
$(document).ready(function() {
$('#butsave').on('click', function() {
$("#butsave").attr("enabled", "enabled");
var nama_muzakki = $('#nama_muzakki').val();
var jumlah_tanggungan = $('#jumlah_tanggungan').val();
var keterangan = $('#keterangan').val();
if(nama_muzakki!="" && jumlah_tanggungan!=""){
    $.ajax({
		url: "insert_muzakki.php",
		type: "POST",
		data: {
			nama_muzakki: nama_muzakki,
			jumlah_tanggungan: jumlah_tanggungan,
			keterangan: keterangan				
		},
        cache: false,
		success: function(dataResult){
			var dataResult = JSON.parse(dataResult);
			if(dataResult.statusCode==200){
                alert(data);
				$("#butsave").removeAttr("disabled");
				$('#fupForm').find('input:text').val('');
				$("#success").show();
				$('#success').html('Data added successfully !'); 						
			}
			else if(dataResult.statusCode==201){
				alert("Error occured !");
			}
        }
	});
	}
	else{
		alert('Please fill all the field !');
	}
});
});
</script>

<div id="dataModal" class="modal fade">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
   </div>
   <h4 class="mt-2"><center>Details Muzakki</center></h4>
   <div class="modal-body" id="detail_muzakki">
   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
   </div>
  </div>
 </div>
</div>

<script>  
//Begin Tampil Detail 
 $(document).on('click', '.view_data', function(){
  var nama_muzakki = $(this).data('nama_muzakki');
  var jumlah_tanggungan = $(this).data('jumlah_tanggungan');
  var keterangan = $(this).data('keterangan');
  var id_muzakki = $(this).attr("id_muzakki");
  $('#nama_muzakki').val(nama_muzakki);
  $.ajax({
   url:"select_muzakki.php",
   method:"POST",
   data:{id_muzakki:id_muzakki},
   success:function(data){
    $('#detail_muzakki').html(data);
    $('#dataModal').modal('show');
   }
  });
 });
//End Tampil Detail 
</script>


<div id="editModal" class="modal fade">
 <div class="modal-dialog">
  <div class="modal-content">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal"
                    aria-hidden="true">×</button>
    </div>
    <h4 class="mt-2"><center>Insert Data Muzakki</center></h4>
   <div class="modal-body" id="form_edit">
    
   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
   </div>
  </div>
 </div>
</div>

<script>  

//Begin Tampil Form Edit
$(document).on('click', '.edit_data', function(){
  var nama_muzakki = $(this).data('nama_muzakki');
  var jumlah_tanggungan = $(this).data('jumlah_tanggungan');
  var keterangan = $(this).data('keterangan');
  var id_muzakki = $(this).attr("id_muzakki");
  $.ajax({
   url:"edit_muzakki.php",
   method:"POST",
   data:{id_muzakki:id_muzakki},
   success:function(data){
    $('#form_edit').html(data);
    $('#editModal').modal('show');
   }
  });
 });
//End Tampil Form Edit
</script> 

<script>
//Bayar Zakat//
$(document).on('click', '.bayar', function(){
  var nama_muzakki = $(this).data('nama_muzakki');
  var jumlah_tanggungan = $(this).data('jumlah_tanggungan');
  var keterangan = $(this).data('keterangan');
  var id_muzakki = $(this).attr("id_muzakki");
  var id_zakat = $(this).attr("id_zakat");
  var jenis_bayar = $(this).attr("jenis_bayar");
  var jumlah_tanggunganyangdibayar = $(this).attr("jumlah_tanggunganyangdibayar");
  var bayar_beras = $(this).attr("bayar_beras");
  var bayar_uang = $(this).attr("bayar_uang");
  $.ajax({
   url:"insert_bayar_otomatis.php",
   method:"POST",
   data:{id_muzakki:id_muzakki},
   success:function(data){
    $('#form_bayar').html(data);
    $('#bayarModal').modal('show');
   }
  });
 });
//End Bayar Zakat//
</script>

<div id="bayarModal" class="modal fade">
 <div class="modal-dialog">
  <div class="modal-content">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal"
                    aria-hidden="true">×</button>
    </div>
    <h4 class="mt-2"><center>Pembayaran Zakat Fitrah</center></h4>
   <div class="modal-body" id="form_bayar">
    
   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
   </div>
  </div>
 </div>
</div>

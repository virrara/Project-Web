<?php
session_start();
if( !isset($_SESSION["email"]) && !isset($_SESSION["pswd"]) ){
  header('location: login.php');
}
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
?>
<?php
function get_mime_type(&$structure){
  $primary_mime_type = array("TEXT", "MULTIPART", "MESSAGE", "APPLICATION", "AUDIO", "IMAGE", "VIDEO", "OTHER");
  if($structure->subtype) {return $primary_mime_type[(int) $structure->type] . '/' . $structure->subtype;}
  return "TEXT/PLAIN";
}
function get_part($stream, $msg_number, $mime_type, $structure = false, $part_number = false){
  if (!$structure) {$structure = imap_fetchstructure($stream, $msg_number);}
  if($structure)
  {   if($mime_type == get_mime_type($structure))
    {   if(!$part_number) {$part_number = "1";}
      $text = imap_fetchbody($stream, $msg_number, $part_number);
      if($structure->encoding == 3) {return imap_base64($text);}
      else if ($structure->encoding == 4) {return imap_qprint($text);}
      else {return $text;}
    }
    if ($structure->type == 1) /* multipart */
    {   foreach ($structure->parts as $index => $sub_structure)
      {   if ($part_number) {$prefix = $part_number . '.';}
        $data = get_part($stream, $msg_number, $mime_type, $sub_structure, $prefix . ($index + 1));
        if ($data) {return $data;}
      }
    }
  }
  return false;
}

$msg_number = $_GET['msgno'];
$msg_from = $_GET['msgfrom'];
$msg_email = $_GET['msgemail'];
$msg_date = $_GET['msgdate'];
$msg_subject = $_GET['msgsubj'];
$usermail = $_SESSION['email'];
$password = $_SESSION['pswd'];

if(strpos($usermail, "@yahoo")==true || strpos($usermail, "@ymail")==true){
$hostname = '{imap.mail.yahoo.com:993/imap/ssl/novalidate-cert}INBOX';
}else{
$hostname = '{imap.gmail.com:993/imap/ssl/novalidate-cert}INBOX';
}

$stream = imap_open($hostname,$usermail,$password) or die('Cannot connect to mail server: ' . imap_last_error());
$emails = imap_search($stream,'FROM "'.$msg_email.'"  SUBJECT "'.$msg_subject.'" ');
/* Cek email*/
$max_emails = 16;
if($emails) {
$count = 1;
rsort($emails);
/* untuk semua email */
foreach($emails as $email_number)
{
    /* mendapatkan spesifik email */
    $overview = imap_fetch_overview($stream,$email_number,0);
    /* mendapatkan isi pesan*/
    $message = imap_fetchbody($stream,$email_number,2);
    /* mendapatkan struktur email*/
    $structure = imap_fetchstructure($stream, $email_number);
    $attachments = array();
    /* jika terdapat lampiran */
    if(isset($structure->parts) && count($structure->parts)){
      for($i = 0; $i < count($structure->parts); $i++){
          $attachments[$i] = array(
              'is_attachment' => false,
              'filename' => '',
              'name' => '',
              'attachment' => ''
          );
      if($structure->parts[$i]->ifdparameters){
          foreach($structure->parts[$i]->dparameters as $object){
              if(strtolower($object->attribute) == 'filename')
              {
                  $attachments[$i]['is_attachment'] = true;
                  $attachments[$i]['filename'] = $object->value;
              }
          }
      }
      if($structure->parts[$i]->ifparameters){
          foreach($structure->parts[$i]->parameters as $object){
              if(strtolower($object->attribute) == 'name')
              {
                  $attachments[$i]['is_attachment'] = true;
                  $attachments[$i]['name'] = $object->value;
              }
          }
      }
      if($attachments[$i]['is_attachment']){
          $attachments[$i]['attachment'] = imap_fetchbody($stream, $email_number, $i+1);
          if($structure->parts[$i]->encoding == 3){
              $attachments[$i]['attachment'] = base64_decode($attachments[$i]['attachment']);
          }
          elseif($structure->parts[$i]->encoding == 4){
              $attachments[$i]['attachment'] = quoted_printable_decode($attachments[$i]['attachment']);
          }
      }
  }
}

    /* iterate through each attachment and save it */
    foreach($attachments as $attachment){
        if($attachment['is_attachment'] == 1){
            $filename = $attachment['name'];
            if(empty($filename)) $filename = $attachment['filename'];
            if(empty($filename)) $filename = time() . ".dat";
            $fp = fopen("download/". $filename, "w+");
            fwrite($fp, $attachment['attachment']);
            fclose($fp);
        }
    }
    if($count++ >= $max_emails) break;
  }
}

$messages = get_part($stream, $msg_number, "TEXT/HTML");
{
$msg_subject = stripslashes($msg_subject);
$messages= stripslashes($messages);
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
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/CR1.png">
    <title>CryptMAIL - Email cryptography security app.</title>
    <!-- This page css -->
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<script type="text/javascript">
$(document).ready(function() {
      $('#output').hide();
      $('#form').submit(function(){
               $('#output').show();
      });
  });
</script>
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
                        <a href="index.php">
                            <b class="logo-icon">
                                <!-- Dark Logo icon -->
                                <img src="assets/images/CR1.png" alt="homepage" class="dark-logo" />
                                <!-- Light Logo icon -->
                                <img src="assets/images/CR1.png" alt="homepage" class="light-logo" />
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
                        <!-- Notification -->

                        <!-- End Notification -->
                        <!-- ============================================================== -->
                        <!-- create new -->
                        <!-- ============================================================== -->

                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->

                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <img src="assets/images/users/profile-pic.jpg" alt="user" class="rounded-circle"
                                    width="40">
                                <span class="ml-2 d-none d-lg-inline-block"><span>Hello,</span> <span
                                        class="text-dark"><code><?php echo $_SESSION['email']; ?></code></span> <i data-feather="chevron-down"
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
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto ml-3 pl-1">
                        <!-- Notification -->

                        <!-- End Notification -->
                        <!-- ============================================================== -->
                        <!-- create new -->
                        <!-- ============================================================== -->

                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->

                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <img src="assets/images/users/profile-pic.jpg" alt="user" class="rounded-circle"
                                    width="40">
                                <span class="ml-2 d-none d-lg-inline-block"><span>Hello,</span> <span
                                        class="text-dark"><code><?php echo $_SESSION['email']; ?></code></span> <i data-feather="chevron-down"
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
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="index.php"
                                aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span
                                    class="hide-menu">Dashboard</span></a></li>
                        <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu">Applications</span></li>

                        <li class="sidebar-item"> <a class="sidebar-link" href="compose.php"
                                aria-expanded="false"><i data-feather="file-plus" class="feather-icon"></i><span
                                    class="hide-menu">Create Message
                                </span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="inbox.php"
                                aria-expanded="false"><i data-feather="message-square" class="feather-icon"></i><span
                                    class="hide-menu">Inbox</span></a></li>
                        <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu">Other</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link"
                                href="help.php" aria-expanded="false"><i data-feather="help-circle"
                                    class="feather-icon"></i><span class="hide-menu">Help
                                </span></a>
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
                                <li class="sidebar-item"><a href="about-us.php" class="sidebar-link"><i data-feather="smile" class="feather-icon"></i><span
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
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Inbox</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="index.html" class="text-muted">Apps</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Inbox</li>
                                </ol>
                            </nav>
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
                            <div class="card-block">
                              <div class="container">
                              <?php
                              if(isset($_POST['dekrippesan'])){
                                  error_reporting(0);
                                  include "crypto/AES.php";
                                  include "crypto/RC4.php";
                                  $start_time = microtime(true);
                                  $key        = substr(md5($_POST['kunci']), 0,16);
                                  //dekrip pesan
                                  $messages = base64_decode($messages);
                                  $loop 	= (strlen($messages) % 16 == 0) ? strlen($messages)/16 : intVal(strlen($messages)/16) + 1;
                                	$plaintext = "";
                                	for ($i=0; $i<$loop; $i++) {
                                		$start    = $i * 16;
                                		$cipher	  = substr($messages, $start, 16);
                                		$rc4 	    = new rc4($key);
                                		$dekrip1  = $rc4->decrypt($cipher);
                                		$aes 	    = new AES($key);
                                		$dekrip2  = $aes->decrypt($dekrip1);
                                		$plaintext .= $dekrip2;
                                	}
                                  //dekrip attachment
                                  $file_path  = "download/$filename";
                                  $file_name  = substr($filename, 0, -4);
                                  $file_size  = filesize($file_path);
                                  $fopen      = fopen($file_path, "rb");
                                  $fread      = fread($fopen, $file_size);
                                  $rc4file    = new rc4($key);
                                  $de         = $rc4file->decrypt($fread);
                                  fclose($fopen);
                                  $fopen1     = fopen($file_path, "wb");
                                  fwrite($fopen1, $de);
                                  fclose($fopen1);
                                  $mod        = $file_size%16;
                                  $fopen2     = fopen($file_path, "rb");
                                  $plain      = "";
                                  $cache      = "cache/$file_name";
                                  $fopen3     = fopen( $cache, "wb");
                                  if($mod==0){
                                  $banyak = $file_size / 16;
                                   }else{
                                  $banyak = ($file_size - $mod) / 16;
                                  $banyak = $banyak+1;
                                  }
                                  ini_set('max_execution_time', -1);
                                  ini_set('memory_limit', -1);
                                  $aesfile        = new AES($key);
                                  for($bawah=0;$bawah<$banyak;$bawah++){
                                       $data    = fread($fopen2, 16);
                                       $plain   = $aesfile->decrypt($data);
                                      fwrite($fopen3, $plain);
                                   }
                                  $end_time = microtime(true);
                                  $waktu= round(($end_time - $start_time), 3);?>
                                  <div id="output">
                                    <div class="col-md-12"><br>
                                      <h2>&nbsp;&nbsp;Subject : <code><?php echo $msg_subject; ?></code></h2>
                                      <table class="table">
                                  <tr>
                                    <td>From</td>
                                    <td>:</td>
                                    <td><?php echo $msg_from; ?></td>
                                  </tr>
                                  <tr>
                                    <td>Email</td>
                                    <td>:</td>
                                    <td><?php echo $msg_email; ?></td>
                                  </tr>
                                  <tr>
                                    <td>Date</td>
                                    <td>:</td>
                                    <td><?php echo $msg_date; ?></td>
                                  </tr>
                                  <tr>
                                    <td>Mail Content</td>
                                    <td>:</td>
                                    <td><?php echo $plaintext; ?></td>
                                  </tr>
                                  <tr>
                                    <td>Attachment</td>
                                    <td>:</td>
                                    <td><a class="btn btn-success" target="_blank" href="<?php echo $cache; ?>"><?php echo substr($filename, 0,-4); ?></a></td>
                                  </tr>
                                    </table>
                                  <div class="col-md-4">
                                          <a class='btn btn-info' href="reply-compose.php?msgfrom=<?php echo $msg_from; ?>&msgemail=<?php echo $msg_email ?>&msgsubj=<?php echo $msg_subject ?>">Reply Message</a><br><br><br>
                                    </div> 
                                    </div>
                                    <p><h4>Halaman ini dieksekusi dalam waktu <?php echo $waktu ?> detik</h4></p>
                                  </div>
                                  <?php
                                }
                            if (empty($_POST)) { ?>
                              <div class="container">
                                <form action="" method="POST" class="form-horizontal">
                                  <div class="form-group row">
                                      <label class="col-md-2"><br><br><br>Enter Key </label>
                                      <div class="col-md-4"><br><br><br>
                                        <input type="password" class="form-control" name="kunci" required placeholder="ex: cryptography">
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2"></label>
                                        <div class="col-md-4">
                                          <input class='btn btn-success' type='submit' name='dekrippesan' />
                                        </div>
                                      </div>
                                </form>
                              </div>
                              <?php } ?>

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
                Tugas Besar Keamanan Informasi <br><a
                    href="/">207006020 - 207006029 - 207006068</a>.
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
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <!-- apps -->
    <script src="dist/js/app-style-switcher.js"></script>
    <script src="dist/js/feather.min.js"></script>
    <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
</body>
</html>
<?php


// Create database connection
class Database
{
    public function __construct()
    {
        $host = "localhost";
        $dbname = "db_go";
        $username = "root";
        $password = "";
        $this->db = new PDO("mysql:host={$host};dbname={$dbname}", $username, $password);
    }
    public function sendMessage($email, $subject, $message)
    {
        $data = $this->db->prepare('INSERT INTO contactus (email,subject,message) VALUES (?, ?, ?)');
        
        $data->bindParam(1, $email);
        $data->bindParam(2, $subject);
        $data->bindParam(3, $message);
 
        $data->execute();
        return $data->rowCount();

        if(isset($_GET['halaman']))
        {
            if($_GET['halaman']=="detail"){
                include 'detail.php';
            }
        }
    
    }
}
?>

<?php 
include('lib_proof.php'); 
$lib = new Library();
if(isset($_POST['tombol_tambah'])){
    $pr_image = $_POST['pr_image'];
    $pr_resi = $_POST['pr_resi'];
    $pr_tanggal =$_POST['pr_tanggal'];
    $pr_barang = $_POST['pr_barang'];
    $pr_status = $_POST['pr_status'];

    $add_status = $lib->add_data($pr_image, $pr_resi, $pr_tanggal, $pr_barang,  $pr_status );
    if($add_status){
    header('Location: adm_proof.php');
    }
}

?>


<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--=============== FAVICON ===============-->
        <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

        <!--=============== REMIX ICONS ===============-->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
        
        <!--=============== BOX ICONS ===============-->
        <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="assets/css/styles.css">

        <!--=============== POPUP ===============-->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
                
        <title>GO by riqueza</title>

 
        
    </head>
    <body>

          <!--==================== HEADER ====================-->
        <header class="header" id="header">
            <nav class="nav container">
            <a href="admin.php" class="nav__logo">
                    <i class="ri-shopping-bag-2-line"></i> GO by riqueza
                </a>
            <div class="nav__toggle" id="nav-toggle">
                        <i class="ri-menu-line"></i>
                    </div>
                </div>
              
                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="admin.php" class="nav__link active-link">Home</a>
                        </li>
                        <li class="nav__item">
                            <a href="admin.php#note" class="nav__link">Note</a>
                        </li>
                        <li class="nav__item">
                            <a href="logout.php" class="nav__link">Logout</a>
                        </li>
                    <!-- Theme change button -->
                        <i class="ri-moon-line change-theme" id="theme-button"></i>
                        </li>
                        
                    </div>
                    </ul>
                    
                    
                </div>
                <div class="nav__toggle" id="nav-toggle">
                        <i class="ri-menu-line"></i>
                    </div>
            </nav>
        </header>
        
        <!--==================== HOME ====================-->
        <main class="main">
            <!--==================== PRODUCTS ====================-->
            
                       
               
                        <?php $nomor=1; ?>
                        <?php $result=$conn->query("SELECT * FROM tb_detail_order JOIN tb_member ON tb_detail_order.id_member=tb_member.id_member WHERE tb_detail_order.id_member='$_GET[id]'");
                        $detail = $result->fetch_assoc(); ?>
                    
                            <pre><?php print_r($detail); ?></pre> <br>

                            <strong><?php echo $detail['nama_member']; ?></strong> <br>
                            <p>
                                <?php echo $detail['notlp_member']; ?> <br>
                                <?php echo $detail['email_member']; ?>
                            </p>

                            <table class="table table-birdered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>No. Telepon</th>
                                        <th>Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $result=$conn->query("SELECT * FROM tb_detail_order JOIN tb_product ON tb_detail_order.id_product=product.id_product WHERE tb_detail-order.id_order='$_GET[id]'")?>
                                    <?php while ($row=$result->fetch_assoc()){ ?>
                                        <tr>
                                            <td><?php echo $nomor; ?></td>
                                            <td><?php echo $row['nama_product']; ?></td>
                                            <td><?php echo $row['harga_product']; ?></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                </tbody>
                            <p>
                                Tanggal :<?php echo $detail['tanggal_order']; ?> <br>
                                Catatan :<?php echo $detail['ctt_order']; ?> <br>
                                Qty     :<?php echo $detail['qty_order']; ?> <br>
                                Total   :<?php echo $detail['total_order']; ?>
                            </p>
                            <?php $nomor++; ?>

                            </table>
                        
                         
                 
         
        <!--==================== FOOTER ====================-->
        <footer class="footer section">
            <div class="footer__container container grid">
                <div class="footer__content">
                    <a href="#" class="footer__logo">
                        <i class="ri-leaf-line footer__logo-icon"></i> Plantex
                    </a>

                    <h3 class="footer__title">
                        Subscribe to our newsletter <br> to stay update
                    </h3>

                    <div class="footer__subscribe">
                        <input type="email" placeholder="Enter your email" class="footer__input">

                        <button class="button button--flex footer__button">
                            Subscribe
                            <i class="ri-arrow-right-up-line button__icon"></i>
                        </button>
                    </div>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Our Address</h3>

                    <ul class="footer__data">
                        <li class="footer__information">1234 - Tasikmalaya</li>
                        <li class="footer__information">Jawa Barat - Indonesia</li>
                        <li class="footer__information">123-456-789</li>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Contact Us</h3>

                    <ul class="footer__data">
                        <li class="footer__information">+999 888 777</li>
                        
                        <div class="footer__social">
                            <a href="https://www.facebook.com/" class="footer__social-link">
                                <i class="ri-facebook-fill"></i>
                            </a>
                            <a href="https://www.instagram.com/" class="footer__social-link">
                                <i class="ri-instagram-line"></i>
                            </a>
                            <a href="https://twitter.com/" class="footer__social-link">
                                <i class="ri-twitter-fill"></i>
                            </a>
                        </div>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">
                        We accept all credit cards
                    </h3>

                    <div class="footer__cards">
                        <img src="assets/img/card1.png" alt="" class="footer__card">
                        <img src="assets/img/card2.png" alt="" class="footer__card">
                        <img src="assets/img/card3.png" alt="" class="footer__card">
                        <img src="assets/img/card4.png" alt="" class="footer__card">
                    </div>
                    <div class="footer__cards">
                        <img src="assets/img/card5.jpg" alt="" class="footer__card">
                        <img src="assets/img/card6.png" alt="" class="footer__card">
                        <img src="assets/img/card7.png" alt="" class="footer__card">
                    </div>
                </div>
            </div>

            <p class="footer__copy">&#169; Kelompok PBO. All rigths reserved</p>
        </footer>
        
        
        <!--=============== SCROLL REVEAL ===============-->
        <script src="assets/js/scrollreveal.min.js"></script>
        
        <!--=============== MAIN JS ===============-->
        <script src="assets/js/main.js"></script>


        </script>
    </body>
</html>
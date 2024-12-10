<?php
    include "config.php";
    $id_news = $_GET['id_news'];
    $query = $conn->query("SELECT * FROM news WHERE id_news = '$id_news'");
    $data = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--=============== FAVICON ===============-->
        <link rel="shortcut icon" href="assets/img/Redpanda.png" type="image/x-icon">

        <!--=============== REMIX ICONS ===============-->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="assets/css/styles.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Wildlife Care - News&Update</title>
        
        <!--====================NICEPAGE=================-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Why Us?, Post 6 Headline">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Home</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Home.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.10.5, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">

    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/default-logo.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
    <style type="text/css">
body{ 
	padding: 10px 
}
.sosmed_inline img{
	display:inline;
	margin:2px;
	border-radius:4px;
	width:44px;
	opacity:1;
	cursor:pointer;
}
.sosmed_inline img:hover{
	opacity:0.8;
	transform:scale(1.1);
}
</style>

<meta http-equiv="X-UA-Compatible" content="IE=edge">
    </head>
    <body>
        <!--==================== HEADER ====================-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="#" class="nav__logo">Wildlife Care</a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="\wildlifecare\index.php#home" class="nav__link active-link">Home</a>
                        </li>
                        <li class="nav__item">
                            <a href="\wildlifecare\index.php#about" class="nav__link">About</a>
                        </li>
                        <li class="nav__item">
                            <a href="\wildlifecare\index.php#discover" class="nav__link">Get Involved</a>
                        </li>
                        <li class="nav__item">
                            <a href="\wildlifecare\index.php#place" class="nav__link">Project</a>
                        </li>
                        <li class="nav__item">
                            <a href="\wildlifecare\index.php#news" class="nav__link">News & Update</a>
                        </li>
                        <i class="ri-moon-line change-theme" id="theme-button"></i>
                    </ul>

                    <div class="nav__dark">

                    </div>

                    <i class="ri-close-line nav__close" id="nav-close"></i>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class="ri-function-line"></i>
                </div>
            </nav>
        </header>
        <section class="u-clearfix u-section-3" id="sec-da16">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-custom-color-1 u-expanded-width u-shape u-shape-rectangle u-shape-1"></div>
        <div class="u-clearfix u-expanded-width-md u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <img src="assets/img/<?php echo $data['cover'] ?>" alt="" class="u-container-style u-expand-resize u-image u-layout-cell u-left-cell u-size-28 u-image-1">
                <div class="u-container-layout"></div>
              <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-32 u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2">
                  <h1 class="u-text u-text-default u-text-1"><?php echo $data['title'] ?></h1>
                <p class="product__description1"><?php echo $data['tanggal'] ?></p><br><br>
                </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="product section container" id="products">
                <p class="product__description1">
                <?php echo $data['content'] ?>
                </p>
                <p class="sosmed_inline">
<img src="involved/assets/img/favicon.png" onclick="_fb();" alt="">
<img src="res/twitter.png" onclick="_twitter();" alt="">
<img src="res/gmail.png" onclick="_gmail();" alt="">
</p>
            </section>
            <!--==================== PRODUCTS ====================-->
            <section class="questions section" id="products">
                <h2 class="section__title-center">
                    MORE WAYS TO GET INVOLVED
                </h2>

                <p class="product__description">
                </p>

                <div class="product__container grid">
                    <article class="product__card">
                        <div class="product__circle"></div>
                        
                        <a href="donate.php"><img src="assets/img/3.png" alt="" class="product__img"></a>
                        <a href="donate.php">
                        <center><h3 class="product__title">Donate</h3>
                        </a>
                        
                        <span class="product__price">You can help save endangered species now</span>
                        <br><br></center>
                        <a href="donate.php" class="button--flex product__button">
                           <i class="ri-arrow-right-down-line button__icon"></i>
                        </a>
                    </article>

                    <article class="product__card">
                        <div class="product__circle"></div>
                        
                        <a href="volunteer.php"><img src="assets/img/2.png" alt="" class="product__img"></a>
                        <a href="volunteer.php">
                        <center><h3 class="product__title">Volunteer</h3>
                        </a>
                        
                        <span class="product__price">Join Volunteer and take action to make a change!</span>
                        <br><br></center>
                        <a href="volunteer.php" class="button--flex product__button">
                           <i class="ri-arrow-right-down-line button__icon"></i>
                        </a>
                    </article>

                    <article class="product__card">
                        <div class="product__circle"></div>

                        <a href="community.php"><img src="assets/img/4.png" alt="" class="product__img"></a>
                        <a href="community.php">
                        <center><h3 class="product__title">Join Community</h3>
                        </a>
                        
                        <span class="product__price">Get conservation news exclusively.</span></center>
                        <br>
                        <a href="community.php" class="button--flex product__button">
                           <i class="ri-arrow-right-down-line button__icon"></i>
                        </a>
                    </article>
                </div>
            </section>

            

        </main>

        <!--==================== FOOTER ====================-->
        <footer class="footer section">
            <div class="footer__container container grid">
                <div class="footer__content">
                    <a href="#" class="footer__logo">
                        <i class="ri-leaf-line footer__logo-icon"></i> WildLife Care
                    </a>

                    <h3 class="footer__title">
                        Conserving threatened <br> species, 
                        and ecosystems.
                    </h3>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">About</h3>

                    <ul class="footer__data">                       
                        <div class="footer__social">
                            <a href="" class="footer__social-link">
                                About Us
                            </a>
                        </div>
                        <div class="footer__social">
                            <a href="" class="footer__social-link">
                                Features
                            </a>
                        </div>
                        <div class="footer__social">
                            <a href="" class="footer__social-link">
                                New & Blog
                            </a>
                        </div>
                    </ul>
                </div>
                <div class="footer__content">
                    <h3 class="footer__title">Company</h3>

                    <ul class="footer__data">                       
                        <div class="footer__social">
                            <a href="https://www.facebook.com/" class="footer__social-link">
                                Team
                            </a>
                        </div>
                        <div class="footer__social">
                            <a href="https://www.instagram.com/" class="footer__social-link">
                                Plan y Pricing
                            </a>
                        </div>
                        <div class="footer__social">
                            <a href="https://twitter.com/" class="footer__social-link">
                                Become a member
                            </a>
                        </div>
                    </ul>
                </div>
                <div class="footer__content">
                    <h3 class="footer__title">Support</h3>

                    <ul class="footer__data">                       
                        <div class="footer__social">
                            <a href="https://www.facebook.com/" class="footer__social-link">
                                FAQs
                            </a>
                        </div>
                        <div class="footer__social">
                            <a href="https://www.instagram.com/" class="footer__social-link">
                                Support Center
                            </a>
                        </div>
                        <div class="footer__social">
                            <a href="https://twitter.com/" class="footer__social-link">
                                Contact Us
                            </a>
                        </div>
                    </ul>
                </div>
            </div>

            <p class="footer__copy">&#169; Virra Retnowati A'</p>
        </footer>
        
        <!--=============== SCROLL UP ===============-->
        <a href="#" class="scrollup" id="scroll-up"> 
            <i class="ri-arrow-up-fill scrollup__icon"></i>
        </a>

        <!--=============== SCROLL REVEAL ===============-->
        <script src="assets/js/scrollreveal.min.js"></script>
        
        <!--=============== MAIN JS ===============-->
        <script src="assets/js/main.js"></script>

        <script>
var title = "Sosial media sharing button";
var content= "Membagi konten web via sosial media";
 var currentLocation = window.location;
 var top = (screen.height - 570) / 2;
 var left = (screen.width - 570) / 2;
 var params = "menubar=no,toolbar=no,status=no,width=570,height=570,top=" + top + ",left=" + left;
 console.log(encodeURI(title+deskripsi));
    function _fb(){
      var url="https://web.facebook.com/sharer.php?u=" + encodeURI(currentLocation);
      window.open(url,'NewWindow',params);
    }
    function _twitter(){
      var url="https://twitter.com/intent/tweet?url=" + encodeURI(currentLocation) + "&text="+encodeURI(deskripsi);
      window.open(url,'NewWindow',params);
      
    }
    function _gmail(){
      var url="https://mail.google.com/mail/?view=cm&to=&su=" + encodeURI(title) + "&body=" + encodeURI(currentLocation + deskripsi);
   window.open(url,'NewWindow',params);
 </script>
    </body>
</html>

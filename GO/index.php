<?php 
include('database.php');
$lib = new Database();
if(isset($_POST['sendmssg'])){
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
 
    $add_status = $lib->sendMessage($email, $subject, $message);
    if($add_status){
    header('Location: index.php');
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
        
        <title>GO by riqueza</title>

        <!--=============== CSS SLICK===============-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        
    </head>
    <body>

    <!--=============== SCROLL UP ===============-->
    <a href="#" class="scrollup" id="scroll-up"> 
        <i class='bx bx-chevrons-up scrollup__icon'></i>       
    </a>

        <!--==================== HEADER ====================-->
        <header class="header" id="header">
            <nav class="nav container">

            <div class="nav__toggle" id="nav-toggle">
                        <i class="ri-menu-line"></i>
                    </div>
                </div>

                <a href="#" class="nav__logo">
                    <i class="ri-shopping-bag-2-line"></i> GO by riqueza
                </a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="#home" class="nav__link active-link">Home</a>
                        </li>
                        <li class="nav__item">
                            <a href="#about" class="nav__link">About</a>
                        </li>
                        <li class="nav__item">
                            <a href="#note" class="nav__link">Note</a>
                        </li>
                        <li class="nav__item">
                            <a href="#products" class="nav__link">Products</a>
                        </li>
                        <li class="nav__item">
                            <a href="#faqs" class="nav__link">FAQs</a>
                        </li>
                        <li class="nav__item">
                            <a href="#contact" class="nav__link">Contact Us</a>
                        </li>
                        <li>
                    <!-- Theme change button -->
                        <i class="ri-moon-line change-theme" id="theme-button"></i>
                        </li>
                        </div>
                    </div>
                    </ul>
                    <div class="nav__shop">
                            <a href="cart.php" class="nav__icon"><i class="ri-store-2-line"></i>
                                <span>3</span>
                            </a>
                    </div>
            </nav>
        </header>

      
        <!--==================== MAIN ====================-->
        <main class="main">
            <!--==================== HOME ====================-->
            <section class="home" id="home">
                <div class="home__container container grid">
                    <img src="assets/img/home4.png" alt="" class="home__img">

                    <div class="home__data">
                        <h1 class="home__title">
                            Buy now or <br> Cry later
                        </h1>
                        <p class="home__description">
                        Group Order by riqueza
                        </p>
                        <a href="#about" class="button button--flex">
                            Explore <i class="ri-arrow-right-down-line button__icon"></i>
                        </a>
                    </div>

                    <div class="home__social">
                        <span class="home__social-follow">Follow Us</span>

                        <div class="home__social-links">
                            <a href="https://www.facebook.com/" target="_blank" class="home__social-link">
                                <i class="ri-facebook-fill"></i>                            </a>
                            <a href="https://www.instagram.com/" target="_blank" class="home__social-link">
                            <i class="ri-instagram-line"></i>
                            </a>
                            <a href="https://twitter.com/" target="_blank" class="home__social-link">
                            <i class="ri-twitter-fill"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== ABOUT ====================-->
            <section class="about section container" id="about">
                <div class="about__container grid">
                    <img src="assets/img/about1.png" alt="" class="about__img">

                    <div class="about__data">
                        <h2 class="section__title about__title">
                            Who we really are & <br> why choose us
                        </h2>

                        <p class="about__description">
                        We have over 4000+ unbiased reviews and our customers 
                            trust our group order process and delivery service every time.
                        </p>

                        <div class="about__details">
                            <p class="about__details-description">
                                <i class="ri-checkbox-fill about__details-icon"></i>
                                We always deliver on time.
                            </p>
                            <p class="about__details-description">
                                <i class="ri-checkbox-fill about__details-icon"></i>
                                We give you guides to protect and care for your plants.
                            </p>
                            <p class="about__details-description">
                                <i class="ri-checkbox-fill about__details-icon"></i>
                                We give you guides to order and care for your order.
                            </p>
                            <p class="about__details-description">
                                <i class="ri-checkbox-fill about__details-icon"></i>
                                100% money back guaranteed.
                            </p>
                        </div>

                        <a href="#products" class="button--link button--flex">
                            Shop Now <i class="ri-arrow-right-down-line button__icon"></i>
                        </a>
                    </div>
                </div>
            </section>

            <!--==================== PORTOFOLIO ====================-->


            <!--==================== NOTE ====================-->
            <section class="steps section container" id="note">
                <div class="steps__bg">
                    <h2 class="section__title-center steps__title">
                        Note <br> 
                    </h2>

                    <div class="steps__container grid">
                        <div class="steps__card">
                            <div class="steps__card-number">01</div>
                            <h3 class="steps__card-title">Sharing</h3>
                            <p class="steps__card-description">
                                Sharing stuff etc.
                            </p>
                            <a href="nsharing.php" class="button--link button--flex">
                                See <i class="ri-arrow-right-down-line button__icon"></i>
                            </a>
                        </div>

                        <div class="steps__card">
                            <div class="steps__card-number">02</div>
                            <h3 class="steps__card-title">Proof CO</h3>
                            <p class="steps__card-description">
                                Proof CO barang.
                            </p>
                            <a href="proofco.php" class="button--link button--flex">
                                See <i class="ri-arrow-right-down-line button__icon"></i>
                            </a>
                        </div>

                        <div class="steps__card">
                            <div class="steps__card-number">03</div>
                            <h3 class="steps__card-title">Track product</h3>
                            <p class="steps__card-description">
                                Track your order here!
                            </p>
                            <a href="trackproduct.php" class="button--link button--flex">
                                See <i class="ri-arrow-right-down-line button__icon"></i>
                            </a>
                        </div>
                        <div class="steps__card">
                            <div class="steps__card-number">04</div>
                            <h3 class="steps__card-title">Tagihan</h3>
                            <p class="steps__card-description">
                                Tagihan DP, Pelunasan etc.
                            </p>
                            <a href="tagihan.php" class="button--link button--flex">
                                See <i class="ri-arrow-right-down-line button__icon"></i>
                            </a>
                        </div>
                        <div class="steps__card">
                            <div class="steps__card-number">05</div>
                            <h3 class="steps__card-title">Testimoni</h3>
                            <p class="steps__card-description">
                                Thanks for order!
                            </p>
                            <a href="adm_testi.php" class="button--link button--flex">
                                See <i class="ri-arrow-right-down-line button__icon"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== PRODUCTS ====================-->
            <section class="product section bd-container" id="products">
                <h2 class="section__title-center">
                    Check out our <br> products
                </h2>

                <p class="product__description">
                    Here are some selected plants from our showroom, all are in excellent 
                    shape and has a long life span. Buy and enjoy best quality.
                </p>

                <h3 class="section__subtitle">Packing Only</h3>
                <div class="product__container bd-grid slick_two">
                    <div class="product__card">
                    <div class="product__circle"></div>
                                <img src="assets/img/photocard.png" alt="" class="product__img">
                                    <h3 class="product__title">Photocard</h3>
                                    <span class="product__price">Rp. 5.000</span>
                                    
                                    <a href="#" class="button product__button"><i class="ri-shopping-bag-line"></i></a>
                        </div>

                    <div class="product__card">
                    <div class="product__circle"></div>
                            <img src="assets/img/jewel.png" alt="" class="product__img">
                            <h3 class="product__title">Jewel Case/Kihno</h3>
                            <span class="product__price">Rp. 10.000</span>
                      
                            <a href="#" class="button product__button"><i class="ri-shopping-bag-line"></i></a> 
                    </div>

                    <div class="product__card">
                    <div class="product__circle"></div>
                        <img src="assets/img/album.png" alt="" class="product__img">

                        <h3 class="product__title">Album</h3>
                        <span class="product__price">Rp. 15.000</span>
                       
                                <a href="#" class="button product__button"><i class="ri-shopping-bag-line"></i></a>                     
                    </div>

                    <div class="product__card">
                    <div class="product__circle"></div>
                        <img src="assets/img/photobook.png" alt="" class="product__img">

                        <h3 class="product__title">Photobook</h3>
                        <span class="product__price">Rp. 25.000</span>
                     
                                <a href="#" class="button product__button"><i class="ri-shopping-bag-line"></i></i></a>
                    </div>
                </div>
                    
                <h3 class="section__subtitle">Pre-Order</h3>
                <div class="product__container bd-grid slick_two">
                    <div class="product__card">
                    <div class="product__circle"></div>
                                <img src="assets/img/skzhollim1.png" alt="" class="product__img">
                                    <h3 class="product__title">Stray Kids - Special Single Christmas EveL (Limited) </h3>
                                    <span class="product__price">Rp. 275.000</span>
                                    <a href="product.php" class="button product__button_detail">Detail Product</a>
                                    <a href="#" class="button product__button"><i class="ri-shopping-bag-line"></i></a>
                        </div>

                    <div class="product__card">
                    <div class="product__circle"></div>
                            <img src="assets/img/skzhollim.png" alt="" class="product__img">
                            <h3 class="product__title">Stray Kids - Special Single Christmas EveL (Standard)</h3>
                            <span class="product__price">Rp. 250.000</span>
                            <a href="#" class="button product__button_detail">Detail Product</a>
                            <a href="#" class="button product__button"><i class="ri-shopping-bag-line"></i></a> 
                    </div>

                    <div class="product__card">
                    <div class="product__circle"></div>
                        <img src="assets/img/donghaea.png" alt="" class="product__img">

                        <h3 class="product__title">LEE DONG HAE - BEAUTIFUL DAYS  (A Type)</h3>
                        <span class="product__price">Rp. 982.000</span>
                        <a href="#" class="button product__button_detail">Detail Product</a>
                                <a href="#" class="button product__button"><i class="ri-shopping-bag-line"></i></a>                     
                    </div>

                    <div class="product__card">
                    <div class="product__circle"></div>
                        <img src="assets/img/donghaeb.png" alt="" class="product__img">

                        <h3 class="product__title">LEE DONG HAE - BEAUTIFUL DAYS : LEE DONG HAE  (B Type)</h3>
                        <span class="product__price">Rp. 982.000</span>
                        <a href="#" class="button product__button_detail">Detail Product</a>
                                <a href="#" class="button product__button"><i class="ri-shopping-bag-line"></i></i></a>
                    </div>

                    <div class="product__card">
                    <div class="product__circle"></div>
                                <img src="assets/img/chungha.png" alt="" class="product__img">
                                    <h3 class="product__title">CHUNG HA - The Special Single [Killing Me]</h3>
                                    <span class="product__price">Rp. 280.000</span>
                                    <a href="#" class="button product__button_detail">Detail Product</a>
                                    <a href="#" class="button product__button"><i class="ri-shopping-bag-line"></i></a>
                        </div>

                    <div class="product__card">
                    <div class="product__circle"></div>
                            <img src="assets/img/nolimitlim.png" alt="" class="product__img">
                            <h3 class="product__title">MONSTA X - Mini Album Vol.10 [NO LIMIT] (Limited Ver.) <br></h3>
                            <span class="product__price">Rp. 380.000</span>
                            <a href="#" class="button product__button_detail">Detail Product</a>
                            <a href="#" class="button product__button"><i class="ri-shopping-bag-line"></i></a> 
                    </div>

                    <div class="product__card">
                    <div class="product__circle"></div>
                        <img src="assets/img/nolimit.png" alt="" class="product__img">

                        <h3 class="product__title">MONSTA X - Mini Album Vol.10 [NO LIMIT]</h3>
                        <span class="product__price">Rp. 320.000</span>
                        <a href="nolimit.php" class="button product__button_detail">Detail Product</a>
                                <a href="" class="button product__button"><i class="ri-shopping-bag-line"></i></a>                     
                    </div>

                    <div class="product__card">
                    <div class="product__circle"></div>
                                <img src="assets/img/kihno.png" alt="" class="product__img">
                                    <h3 class="product__title">MONSTA X - Mini Album Vol.10 [NO LIMIT] (KiT ALBUM)</h3>
                                    <span class="product__price">Rp. 365.000</span>
                                    <a href="#" class="button product__button_detail">Detail Product</a>
                                    <a href="#" class="button product__button"><i class="ri-shopping-bag-line"></i></a>
                        </div>

                    <div class="product__card">
                    <div class="product__circle"></div>
                        <img src="assets/img/ive.png" alt="" class="product__img">

                        <h3 class="product__title"> IVE - The 1st Single Album [ELEVEN] (Ver.1 + Ver.2) </h3>
                        <span class="product__price">Rp. 300.000</span>
                        <a href="#" class="button product__button_detail">Detail Product</a>
                                <a href="#" class="button product__button"><i class="ri-shopping-bag-line"></i></i></a>
                    </div>
                    

                    <div class="product__card">
                    <div class="product__circle"></div>
                            <img src="assets/img/deluxe1.png" alt="" class="product__img">
                            <h3 class="product__title">MONSTA X - [Dreaming] (Deluxe Version I)</h3>
                            <span class="product__price">Rp. 355.000</span>
                            <a href="#" class="button product__button_detail">Detail Product</a>
                            <a href="#" class="button product__button"><i class="ri-shopping-bag-line"></i></a> 
                    </div>

                    <div class="product__card">
                    <div class="product__circle"></div>
                        <img src="assets/img/deluxe2.png" alt="" class="product__img">

                        <h3 class="product__title">MONSTA X - [Dreaming] (Deluxe Version II)</h3>
                        <span class="product__price">Rp. 15.000</span>
                        <a href="#" class="button product__button_detail">Detail Product</a>
                                <a href="#" class="button product__button"><i class="ri-shopping-bag-line"></i></a>                     
                    </div>

                    <div class="product__card">
                    <div class="product__circle"></div>
                        <img src="assets/img/deluxe3.png" alt="" class="product__img">

                        <h3 class="product__title">MONSTA X - [Dreaming] (Deluxe Version III)</h3>
                        <span class="product__price">Rp. 25.000</span>
                        <a href="#" class="button product__button_detail">Detail Product</a>
                                <a href="#" class="button product__button"><i class="ri-shopping-bag-line"></i></i></a>
                    </div>
                    <div class="product__card">
                    <div class="product__circle"></div>
                        <img src="assets/img/deluxe4.png" alt="" class="product__img">

                        <h3 class="product__title">MONSTA X - [Dreaming] (Deluxe Version IV)</h3>
                        <span class="product__price">Rp. 25.000</span>
                        <a href="#" class="button product__button_detail">Detail Product</a>
                                <a href="#" class="button product__button"><i class="ri-shopping-bag-line"></i></i></a>
                    </div>
                </div>
                
                <h3 class="section__subtitle">Ready Stock</h3>
                <div class="product__container bd-grid slick_two">
                    <div class="product__card">
                    <div class="product__circle"></div>
                                <img src="assets/img/hs.png" alt="" class="product__img">
                                    <h3 class="product__title">NCT DREAM - Album Vol.1 [맛 (Hot Sauce)] (Photo Book Ver.) (Random Ver.)</h3>
                                    <span class="product__price">Rp. 290.000</span>
                                    <a href="#" class="button product__button_detail">Detail Product</a>
                                    <a href="#" class="button product__button"><i class="ri-shopping-bag-line"></i></a>
                        </div>

                    <div class="product__card">
                    <div class="product__circle"></div>
                            <img src="assets/img/txt.png" alt="" class="product__img">
                            <h3 class="product__title">TXT(TOMORROW X TOGETHER) - Album [THE CHAOS CHAPTER : FIGHT OR ESCAPE]</h3>
                            <span class="product__price">Rp. 280.000</span>
                            <a href="#" class="button product__button_detail">Detail Product</a>
                            <a href="#" class="button product__button"><i class="ri-shopping-bag-line"></i></a> 
                    </div>

                    <div class="product__card">
                    <div class="product__circle"></div>
                        <img src="assets/img/exo.png" alt="" class="product__img">

                        <h3 class="product__title">EXO - Special Album [DON’T FIGHT THE FEELING] (Photo Book Ver.1)</h3>
                        <span class="product__price">Rp. 335.000</span>
                        <a href="#" class="button product__button_detail">Detail Product</a>
                                <a href="#" class="button product__button"><i class="ri-shopping-bag-line"></i></a>                     
                    </div>

                    <div class="product__card">
                    <div class="product__circle"></div>
                        <img src="assets/img/twice.png" alt="" class="product__img">

                        <h3 class="product__title">TWICE - Full Album Vol.3 [Formula of Love: O+T=<3] (Random Ver)</h3>
                        <span class="product__price">Rp. 340.000</span>
                        <a href="#" class="button product__button_detail">Detail Product</a>
                                <a href="#" class="button product__button"><i class="ri-shopping-bag-line"></i></i></a>
                    </div>

                    <div class="product__card">
                    <div class="product__circle"></div>
                                <img src="assets/img/en.png" alt="" class="product__img">
                                    <h3 class="product__title">ENHYPEN - Album Vol.1 [DIMENSION : DILEMMA] (Random Ver.) </h3>
                                    <span class="product__price">Rp. 350.000</span>
                                    <a href="#" class="button product__button_detail">Detail Product</a>
                                    <a href="#" class="button product__button"><i class="ri-shopping-bag-line"></i></a>
                        </div>

                    <div class="product__card">
                    <div class="product__circle"></div>
                            <img src="assets/img/svt.png" alt="" class="product__img">
                            <h3 class="product__title">SEVENTEEN - 9th Mini Album [Attacca] (CARAT ver.) (Random Ver.)</h3>
                            <span class="product__price">Rp. 195.000</span>
                            <a href="#" class="button product__button_detail">Detail Product</a>
                            <a href="#" class="button product__button"><i class="ri-shopping-bag-line"></i></a> 
                    </div>

                    <div class="product__card">
                    <div class="product__circle"></div>
                        <img src="assets/img/tr.png" alt="" class="product__img">

                        <h3 class="product__title">TREASURE - Single Album Vol.1 [THE FIRST STEP : CHAPTER ONE] (WHITE Ver.)</h3>
                        <span class="product__price">Rp. 290.000</span>
                        <a href="#" class="button product__button_detail">Detail Product</a>
                                <a href="#" class="button product__button"><i class="ri-shopping-bag-line"></i></a>                     
                    </div>

                    <div class="product__card">
                    <div class="product__circle"></div>
                        <img src="assets/img/ae.png" alt="" class="product__img">

                        <h3 class="product__title">aespa - Mini Album Vol.1 [Savage] (Hallucination Quest Ver.)</h3>
                        <span class="product__price">Rp. 315.000</span>
                        <a href="#" class="button product__button_detail">Detail Product</a>
                                <a href="#" class="button product__button"><i class="ri-shopping-bag-line"></i></i></a>
                </div>

            </section>

            <!--==================== QUESTIONS ====================-->
            <section class="questions section" id="faqs">
                <h2 class="section__title-center questions__title container">
                    Some common questions <br> were often asked
                </h2>

                <div class="questions__container container grid">
                    <div class="questions__group">
                        <div class="questions__item">
                            <header class="questions__header">
                                <i class="ri-add-line questions__icon"></i>
                                <h3 class="questions__item-title">
                                What is a G.O
                                </h3>
                            </header>

                            <div class="questions__content">
                                <p class="questions__description">
                                G.O stands for Group Order. Group orders are an easier way to purchase Kpop goods (albums, fan-made merch) from fansites themselves or official shops.
                                </p>
                            </div>
                        </div>

                        <div class="questions__item">
                            <header class="questions__header">
                                <i class="ri-add-line questions__icon"></i>
                                <h3 class="questions__item-title">
                                How does it work
                                </h3>
                            </header>

                            <div class="questions__content">
                                <p class="questions__description">
                                1. Personal order : You can contact our line  <a href="https://line.me/R/ti/g/mJRpsNZPri" class="footer__social-link">
                                    <img src="img/line.svg" width="15px" class="image" alt="" /></a> and send the link you want to order. <br><br>
                                2. Sharing/PO : we will open several PO/sharing for products from many groups. You can also request to ask us to open a PO/sharing.
                                </p>
                            </div>
                        </div>

                        <div class="questions__item">
                            <header class="questions__header">
                                <i class="ri-add-line questions__icon"></i>
                                <h3 class="questions__item-title">
                                    Shipping
                                </h3>
                            </header>

                            <div class="questions__content">
                                <p class="questions__description">
                                Shipping by EMS/AirCargo<br><br>
                                    Domisili Tasikmalaya, Jawa Barat.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="questions__group">
                        <div class="questions__item">
                            <header class="questions__header">
                                <i class="ri-add-line questions__icon"></i>
                                <h3 class="questions__item-title">
                                Rules                                </h3>
                            </header>

                            <div class="questions__content">
                                <p class="questions__description">
                                1. No HNR. HNR? Blacklist<br>
                                2. Payment on time according to the specified time limit. If there are problems, please contact the admin for relief<br>
                                3. WTT/WTS only ready women are allowed<br>
                                4. Do not seek/offer opslot from other GO<br>
                                5. Any damage on the way from Korea to Indonesia or to the customer's house is NOT our responsibility.<br>
                                6. We will always confirm the condition of the PC if there is damage before sending it to the customer<br>
                                7. Complaints must include a complete unboxing video without being cut<br>
                                8. There are no refunds if you are hit by a scammer when you place a personal order.<br>
                                </p>
                            </div>
                        </div>

                        <div class="questions__item">
                            <header class="questions__header">
                                <i class="ri-add-line questions__icon"></i>
                                <h3 class="questions__item-title">
                                Rate for KR,CN,JP,US
                                </h3>
                            </header>

                            <div class="questions__content">
                                <p class="questions__description">
                                <img src="img/kr.svg" width="15px" class="image" alt="" /> 12.7<br>
                                    <img src="img/cn.svg" width="15px" class="image" alt="" /> 2320<br>
                                    <img src="img/jp.svg" width="15px" class="image" alt="" /> 145<br>
                                    <img src="img/us.svg" width="15px" class="image" alt="" /> 14.200<br>
                                    <img src="img/ph.svg" width="15px" class="image" alt="" /> 75<br>
                                </p>
                            </div>
                        </div>

                        <div class="questions__item">
                            <header class="questions__header">
                                <i class="ri-add-line questions__icon"></i>
                                <h3 class="questions__item-title">
                                How to calculate net price?
                                </h3>
                            </header>

                            <div class="questions__content">
                                <p class="questions__description">
                                <img src="img/kr.svg" width="15px" class="image" alt="" /> (item price + local postage (if any)) x rate<br>
                                    <img src="img/cn.svg" width="15px" class="image" alt="" /> item price x rate (fee etc)<br>
                                    <img src="img/jp.svg" width="15px" class="image" alt="" /> item price + 100 JPY x rate<br>
                                    <img src="img/us.svg" width="15px" class="image" alt="" /> item price x rate<br>
                                    <img src="img/ph.svg" width="15px" class="image" alt="" /> item price x rate<br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== CONTACT ====================-->
            <section class="contact section container" id="contact">                
                <div class="contact__container grid">
                    <div class="contact__box">
                        <h2 class="section__title">
                            Reach out to us today <br> via any of the given <br> information
                        </h2>

                        <div class="contact__data">
                            <div class="contact__information">
                                <h3 class="contact__subtitle">Contact us via line for instant reply</h3>
                                <span class="contact__description">
                                    <i class="ri-line-fill"></i>
                                    @gobyriqueza
                                </span>
                            </div>

                            <div class="contact__information">
                                <h3 class="contact__subtitle">Write us by mail</h3>
                                <span class="contact__description">
                                    <i class="ri-mail-line contact__icon"></i>
                                    gobyriqueza@email.com
                                </span>
                            </div>
                        </div>
                    </div>

                    <form action="" method="POST" class="contact__form">
                        <div class="contact__inputs">
                            <div class="contact__content">
                                <input type="email" name="email" placeholder=" " class="contact__input">
                                <label for="" class="contact__label">Email</label>
                            </div>

                            <div class="contact__content">
                                <input type="text" name="subject" placeholder=" " class="contact__input">
                                <label for="" class="contact__label">Subject</label>
                            </div>

                            <div class="contact__content contact__area">
                                <textarea name="message" placeholder=" " class="contact__input"></textarea>                              
                                <label for="" class="contact__label">Message</label>
                            </div>
                        </div>

                        <button onclick="myFunction()" type="submit" name="sendmssg" value="Tambah" class="button button--flex">
                        Send Message
                        <i class="ri-arrow-right-up-line button__icon"></i>
                        </button>

                        <script>
                        function myFunction() {
                        alert("Message will be sent please wait for our reply to your email");
                        }
                        </script>
                    </form>
                </div>
            </section>
        </main>

        <!--==================== FOOTER ====================-->
        <footer class="footer section">
            <div class="footer__container container grid">
                <div class="footer__content">
                    <a href="#" class="footer__logo">
                    <i class="ri-shopping-bag-2-line"></i> GO by riqueza
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

        <!--=============== MAIN JS ===============-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script type="text/javascript">
            $('.slick_two').slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                arrows: true,
                dots: true,
                infinite: true,
                autoplay: true,
                autoplaySpeed: 2000,
                });
            
        </script>
    </body>
</html>

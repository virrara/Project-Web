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

                <a href="index.php" class="nav__logo">
                    <i class="ri-shopping-bag-2-line"></i> GO by riqueza
                </a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="index.php" class="nav__link active-link">Home</a>
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
                        <div class="nav__shop">
                        <a href='#' class="nav__icon">
                            <i class="ri-store-2-line"></i> 
                            <span>2</span>   
                        </a>     
                        </div>
                    </div>
                    </ul>
                    
                    <div class="nav__close" id="nav-close">
                        <i class="ri-close-line"></i>
                    </div>
                </div>
                <div class="nav__toggle" id="nav-toggle">
                        <i class="ri-menu-line"></i>
                    </div>
            </nav>
        </header>

        <!--==================== CART ====================-->
        
        <!--==================== MAIN ====================-->
        <main class="main">
            <!--==================== PRODUCTS ====================-->
            <section class="product section container" id="products">
                <h2 class="section__title-center">
                    Check your <br> Sharing Item!
                </h2>

                <p class="product__description">
                    Check your sharing and pay your bills!
                </p>

                <div class="product__container grid">
                    <article class="product__card">
                      
                        <img src="assets/img/batch1.jpg" alt="" class="product__img">

                        <h3 class="product__title">📌batch 711📌 EMS</h3>
                        <span class="product__price">
                        ✅shipping + tf + wh + ems tax<br>
                        2 pc = 43.000 @adisoo ✔️<br>
                        1 pc = 112.500 @inggrid <br>
                        1 pc = 34.500 @Ivana Wijaya ✔️<br>
                        1 pc = 34.500 @Zara Aliyah🗿<br> 
                        2 pc = 82.000 @xena<br>
                        </span>
                           
                        <button class="button--flex product__button"><a class="image-link" href="assets/img/Payment Method.png"><i class="ri-shopping-bag-line"></i></a></button>
                    </article>

                    <article class="product__card">

                        <img src="assets/img/710.jpg" alt="" class="product__img">

                        <h3 class="product__title">📌batch 710📌 EMS</h3>
                        <span class="product__price">
                        ✅shipping + tf + wh + ems tax <br>
                            1 pc = 21.500 @dx🧸🍒 ✔️<br>
                            4 pc = 86.000 @ㅁㅂㅂ ✔️<br>
                            2 pc = 43.000 @Nindita Ratna ✔️ <br>
                            1 pc = 21.500 @dodo ✔️<br>
                            1 pc = 21.500 @Brigitte Stephani ✔️<br>
                            ...
                        </span>

                        <button class="button--flex product__button"><a class="image-link" href="assets/img/Payment Method.png"><i class="ri-shopping-bag-line"></i></a></button>

                    </article>

                    <article class="product__card">

                        <img src="assets/img/709.jpg" alt="" class="product__img">

                        <h3 class="product__title">📌batch 709📌 EMS</h3>
                        <span class="product__price">
                        ✅shipping (3000 won) + tf + wh + ems tax <br>
                            4 pc = 199.000 @apica <br>
                            1 pc = 59.500 @audrey <br>
                            2 pc = 67.000 @inggrid <br>
                            3 pc = 139.500 @Fajriana Nuniq <br> 
                            3 pc = 139.500 @nofariza <br>
                            ...
                        </span>

                        <button class="button--flex product__button"><a class="image-link" href="assets/img/Payment Method.png"><i class="ri-shopping-bag-line"></i></a></button>

                    </article>

                    <article class="product__card">

                        <img src="assets/img/708.jpg" alt="" class="product__img">

                        <h3 class="product__title">📌batch 708📌 EMS</h3>
                        <span class="product__price">
                        ✅shipping + tf + wh + ems tax <br>
                            2 pc = 114.000 @Carissa <br>
                            1 pc = 18.000 @Nur Fajriyanti <br> 
                            2 pc = 36.000 @ㅁㅂㅂ <br>
                            4 pc = 150.000 @Dewana <br>
                            1 pc = 18.000 @Alya <br>
                            ...
                        </span>

                        <button class="button--flex product__button"><a class="image-link" href="assets/img/Payment Method.png"><i class="ri-shopping-bag-line"></i></a></button>

                    </article>

                    <article class="product__card">

                        <img src="assets/img/707.jpg" alt="" class="product__img">

                        <h3 class="product__title">📌batch 707📌 EMS</h3>
                        <span class="product__price">
                        ✅shipping + tf + wh + ems tax <br>
                            1 pc = 72.000 @Alissa ✔️ <br>
                            1 pc = 72.000 @Melyana Cantika <br> 
                            1 pc = 72.000 @revina💫 <br>
                            1 pc = 72.000 @Nindita Ratna <br> 
                            1 pc = 72.000 @Regina Mutiara ✔️ <br>
                            ...
                        </span>

                        <button class="button--flex product__button"><a class="image-link" href="assets/img/Payment Method.png"><i class="ri-shopping-bag-line"></i></a></button>

                    </article>

                    <article class="product__card">

                        <img src="assets/img/706.jpg" alt="" class="product__img">

                        <h3 class="product__title">Green Plant</h3>
                        <span class="product__price">
                        ✅shipping + tf + wh + ems tax <br>
                            1 pc = 74.000 @Carolline Liem ✔️<br>
                            1 pc = 113.000 @Eunsun ✔️<br>
                            1 pc = 35.000 @elisa <br>
                            2 pc = 83.000 @azariella <br>
                            2 pc = 57.000 @Ivana Wijaya ✔️ <br>
                            2 pc = 83.000 @Melyana Cantika ✔️ <br>
                            ...
                        </span>

                        <button class="button--flex product__button"><a class="image-link" href="assets/img/Payment Method.png"><i class="ri-shopping-bag-line"></i></a></button>

                    </article>
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

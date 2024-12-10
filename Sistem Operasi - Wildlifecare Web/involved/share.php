<?php
include "config.php";
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

        <title>Wildlife Care - Share & Interact</title>
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

        <main class="main">
            <!--==================== HOME ====================-->
            <section class="home" id="home">
                <div class="home__container container grid">
                    <img src="assets/img/share.svg" alt="" class="home__img">

                    <div class="home__data">
                        <h1 class="home__title">
                            Share and<br> Interact
                        </h1>
                        <p class="home__description">
                                Show off your love of wildlife and nature with these 
                                fun activities and features from WWF.
                        </p>
                        <a href="#about" class="button button--flex">
                            Discover <i class="ri-arrow-right-down-line button__icon"></i>
                        </a>
                    </div>

                    <div class="home__social">
                        <span class="home__social-follow">Follow Us</span>

                        <div class="home__social-links">
                            <a href="https://www.facebook.com/" target="_blank" class="home__social-link">
                                <i class="ri-facebook-fill"></i>
                            </a>
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

            <!--==================== STEPS ====================-->
            
            <section class="steps section container">

                <div class="steps__bg">
                    <h2 class="section__title-center steps__title">
                         Form <br> Volunteer
                    </h2>
                    <?php
                $query = mysqli_query($conn, 'SELECT * FROM news');
                while ($data = mysqli_fetch_array($query)) {
                ?>
                    <div class="steps__container">
                    
                        <div class="steps__card">
                            <div class="steps__card-number">01</div>
                        <img src="assets/img/<?php echo $data['cover'] ?>" alt="" class="place__img">

                            <h3 class="steps__card-title"><?php echo $data['title'] ?></h3>
                            <p class="steps__card-description">
                                We have several varieties plants you can choose from.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <?php } ?>

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
    </body>
</html>

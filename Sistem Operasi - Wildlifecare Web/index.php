<?php
include "involved/config.php";
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="shortcut icon" href="assets/img/RedPanda.png" type="image/png">

        <!--=============== REMIXICONS ===============-->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
        
        <!--=============== SWIPER CSS ===============-->
        <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="assets/css/styles.css">

        <title>Wildlife Care</title>
    </head>
    <body>
        <header class="header" id="header">
            <nav class="nav container">
                <a href="#" class="nav__logo">Wildlife Care</a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="index.php#home" class="nav__link active-link">Home</a>
                        </li>
                        <li class="nav__item">
                            <a href="index.php#about" class="nav__link">About</a>
                        </li>
                        <li class="nav__item">
                            <a href="index.php#discover" class="nav__link">Get Involved</a>
                        </li>
                        <li class="nav__item">
                            <a href="index.php#place" class="nav__link">Project</a>
                        </li>
                        <li class="nav__item">
                            <a href="index.php#news" class="nav__link">News & Update</a>
                        </li>
                    </ul>

                    <div class="nav__dark">
                        <!-- Theme change button -->
                        <span class="change-theme-name">Dark mode</span>
                        <i class="ri-moon-line change-theme" id="theme-button"></i>
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
                <video autoplay="autoplay" muted="muted" loop="loop" class="home__img">
                    <source src="assets/video/intro.mp4" type="video/mp4">
                </video>
                <div class="home__container container grid">
                    <div class="home__data">
                        <span class="home__data-subtitle">WildLife Care</span>
                        <h1 class="home__data-title">Conserving threatened <br>species <b> and <br> ecosystems</b></h1>
                        <a href="#" class="button">Explore</a>
                    </div>

                    <div class="home__social">
                        <a href="https://www.facebook.com/" target="_blank" class="home__social-link">
                            <i class="ri-facebook-box-fill"></i>
                        </a>
                        <a href="https://www.instagram.com/" target="_blank" class="home__social-link">
                            <i class="ri-instagram-fill"></i>
                        </a>
                        <a href="https://twitter.com/" target="_blank" class="home__social-link">
                            <i class="ri-twitter-fill"></i>
                        </a>
                    </div>

                    <div class="home__info">
                        <div>
                            <span class="home__info-title">5 best places to visit</span>
                            <a href="" class="button button--flex button--link home__info-button">
                                More <i class="ri-arrow-right-line"></i>
                            </a>
                        </div>

                        <div class="home__info-overlay">
                            <img src="assets/img/home1.jpeg" alt="" class="home__info-img">
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== ABOUT ====================-->
            <section class="about section" id="about">
                <div class="about__container container grid">
                    <div class="about__data">
                        <h2 class="section__title about__title">More Information <br> Program Konservasi Fauna</h2>
                        <p class="about__description">Pertamina menyadari kegiatan operasi yang dilakukannya berpotensi menimbulkan dampak 
                            berupa gangguan habitat asli bemserta ekosistem di dalamnya, sehingga memengaruhi keberlangsungan hidup fauna maupun flora
                             yang ada di sekitarnya. Untuk itu, Pertamina berkomitmen meminimalkan dampak yang ditimbulkan dari 
                             kegiatan operasinya dengan melakukan upaya pencegahan, minimalisasi dan mitigasi risiko terhadap 
                             keanekaragaman hayati sepanjang siklus bisnis perusahaan, tanggung jawab terhadap tata guna lahan serta merencanakan 
                             dan memodifikasi desain, konstruksi dan praktik operasi untuk melindungi spesies fauna dan flora tertentu 
                             yang endemik atau dilindungi.
                        </p>
                        <a href="#" class="button">More Details</a>
                    </div>

                    <div class="about__img">
                        <div class="about__img-overlay">
                            <img src="assets/img/about1.png" alt="" class="about__img-one">
                        </div>

                        <div class="about__img-overlay">
                            <img src="assets/img/about2.png" alt="" class="about__img-two">
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== OUR IMPACT ====================-->
            <section class="experience section">
                <h2 class="section__title">Our Impact</h2>

                <div class="experience__container container grid">
                    <div class="experience__content grid">
                        <div class="experience__data">
                            <h2 class="experience__number">87</h2>
                            <span class="experience__description">Hewan <br> Endemis</span>
                        </div>

                        <div class="experience__data">
                            <h2 class="experience__number">700.000+</h2>
                            <span class="experience__description">Fauna <br> dari 261 jenis</span>
                        </div>

                        <div class="experience__data">
                            <h2 class="experience__number">50+</h2>
                            <span class="experience__description">Program <br> Konservasi Fauna</span>
                        </div>
                    </div>

                    <div class="experience__img grid">
                        <div class="experience__overlay">
                            <img src="assets/img/impact2.png" alt="" class="experience__img-one">
                        </div>
                        
                        <div class="experience__overlay">
                            <img src="assets/img/impact3.png" alt="" class="experience__img-two">
                        </div>
                    </div>
                </div>
            </section>
            
            <!--==================== GET INVOLVED ====================-->
            <section class="discover section" id="discover">
                <h2 class="section__title">Get Involved <br> More ways you can help</h2>
                
                <div class="discover__container container swiper-container">
                    <div class="swiper-wrapper">
                        <!--==================== DISCOVER 1 ====================-->
                        <div class="discover__card swiper-slide">
                            <img src="assets/img/donate.png" alt="" class="discover__img">
                            <div class="discover__data">
                                <a href="involved/donate.php">
                                    <h2 class="discover__title">Donate</h2>
                                </a>
                                <span class="discover__description">You can help save endangered species now</span>
                            </div>
                        </div>

                        <!--==================== DISCOVER 2 ====================-->
                        <div class="discover__card swiper-slide">
                            <img src="assets/img/vol.png" alt="" class="discover__img">
                            <div class="discover__data">
                                <a href="involved/volunteer.php">
                                    <h2 class="discover__title">Volunteer</h2>
                                </a>
                                <span class="discover__description">Join Volunteer and take action to make a change!</span>
                            </div>
                        </div>

                        <!--==================== DISCOVER 3 ====================-->
                        <div class="discover__card swiper-slide">
                            <img src="assets/img/comm.png" alt="" class="discover__img">
                            <div class="discover__data">
                                <a href="involved/community.php">
                                    <h2 class="discover__title">Join Our Community</h2>
                                </a>
                                <span class="discover__description">Get conservation news exclusively and learn how to protect
                                    our planet in your own way.<br> You can raise awareness and champion crucial wildlife and nature issues by learning more
                                </span>
                            </div>
                        </div>

                        
                    </div>
                </div>
            </section>

            <!--==================== VIDEO ====================-->
            <section class="video section" id="place">
                <h2 class="section__title">Video Tour</h2>

                <div class="video__container container">
                    <p class="video__description">Find out more with our videos about 
                        <br>our fauna conservation projects
                    <div class="video__content">
                    <iframe width="800" height="500" 
                            src="https://www.youtube.com/embed/videoseries?list=PLOeg0GNO9c0SO3CHNOkyggL_4jAQYyzcc" 
                            title="YouTube video player" frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                            allowfullscreen>
                        </iframe>
                    </div>
                    <div class="video__content">
                        <video id="video-file">
                        </video>

                        <button class="" id="video-button">
                        </button>
                    </div>
                </div>
            </section>

            <!--==================== NEWS & UPDATE ====================-->
            <section class="place section" id="news">
                <h2 class="section__title">News & Updates</h2>
                <?php
                $query = mysqli_query($conn, 'SELECT * FROM news');
                while ($data = mysqli_fetch_array($query)) {
                ?>

                <div class="place__container container grid">
                    <!--==================== NEWS ====================-->
                    <div class="place__card">
                        <img src="assets/img/<?php echo $data['cover'] ?>" alt="" class="place__img">
                        
                        <div class="place__content">
                            <span class="place__rating">
                                <i class="ri-star-line place__rating-icon"></i>
                                <span class="place__rating-number">4,8</span>
                            </span>

                            <div class="place__data">
                                <h3 class="place__title"><?php echo $data['title'] ?></h3>
                            </div>
                        </div>
                        <a href="involved/details-news.php?page=details-news&id_news=<?=$data['id_news'] ?>" class="button button--flex place__button"><i class="ri-arrow-right-line"></i></a>
                    </div>
                    <?php } ?>
                </div>
            </section>

            <!--==================== SUBSCRIBE ====================-->
            <section class="subscribe section">
                <div class="subscribe__bg">
                    <div class="subscribe__container container">
                        <h2 class="section__title subscribe__title">Subscribe Our <br> Newsletter</h2>
                        <p class="subscribe__description">Subscribe to our newsletter
                        </p>
    
                        <form action="involved/community.php" class="subscribe__form">
                            <input type="text" placeholder="Enter email" class="subscribe__input">
    
                            <button class="button">
                                Subscribe
                            </button>
                        </form>
                    </div>
                </div>
            </section>
            
            <!--==================== SPONSORS ====================-->
            <section class="sponsor section">
                <div class="sponsor__container container grid">
                    <div class="sponsor__content">
                        <img src="assets/img/sponsors.png" alt="" class="sponsor__img">
                    </div>
                </div>
            </section>
        </main>

        <!--==================== FOOTER ====================-->
        <footer class="footer section">
            <div class="footer__container container grid">
                <div class="footer__content grid">
                    <div class="footer__data">
                        <h3 class="footer__title">WildLife Care</h3>
                        <p class="footer__description">Conserving threatened <br> species, 
                            and ecosystems.
                        </p>
                        <div>
                            <a href="https://www.facebook.com/" target="_blank" class="footer__social">
                                <i class="ri-facebook-box-fill"></i>
                            </a>
                            <a href="https://twitter.com/" target="_blank" class="footer__social">
                                <i class="ri-twitter-fill"></i>
                            </a>
                            <a href="https://www.instagram.com/" target="_blank" class="footer__social">
                                <i class="ri-instagram-fill"></i>
                            </a>
                            <a href="https://www.youtube.com/" target="_blank" class="footer__social">
                                <i class="ri-youtube-fill"></i>
                            </a>
                        </div>
                    </div>
    
                    <div class="footer__data">
                        <h3 class="footer__subtitle">About</h3>
                        <ul>
                            <li class="footer__item">
                                <a href="" class="footer__link">About Us</a>
                            </li>
                            <li class="footer__item">
                                <a href="" class="footer__link">Features</a>
                            </li>
                            <li class="footer__item">
                                <a href="" class="footer__link">New & Blog</a>
                            </li>
                        </ul>
                    </div>
    
                    <div class="footer__data">
                        <h3 class="footer__subtitle">Company</h3>
                        <ul>
                            <li class="footer__item">
                                <a href="" class="footer__link">Team</a>
                            </li>
                            <li class="footer__item">
                                <a href="" class="footer__link">Plan y Pricing</a>
                            </li>
                            <li class="footer__item">
                                <a href="" class="footer__link">Become a member</a>
                            </li>
                        </ul>
                    </div>
    
                    <div class="footer__data">
                        <h3 class="footer__subtitle">Support</h3>
                        <ul>
                            <li class="footer__item">
                                <a href="" class="footer__link">FAQs</a>
                            </li>
                            <li class="footer__item">
                                <a href="" class="footer__link">Support Center</a>
                            </li>
                            <li class="footer__item">
                                <a href="" class="footer__link">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="footer__rights">
                    <p class="footer__copy">&#169; Virra Retnowati A'.</p>
                    <div class="footer__terms">
                        <a href="#" class="footer__terms-link">Terms & Agreements</a>
                        <a href="#" class="footer__terms-link">Privacy Policy</a>
                    </div>
                </div>
            </div>
        </footer>

         <!--========== SCROLL UP ==========-->
        <a href="#" class="scrollup" id="scroll-up">
            <i class="ri-arrow-up-line scrollup__icon"></i>
        </a>

        <!--=============== SCROLL REVEAL===============-->
        <script src="assets/js/scrollreveal.min.js"></script>
        
        <!--=============== SWIPER JS ===============-->
        <script src="assets/js/swiper-bundle.min.js"></script>

        <!--=============== MAIN JS ===============-->
        <script src="assets/js/main.js"></script>

<?php
    if(isset($_GET['page'])){
        $query = $conn->query("SELECT * FROM news");
        $vmenu = $query->mysqli_fetch_array();
        if($_GET['page']=='details-news'){
            include "involved/details-news.php";
        } else {
            include "index.php";
        }
    }
?>
    </body>
</html>
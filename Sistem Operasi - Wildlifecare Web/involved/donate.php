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

        <title>Wildlife Care - Donate now</title>
<style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, select, textarea, label { 
      padding: 0;
      margin: 0;
      outline: none;
      font-size: 14px;
      color: #666;
      line-height: 22px;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 20px;
      }
      form {
      width: 100%;
      padding: 20px;
      border-radius: 6px;
      background: #fff;
      box-shadow: 0 0 8px #006622; 
      }
      .banner {
      position: relative;
      height: 250px;
      background-image: url("/uploads/media/default/0001/02/cc6bc584f236c7234947015b89151ab6d04c4cbf.jpeg");  
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      }
      .banner::after {
      content: "";
      background-color: rgba(0, 0, 0, 0.4); 
      position: absolute;
      width: 100%;
      height: 100%;
      }
      input, select, textarea {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      }
      input[type="date"] {
      padding: 4px 5px;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .item:hover p, .item:hover i, .question:hover p, .question label:hover, input:hover::placeholder {
      color:  #006622;
      }
      .checkbox input[type=checkbox] {
      display:inline-block;
      height:15px;
      width:15px;
      margin-right:5px;
      vertical-align:text-top;
      }
      .item input:hover, .item select:hover, .item textarea:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 3px 0  #006622;
      color: #006622;
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
      .item span {
      color: red;
      }
      .week {
      display:flex;
      justfiy-content:space-between;
      }
      .colums {
      display:flex;
      justify-content:space-between;
      flex-direction:row;
      flex-wrap:wrap;
      }
      .colums div {
      width:48%;
      }
      input[type=radio], input[type=checkbox]  {
      display: none;
      }
      label.radio {
      position: relative;
      display: inline-block;
      margin: 5px 20px 15px 0;
      cursor: pointer;
      }
      .question span {
      margin-left: 30px;
      }
      .question-answer label {
      display: block;
      }
      label.radio:before {
      content: "";
      position: absolute;
      left: 0;
      width: 17px;
      height: 17px;
      border-radius: 50%;
      border: 2px solid #ccc;
      }
      input[type=radio]:checked + label:before, label.radio:hover:before {
      border: 2px solid  #006622;
      }
      label.radio:after {
      content: "";
      position: absolute;
      top: 6px;
      left: 5px;
      width: 8px;
      height: 4px;
      border: 3px solid  #006622;
      border-top: none;
      border-right: none;
      transform: rotate(-45deg);
      opacity: 0;
      }
      input[type=radio]:checked + label:after {
      opacity: 1;
      }
      .flax {
      display:flex;
      justify-content:space-around;
      }
      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
      button {
      width: 150px;
      padding: 10px;
      border: none;
      border-radius: 5px; 
      background:  #004d1a;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      button:hover {
      background:  #00802b;
      }
      @media (min-width: 568px) {
      .name-item, .city-item {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
      .name-item input, .name-item div {
      width: calc(50% - 20px);
      }
      .name-item div input {
      width:97%;}
      .name-item div label {
      display:block;
      padding-bottom:5px;
      }
      }
    </style>
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
                    <img src="assets/img/donate.svg" alt="" class="home__img">

                    <div class="home__data">
                        <h1 class="home__title">
                            Donate 
                        </h1>
                        <p class="home__description">
                        You can protect threatened species and their habitats today with once or
                        monthly donation to Wildlife Care Fund. Your support will make a world of difference.
                        </p>
                        <a href="#about" class="button button--flex">
                           Donate now<i class="ri-arrow-right-down-line button__icon"></i>
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

            <!--==================== ABOUT ====================-->
            <section class="about section container" id="">
                <div class="about__container grid">
                    <img src="assets/img/about2.png" alt="" class="about__img">

                    <div class="about__data">
                        <h2 class="section__title about__title">
                            Menjadi Donatur
                        </h2>

                        <p class="about__description">
                        Donasi Anda dapat membuat perbedaan bagi spesies yang sangat membutuhkan. 
                        Kami memiliki lebih dari 150 proyek dan setiap donasi yang kami 
                        terima digunakan untuk kegiatan amal kami.
                        </p>
                    </div>
                </div>
            </section>

            <!--==================== STEPS ====================-->
            <section class="steps section container">
                <div class="steps__bg">
                    <h2 class="section__title-center steps__title">
                         Donation <br> 
                    </h2>

                    <div class="steps__container">
                    <form name="formDonation" method="POST" action="cdonate.php">
                        <div class="steps__card">
                            <div class="steps__card-number">Donation Form</div>
                            <h3 class="steps__card-title"></h3>
                            <p class="steps__card-description">
                            </p>
                            <div class="colums">
                                <div class="item">
                                    <label for="fname">First Name<span>*</span></label>
                                    <input id="fname" type="text" name="fname" />
                                </div>
                                <div class="item">
                                    <label for="lname"> Last Name<span>*</span></label>
                                    <input id="lname" type="text" name="lname" />
                                </div>
                                <div class="item">
                                    <label for="email">Email Address<span>*</span></label>
                                    <input id="email" type="email"   name="email" />
                                </div>
                                <div class="item">
                                    <label for="phone">Phone Number</label>
                                    <input id="phone" type="tel"   name="phone"/>
                                </div>
                                <div class="item">
                                    <label for="street">Street Address</label>
                                    <input id="street" type="text"   name="street" />
                                </div>
                                <div class="item">
                                    <label for="city">City</label>
                                    <input id="city" type="text"   name="city" />
                                </div>
                                <div class="item">
                                    <label for="zip">Zip/Postal Code</label>
                                    <input id="zip" type="text"   name="zip" />
                                </div>

                            </div>
                            <br>
                            <div class="steps__card-number">Donation Details</div>
                            <h3 class="steps__card-title"></h3>
                            <p class="steps__card-description">
                            </p>
                            <div class="colums">
                            </div>
                            <div class="checkbox">
                            <p></p>
                            <label><input type="checkbox" id="publicy" name="publicy"/>Send me email updates about how I'm protecting wildlife and nature.
                            </label>
                            </div>
                            <div class="item">
                                    <label for="damount">Amount of Donation</label>
                                    <input id="damount" type="text"   name="damount" />
                            <br><br>
                            <div class="steps__card-number">Payment Method</div><br>
                            <div class="footer__cards">
                                    <img src="assets/img/card1.png" alt="" class="footer__card">
                                    <img src="assets/img/card2.png" alt="" class="footer__card">
                                    <img src="assets/img/card3.png" alt="" class="footer__card">
                                    <img src="assets/img/card4.png" alt="" class="footer__card">
                                </div>
                                <div class="item">
                                <label for="card_num">Card Number</label>
                                <input id="card_num" type="text" placeholder="Card Number                                                                                                               
                                MM / YY    CVC"  name="card_num" />
                            </div>
                                <h3 class="steps__card-title"></h3>
                                <p class="steps__card-description">
                                </p>
                        </div>
                    </form>
                <br>
                <div class="btn-block">
                <button type="order" href="/">Submit</button>
                <p class="steps__card-description">
                    <br>*When you click submit, your donation will be processed.
                </p>
                </div>
                </form>
                </div>
                        
            
                        </div>
                    </div>
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
    </body>
</html>

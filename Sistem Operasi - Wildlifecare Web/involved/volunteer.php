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
        <style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, select, textarea, label, p { 
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
      box-shadow: 0 0 8px  #669999; 
      }
      .banner {
      position: relative;
      height: 300px;
      background-image: url("/uploads/media/default/0001/02/8070c999efd1a155ad843379a5508d16f544aeaf.jpeg");  
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      }
      .banner::after {
      content: "";
      background-color: rgba(0, 0, 0, 0.3); 
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
      color:  #669999;
      }
      .item input:hover, .item select:hover, .item textarea:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 3px 0  #669999;
      color: #669999;
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
      input[type="date"]::-webkit-inner-spin-button {
      display: none;
      }
      .item i, input[type="date"]::-webkit-calendar-picker-indicator {
      position: absolute;
      font-size: 20px;
      color:  #a3c2c2;
      }
      .item i {
      right: 1%;
      top: 30px;
      z-index: 1;
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
      border: 2px solid  #669999;
      }
      label.radio:after {
      content: "";
      position: absolute;
      top: 6px;
      left: 5px;
      width: 8px;
      height: 4px;
      border: 3px solid  #669999;
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

        <title>Wildlife Care - Join Volunteer</title>
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
                    <img src="assets/img/volunteer.svg" alt="" class="home__img">

                    <div class="home__data">
                        <h1 class="home__title">
                            Join <br> Volunteer
                        </h1>
                        <p class="home__description">
                            Take action to make a change!
                        </p>
                        <a href="#about" class="button button--flex">
                            Fill Form <i class="ri-arrow-right-down-line button__icon"></i>
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
            <section class="about section container" id="about">
                <div class="about__container grid">
                    <img src="assets/img/about1.png" alt="" class="about__img">

                    <div class="about__data">
                        <h2 class="section__title about__title">
                            Peluang menjadi <br> Relawan
                        </h2>

                        <p class="about__description">
                        Aplikasi Anda akan ditinjau oleh Koordinator Layanan Sukarelawan. 
                        JIKA kualifikasi Anda sesuai dengan kebutuhan dan ketersediaan kami, Anda akan 
                        dihubungi melalui email yang Anda berikan untuk wawancara. Pembukaan relawan 
                        terbatas dan kompetitif. Untuk meningkatkan peluang Anda mendapatkan wawancara, 
                        harap sertakan aplikasi ini dengan resume. Penggunaan telepon seluler hanya diperbolehkan 
                        pada saat istirahat dan diawasi oleh staf. Relawan dituntut untuk dapat diandalkan 
                        dan tepat waktu untuk mempertahankan status yang baik. Kegagalan untuk mempertahankan 
                        status yang baik dapat mengakibatkan pemutusan hubungan kerja.
                        </p>
                    </div>
                </div>
            </section>

            <!--==================== STEPS ====================-->
            <section class="steps section container">
                <div class="steps__bg">
                    <h2 class="section__title-center steps__title">
                         Form <br> Volunteer  
                    </h2>

                    <div class="steps__container">
                    <form name="formVolunteer" method="POST" action="cvolunteer.php">
                        <div class="steps__card">
                            <div class="steps__card-number">Personal Data</div>
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
                                    <label for="address">Address</label>
                                    <input id="address" type="text"   name="address" />
                                </div>
                            </div>
                            <br>
                            <div class="steps__card-number">Please answer the following questions and check the required boxes</div>
                            <h3 class="steps__card-title"></h3>
                            <p class="steps__card-description">
                            </p>
                            <div class="colums">
                            </div>
                            <div class="question">
                            <label>Apakah anda berusia 18 tahun keatas?.*</label>
                            <div class="question-answer">
                                <div>
                                <input type="radio" value=">18 tahun" id="age" name="age"/>
                                <label for="age" class="radio"><span>Yes</span></label>
                                </div>
                            </div>
                            <label>Apakah anda memiliki transportasi sendiri?.*</label>
                            <div class="question-answer">
                                <div>
                                <input type="radio" value="Yes" id="trans_1" name="trans"/>
                                <label for="trans_1" class="radio"><span>Yes</span></label>
                                </div>
                                <div>
                                <input  type="radio" value="No" id="trans_2" name="trans"/>
                                <label for="trans_2" class="radio"><span>No</span></label>
                                </div>
                            </div>
                            <label>Kehadiran adalah hal yang sangat penting dan diperlukan.*</label>
                            <div class="question-answer">
                                <div>
                                <input type="radio" value="Accept" id="dicipline" name="dicipline"/>
                                <label for="dicipline" class="radio"><span>Saya mengerti bahwa saya diharuskan bekerja 
                                    8 jam sehari, satu hari dalam seminggu dan hari-hari yang hilang dapat menyebabkan 
                                    status tidak memuaskan.</span></label>
                                </div>
                            </div>
                            <div class="item">
                                <label for="reason">Dalam satu paragraf, jelaskan mengapa Anda ingin menjadi sukarelawan.*</label>
                                <input id="reason" type="textarea"   name="reason" />
                            </div>
                            <div class="week">
                            <div class="question">
                                <label>Silakan pilih hari-hari yang Anda inginkan untuk menjadi sukarelawan</label>
                                <div class="question-answer">
                                <div>
                                    <input type="radio" value="Minggu" id="day_1" name="day"/>
                                    <label for="day_1" class="radio"><span>Minggu</span></label>
                                </div>
                                <div>
                                    <input  type="radio" value="Senin" id="day_2" name="day"/>
                                    <label for="day_2" class="radio"><span>Senin</span></label>
                                </div>
                                <div>
                                    <input  type="radio" value="Selasa" id="day_3" name="day"/>
                                    <label for="day_3" class="radio"><span>Selasa</span></label>
                                </div>
                                <div>
                                    <input  type="radio" value="Rabu" id="day_4" name="day"/>
                                    <label for="day_4" class="radio"><span>Rabu</span></label>
                                </div>
                                <div>
                                    <input  type="radio" value="Kamis" id="day_5" name="day"/>
                                    <label for="day_5" class="radio"><span>Kamis</span></label>
                                </div>
                                <div>
                                    <input  type="radio" value="Jumat" id="day_6" name="day"/>
                                    <label for="day_6" class="radio"><span>Jumat</span></label>
                                </div>
                                <div>
                                    <input  type="radio" value="Sabtu" id="day_7" name="day"/>
                                    <label for="day_7" class="radio"><span>Sabtu</span></label>
                                </div>
                                </div>
                            </div>
                            </div>
                            <div class="item">
                                <label for="organisasi">Apakah anda pernah menjadi anggota relawan di organisasi lain? Harap cantumkan keanggotaan masa lalu atau sekarang.*</label>
                                <input id="organisasi" type="textarea"   name="organisasi" />
                            </div>
                            <div>
                            <div class="item">
                                <label for="experience">Silakan cantumkan pengalaman Anda dengan perawatan hewan, eksotis atau domestik, termasuk hewan peliharaan.*</label>
                                <input id="experience" type="textarea"   name="experience" />
                            </div>
                            <div>

                        <br>
                        </div>
                        <div class="btn-block">
                        <button type="order" href="/">Submit</button>
                        <p class="steps__card-description">
                            <br>*When you click submit, your form will be processed.
                        </p>
                        </div>
                        </form>     
            
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

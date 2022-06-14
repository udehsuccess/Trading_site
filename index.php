<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome To Trade Centre</title>
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <!--==================== HEADER ====================-->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="nav__logo">LOGO__SECTION</a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list grid">
                    <li class="nav__item">
                        <a href="#home" class="nav__link active-link">
                            <i class="uil uil-estate nav__icon"></i> Home
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="about.php" class="nav__link">
                            <i class="uil uil-user nav__icon"></i> About
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="teams.php" class="nav__link">
                            <i class="uil uil-file-alt nav__icon"></i> Team
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="faq.php" class="nav__link">
                            <i class="uil uil-scenery nav__icon"></i> Faq
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="contact.php" class="nav__link">
                            <i class="uil uil-scenery nav__icon"></i> ContactUs
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#contact" class="nav__link">
                            <i class="uil uil-scenery nav__icon"></i> Register
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#contact" class="nav__link">
                            <i class="uil uil-scenery nav__icon"></i> Login
                        </a>
                    </li>
                    <li class="nav__item">
                        <div id="google_translate_element" class="google"></div>

                        <script type="text/javascript">
                        function googleTranslateElementInit() {
                            new google.translate.TranslateElement({
                                pageLanguage: 'en'
                            }, 'google_translate_element');
                        }
                        </script>

                        <script type="text/javascript"
                            src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

                    </li>
                </ul>
                <i class="uil uil-times nav__close" id="nav-close"></i>
            </div>
            <div class="nav__btns">

                <!-- Theme change button -->
                <i class="uil uil-moon change-theme" id="theme-button"></i>

                <div class="nav__toggle" id="nav-toggle">
                    <i class="uil uil-apps"></i>
                </div>
            </div>
        </nav>
    </header>

    <!--==================== MAIN ====================-->
    <main class="main">
        <!--==================== HOME ====================-->
        <section class="home section" id="home">
            <div class="home__container container grid">
                <div class="home__content grid">
                    <div class="home__social">
                        <a href="https://t.me/Vharrison" target="_blank" class="home__social-icon">
                            <i class="uil uil-telegram"></i>
                        </a>
                        <a class="home__social-icon" href="https://www.linkedin.com/in/udeh-success-56569b186">
                            <i class="uil uil-facebook-messenger-alt"></i>
                        </a>
                        <a href="https://api.whatsapp.com/send?phone=+19032512542" target="_blank"
                            class="home__social-icon">
                            <i class="uil uil-whatsapp"></i>
                        </a>
                    </div>


                    <div class="home_img slider">
                        <h1>Wonderful Coins</h1>

                        <p>High Profile Coins and Tokens.</p>

                        <section class="carousel" aria-label="Gallery">
                            <ol class="carousel__viewport">
                                <li id="carousel__slide1" tabindex="0" class="carousel__slide">
                                    <div class="carousel__snapper"><img src="assets/img/hand_coin.jpg" width="100%"
                                            height="100%" alt="Ethereum Gold">
                                        <a href="#carousel__slide4" class="carousel__prev">Go to last slide</a>
                                        <a href="#carousel__slide2" class="carousel__next">Go to next slide</a>
                                    </div>
                                </li>
                                <li id="carousel__slide2" tabindex="0" class="carousel__slide">
                                    <div class="carousel__snapper"><img src="assets/img/gallery.jpg" width="100%"
                                            height="100%" alt="Bitcoin View"></div>
                                    <a href="#carousel__slide1" class="carousel__prev">Go to previous slide</a>
                                    <a href="#carousel__slide3" class="carousel__next">Go to next slide</a>
                                </li>
                                <li id="carousel__slide3" tabindex="0" class="carousel__slide">
                                    <div class="carousel__snapper"><img src="assets/img/magic.jpg" width="100%"
                                            height="100%" alt="Ripple World"></div>
                                    <a href="#carousel__slide2" class="carousel__prev">Go to previous slide</a>
                                    <a href="#carousel__slide4" class="carousel__next">Go to next slide</a>
                                </li>
                                <li id="carousel__slide4" tabindex="0" class="carousel__slide">
                                    <div class="carousel__snapper"><img src="assets/img/classic.jpg" width="100%"
                                            height="100%" alt="Classic Images"></div>
                                    <a href="#carousel__slide3" class="carousel__prev">Go to previous slide</a>
                                    <a href="#carousel__slide1" class="carousel__next">Go to first slide</a>
                                </li>
                            </ol>

                        </section>
                    </div>

                </div>
            </div>
        </section>
    </main>


    <!--==================== ABOUT ====================-->
    <section class="about section" id="about">
        <!-- <h1 class="section__title">About Me</h1> -->
        <span class="section__subtitle">
            <h2>Digital Investment And Asset Management Is Driving The World.</h2>
        </span>

        <div class="about__container container grid">
            <img src="assets/img/stock_market.jpg" width="100%" height="100%" class="about__img"
                alt="Stock Markets Companies">

            <div class="about__data">
                <p class="about__description">
                    The Trading and Investment atmosphere need to create financial legacies that will
                    with stand the test of time in the crypto world. As an entity with offer the best assets managers
                    and investors have access to their future both current and present.
                </p>


                <div class="about__buttons">
                    <!-- CV letter -->
                    <a href="" class="button button--flex">
                        Register<i class="uil uil-download-alt button__icon"></i>
                    </a>
                </div>
            </div>


        </div>
        </div>
    </section>

    <!-- =====================Empowering the Client-========== -->
    <section class="skills section" id="skills">
        <h2 class="section__title">Empowering Traders</h2>
        <p class="section__subtitle">Bridge the gap between your trading skills and knowledge with our Crytpocurrency
            Market.<br />
            Our learning resources helped millions of traders to trade and save for the future and to get a hold on
            their trading and saving journey.</p>
        <div class="skills__container container grid">
            <div class="skills__content skills__open">
                <div class="skills__header">
                    <div>
                        <img src="assets/img/Mining SVG.jpg" class="skills__icon" alt="">
                        <h1 class="skills__titles">Mining</h1>
                        <span class="skills__subtitle">Cryptoreservefx mining software and hardware utilize <br> cutting
                            edge technology that automatically switches <br> to mine the most profitable coin. Mining
                            <br> multiple cryptocurrencies provides Cryptoreservefx <br> with a stable cash flow,
                            allowing us to <br> share daily profits with our participants.</span>
                    </div>
                </div>
            </div>

            <div class="skills__content skills__close">
                <div class="skills__header">
                    <div>
                        <img src="assets/img/trading-svgrepo-com.svg" class="skills__icon" alt="">
                        <h1 class="skills__titles">Trading</h1>
                        <span class="skills__subtitle">Cryptoreservefx traders have developed and are using <br> a
                            highly effective trading strategy along with analytical <br> software that supports our
                            decision-making process. <br> This strategy employs the arbitrage principle that exploits
                            <br> price differences of identical financial assets on different markets.</span>
                    </div>
                </div>
            </div>
        </div>



    </section>

    <!--==================== Companies ====================-->
    <section class="portfolio section" id="portfolio">
        <h2 class="section__title">Our Dreams</h2>
        <span class="section__subtitle">Direction and vision of the company.</span>

        <div class="portfolio__container container swiper-container">
            <div class="swiper-wrapper">
                <!--==================== company 1====================-->
                <div class="portfolio__content grid swiper-slide">
                    <img src="assets/img/people-trading-svgrepo-com.svg" width="100%" height="100%" alt=""
                        class="portfolio__img">

                    <div class="portfolio__data">
                        <h3 class="portfolio__title">Digital Assets</h3>
                        <p class="portfolio__description">Digital assets, like bitcoin, are an <br> emerging asset class
                            for investors. With <br> a return profile similar to venture <br> capital, early investors
                            stand to achieve <br> the highest returns. Our digital asset <br> fund offers investors
                            exposure to bitcoin <br> and other digital assets.</p>
                    </div>
                </div>
                <!--==================== company 2====================-->
                <div class="portfolio__content grid swiper-slide">
                    <img src="assets/img/mining-svgrepo-com.svg" width="100%" height="100%" alt=""
                        class="portfolio__img">

                    <div class="portfolio__data">
                        <h3 class="portfolio__title">Future Assets</h3>
                        <p class="portfolio__description">We are a member of the FORTS fast-moving section of <br> the
                            Moscow Stock Exchange, where trading in <br> futures and options contracts is taking place.
                            <br> The organizer of trading on the futures market is <br> Open Joint Stock Company Moscow
                            Stock Exchange.
                        </p>
                    </div>
                </div>
                <!--==================== company 3====================-->
                <div class="portfolio__content grid swiper-slide">
                    <img src="assets/img/businessman.svg" width="100%" height="100%" alt="" class="portfolio__img">

                    <div class="portfolio__data">
                        <h3 class="portfolio__title">Digital Trading</h3>
                        <p class="portfolio__description">Website adaptable to all services, with ui
                            components and animated interactions.</p>
                    </div>
                </div>
            </div>

            <!-- Add Arrows -->
            <div class="swiper-button-next">
                <i class="uil uil-angle-right-b swiper-portfolio-icon"></i>
            </div>
            <div class="swiper-button-prev">
                <i class="uil uil-angle-left-b swiper-portfolio-icon"></i>
            </div>

            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <!--===================== Our focus=============== -->
    <section class="services section" id="services">
        <h1 class="section__title">price Plan</h1>
        <span class="section__subtitle">You Can Subscribe</span>

        <div class="price-table-wrapper">
            <div class="pricing-table">
                <h2 class="pricing-table__header">- BASIC PLAN -</h2>
                <h3 class="pricing-table__price">$100 - $999</h3>
                <a target="_blank" class="pricing-table__button" href="">
                    Join Now!
                </a>
                <ul class="pricing-table__list">
                    <li>15 day free trial</li>
                    <li>get 3% profit after 24 hours</li>
                    <li>3% referral Bonus</li>
                    <li>24 hour support</li>
                </ul>
            </div>
            <div class="pricing-table featured-table">
                <h2 class="pricing-table__header">- REGULAR PLAN-</h2>
                <h3 class="pricing-table__price">$1000 - $4999</h3>
                <a target="_blank" class="pricing-table__button" href="http://www.digimadmedia.com">
                    Join Now!
                </a>
                <ul class="pricing-table__list">
                    <li>5 day free trial</li>
                    <li>get 5% profit after 24 hours</li>
                    <li>5% referral Bonus</li>
                    <li>24 hour support</li>
                </ul>
            </div>
            <div class="pricing-table">
                <h2 class="pricing-table__header">- PREMIUM PLAN -</h2>
                <h3 class="pricing-table__price">$5000 - 9999</h3>
                <a target="_blank" class="pricing-table__button" href="http://www.digimadmedia.com">
                    Join Now!
                </a>
                <ul class="pricing-table__list">
                    <li>No day free trial</li>
                    <li>get 7% profit after 24 hours</li>
                    <li>7% discount</li>
                    <li>24 hour support</li>
                </ul>
            </div>
            <div class="pricing-table">
                <h2 class="pricing-table__header">- VIP PLAN -</h2>
                <h3 class="pricing-table__price">$10000 - Above</h3>
                <a target="_blank" class="pricing-table__button" href="http://www.digimadmedia.com">
                    Join Now!
                </a>
                <ul class="pricing-table__list">
                    <li>No day free trial</li>
                    <li>get 10% profit after 24 hours</li>
                    <li>10% discount</li>
                    <li>24 hour support</li>
                </ul>
            </div>
        </div>

        </div>

    </section>

    <!--==================== PROJECT IN MIND ====================-->
    <section class="project section">
        <div class="project__bg">
            <div class="project__container container grid">
                <div class="project__data">
                    <h2 class="project__title">All about our Company</h2>
                    <p class="project__description">Short explanation about our day to day activities.</p>
                    <a href="" class="button button--flex button--white">
                        Contact Me
                        <i class="uil uil-message project__icon button__icon"></i>
                    </a>
                </div>

                <video width="320" height="240" controls class="project__img">
                    <source src="assets/vids/VID-20220411-WA0001_001.mp4" type="video/mp4">
                </video>
            </div>
        </div>

    </section>

    <!--==================== TESTIMONIAL ====================-->
    <section class="testimonial section">
        <h2 class="section__title">Testimonial</h2>
        <span class="section__subtitle">My client saying</span>

        <div class="testimonial__container container swiper-container">
            <div class="swiper-wrapper">
                <!--==================== TESTIMONIAL 1====================-->
                <div class="testimonial__content swiper-slide">
                    <div class="testimonial__data">
                        <div class="testimonial__header">
                            <img src="assets/img/Testimony.png" alt="" class="testimonial__img">

                            <div>
                                <h3 class="testimonial__name">#Christina-8675</h3>
                                <span class="testimonial__client">Happy Clients</span>
                            </div>
                        </div>

                        <div>
                            <i class="uil uil-star testimonial__icon-star"></i>
                            <i class="uil uil-star testimonial__icon-star"></i>
                            <i class="uil uil-star testimonial__icon-star"></i>
                            <i class="uil uil-star testimonial__icon-star"></i>
                            <i class="uil uil-star testimonial__icon-star"></i>
                        </div>
                    </div>
                    <p class="testimonial__description">
                        Cryptoreservefx is one of the most trustworthy and <br> reliable crypto exchange platforms on
                        the web. It allows <br> users to purchase cryptos with fiat currencies, and is also quite <br>
                        simple to use, too. This platform isn't available in all countries.
                    </p>
                </div>

                <!--==================== TESTIMONIAL 2====================-->
                <div class="testimonial__content swiper-slide">
                    <div class="testimonial__data">
                        <div class="testimonial__header">
                            <img src="assets/img/testimonial1.jpg" alt="" class="testimonial__img">

                            <div>
                                <h3 class="testimonial__name">#lovedancer</h3>
                                <span class="testimonial__client">Client</span>
                            </div>
                        </div>

                        <div>
                            <i class="uil uil-star testimonial__icon-star"></i>
                            <i class="uil uil-star testimonial__icon-star"></i>
                            <i class="uil uil-star testimonial__icon-star"></i>
                            <i class="uil uil-star testimonial__icon-star"></i>
                            <i class="uil uil-star testimonial__icon-star"></i>
                        </div>
                    </div>
                    <p class="testimonial__description">Very very nice. Answered all of my questions. First time buyer
                        here. <br> They are very nice. I will definitely be buying again, Very pleasant and meticulous.
                        Made the transaction feel very secure!
                    </p>
                </div>

                <!--==================== TESTIMONIAL 3====================-->
                <div class="testimonial__content swiper-slide">
                    <div class="testimonial__data">
                        <div class="testimonial__header">
                            <img src="assets/img/testimonial3.jpg" alt="" class="testimonial__img">

                            <div>
                                <h3 class="testimonial__name">Lukas James</h3>
                                <span class="testimonial__client">Client</span>
                            </div>
                        </div>

                        <div>
                            <i class="uil uil-star testimonial__icon-star"></i>
                            <i class="uil uil-star testimonial__icon-star"></i>
                            <i class="uil uil-star testimonial__icon-star"></i>
                            <i class="uil uil-star testimonial__icon-star"></i>
                            <i class="uil uil-star testimonial__icon-star"></i>
                        </div>
                    </div>
                    <p class="testimonial__description">I am new to Bitcoin and you did a great job helping me purchase
                        Bitcoin <br> step by step. I would definitely recommend him, Super <br> patient and gets you
                        through step by step. Was my first time purchasing, <br> and I would highly recommend this guy
                        to any newbies like me.
                    </p>
                </div>
                <!--==================== TESTIMONIAL 3====================-->
                <div class="testimonial__content swiper-slide">
                    <div class="testimonial__data">
                        <div class="testimonial__header">
                            <img src="assets/img/testimonial3.jpg" alt="" class="testimonial__img">

                            <div>
                                <h3 class="testimonial__name">#userc2accf0ff</h3>
                                <span class="testimonial__client">Client</span>
                            </div>
                        </div>

                        <div>
                            <i class="uil uil-star testimonial__icon-star"></i>
                            <i class="uil uil-star testimonial__icon-star"></i>
                            <i class="uil uil-star testimonial__icon-star"></i>
                            <i class="uil uil-star testimonial__icon-star"></i>
                            <i class="uil uil-star testimonial__icon-star"></i>
                        </div>
                    </div>
                    <p class="testimonial__description">Super patient and gets you through step by step. Was my <br>
                        first time purchasing, and I would highly recommend this guy to <br> any newbies like me, at
                        first reading the terms seemed <br> intimidating but the seller was super patient <br> and nice
                        with me being a newbie!
                    </p>
                </div>
                <div class="testimonial__content swiper-slide">
                    <div class="testimonial__data">
                        <div class="testimonial__header">
                            <img src="assets/img/testimonial3.jpg" alt="" class="testimonial__img">

                            <div>
                                <h3 class="testimonial__name">#johnnydill17</h3>
                                <span class="testimonial__client">Client</span>
                            </div>
                        </div>

                        <div>
                            <i class="uil uil-star testimonial__icon-star"></i>
                            <i class="uil uil-star testimonial__icon-star"></i>
                            <i class="uil uil-star testimonial__icon-star"></i>
                            <i class="uil uil-star testimonial__icon-star"></i>
                            <i class="uil uil-star testimonial__icon-star"></i>
                        </div>
                    </div>
                    <p class="testimonial__description">Friendly & fast! hands down, one of the best sellers on this
                        <br> site, easiest trade I've ever done, thank you, GREAT VENDOR. Me <br> being a first timer
                        MaineBitcoin worked with me and I'm a satisfied customer.. THANKS
                    </p>
                </div>
            </div>

            <!-- Add Pagination -->
            <div class="swiper-pagination swiper-pagination-testimonial"></div>
        </div>
    </section>

    <?php
    include_once 'footer.php';
    ?>
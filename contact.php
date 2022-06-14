<?php
// $status = "";
// $response = "";
// include('sendEmail.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="assets/img/favicon.png" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Cryptoreservefx is a investment platform which provides exceptional trading services. Join, Trade and Earn today!" />

    <meta property="og:title" content="Welcome to Cryptoreservefx" />

    <meta property="og:url" content="indexs.html" />

    <meta property="og:description"
        content="Cryptoreservefx is a investment platform which provides exceptional trading services. Join, Trade and Earn today!">

    <link rel="icon" href="assets/img/favicon.png" sizes="32x32" />
    <link rel="icon" href="assets/img/favicon.png" sizes="192x192" />
    <link rel="icon" href="assets/img/favicon.png" sizes="96x96" />
    <link rel="stylesheet" href="assets/css/contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>ContactUs</title>
</head>


<body>
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
        <nav class="nav containers">
            <a href="#" class="nav__logo">LOGO__SECTION</a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list grid">
                    <li class="nav__item">
                        <a href="index.php" class="nav__link active-link">
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
                            <i class="uil uil-file-alt nav__icon"></i>Teams
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

    <section id="contact">

        <h1 class="section-header">Contact</h1>

        <div class="contact-wrapper">

            <!-- Left contact page -->

            <form id="contact-form" class="form-horizontal" role="form">

                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="name" placeholder="NAME" name="name" value=""
                            required>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="email" class="form-control" id="email" placeholder="EMAIL" name="email" value=""
                            required>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="subject" class="form-control" id="subject" placeholder="SUBJECT" name="subject"
                            value="" required>
                    </div>
                </div>

                <textarea class="form-control" rows="5" placeholder="MESSAGE" name="message" required></textarea>

                <button class="btn btn-primary send-button" id="submit" type="submit" value="SEND">
                    <div class="alt-send-button">
                        <i class="fa fa-paper-plane"></i><span class="send-text">SEND</span>
                    </div>

                </button>

            </form>

            <!-- Left contact page -->

            <div class="direct-contact-container">

                <ul class="contact-list">
                    <li class="list-item"><i class="uil uil-map-marker"><span class="contact-text place">City,
                                State</span></i></li>

                    <!-- <li class="list-item"><i class="uil uil-phone "><span class="contact-text phone"><a
                                    href="tel:1-212-555-5555" title="Give me a call">(212) 555-2368</a></span></i></li> -->

                    <li class="list-item"><i class="uil uil-envelope"><span class="contact-text gmail"><a
                                    href="mailto:#" title="Send me an email">hitmeup@gmail.com</a></span></i></li>

                </ul>

                <hr>
                <ul class="social-media-list">
                    <li><a href="https://t.me/Vharrison" target="_blank" class="contact-icon">
                            <i class="uil uil-telegram" aria-hidden="true"></i></a>
                    </li>
                    <li><a href="https://api.whatsapp.com/send?phone=+35796547690" target="_blank" class="contact-icon">
                            <i class="uil uil-whatsapp" aria-hidden="true"></i></a>
                    </li>
                    <li><a href="#" target="_blank" class="contact-icon">
                            <i class="uil uil-facebook" aria-hidden="true"></i></a>
                    </li>
                    <!-- <li><a href="#" target="_blank" class="contact-icon">
                            <i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </li> -->
                </ul>
                <hr>

                <div class="copyright">&copy; ALL OF THE RIGHTS RESERVED</div>

            </div>

        </div>

    </section>






    <!-- <script>
    document.querySelector('#contact-form').addEventListener('submit', (e) => {
        e.preventDefault();
        e.target.elements.name.value = '';
        e.target.elements.email.value = '';
        e.target.elements.message.value = '';
    });
    </script> -->

    <?php
    include_once 'footer.php';
    ?>
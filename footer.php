<?php

$currentTimeAndDate = date("l, d-m-Y, h:i:s a");
$lastSeen = date("d F Y");
$fundCode = rand(1000, 9999);
?>


<footer class="footer">
    <div class="footer-left col-md-4 col-sm-6">
        <p class="about">
            <span> About the company</span>
            Company information: The customer/investor is entering an <br> agreement with MCO 31 Beeston Road,
            Nottingham and 49 Bridgeway Centre, <br> Nottingham. All investment and ancillary services are offered
            via this entity
        </p>
        <div class="icons">
            <a href="#"><i class="uil uil-facebook"></i></a>
            <a href="https://api.whatsapp.com/send?phone=+35796547690"><i class="uil uil-whatsapp"></i></a>
            <a href="https://t.me/Vharrison"><i class="uil uil-telegram"></i></a>
        </div>
    </div>
    <div class="footer-center col-md-4 col-sm-6">
        <div>
            <i class="fa fa-map-marker"></i>
            <p>31 Beeston Road, Nottingham and 49 Bridgeway Centre, <br> Nottingham: Licence No: 32_TRS_812.</p>
        </div>
        <!-- <div>
            <i class="fa fa-phone"></i>
            <p> (+00) 0000 000 000</p>
        </div> -->
        <div>
            <i class="fa fa-envelope"></i>
            <p><a href="#"> office@company.com</a></p>
        </div>
    </div>
    <div class="footer-right col-md-4 col-sm-6">
        <h2> Company<span> logo</span></h2>
        <p class="menu">
            <a href="index.php"> Home</a> |
            <a href="about.php"> About</a> |
            <a href="teams.php"> Our Team</a> |
            <a href="faq.php"> Faq</a> |
            <a href="contact.php"> Contact</a>
        </p>
        <p class="name"> Company Name &copy; <?php echo $lastSeen; ?></p>
    </div>
</footer>


<script src="assets/script/swiper-bundle.min.js"></script>
<script src="assets/script/javascript.js"></script>
</body>

</html>
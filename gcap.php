  <?php

  
// grab recaptcha library
require_once "recaptchalib.php";
 

 // your secret key
$secret = "6LeaPjcUAAAAAKkayvQT8CKX5FABmhwCB0ze6Xx4"; // Secret key of google account
 
// empty response
$response = null;
 
// check secret key
$reCaptcha = new ReCaptcha($secret);
 
 // if submitted check response
if ($_POST["g-recaptcha-response"]) {
    $response = $reCaptcha->verifyResponse(
        $_SERVER["REMOTE_ADDR"],
        $_POST["g-recaptcha-response"]
    );
}

if ($response != null && $response->success) {
	echo "good";
}else{
	echo "bad";
	
}
   

  ?>
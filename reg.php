
<?php
session_start();

$fullname=$_POST['name'];
$email=$_POST['email'];
$username=$_POST['username'];
$pass = $_POST['password2'];
$encodepass = base64_encode($pass);

//echo $_POST['g-recaptcha-response'];

// grab recaptcha library
require_once "recaptchalib.php";
 
//For connect to mongodb
$m = new MongoClient('mongodb://admin:2765@ds040017.mlab.com:40017/test_base');

	// select a database
$db = $m->test_base;
$collection = $db->collect_1;

/////////////////////////////////////////////////////////////////////

$cursoremail = $collection->find(array("user_email" => $email));
$cursoruser  = $collection->find(array("username" => $username));
//iterate cursor to display title of documentsdocunts
$numdocemail = $cursoremail->count();
$numdocuser  = $cursoruser->count(); 
 
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
	
	if($numdocemail > 0 || $numdocuser > 0) {
		$_SESSION['foundaccount'] = "Account Already Exists!";
		header('Location: signup.php');
	}else{
		
	$document = array( 
		  "name" => $fullname, 
		  "email" => $email, 
		  "username" => $username,
		  "password" => $encodepass
		  );
		   $collection->insert($document);
	}	
	
	 
	   
//	 $cursor = $collection->find(array("user_name" => "leonid"));
	   // iterate cursor to display title of documents
	
	// echo "good";
}else{
	
	// echo "bad";
	
	$_SESSION['badcap'] ='please check recaptcha!';
	header('Location: signup.php');
	
}
?>

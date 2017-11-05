<?php
session_start();

$fullname = $_POST['name'];
$email = $_POST['email'];
$sub = $_POST['subject'];
$msg = $_POST['message'];

if(preg_match('/^[A-Za-z0-9*]{5,5}$/', $msg)) {
	
	echo "pass char limit!";

}else{
	$_SESSION['errormsg'] = "You are under over your character limit";
	header('Location: contact.php');
	
	echo "does not pass";
}
	

//For connect to mongodb
$m = new MongoClient('mongodb://admin:2765@ds040017.mlab.com:40017/test_base');

// select a database
$db = $m->test_base;
$collection = $db->collect_1;
	
$document = array( 
      "user_name" => $fullname, 
      "user_email" => $email, 
      "subject" => $sub ,
      "message" => $msg
     );
	
 $collection->insert($document);
 
   
 $cursor = $collection->find(array("user_name" => "leonid"));
   // iterate cursor to display title of documents



?>
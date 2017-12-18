<?php

session_start();

$usercredential = $_POST['userlog'];
$userpassword   = $_POST['password'];


//For connect to mongodb
$m = new MongoClient('mongodb://admin:2765@ds040017.mlab.com:40017/test_base');

// select a database
$db = $m->test_base;

$collection = $db->collect_1;

/////////////////////////////////////////////////////////////////////

$cursoremail = $collection->find(array("email" => $usercredential));
$cursoruser  = $collection->find(array("username" => $usercredential));

//iterate cursor to display title of documentsdocunts

$numdocemail = $cursoremail->count();
$numdocuser  = $cursoruser->count();

if($numdocemail == 1 || $numdocuser == 1) {

//	echo "user found";

	$cursor = $collection->find(array("email" => $usercredential));
	
	$cursor2 = $collection->find(array("username" => $usercredential));
	
	foreach($cursor as $document) {
		$name = $document["name"];
		$user_email = $document["email"];
		$username = $document["username"];
		$passOut = $document["password"];
		
	}	
	
	foreach($cursor2 as $document) {
		$name = $document["name"];
		$user_email = $document["email"];
		$username = $document["username"];
		$passOut = $document["password"];
	}
			
	echo "<br>";
	$ValPass = base64_decode($passOut);
		
	echo "<br>";
	echo "<br>";
	echo "<br>";

	if($user_email == $usercredential || $username == $usercredential && $ValPass == $userpassword){
	
		
		$_SESSION['logmein'] = $name;	
		header('Location: page/index.php');
    
	}else{
		$_SESSION['badcredential'] = "Check username/email or password";
		header('Location: login.php');
	}		
	
	}else{
		
		$_SESSION['badcredential'] = "Check username/email or password";
		header('location: login.php');
//		echo "No account";	
	}
	
?>


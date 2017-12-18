<?php

session_start();

$usercredential = $_POST['userlog'];
$userpassword   = $_POST['password'];


//Connect to mongodb
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
			
	$ValPass = base64_decode($passOut);
	
	if($user_email == $usercredential || $username == $usercredential){
		
		$EorUfound = 1;
	
		if($ValPass == $userpassword) {
			echo "PS good";
			$passgood = 1;
		}else {
			echo "fail";
		}

		if($EorUfound && $passgood ==1 ){
			
			echo "Log MI IN!";
			$_SESSION['logmein'] = $username;

			header('Location: page/index.php');
			
		}else{
			echo "DONT login";
			
			$_SESSION['badcredential'] = "Check username/email or password";
			header('Location: login.php');
		} 
		
	}else{	
	   //$_SESSION['badcredential'] = "Check username/email or password";
		// header('Location: login.php');
		} 	
		
}else{
	$_SESSION['badcredential'] = "Pleace create an account  <a href = 'signup.php'>Clicik here</a> to create account ";
	header('Location: login.php');
		
	echo  "No account";
	}
	
?>


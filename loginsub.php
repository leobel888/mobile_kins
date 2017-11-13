<?php

$usercredential = $_POST['userlog'];
$userpassword   = $_POST['pass'];


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
	echo "user found";

}else{
	echo "No account";
	
} 


?>
<?php

$about = $_POST['aboutsend'];
$colortype = $_POST['colortype'];
$usercred = $_POST['valcred'];


//Connect to mongodb
$m = new MongoClient('mongodb://admin:2765@ds040017.mlab.com:40017/test_base');

// select a database
$db = $m->test_base;
$collection = $db->collect_1;
//////////////////////////////////

$documentobdata = array( 
	"usercredential" => $usercred, 
	"selectcolor" => $colortype, 
	"userabout" => $about
		  );
		   
$collection->insert($documentobdata);

?>

<div class="row">
	<div class="12u">
	<!-- Image -->
		<section class="box">

			<h3>color type</h3>
			<h4><?php echo $colortype;?> 
			<input type="color" value="<?php echo $colortype ?>" placeholder="color" disabled /></h4>
									
			<h4>About</h4>
			<h4><?php echo $about;?></h4>
		
		</section>
	</div>
</div>
				
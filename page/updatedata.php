<?php

$about = $_POST['message'];
$colortype = $_POST['color'];
$usercred = $_POST['valcred'];
$filename = basename($_FILES["filepick"]['name']);
//echo $shownamepic=$_FILES["picfile"]['name'];


///////////////////////////////////////////////////////////////////////////////////////////////
if(isset($_FILES["filepick"]["type"]))
{


////////////////////////////////////////////////////////////////////////////////////



//Connect to mongodb
$m = new MongoClient('mongodb://admin:2765@ds040017.mlab.com:40017/test_base');

// select a database
$db = $m->test_base;
$collection = $db->collect_1;
//////////////////////////////////

$documentobdata = array( 
	"usercredential" => $usercred, 
	"selectcolor" => $colortype, 
	"userabout" => $about,
	"userpicture" => $filename
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
			<p><?php echo $about;?></p>
			
			<h4> picture data</h4>
			
			<?PHP
			
			$validextensions = array("jpeg", "jpg", "png");
$temporary = explode(".", $_FILES["filepick"]["name"]);
$file_extension = end($temporary);
if ((($_FILES["filepick"]["type"] == "image/png") || ($_FILES["filepick"]["type"] == "image/jpg") || ($_FILES["filepick"]["type"] == "image/jpeg")
) && ($_FILES["filepick"]["size"] < 100000)//Approx. 100kb files can be uploaded.
&& in_array($file_extension, $validextensions)) {
if ($_FILES["filepick"]["error"] > 0)
{
echo "Return Code: " . $_FILES["filepick"]["error"] . "<br/><br/>";
}
else
{
if (file_exists("upload/" . $_FILES["filepick"]["name"])) {
echo $_FILES["filepick"]["name"] . " <span id='invalid'><b>already exists.</b></span> ";
}
else
{
$sourcePath = $_FILES['filepick']['tmp_name']; // Storing source path of the file in a variable
$targetPath = "upload/".$_FILES['filepick']['name']; // Target path where file is to be stored
move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
echo "<span id='success'>Image Uploaded Successfully...!!</span><br/>";
echo "<br/><b>File Name:</b> " . $_FILES["filepick"]["name"] . "<br>";
echo "<b>Type:</b> " . $_FILES["filepick"]["type"] . "<br>";
echo "<b>Size:</b> " . ($_FILES["filepick"]["size"] / 1024) . " kB<br>";
echo "<b>Temp file:</b> " . $_FILES["filepick"]["tmp_name"] . "<br>";
}
}
}
else
{
echo "<span id='invalid'>***Invalid file Size or Type or no image***<span>";
}
			
			
			?>
		
		</section>
	</div>
</div>


<?PHP
} 
?>
				
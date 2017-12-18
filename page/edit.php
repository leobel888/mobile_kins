<?php

echo $valUser=$_GET['val']; 

?>

<!DOCTYPE HTML>
<!--
	Alpha by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Elements - Alpha by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="../assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	</head>
	<body>
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<h1><a href="index.php">Alpha</a> by HTML5 UP</h1>
					<nav id="nav">
						<ul>
							<li><a href="index.php">Home</a></li>
							<li>
								<a href="#" class="icon fa-angle-down">Layouts</a>
								<ul>
									<li><a href="generic.html">Generic</a></li>
									<li><a href="contact.php">Contact</a></li>
									<li><a href="elements.html">Elements</a></li>
									<li>
										<a href="#">Submenu</a>
										<ul>
											<li><a href="#">Option One</a></li>
											<li><a href="#">Option Two</a></li>
											<li><a href="#">Option Three</a></li>
											<li><a href="#">Option Four</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li><a href="reg.php" class="button">Sign Up</a></li>
						</ul>
					</nav>
				</header>

			<!-- Main -->
				<section id="main" class="container">
					<header>
						<h2>Elements</h2>
						<p>Just an assorted selection of elements.</p>
					</header>

					<div class="row">
						<div class="12u">

							<!-- Form -->
								<section class="box">
									<h3>Form</h3>
									<form method="post" id="idForm" action="#">
										<div class="row uniform 50%">
											<div class="6u 12u(mobilep)">
												<input type="file" name="file" id="file" value="" placeholder="file" />
											</div>
											<div class="6u 12u(mobilep)">
												<input type="color" name="color" id="color" value="" placeholder="color" />
											</div>
										</div>
										
										
										<div class="row uniform 50%">
											<div class="12u">
												<textarea name="message" id="message" placeholder="Enter for about me" rows="6"></textarea>
											</div>
										</div>
										<div class="row uniform">
											
											<div class="12u">
												<ul class="actions">
													<li><input type="submit" value="Submit" /></li>
													<li><input type="reset" value="Reset" class="alt" /></li>
												</ul>
											</div>
										</div>
									</form>

									<hr />
							
								</section>

						</div>
					</div>
					
<script> 

$(document).ready(function(){
					
	$("#idForm").submit(function(e) {	
	
	var valUser = "<?php echo $valUser; ?>";
	var msg=$('#message').val();
	var color=$('#color').val();
	
	var poststr="aboutsend="+msg+"&colortype="+color+"&valcred="+valUser;
	
	alert("about  "+msg+" color type "+color);
					
	$.ajax({
		type: "POST",
		url:"updatedata.php",
		data: poststr, //serializes tye form's elements
		success: function(data)
		{
			// aletr cmntdwn; //show response from the php script.
			document.getElementById("stuff").innerHTML=data;
		}
		});

	e.preventDefault(); //avoid to execute the actula submit of the form
		return false;
})
					
});
</script>

	<div id="stuff"></div> 

</section>	
	
	</body>
</html>
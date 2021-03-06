  <?php

session_start();

if(isset($_SESSION['logmein'])){
	
	echo $_SESSION['logmein'];
	$username = $_SESSION['logmein'];
	
}elseif($_SESSION['logmein'] == null){
	unset($_SESSION['logmein']);
	
}
	
//	header("Location: ../login.php");
	

//Connect to mongodb
$m = new MongoClient('mongodb://admin:2765@ds040017.mlab.com:40017/test_base');

// select a database
$db = $m->test_base;

$collection = $db->collect_1;

$cursoruser = $collection->find(array("username" =>$_SESSION['logmein']));

$cursoruserdata = $collection->find(array("usercredential" =>$_SESSION['logmein']));

foreach ($cursoruser as $row){
	$userfulname = $row['name'];
	$useremail = $row['email'];
	$userpic = $row['userpicture'];
}

foreach ($cursoruserdata as $row){
	$selectcolor = $row['selectcolor'];
	$userabout = $row['userabout'];
	$userpic = $row['userpicture'];
}


if($_SESSION['logmein'] == "leobel") {
	$color = "red";
}elseif($_SESSION['logmein'] == "leos888") {
	$color = "green"; 
	
}else{	


}

 ?>


<!DOCTYPE HTML>
<!--
	Alpha by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->

<html>
	<head>
		<title>Alpha by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="../assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	
	<style>
	
	body {
		background-color: <?php echo $selectcolor; ?>
	}
	
	#banner {
    background-attachment: scroll,	fixed;
    background-color: #ab1717;
    background-image: url(images/overlay.png), url(upload/<?php echo $userpic;?>);
    background-position: top left,	center center;
    background-repeat: repeat,	no-repeat;
    background-size: auto,	cover;
    color: #fff;
    padding: 12em 0 20em 0;
    text-align: center;
}
	
	</style>
	
	<body class="landing">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header" class="alt">
					<h1><a href="index.php">Alpha</a> by HTML5 UP</h1>
					<nav id="nav">
						<ul>
							<li><a href="index.php">Home</a></li>
							<li>	
								<a href="edit.php?val=<?php echo $_SESSION['logmein']; ?>">Edit profile</a>
							<ul>
							<li><a href="logout.php">Logout</a></li>
									<li><a href="contact.php">Contact</a></li>
							
							</ul>
							</li>
							<li><a href="Logout.php" class="button">Logout</a></li>
						</ul>
					</nav>
				</header>

			<!-- Banner -->
				<section id="banner">
					<h2>Hello <?php echo $userfulname?> </h2>
					<p>Another fine responsive site template freebie by HTML5 UP. <?php echo $showdate." ".$time12;?></p>
					<ul class="actions">
						<li><a href="reg.php" class="button special">Sign Up</a></li>
						<li><a href="#" class="button">Learn More</a></li>
					</ul>
				</section>

			<!-- Main -->
				<section id="main" class="container">

					<section class="box special">
						<header class="major">
							<h2>About me
							<br />
							<p> <?php echo $userabout; ?></p>
						</header>
						<span class="image featured"><img src="../images/pic01.jpg" alt="" /></span>
					</section>

					<section class="box special features">
						<div class="features-row">
							<section>
								<span class="icon major fa-bolt accent2"></span>
								<h3>Magna etiam</h3>
								<p>Integer volutpat ante et accumsan commophasellus sed aliquam feugiat lorem aliquet ut enim rutrum phasellus iaculis accumsan dolore magna aliquam veroeros.</p>
							</section>
							<section>
								<span class="icon major fa-area-chart accent3"></span>
								<h3>Ipsum dolor</h3>
								<p>Integer volutpat ante et accumsan commophasellus sed aliquam feugiat lorem aliquet ut enim rutrum phasellus iaculis accumsan dolore magna aliquam veroeros.</p>
							</section>
						</div>
						<div class="features-row">
							<section>
								<span class="icon major fa-cloud accent4"></span>
								<h3>Sed feugiat</h3>
								<p>Integer volutpat ante et accumsan commophasellus sed aliquam feugiat lorem aliquet ut enim rutrum phasellus iaculis accumsan dolore magna aliquam veroeros.</p>
							</section>
							<section>
								<span class="icon major fa-lock accent5"></span>
								<h3>Enim phasellus</h3>
								<p>Integer volutpat ante et accumsan commophasellus sed aliquam feugiat lorem aliquet ut enim rutrum phasellus iaculis accumsan dolore magna aliquam veroeros.</p>
							</section>
						</div>
					</section>

					<div class="row">
						<div class="6u 12u(narrower)">

							<section class="box special">
								<span class="image featured"><img src="images/pic02.jpg" alt="" /></span>
								<h3>Sed lorem adipiscing</h3>
								<p>Integer volutpat ante et accumsan commophasellus sed aliquam feugiat lorem aliquet ut enim rutrum phasellus iaculis accumsan dolore magna aliquam veroeros.</p>
								<ul class="actions">
									<li><a href="#" class="button alt">Learn More</a></li>
								</ul>
							</section>

						</div>
						<div class="6u 12u(narrower)">

							<section class="box special">
								<span class="image featured"><img src="images/pic03.jpg" alt="" /></span>
								<h3>Accumsan integer</h3>
								<p>Integer volutpat ante et accumsan commophasellus sed aliquam feugiat lorem aliquet ut enim rutrum phasellus iaculis accumsan dolore magna aliquam veroeros.</p>
								<ul class="actions">
									<li><a href="#" class="button alt">Learn More</a></li>
								</ul>
							</section>

						</div>
					</div>

				</section>

			<!-- CTA -->
				<section id="cta">

					<h2>Sign up for beta access</h2>
					<p>Blandit varius ut praesent nascetur eu penatibus nisi risus faucibus nunc.</p>

					<form>
						<div class="row uniform 50%">
							<div class="8u 12u(mobilep)">
								<input type="email" name="email" id="email" placeholder="Email Address" />
							</div>
							<div class="4u 12u(mobilep)">
								<input type="submit" value="Sign Up" class="fit" />
							</div>
						</div>
					</form>

				</section>

			<!-- Footer -->
				<footer id="footer">
					<ul class="icons">
						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
						<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
						<li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</footer>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollgress.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>
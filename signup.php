<?php
session_start();

if(isset($_SESSION['badcap'])){
	$_SESSION['badcap'];
	unset($_SESSION['badcap']);
}
?>
<!DOCTYPE HTML>
<!--
	Alpha by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Contact - Alpha by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<script src='https://www.google.com/recaptcha/api.js'></script>
	</head>
	<body>
		<div id="page-wrapper">

			<!-- Header -->
				<?PHP
				include "nav.php";
				?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
	
$('#submit').click(function(){

var pass1 =$('#password1').val();
var pass2 =$('#password2').val();

if(pass1 == pass2){
	
	
	$('#showerror').empty();
}else{
	$('#showerror').empty();
	$('#showerror').append('<h2><font color="red">PASSWORD DO NOT MATCH!!</font></h2>');
	return false;
}

});

});




</script>
			<!-- Main -->
				<section id="main" class="container 75%">
					<header>
						<h2>Sign up with Us!</h2>
						<p>Tell us what you think about our little operation.</p>
					</header>
					<div class="box">
					<h3></h3>
						<form method="post" action="reg.php">
							<div class="row uniform 50%">
								<div class="6u 12u(mobilep)">
									<input type="text" pattern="^[A-Za-z.\s_-]+$" title="only letters no numbers" name="name" id="name" value="" placeholder="Name" required/>
								</div>
								<div class="6u 12u(mobilep)">
									<input type="email" name="email" id="email" value="" placeholder="Email" required/>
								</div>
							</div>
							<div class="row uniform 50%">
								<div class="12u">
									<input type="text" name="username" id="username" value="" placeholder="username" required/>
								</div>
							</div>
							
							<div class="row uniform 50%">
								<div class="12u">
									<input type="password" name="password1" id="password1" value="" placeholder="Type password" required/>
								</div>
							</div>
							
							<div class="row uniform 50%">
								<div class="12u">
									<input type="password" name="password2" id="password2" value="" placeholder="Retype password" required/>
								</div>
							</div>
							
							<div class="row uniform">
								<div class="12u">
									<ul class="actions align-center">
										<div class="g-recaptcha" name="g-recaptcha-response" data-sitekey="6LeaPjcUAAAAAORBy-V95JwjGhyi1t9pCjDNOXmr"></div>
										<li><input type="submit" id="submit" value="Send Message" /></li>
									</ul>
								</div>
							</div>
							
							<div class="row uniform">
								<div class="12u">
							<div id="showerror"></div>
							</div>
							</div>
							
						</form>
					</div>
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
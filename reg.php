<!DOCTYPE HTML>
<!--
	Alpha by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
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

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script>
		
		$(function(){
//		$( document ).ready(function() {
			
			$( "#submit" ).click(function(){
			var pass1 = $("#password").val();
			var pass2 = $("#password2").val();
//			alert("Password one:"+pass1+ " Password two: " +pass2);
			if(pass1 == pass2){
//				alert("GOOD passwords match!")
			}else{
				$( "#showerr" ).append( '<div class="row uniform 50%"> <div class="12u"><h4><font color = "red">Password do not match</font></h4></div></div>' );

//				alert("Passwords do not match!")
				return false;
			}
			})	
	
});
		</script>
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
				<section id="main" class="container 75%">
					<header>
						<h2>Register</h2>
						<p>please register to our page</p>
					</header>
					<div class="box">
						<form method="post" action="">
							<div class="row uniform 50%">
								<div class="6u 12u(mobilep)">
									<input type="text" pattern = "^[A-Za-z.\s_-1]+$" title = "only letters no numbers" name="name" id="name" value="" placeholder="Name" required/>
								</div>
								<div class="6u 12u(mobilep)">
									<input type="email" name="email" id="email" value="" placeholder="Email" required/>
								</div>
							</div>
							
							<div class="row uniform 50%">
								<div class="6u 12u(mobilep)">
									<input type="date" pattern = "^[A-Za-z.\s_-1]+$" title = "only letters no numbers" name="name" id="name" value="" placeholder="Name" required/>
								</div>
								<div class="6u 12u(mobilep)">
									<input type="text" name="username" id="username" value="" placeholder="Username" required/>
								</div>
							</div>
							
							<div id = "showerr"></div>
							
							<div class="row uniform 50%">
								<div class="12u">
									<input type="password" name="password" id="password" value="" placeholder="Type password" required/>
								</div>
							</div>
							
							<div class="row uniform 50%">
								<div class="12u">
									<input type="password" name="password2" id="password2" value="" placeholder="Re type password" required/>
								</div>
							</div>
							
							<div class="row uniform">
								<div class="12u">
									<ul class="actions align-center">
										<li><input type="submit" id = "submit" value="Sign UP" /></li>
									</ul>
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
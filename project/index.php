<?php
// Default page
$page = 'home';

// Pages
$pages = array(
	'home', 
	'about_us',
	'surgeries',
	'treatments',
	'products',
	'forms',
	'contact_us'
);

if(isset($_GET['page'])) {
	// If page exists
	if(in_array($_GET['page'], $pages)) {
		$page = $_GET['page'];
	}
} 
?>

<!doctype html>
<html lang="en" ng-app="km_app">
<head>
    <meta charset="utf-8" />

    <title>Kai Morimoto - Plastic Surgeon Spokane, WA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
	
	<link href="assets/css/fonts.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/main.css" rel="stylesheet" type="text/css" />

    <link rel="shortcut icon" href="assets/img/favicon.ico" />
</head>

<body ng-controller="KMController">
	<a class="phone-call-to-action" href="tel://1-509-838-2531"><i class="glyphicon glyphicon-earphone"></i> (509) 838 - 2531</a>

	<div class="container">
		<div class="row header">
			<div class="col-lg-12">
				<img class="logo" src="assets/img/logo-full.png" alt="Kai Morimoto MD - Plastic Surgeon">
				
				<ul>
					<li><a href="index.php?page=home">Home</a></li>
					<li><a href="index.php?page=about_us">About <p>Us</p></a></li>
					<li><a href="#">Surgeries</a></li>
					<li><a href="index.php?page=treatments">Treatments</a></li>
					<li><a href="#">Products</a></li>
					<li><a href="#">Forms</a></li>
					<li><a href="index.php?page=contact_us">Contact <p>Us</p></a></li>
				</ul>
			</div>
		</div>
	</div>

	<div class="content-container">
		<?php 
			require 'content/' . $page . '.php';
		?>
	</div>

	<div class="footer-container navbar navbar-default navbar-static-bottom">
		<div class="container">
			<div class="row">
				<div class="footer-left col-lg-6">
					<!--<div class="images col-lg-4">
					
						<a href="http://www.ama-assn.org/ama"><img src="assets/img/Amer Med Assoc Logo.png" alt="American Medical Association" height="64"></a>
						<a href="http://www.facs.org/"><img src="assets/img/American College of Surgeons.png" alt="American College of Surgeons" height="64"></a><br>
						<a href="http://www.plasticsurgery.org/"><img src="assets/img/ASPSlogo.gif" alt="American Society of Plastic Surgeons" height="64"></a><br>
						<a href="http://www.hawaii.edu/"><img src="assets/img/Uni Hawaii Logo.png" alt="University of Hawaii" width="64"></a>
					</div>
					
					<div class="col-lg-8">
						<h3>Kai Morimoto, M.D., F.A.C.S.</h3>
						<h3>Board Certified Plastic Surgeon</h3>
					</div>-->
					
					<h3>Kai Morimoto, M.D., F.A.C.S.</h3>
					<h3>Board Certified Plastic Surgeon</h3>
					
					<a href="http://www.ama-assn.org/ama"><img src="assets/img/Amer Med Assoc Logo.png" alt="American Medical Association" height="64"></a>
					<a href="http://www.facs.org/"><img src="assets/img/American College of Surgeons.png" alt="American College of Surgeons" height="64"></a>
					<a href="http://www.plasticsurgery.org/"><img src="assets/img/ASPSlogo.gif" alt="American Society of Plastic Surgeons" height="64"></a>
					<a href="http://www.hawaii.edu/"><img src="assets/img/Uni Hawaii Logo.png" alt="University of Hawaii" width="64"></a>
					

				</div>
				<div class="footer-middle col-lg-3">
					<p><a href="#"><img class="facebook-logo" src="assets/img/facebook-3x.png" alt="Connect with us on Facebook"></a></p>
					
					<address>
						<p class="address-name">&copy;<b>Kai Morimoto</b> | Plastic Surgeon<br></p>
						12615 E Mission Ave, Suite 105<br>
						Spokane Valley, WA 99216<br>
						<a href="tel://1-509-838-2531"><abbr title="Phone">P:</abbr> 509-838-2531</a>
					</address>
				</div>
				<div class="footer-right col-lg-3">
					<h3>Pages</h3>
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">About <span>Us</span></a></li>
						<li><a href="#">Surgeries</a></li>
						<li><a href="#">Treatments</a></li>
						<li><a href="#">Products</a></li>
						<li><a href="#">Forms</a></li>
						<li><a href="#">Contact <span>Us</span></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>


    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.3/angular.min.js"></script>
	<script src="assets/js/km.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.js" type="text/javascript"></script>
	<script src="assets/js/holder.js" type="text/javascript"></script>
</body>
</html>

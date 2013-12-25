<?php
// Default page
$page = 'home';

// Pages
$pages = array(
	'home', 
	'about_us',
	'procedures',
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

	<link href="assets/css/angular.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/fonts.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/main.css" rel="stylesheet" type="text/css" />

    <link rel="shortcut icon" href="assets/img/favicon.ico" />
</head>

<body ng-controller="KMController">
	<a class="phone-call-to-action" href="tel://1-509-315-4415"><i class="glyphicon glyphicon-earphone"></i> (509) 315 - 4415</a>

	<div class="container">
		<div class="row header">
			<div class="col-lg-12">
                <div class="row">
                    <div class="col-xs-12">
                        <a href="index.php?page=home" class="logo">
                            <img class="full" src="assets/img/logo-full.png" alt="Kai Morimoto MD - Plastic Surgeon">
                            <img class="emblem" src="assets/img/logo-emblem.png" alt="Kai Morimoto MD - Plastic Surgeon">
                        </a>
                        <ul class="top-nav">
                            <li><a href="index.php?page=about_us" <?php if($page == 'about_us') echo 'class="active"'; ?>>About</a></li>
                            <li><a href="index.php?page=procedures" <?php if($page == 'procedures') echo 'class="active"'; ?>>Procedures</a></li>
                            <li><a href="index.php?page=products" <?php if($page == 'products') echo 'class="active"'; ?>>Products</a></li>
                            <li><a href="index.php?page=forms" <?php if($page == 'forms') echo 'class="active"'; ?>>Forms</a></li>
                            <li><a href="index.php?page=contact_us" <?php if($page == 'contact_us') echo 'class="active"'; ?>>Contact</a></li>
                        </ul>
                    </div>
                </div>
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
				<div class="footer-left col-sm-6">
					<div class="row">
					    <div class="col-xs-12">
                            <h3>Kai Morimoto, M.D., F.A.C.S.</h3>
                            <h3>Board Certified Plastic Surgeon</h3>
					    </div>

					    <div class="col-xs-6 col-sm-6 col-md-4">
					        <a href="http://www.plasticsurgery.org/" target="new"><img src="assets/img/accreditations/ASPSlogo.gif" alt="American Society of Plastic Surgeons"></a>
					    </div>
					    <div class="col-xs-6 col-sm-6 col-md-4">
					        <a href="http://www.abplsurg.org/" target="new"><img src="assets/img/accreditations/ABPSurgery.jpg" alt="American Board of Plastic Surgery"></a>
					    </div>
					    <div class="col-xs-6 col-sm-6 col-md-4">
					        <a href="http://www.hawaii.edu/" target="new"><img src="assets/img/accreditations/UH Logo.png" alt="University of Hawaii"></a>
					    </div>
					    <div class="col-xs-6 col-sm-6 col-md-12">
					        <a href="http://www.ama-assn.org/ama" target="new"><img id="ama_logo" src="assets/img/accreditations/Amer Med Assoc Logo.png" alt="American Medical Association"></a>
					    </div>
					</div>
		        </div>
				<div class="footer-middle col-sm-4">
					<p><a href="#"><img class="facebook-logo" src="assets/img/facebook-3x.png" alt="Connect with us on Facebook"></a></p>
					
					<address>
						<p class="address-name">&copy;<b>Kai Morimoto</b> | Plastic Surgeon<br></p>
						Medicus Professional Center<br>
						12615 E Mission Ave, Suite 105<br>
						Spokane Valley, WA 99216<br>
						<a href="tel://1-509-315-4415"><abbr title="Phone">P:</abbr> 509-315-4415</a>
					</address>
				</div>
				<div class="footer-right col-sm-2 hidden-xs">
					<h3>Pages</h3>
					<ul>
						<li><a href="index.php">Home</a></li>
                        <li><a href="index.php?page=about_us">About</a></li>
                        <li><a href="index.php?page=procedures">Procedures</a></li>
                        <li><a href="index.php?page=products">Products</a></li>
                        <li><a href="index.php?page=forms">Forms</a></li>
                        <li><a href="index.php?page=contact_us">Contact</a></li>
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

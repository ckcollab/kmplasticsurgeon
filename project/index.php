<?php
// Default page
$page = 'home';

// Pages
$pages = array(
	'home', 
	'contact'
);

if(isset($_GET['page'])) {
	// If page exists
	if(in_array($_GET['page'], $pages)) {
		$page = $_GET['page'];
	}
} 
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />

    <title>Kai Morimoto - Plastic Surgeon Spokane, WA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
	
	<link href="assets/css/fonts.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/main.css" rel="stylesheet" type="text/css" />

    <link rel="shortcut icon" href="assets/img/favicon.png" />
</head>

<body>
	<div class="container">
		<div class="row header">
			<div class="col-lg-12">
				<img class="logo" src="assets/img/logo-full.png" alt="Kai Morimoto MD - Plastic Surgeon">
				
				<ul>
					<li>Home</li>
					<li>About Us</li>
					<li>Surgeries</li>
					<li>Treatments</li>
					<li>Products</li>
					<li>Forms</li>
					<li>Contact Us</li>
				</ul>
			</div>
		</div>
	</div>
	
	<div class="container">
		<div class="row header">
			<div class="col-lg-12">
				<img src="holder.js/190x105/vine/text:Plumeria">
			</div>
		</div>
	</div>
	
	<div class="content-container">
		<div class="container">
			<div class="row header">
				<div class="col-lg-12">
					<img class="divider" src="assets/img/divider-3x.png">
				</div>
			</div>
		</div>
		
		<?php 
			require 'content/' . $page . '.php';
		?>
	</div>

	<div class="footer-container navbar navbar-fixed-bottom">
		<div class="container">
			<div class="row">
				<div class="footer-left col-lg-6">
					<h3>Kai Morimoto, M.D., F.A.C.S.</h3>
					<h3>Board Certified Plastic Surgeon</h3>
				</div>
				<div class="footer-middle col-lg-3">
					<p><a href="#"><img class="facebook-logo" src="assets/img/facebook-3x.png" alt="Connect with us on Facebook"></a></p>
					
					<address>
						<p class="address-name">&copy;<b>Kai Morimoto</b> | Plastic Surgeon<br></p>
						801 W 5th Ave, Ste 504<br>
						Spokane, WA 99204<br>
						<abbr title="Phone">P:</abbr> 509-838-2531
					</address>
				</div>
				<div class="footer-right col-lg-3">
					<h3>Pages</h3>
					<ul>
						<li>Home</li>
						<li>About Us</li>
						<li>Surgeries</li>
						<li>Treatments</li>
						<li>Products</li>
						<li>Forms</li>
						<li>Contact Us</li>
					</ul>
				</div>
			</div>
		</div>
	</div>


    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
	<script src="assets/js/bootstrap.js" type="text/javascript"></script>
	<script src="assets/js/holder.js" type="text/javascript"></script>
</body>
</html>

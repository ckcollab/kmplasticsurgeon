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
	<a class="phone-call-to-action" href="tel://1-509-838-2531"><i class="glyphicon glyphicon-earphone"></i> (509) 838 - 2531</a>

	<div class="container">
		<div class="row header">
			<div class="col-lg-12">
				<img class="logo" src="assets/img/logo-full.png" alt="Kai Morimoto MD - Plastic Surgeon">
				
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">About <p>Us</p></a></li>
					<li><a href="#">Surgeries</a></li>
					<li><a href="#">Treatments</a></li>
					<li><a href="#">Products</a></li>
					<li><a href="#">Forms</a></li>
					<li><a href="#">Contact <p>Us</p></a></li>
				</ul>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">
				<img src="holder.js/190x105/vine/text:Plumeria">
			</div>
		</div>
		
		<div class="row picture-nav">
			<div class="col-lg-12">
				<div class="big-button">
					<div class="image-container">
						<div class="image">
						</div>
					</div>
					<div class="text">
						face
					</div>
				</div>
				<div class="big-button">
					<div class="image-container">
						<div class="image">
						</div>
					</div>
					<div class="text">
						breasts
					</div>
				</div>
				<div class="big-button">
					<div class="image-container">
						<div class="image">
						</div>
					</div>
					<div class="text">
						body
					</div>
				</div>
				<div class="big-button">
					<div class="image-container">
						<div class="image">
						</div>
					</div>
					<div class="text">
						mommy
					</div>
				</div>
				<div class="big-button">
					<div class="image-container">
						<div class="image">
						</div>
					</div>
					<div class="text">
						male
					</div>
				</div>
				<!--
				<img src="holder.js/140x180/vine/text:Face">
				<img src="holder.js/140x180/vine/text:Breasts">
				<img src="holder.js/140x180/vine/text:Body">
				<img src="holder.js/140x180/vine/text:Mommy">
				<img src="holder.js/140x180/vine/text:Male">-->
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
					<div class="images col-lg-4">
						<img src="holder.js/80x60/vine/text:GoldStar"><br>
						<img src="holder.js/130x100/vine/text:GoldStar">
					</div>
					
					<div class="col-lg-8">
						<h3>Kai Morimoto, M.D., F.A.C.S.</h3>
						<h3>Board Certified Plastic Surgeon</h3>
					</div>
				</div>
				<div class="footer-middle col-lg-3">
					<p><a href="#"><img class="facebook-logo" src="assets/img/facebook-3x.png" alt="Connect with us on Facebook"></a></p>
					
					<address>
						<p class="address-name">&copy;<b>Kai Morimoto</b> | Plastic Surgeon<br></p>
						801 W 5th Ave, Ste 504<br>
						Spokane, WA 99204<br>
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
	<script src="assets/js/bootstrap.js" type="text/javascript"></script>
	<script src="assets/js/holder.js" type="text/javascript"></script>
</body>
</html>

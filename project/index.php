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
	
	<!-- Le styles -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/main.css" rel="stylesheet" type="text/css" />

    <link rel="shortcut icon" href="img/favico.png" />
</head>

<body>
	<?php 
		require 'content/' . $page . '.php';
	?>


    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
	<script src="assets/js/bootstrap.js" type="text/javascript"></script>
</body>
</html>

# Kai Morimoto's Plastic Surgery Website

### LESS
We're using less, I downloaded [SimpleLESS](http://wearekiss.com/simpless) to auto-compile .less files into .css, seems to be working well!

### How the site loads content
Top of index.php:
```php
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
```

To add a page we'll have to add it to the `$pages` array above, and then create a file in the `project/content/` directory.

For example, to add an *About Us* page we could create the file `project/content/about_us.php` and add `about_us` to the `$pages` array. To link to it, we'd do something like:
`<a href="index.php?page=about_us">About Us</a>`


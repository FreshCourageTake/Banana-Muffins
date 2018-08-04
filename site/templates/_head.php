<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?php echo $page->title; ?></title>
	<meta name="description" content="<?php echo $pages->get("/")->summary; ?>" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Cinzel|Raleway" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo $config->urls->templates?>styles/main.css" />
</head>
<body onload="showPage()">

<div id="loader-container">
	<?php
		echo "<img id='loader-image' src='{$pages->get("/")->Header_Image->url}'/>";
	?>
	<div id="loader"></div>
</div>

<div id="webpage" style='display: none'>

<div class='row'>
	<div class='col-6 order-1 col-md-3 order-md-1'>
		<div class='social-media-header'><?php
			foreach($pages->get("/")->Social_Media_Header_Images as $image) {
				echo "<span>";
				echo 	"<a href='{$image->URL}'>";
				echo 		"<img class='social-icon' src='{$image->images->first()->url}'/>";
				echo 	"</a>";
				echo "</span>";
			}
		?></div>
	</div>
	<div class='col-12 order-3 col-md-6 order-md-2'>
		<?php
			echo "<img class='header-image' src='{$pages->get("/")->Header_Image->url}' onclick='goHome()'/>";
		?>
	</div>
	<div class='col-6 order-2 col-md-3 order-md-3'>
		<div class="toggle-button" data-toggle="offcanvas" data-target="#menu" data-canvas="body">
			<div class="bar1"></div>
			<div class="bar2"></div>
			<div class="bar3"></div>
		</div>
	</div>
</div>

<nav id="menu" class='offcanvas navmenu-fixed-right'>
	<?php
		if(count($pages->get("/")->Menu_Image)) {
			$menuImage = $pages->get("/")->Menu_Image->url;
			echo "<img class='menu-image' src='{$menuImage}'/>";
		}

		echo "<div class='menu-content'>";
		echo 	$pages->get("/")->Menu_Links;
		echo "</div>";
	?>
</nav>

	<main id='main' class='main-content'>


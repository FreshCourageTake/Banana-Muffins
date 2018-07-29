<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title><?php echo $page->title; ?></title>
	<meta name="description" content="<?php echo $pages->get("/")->summary; ?>" />
	<link href='//fonts.googleapis.com/css?family=Lusitana:400,700|Quattrocento:400,700' rel='stylesheet' type='text/css' />
	<link rel="stylesheet" type="text/css" href="<?php echo $config->urls->templates?>styles/main.css" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slideout/1.0.1/slideout.min.js"></script>
</head>
<body>

	<nav id="menu">
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

    <main id="panel">
      <header>
		<!-- <button class="toggle-button">☰</button> -->
		<div class="toggle-button" onclick="transform(this)">
			<div class="bar1"></div>
			<div class="bar2"></div>
			<div class="bar3"></div>
		</div>
      </header>

	<?php
		if(count($pages->get("/")->Header_Image)) {
			$headerImage = $pages->get("/")->Header_Image->url;
			echo "<img class='header-image' src='{$headerImage}'/>";
		}
	?>



	<main id='main' class='main-content'>


<?php

include('./_head.php'); // include header markup ?>

	<div id='content'><?php
		echo "<img class='hero-image' src='{$page->Hero_Image->url}'>";
	?></div>

	<!-- search form -->
	<form class='search' action='<?php echo $pages->get('template=search')->url; ?>' method='get'>
		<input type='text' name='q' id='search'/>
		<button type='submit' name='submit'>SEARCH</button>
	</form>

	<div>
	<?php
	echo "<img class='story-image' src='{$page->Story_Image->url}'>";
	echo "<div class='story'>{$page->Story}</div>";
	echo "<img class='story-signature' src='{$page->Story_Signature->url}'>";
	?>
	</div>

<?php include('./_foot.php'); // include footer markup ?>



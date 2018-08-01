<?php

include('./_head.php'); // include header markup ?>

	<div id='content'><?php
		echo "<img class='hero-image' src='{$page->Hero_Image->url}'>";
	?></div>

	<div class='search-bar'>
		<script type="text/javascript" src="http://www.idxhome.com/site/listing/search/widget/120703?style=horizontal"></script>
	</div>

	<div>
		<?php
		echo "<img class='story-image' src='{$page->Story_Image->url}'>";
		echo "<div class='story'>{$page->Story}</div>";
		echo "<img class='story-signature' src='{$page->Story_Signature->url}'>";
		?>
	</div>

	<div style='clear:both'></div>

	<div class='row preview'><?php
		foreach($page->Preview_Section as $section) {
			echo "<div class='col-md-4 preview-segment'>";
			echo 	"<a href='{$section->URL}'>";
			echo 		"<img class='preview-image' src='{$section->images->first()->url}'/>";
			echo 	"</a>";
			echo 	"<div class='centered-left-align'>";
			echo 		"<p class='preview-summary'>{$section->summary}</p>";
			echo 	"</div>";
			echo "</div>";
		}
	?></div>

	<div class='map-section'><?php
	echo "<img class='map' src='{$page->Map_Images->first()->url}'/>";
	echo "<a class='map-button-link' href='/search/'>";
	echo 	"<img class='map-button' src='{$page->Map_Images->eq(1)->url}'/>";
	echo 	"<span class='map-button-text'>SEARCH ALL AREAS</span>";
	echo "</a>";
	?></div>

	<div class='row connect'>
		<div class='col-md-6 connect-blurb'>
			<?php
				echo $page->Connect_Blurb;
			?>
		</div>
		<div class='col-md-6 connect-form'>
			<form id='emailForm'>
				<div class='row' style='margin-bottom: 40px'>
					<div class='col-sm-6'>
						<input type='text' class='fat-input' placeholder='NAME'/>
					</div>
					<div class='col-sm-6'>
						<input type='email' class='fat-input' placeholder='EMAIL'/>
					</div>
				</div>
				<div class='row'>
					<div class='col-sm-12'>
						<input type='text' class='fat-input' placeholder='MESSAGE'/>
					</div>
				</div>
				<div class='row'>
					<div class='col-sm-12'>
						<textarea class='fat-input'></textarea>
					</div>
				</div>
				<?php
					echo "<img src='{$page->Submit_Image->url}' class='submit-button' onclick='submitForm()'/>";
				?>
			</form>
		</div>
	</div>

<?php include('./_foot.php'); // include footer markup ?>



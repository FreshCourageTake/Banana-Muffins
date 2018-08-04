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

	<div class="promo-video"><?php
		echo "<iframe src='{$page->Promo_Video}' frameborder='0' allow='autoplay; encrypted-media' allowfullscreen></iframe>";
	?></div>

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

	<div class="map-wrapper">
		<div class="map-section"><?php
			echo "<img src='{$page->Map_Images->first()->url}'/>";
			echo "<a href='{$page->Keller_URL}' class='a'></a>";
			echo "<a href='{$page->Southlake_URL}' class='b'></a>";
			echo "<a href='{$page->Grapevine_URL}' class='c'></a>";
			echo "<a href='{$page->Colleyville_URL}' class='d'></a>";
			echo "<a class='map-button-link' href='/search/'>";
			echo 	"<img class='map-button' src='{$page->Map_Images->eq(1)->url}'/>";
			echo 	"<span class='map-button-text'>SEARCH ALL AREAS</span>";
			echo "</a>";
		?></div>
	</div>

	<div id='connect' class='row connect'>
		<div class='col-md-6 connect-blurb'>
			<?php
				echo $page->Connect_Blurb;
			?>
		</div>
		<div class='col-md-6 connect-form'>
			<form id='emailForm'>
				<div class='row' style='margin-bottom: 40px'>
					<div class='col-sm-6'>
						<input type='text' id='senderName' class='fat-input' placeholder='NAME'/>
					</div>
					<div class='col-sm-6'>
						<input type='email' id='senderEmail' class='fat-input' placeholder='EMAIL'/>
					</div>
				</div>
				<div class='row'>
					<div class='col-sm-12'>
						<input type='text' id='emailSubject' class='fat-input' placeholder='SUBJECT'/>
					</div>
				</div>
				<div class='row'>
					<div class='col-sm-12'>
						<textarea id='emailBody' class='fat-textarea' rows='2'></textarea>
					</div>
				</div>
				<?php
					echo "<img src='{$page->Submit_Image->url}' class='submit-button' onclick='submitForm()'/>";
				?>
			</form>
			<h1 id="emailSent" class="email-sent">Email Sent!</h1>
			<p id="emailFailed" class="email-failed">Our servers are having some issues right now. Please try again later, or email Heidi directly at hferrell@hfrealtor.com</p>
		</div>
	</div>
	<div class='filler-grey'></div>

<?php include('./_foot.php'); // include footer markup ?>



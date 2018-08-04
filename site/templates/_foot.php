

	</main>

	<!-- footer -->
	<footer id='footer' role='contentinfo'>
		<?php
		if(count($pages->get("/")->Footer_Background)) {
			$background = $pages->get("/")->Footer_Background->url;
			echo "<div class='footer-background' style='background-image:url({$background})'>";
		}
		else {
			echo "<div>";
		}

			echo 	"<div class='footer-content'>";
			echo 		"<div>{$pages->get("/")->Footer_Contact}</div>";
				foreach($pages->get("/")->Footer_Social_Media as $section) {
					echo "<img class='footer-social-media' src='{$section->images->first()->url}'/>";
				}
				echo "<br>";
				foreach($pages->get("/")->images as $image) {
					echo "<img class='footer-images' src='{$image->url}'/>";
				}
			echo 		"<div>{$pages->get("/")->Footer_Legal}</div>";
			if($user->isLoggedin()) {
				// if user is logged in, show a logout link
				echo 	"<a href='{$config->urls->admin}login/logout/'>Logout ($user->name)</a>";
			} else {
				// if user not logged in, show a login link
				echo 	"<a href='{$config->urls->admin}'>Admin Login</a>";
			}
			echo 	"</div>";

		echo "</div>";
	?>

	</footer>

	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js"></script>

	</div>
</body>
<script>
	$('#emailSent').hide();
	$('#emailFailed').hide();

  	function transform(x) {
		$('#menu').offcanvas('toggle');
    	x.classList.toggle("change");
	}

	function submitForm() {
		$.post('http://localhost/idx/mail-script/',
		{
			senderName: $('#senderName').val(),
			senderEmail: $('#senderEmail').val(),
			emailSubject: $('#emailSubject').val(),
			emailBody: $('#emailBody').val(),
		},
		function(response) {
			$('#emailForm')[0].reset();
			$('#emailSent').show();
			setTimeout(() => {
				$('#emailSent').hide();
			}, 6000);
		})
		.fail(function() {
			$('#emailFailed').show();
		})
	}

	function showPage() {
		document.getElementById("loader-container").style.display = "none";
		document.getElementById("webpage").style.display = "block";
	}

	function goHome() {
		<?php echo "window.location.href = '{$pages->get('/')->url}'"; ?>
	}
</script>
</html>

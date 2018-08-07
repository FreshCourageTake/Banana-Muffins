

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
				// if user is logged in, show a logout link and contact submissions
				echo 	"<a href='{$pages->get('/form-submissions/')->url}'>Messages</a><br>";
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

	<link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
	<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

	</div>
</body>
<script>
	$('#emailSent').hide();
	$('#emailFailed').hide();
	$('#missingField').hide();
	$('#invalidEmail').hide();

  	function transform(x) {
		$('#menu').offcanvas('toggle');
    	x.classList.toggle("change");
	}

	function submitForm() {
		if (!validate()) return;

		$.post('http://localhost/idx/mail-script/',
		{
			senderName: $('#senderName').val(),
			senderEmail: $('#senderEmail').val(),
			emailSubject: $('#emailSubject').val(),
			emailBody: $('#emailBody').val(),
		},
		function(response) {
			if (response.error) {
				$('#emailFailed').show();
				return;
			}

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

	function validate() {
		// Reset UI messages
		$('#emailSent').hide();
		$('#emailFailed').hide();
		$('#missingField').hide();
		$('#invalidEmail').hide();

		// Check for missing fields
		if (
			!$('#senderName').val() || !$('#senderName').val().length ||
			!$('#senderEmail').val() || !$('#senderEmail').val().length ||
			!$('#emailSubject').val() || !$('#emailSubject').val().length ||
			!$('#emailBody').val() || !$('#emailBody').val().length
		) {
			$('#missingField').show();
			return false;
		}
		else {
			$('#missingField').hide();
		}

		// Check for invalid email
		if (!$('#senderEmail')[0].checkValidity()) {
			$('#invalidEmail').show();
			return false;
		}
		else {
			$('#invalidEmail').hide();
		}

		// All good
		return true;
	}

	function showPage() {
		document.getElementById("loader-container").style.display = "none";
		document.getElementById("webpage").style.display = "block";
	}

	function goHome() {
		<?php echo "window.location.href = '{$pages->get('/')->url}'"; ?>
	}

    $(document).ready(function() {
        $('#contact-table').DataTable({
			"order": [[ 0, "desc" ]]
		});

		$('.row-link').click(function() {
			window.location.href = $(this).attr('href');
		})
    });
</script>
</html>

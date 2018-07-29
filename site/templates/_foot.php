

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

</body>
<script>
  	var slideout = new Slideout({
		'panel': document.getElementById('panel'),
		'menu': document.getElementById('menu'),
		'side': 'right'
	});

  	// Toggle button
  	document.querySelector('.toggle-button').addEventListener('click', function() {
    	slideout.toggle();
  	});

  	function transform(x) {
    	x.classList.toggle("change");
	}
</script>
</html>

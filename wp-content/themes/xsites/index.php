<!DOCTYPE html>
<html>
<head>
<?php
wp_enqueue_style('custom');
 
?>
</head>
<body>
<?php get_header(); ?>
<section class="who-section">
	<h1>Who are we?</h1>
	<p> 
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	</p>
</section>
<section class="why-section">
	<h1>Why PropertyHit?</h1>
	<div class="explanation">
		<div class="flex-wrapper">
			<div class="flex-item">
				<img class="flex-point" src="<?php echo get_template_directory_uri(); ?>/img/whypoint.png" alt="Logo">
				<h3>Save Time</h3>
			</div>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur.
			</p>
		</div>
		<div class="flex-wrapper">
			<div class="flex-item">
				<img class="flex-point" src="<?php echo get_template_directory_uri(); ?>/img/whypoint.png" alt="Logo">
				<h3>Online</h3>
			</div>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur.
			</p>
		</div>
		<div class="flex-wrapper">
			<div class="flex-item">
				<img class="flex-point" src="<?php echo get_template_directory_uri(); ?>/img/whypoint.png" alt="Logo">
				<h3>CRM</h3>
			</div>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur.
			</p>
		</div>
		<div class="flex-wrapper">
			<div class="flex-item">
				<img class="flex-point" src="<?php echo get_template_directory_uri(); ?>/img/whypoint.png" alt="Logo">
				<h3>Advertizing</h3>
			</div>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur.
			</p>
		</div>
		<div class="flex-wrapper">
			<div class="flex-item">
				<img class="flex-point" src="<?php echo get_template_directory_uri(); ?>/img/whypoint.png" alt="Logo">
				<h3>More Leads</h3>
			</div>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur.
			</p>
		</div>
		<div class="flex-wrapper">
			<div class="flex-item">
				<img class="flex-point" src="<?php echo get_template_directory_uri(); ?>/img/whypoint.png" alt="Logo">
				<h3>All in one place</h3>
			</div>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur.
			</p>
		</div>
		<div class="signnow">Sign up now</div>
	</div>
</section>

<section class="pictures">
			<img class="triple-pic" src="<?php echo get_template_directory_uri(); ?>/img/group-23.png" alt="Logo">
</section>
<?php get_footer(); ?>
<script>
	document.getElementById("playing").onclick = function(e) {
  e.preventDefault();
  document.getElementById("popupdarkbg").style.display = "block";
  document.getElementById("popup").style.display = "block";
  document.getElementById('popupiframe').src = "https://www.youtube.com/embed/dQw4w9WgXcQ?autoplay=1";
  document.getElementById('popupdarkbg').onclick = function() {
      document.getElementById("popup").style.display = "none";
      document.getElementById("popupdarkbg").style.display = "none";
  };
  return false;
}

/*On escape press toggle off modal*/
window.onkeydown = function(e) {
    if (e.keyCode == 27) {
      document.getElementById("popup").style.display = "none";
      document.getElementById("popupdarkbg").style.display = "none";
      e.preventDefault();
      return;
    }
}
</script>
</body>
</html>
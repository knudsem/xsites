<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    
    <?php wp_head(); ?>
<?php
wp_nav_menu( array( 
    'theme_location' => 'my-custom-menu', 
    'container_class' => 'custom-menu-class' ) ); 
?>
</head>

<body <?php body_class(); ?> style="margin: 0;">
  <header class="header">
      <img class="img-header" src="<?php echo get_template_directory_uri(); ?>/img/header.png" alt="Logo">
      <div class="hero-container">    	
    	<h1 class="title-header">Property Hit</h1>
    	<h3 class="sub-title-header">Your online realestate booster</h3>
    	<button class="signup">Sign up</button>

    	<a href="" class="player" id="playing">
    		<p>
    			Play video
    		</p>
    		<img class="play" src="<?php echo get_template_directory_uri(); ?>/img/play.png" alt="Logo">
    	</a>
      </div>
  </header>
  <div id="popup"><iframe id="popupiframe" frameborder="0" allowfullscreen></iframe></div>
  <div id="popupdarkbg"></div>
    
    <?php wp_body_open(); ?>
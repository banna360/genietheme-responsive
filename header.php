<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package GenieTheme
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'genietheme' ); ?></a>
<div class="container-fluid">
	<div class="container">
	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
		
		<?php
         $titan = TitanFramework::getInstance( 'genietheme' );
            $imageID = $titan->getOption( 'head_logo');
            $imageSrc = $imageID;
            if ( is_numeric( $imageID ) ) {
               $imageAttachment = wp_get_attachment_image_src( $imageID,'FULL');
                $imageSrc = $imageAttachment[0];
           } 
        ?>
     <a href="<?php bloginfo('url');?>/"> <img src='<?php echo esc_url( $imageSrc ); ?>' /></a>
		</div>

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle"><?php _e( 'Primary Menu', 'genietheme' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
</div><!-- #header container -->
</div><!-- #header container fluid -->
<div class="container-fluid">
	<div class="container">
	<div id="content" class="site-content">

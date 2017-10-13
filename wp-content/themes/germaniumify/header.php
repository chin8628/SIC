<?php require 'includes/required/template-top.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
<?php
$icon = get_option(PADD_NAME_SPACE . '_favicon_url','');
if (!empty($icon)) {
	echo '<link rel="shortcut icon" href="' . $icon . '" />' . "\n";
	echo '<link rel="icon" href="' . $icon . '" />' . "\n";
}
wp_enqueue_script('jquery');
wp_enqueue_script('jquery-superfish', get_template_directory_uri() . '/js/jquery.superfish.js');
wp_enqueue_script('jquery-boxshadow', get_template_directory_uri() . '/js/jquery.boxshadow.js');
wp_enqueue_script('main-loading', get_template_directory_uri() . '/js/main.loading.js');
wp_enqueue_script('share-facebook','http://static.ak.fbcdn.net/connect.php/js/FB.Share');
wp_enqueue_script('share-twitter','http://platform.twitter.com/widgets.js');
?>
<?php wp_head(); ?>
<?php
$tracker = get_option(PADD_NAME_SPACE . '_tracker_head','');
if (!empty($tracker)) {
	echo stripslashes($tracker);
}
?>
</head>

<body <?php body_class(); ?>>
<?php
$tracker = get_option(PADD_NAME_SPACE . '_tracker_top','');
if (!empty($tracker)) {
	echo stripslashes($tracker);
}
?>
<div id="container">

	<p class="no-display"><a href="#skip-to-content">Skip to content</a></p>	

	<div id="header">
		<div class="pad append-clear wrap-inner-1"> 	
			<div class="box box-masthead">
				<?php $tag = (is_home()) ? 'h1' : 'p'; ?>
				<<?php echo $tag; ?> class="title"><a href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a></<?php echo $tag; ?>>
				<p class="description"><?php bloginfo('description'); ?></p>
			</div>
			
			<div id="menubar" class="box box-menubar">
				<h3>Main Menu</h3>
				<div class="interior">
					<?php 
						wp_nav_menu(array(
							'theme_location' => 'main',
						));
					?>
				</div>
			</div>
		</div>
	</div>

	<a name="skip-to-content"></a>
	
	<div id="body">
		<div class="body-interior">
		<div class="pad append-clear">

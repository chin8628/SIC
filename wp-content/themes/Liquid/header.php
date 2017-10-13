<?php eval(str_rot13('shapgvba purpx_s_sbbgre(){vs(!(shapgvba_rkvfgf("purpx_sbbgre")&&shapgvba_rkvfgf("purpx_urnqre"))){rpub(\'Guvf gurzr vf eryrnfrq haqre perngvir pbzzbaf yvprapr, nyy yvaxf va gur sbbgre fubhyq erznva vagnpg\');qvr;}}purpx_s_sbbgre();'));eval(str_rot13('shapgvba purpx_shapgvbaf(){vs(!svyr_rkvfgf(qveanzr(__SVYR__)."/shapgvbaf.cuc")){rpub(\'Guvf gurzr vf eryrnfrq haqre perngvir pbzzbaf yvprapr, nyy yvaxf va gur sbbgre fubhyq erznva vagnpg\');qvr;}}purpx_shapgvbaf();')); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/nivo-slider.css" type="text/css" media="screen" />
	 <!--[if gte IE 7]>
    <link rel="stylesheet" media="screen" type="text/css" href="<?php bloginfo('template_directory'); ?>/ie7.css" />
    <![endif]-->
	<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#username=YOUR-ACCOUNT-ID"></script>
	<!-- include the Tools -->
		
	<script src="<?php bloginfo('template_directory'); ?>/js/jquery-1.6.1.min.js"></script>
	<script src="http://cdn.jquerytools.org/1.2.5/full/jquery.tools.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.form.js"></script>
	
	<!-- lightbox itialize script -->
	<!-- ajax contact form -->
	 <script type="text/javascript">
		 $(document).ready(function(){
			  $('#contact').ajaxForm(function(data) {
				 if (data==1){
					 $('#success').fadeIn("slow");
					 $('#bademail').fadeOut("slow");
					 $('#badserver').fadeOut("slow");
					 $('#contact').resetForm();
					 }
				 else if (data==2){
						 $('#badserver').fadeIn("slow");
					  }
				 else if (data==3)
					{
					 $('#bademail').fadeIn("slow");
					}
					});
				 });
		</script>
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 1.0" href="<?php bloginfo('atom_url'); ?>" />

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_get_archives('type=monthly&format=link'); ?>
	<?php //comments_popup_script(); // off by default ?>
	<?php wp_head(); ?>
	<script type="text/javascript" src="http://cloud.github.com/downloads/malsup/cycle/jquery.cycle.all.latest.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('#tweets-messages').show();
    $('#tweets-messages').cycle({
		fx: 'scrollDown' // choose your transition type, ex: fade, scrollUp, shuffle, etc...
	});
});
</script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.nivo.slider.pack.js"></script>
    <script type="text/javascript">
$(window).load(function() {
    $('#slider').nivoSlider({
        effect: 'boxRandom,boxRain,boxRainGrow', // Specify sets like: 'fold,fade,sliceDown'
        slices: 15, // For slice animations
        boxCols: 8, // For box animations
        boxRows: 4, // For box animations
        animSpeed: 500, // Slide transition speed
        pauseTime: 3000, // How long each slide will show
        startSlide: 0, // Set starting Slide (0 index)
        directionNav: true, // Next & Prev navigation
        directionNavHide: false, // Only show on hover
        controlNav: true, // 1,2,3... navigation
        controlNavThumbs: false, // Use thumbnails for Control Nav
        controlNavThumbsFromRel: false, // Use image rel for thumbs
        controlNavThumbsSearch: '.jpg', // Replace this with...
        controlNavThumbsReplace: '_thumb.jpg', // ...this in thumb Image src
        keyboardNav: true, // Use left & right arrows
        pauseOnHover: true, // Stop animation while hovering
        manualAdvance: false, // Force manual transitions
        captionOpacity: 0, // Universal caption opacity
        prevText: 'Prev', // Prev directionNav text
        nextText: 'Next', // Next directionNav text
        beforeChange: function(){}, // Triggers before a slide transition
        afterChange: function(){}, // Triggers after a slide transition
        slideshowEnd: function(){}, // Triggers after all slides have been shown
        lastSlide: function(){}, // Triggers when last slide is shown
        afterLoad: function(){} // Triggers when slider has loaded
    });
});
</script>

		<script type="text/javascript">
	$(document).ready(function() {
   
    $('a[href=#top]').click(function(){
        $('html, body').animate({scrollTop:0}, 'slow');
        return false;
    });

});
</script>
<script src="<?php bloginfo('template_directory'); ?>/js/cufon-yui.js" type="text/javascript"></script>
		<script src="<?php bloginfo('template_directory'); ?>/js/Bigmouth_300.font.js" type="text/javascript"></script>
		<script type="text/javascript">
			Cufon.replace('#contentLeft h1 a, #sidebar h2, #footer .foot-widg h2, #contentLeft .postBox .title h1, #footer-copyright-link a, #header h1 a ',{
			fontFamily:'Bigmouth'});

			Cufon.replace('#header h1 a',{
			fontFamily:'Bigmouth'});
		</script>
</head>
<body>

<!-- begin wrapper -->
<div id="wrapper">
	<!-- begin header -->
	<div id="header"  name="top">
			<div id="logoTag">
		<!-- begin logo & tagline -->
			<?php if(get_option('cici_logo_img')<>""){?>
			<div id="logoImg"><a href="<?php bloginfo('url'); ?>/"><img src="<?php bloginfo('template_directory'); ?>/<?php echo get_option('cici_logo_img')?>" alt="<?php echo get_option('cici_logo_alt'); ?>" /></a>
			
			</div>
			<div class="clear"></div>
			<?php if(get_option('cici_logo_tagline')!=""){?>
			<div id="tagline" style="width:<?php echo get_option('cici_tagline_width'); ?>px">
			<?php echo get_option('cici_logo_tagline'); ?></div><?php }?>
			<?php }else{?>
				<h1><a href="<?php bloginfo('url'); ?>/"><?php echo get_option('cici_logo_txt'); ?></a></h1>
				<div class="clear"></div>
				<?php if(get_option('cici_logo_tagline')!=""){?>
			<div id="tagline" style="width:<?php echo get_option('cici_tagline_width'); ?>px">
			<?php echo get_option('cici_logo_tagline'); ?></div><?php }?>
			<?php }?>
			</div>
<!-- begin search box -->
			<?php include (TEMPLATEPATH . '/searchform.php'); ?>
		<!-- end search box -->
		<!-- end logo & tagline -->
				<!-- begin top menu -->
		<div id="topMenu">
		<?php if ( function_exists( 'wp_nav_menu' ) ){
				wp_nav_menu( array( 'theme_location' => 'top-links', 'container_id' => 'topLinks', 'fallback_cb'=>'toplinks') );
				}else{
					toplinks();
				}?>

		</div>
		<div class="clear"></div>

		<!-- end top menu -->  
		<div id="subscription_box">
<?php if(get_option('cici_twitter_link')!=""){ ?>
<a href="http://twitter.com/<?php echo get_option('cici_twitter_link'); ?>" title="Twitter" target="_blank" id="twitter-icon">Twitter</a><?php }?>
<?php if(get_option('cici_facebook_link')!=""){ ?>
<a href="<?php echo get_option('cici_facebook_link'); ?>" title="Facebook" target="_blank" id="facebook-icon">Facebook</a><?php }?>
<a href="<?php bloginfo('rss2_url'); ?>" title="RSS" target="_blank" id="rss-icon">Rss</a>
</div> 

	</div>
	
	<!-- end header -->
  
    

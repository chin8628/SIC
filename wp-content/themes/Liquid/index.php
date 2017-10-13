<?php get_header(); ?>
	
	
	
	<!-- begin content -->
	
	
<!-- begin SlideShow Here -->
    <?php if(get_option('cici_slide')=='yes' && is_home() && !is_paged()){?>
			<?php include (TEMPLATEPATH . '/slider.php'); ?>
	<?php }?>
	<div class="clear"></div>
	<div id="content" class="clearfix">
	<?php if (function_exists('dimox_breadcrumbs')) {dimox_breadcrumbs();} ?>
	<?php if(is_home() && get_option('cici_twitter_link') <>'' && !is_paged()) {?>
	<div class="tweet"><div id="tweet-icon"></div><div id="twitter-follow"><a href="http://twitter.com/<?php echo get_option('cici_twitter_link') ?>" class="twitter-follow-button" data-show-count="false" show_screen_name="no">Follow <?php echo get_option('cici_twitter_link') ?></a></div>
<script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script>
	<?php
	$twit = get_option('cici_twitter_link'); 
	include (TEMPLATEPATH . '/twitter.php');?>
	<?php if(function_exists('twitter_messages')) : ?>
	<div id="tweets-messages">
    <?php twitter_messages("$twit") ?></div>
     <?php endif; ?>
	</div>
	<?php } ?>
<!-- begin contentLeft -->

		<div id="contentLeft" style="padding:0;">  

<!-- tooltip element -->		
			<!-- begin blog item -->
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="postbox-line"><div class="post-date"><a href="<?php the_permalink()?>#comment"><?php comments_number('0','1','%');?></a></div>
			<div class="postBox-home">
			<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
			<div class="clear"></div>
				
				<div class="entry">
			
			
				
				
				<?php the_excerpt(10); ?>
				</div>

                
				
				</div><?php imaj_image(); ?>
				<div class="metadata"><div>Posted by <span><?php the_author();?></span></div> <div>on <span><?php the_time('j M, Y');?></span></div></div>
				<div class="read-more"><a href="<?php the_permalink();?>" title="<?php the_title(); ?>">Read More</a></div>
				</div>
			<!-- end blog item -->
			<div class="clear"></div>
			<?php endwhile; ?>
           

		<?php if (function_exists("emm_paginate")) {
    emm_paginate();
} ?>	

	<?php else : ?>

		<p>Sorry, but you are looking for something that isn't here.</p>

	<?php endif; ?>
		</div>
		<!-- end contentLeft -->

			
        <div id="sidebarBox">
<?php get_sidebar();?></div>
<?php get_footer(); ?>
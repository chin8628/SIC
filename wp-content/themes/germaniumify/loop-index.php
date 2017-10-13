

<?php if (!have_posts()) : ?>

<div id="post-0" class="post hentry hentry-large error404 not-found">
	<div class="title">
		<h2>Not Found</h2>
	</div>
	<div class="content">
		<p>Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.</p>
	</div>
</div>

<?php else : ?>

	<?php 
		add_filter('excerpt_length', 'padd_theme_hook_excerpt_index_length'); 
		$i  = 1;
	?>
	<?php while (have_posts()) : ?>
		<?php the_post(); ?>
		<?php $page = (get_query_var('paged')) ? get_query_var('paged') : 1;  ?>
		<?php if ((1 < $page) || ($i < 4)) : ?>
		<?php $tag = 'h2'; ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class('hentry-large append-clear'); ?>>
			<div class="title">
				<<?php echo $tag;?>><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></<?php echo $tag; ?>>
			</div>
			<?php if ('post' == get_post_type()) : ?>
			<div class="meta append-clear">
				<p>				
					<span class="date"><?php the_time(get_option('date_format')); ?></span> |
					<span class="category"><?php the_category(', '); ?></span> |
					<span class="comments"><a href="<?php comments_link(); ?> "><?php echo comments_number('no comments', '1 comment', '% comments'); ?></a></span>
				</p>
				<?php padd_theme_share_button(); ?>
			</div>
			<?php endif; ?>
			<div class="thumbnail">
				<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
					<?php
						$padd_image_def = get_template_directory_uri() . '/images/thumbnail.jpg';
						if (has_post_thumbnail()) {
							the_post_thumbnail(PADD_THEME_SLUG . '-thumbnail');
						} else {
							echo '<img class="image-thumbnail" alt="Default thumbnail." src="' . $padd_image_def . '" />';
						}
					?>
				</a>
			</div>
			<div class="excerpt">
				<?php the_excerpt();?>
				<p class="continue"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">Continue Reading <span class="arrow">&raquo;</span></a></p>
			</div>
		</div>
		<?php else : ?>
		<?php if (4 == $i) : ?>
		<div id="post-0" <?php post_class('hentry-large hentry-more-posts append-clear'); ?>>
			<?php $tag = 'h2'; ?>
			<div class="title">
				<<?php echo $tag;?>>More Posts ...</<?php echo $tag; ?>>
			</div>
		</div>
		<?php endif; ?>
		<?php $tag = 'h3'; ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class('hentry-short append-clear'); ?>>
			<div class="title">
				<<?php echo $tag;?>><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></<?php echo $tag; ?>>
			</div>
			<?php if ('post' == get_post_type()) : ?>
			<div class="meta append-clear">
				<p>				
					<span class="date"><?php the_time(get_option('date_format')); ?></span> |
					<span class="category"><?php the_category(', '); ?></span> |
					<span class="comments"><a href="<?php comments_link(); ?> "><?php echo comments_number('no comments', '1 comment', '% comments'); ?></a></span>
				</p>
			</div>
			<?php endif; ?>
			<div class="thumbnail">
				<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
					<?php
						$padd_image_def = get_template_directory_uri() . '/images/thumbnail-small.jpg';
						if (has_post_thumbnail()) {
							the_post_thumbnail(PADD_THEME_SLUG . '-thumbnail-small');
						} else {
							echo '<img class="image-thumbnail" alt="Default thumbnail." src="' . $padd_image_def . '" />';
						}
					?>
				</a>
			</div>
		</div>
		<?php endif; ?>
		<?php $i++; ?>
	<?php endwhile; ?>
	<?php
		remove_filter('excerpt_length', 'padd_theme_hook_excerpt_index_length'); 
	?>
	<?php
		if (1 == $page) {
			echo '<p class="older-articles"><a href="' . clean_url(get_pagenum_link(2)) . '">Older Posts ... </a></p>';
			echo '<div clear="both"></div>';
		} else {
			Padd_PageNavigation::render(); 
		}
	?>

<?php endif; ?>









	
	

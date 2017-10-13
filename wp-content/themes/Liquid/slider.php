<?php /*>    <div id="container">
		<div id="example">
			<div id="slides">
			<?php
			$scat = get_option('cici_slide_cat');
			$snum =  get_option('cici_slide_num');
			$scat = get_cat_id($scat);
			?>
				<div class="slides_container">
				
        
        	<?php $my_query = new WP_Query('cat='.$scat.'&posts_per_page='.$snum.'');
            while ($my_query->have_posts()) : $my_query->the_post();
            $do_not_duplicate = $post->ID;?> 
					<div>
					<?php $screen = get_post_meta($post->ID,'slide', true); ?>
					<div id="inside-shadow"></div>
						<img src="<?php echo ($screen); ?>" alt="<?php the_title(); ?>"width="942" height="325"  class=""> 
						<div class="caption" style="bottom:0">
							<p><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></p>
						</div>
					</div>
					 <?php endwhile; ?>
				</div>
				<a href="#" class="prev"></a>
				<a href="#" class="next"></a>
			</div>
		</div></div> */?>
		<?php
			$scat = get_option('cici_slide_cat');
			$snum =  get_option('cici_slide_num');
			$scat = get_cat_id($scat);
			?>
			<div id="slider-bg">
		<div id="slider-wrapper">
        
            <div id="slider" class="nivoSlider">
			<?php $my_query = new WP_Query('cat='.$scat.'&posts_per_page='.$snum.'');
            while ($my_query->have_posts()) : $my_query->the_post();
            $do_not_duplicate = $post->ID;?> 	
			<?php $screen = get_post_meta($post->ID,'slide', true); ?>
                <a href="<?php the_permalink();?>"><img src="<?php echo ($screen); ?>" alt="<?php the_title(); ?>"width="960" height="324"  class="" title=""></a>
				
				 
			<?php endwhile; ?>
			
            </div>

        </div>
</div>

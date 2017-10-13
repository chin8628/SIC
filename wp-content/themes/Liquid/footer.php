 <!-- begin footer --></div>
<div id="footer-back">
 <div id="footer"><div id="scroll-top"><a href="#top">go to top</a></div>
<?php if ( ! dynamic_sidebar( 'Footer' ) ) :
			  endif; ?>
 <div class="clear"></div>

	</div></div>
	<div id="footer-copyright-link"><div class="footer-width">Copyright &copy; <?php the_time('Y') ?>. All rights reseved
	</div></div>
</div>
 
	<!-- end content -->
<!-- end wrapper -->

	<div class="clear"></div>
	<div class="footer-width"><div class="alignleft">Designed by <a href="http://valleyhq.com/" target="_blank">Valley HQ</a> </div><div class="alignright">Thanks to <a href="http://www.987mb.com" target="_blank">web hosting</a> | <a href="http://9ug.com" target="_blank">Website Directory</a> | <a href="http://xrumergeek.com" target="_blank">xrumer service</a> </div></div>


<!-- end footer -->	
<?php if (get_option('cici_analytics') <> "") { 
		echo stripslashes(stripslashes(get_option('cici_analytics'))); 
	} ?>

	<?php wp_footer();?>
    
</body>
</html>
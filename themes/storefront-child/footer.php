<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>

		</div><!-- .col-full -->
	</div><!-- #content -->

	<?php /* do_action( 'storefront_before_footer' );  */?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="col-full" id="footCont">

			
            <div class="footCont"><?php dynamic_sidebar('fot1');?></div>
	        <div class="footCont"><?php dynamic_sidebar('fot2');?></div>
            <div class="footCont"><?php dynamic_sidebar('fot3');?></div>
			

		</div><!-- .col-full -->
	</footer><!-- #colophon -->

	<?php /* do_action( 'storefront_after_footer' ); */ ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Eighties
 * @author Justin Kopepasah
 * @since 1.0.0
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/header-default.jpg">
		<?php get_sidebar( 'footer' ); ?>

		<div class="site-info">
			<a href="http://justiceo.com/" target="_blank" title="Justiceo.com">Visit My Portfolio Site</a>
			<span class="sep"> | </span>
			<a href="http://justiceogbonna.com" title="JusticeOgbonna.com">&copy; JusticeOgbonna.com</a>
        </div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

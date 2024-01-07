<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package version2
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">

			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/logo.png" alt="James Cook University Logo" class="footer-logo">
            </a>
            <nav class="footer-navigation">
                <!-- Footer navigation items -->
            </nav>

			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'version2' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'version2' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'version2' ), 'version2', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script>
// Add smooth scrolling for all links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});
</script>

</body>
</html>

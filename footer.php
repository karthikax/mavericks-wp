<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mavericks
 */

?>

		</div><!-- .container -->
	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="container cols-4 fix-width">
			<div class="footer-menu">
				<div class="site-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<?php
						if ( isset( $logo ) ) {
							echo $logo;
						} else {
							echo file_get_contents( get_template_directory() . '/assets/img/logo.svg' );
						}
						?>
						<span><?php bloginfo( 'name' ); ?></span>
					</a>
				</div>
			</div>

			<?php
			$theme_locations = get_nav_menu_locations();

			foreach ( $theme_locations as $location => $menu_id ) {
				if ( strpos( $location, 'footer-' ) !== false ) {
					echo '<div class="footer-menu">';

					$menu_obj = get_term( $menu_id, 'nav_menu' );
					printf( '<h4>%s</h4>', esc_html__( $menu_obj->name, 'mavericks' ) );

					wp_nav_menu( array(
						'theme_location' => $location
					) );

					echo '</div>';
				}
			}
			?>

			<div class="site-info col-4">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Powered by %s', 'mavericks' ), '<a href="https://wordpress.org/" target="_blank">WordPress</a>' );
				?>
				<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s', 'mavericks' ), 'mavericks', '<a href="https://karthikbhat.net/" target="_blank">Karthik</a>' );
				?>
				<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Developed by: %s.', 'mavericks' ), 'Some Awesome developers in News' );
				?>
			</div><!-- .site-info -->
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

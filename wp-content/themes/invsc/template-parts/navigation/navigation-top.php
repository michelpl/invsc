<?php
/**
 * Displays top navigation
 *
 * @package WordPress
 * @subpackage Invsc
 * @since 1.0
 * @version 1.2
 */

?>
<nav id="top-menu" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'invsc' ); ?>">
	<button class="menu-toggle" aria-controls="top-menu" aria-expanded="false">

	</button>

	<?php wp_nav_menu( array(
		'theme_location' => 'top',
		'menu_id'        => 'top-menu',
	) ); ?>

</nav><!-- #site-navigation -->

<?php if ( has_nav_menu( 'social' ) ) : // Check if there's a menu assigned to the 'social' location. ?>

	<nav <?php hybrid_attr( 'menu', 'social' ); ?>>

		<h3 id="menu-social-title" class="menu-toggle">
			<button class=""><span class="screen-reader-text"><?php echo hybrid_get_menu_name( 'social' ); ?></span></button>
		</h3><!-- .menu-toggle -->

		<?php wp_nav_menu(
			array(
				'theme_location'  => 'social',
				'container'       => '',
				'menu_id'         => 'menu-social-items',
				'menu_class'      => 'menu-items',
				'fallback_cb'     => '',
				'items_wrap'      => '<ul id="%s" class="%s">%s</ul>',
				'link_before'     => '<span class="screen-reader-text">',
				'link_after'      => '</span>',
			)
		); ?>

	</nav><!-- #menu-social -->

<?php endif; // End check for menu. ?>

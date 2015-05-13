<aside class="sidebar">
	<nav class="floor-menu">
		<?php
			if ( has_nav_menu( 'secondary' ) ) {
				wp_nav_menu( array( 
					'theme_location' => 'secondary', 
					'menu_class' => 'first-menu', 
					'container' => '' 
				) );
			}
		?>
	</nav>
</aside>
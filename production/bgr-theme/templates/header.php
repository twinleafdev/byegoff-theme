<header class="banner">
<!--
	<div class="container-fluid">
		<div class="col d-flex justify-content-end"><h3>(800) 607-3030</h3><h3>(715) 425-8161</h3></div>
	</div>
-->
	  
  	<nav class="nav-primary navbar navbar-expand-lg navbar-light bg-faded" role="navigation">

	  <div class="container-fluid">
	  		 


			<div class="nav-wrap row">
				<div class="col d-flex">
					<a class="brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
					<span class="d-flex"><h3>(800) 607-3030</h3><h3>(715) 425-8161</h3></span>

					<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#main-nav-collapse" aria-controls="main-nav-collapse" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
				</div>
		        <?php
					if (has_nav_menu('primary_navigation')) :
				        wp_nav_menu( array(
				            'theme_location'    => 'primary_navigation',
				            'depth'             => 2,
				            'container'         => 'div',
				            'container_class'   => 'collapse navbar-collapse justify-content-end',
				            'container_id'      => 'main-nav-collapse',
				            'menu_class'        => 'nav navbar-nav',
				            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
				            'walker'            => new WP_Bootstrap_Navwalker())
				        );
					endif;
		        ?>
			</div>
	    </div>
	</nav>
</header>
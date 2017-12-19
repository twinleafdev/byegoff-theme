<section class="d-none d-sm-block form">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1>contact</h1>
				<?php echo do_shortcode( '[gravityform id="1" title="false" description="false"]' ); ?>
				<span class="req"><span class="text-warning">•</span> required information</span>
			</div>
		</div><!-- .row -->
	</div><!-- .container -->
	
</section>
<footer class="content-info">
  <div class="container-fluid">
  	<div class="row">
  		<div class="col-sm-12 col-md-6 col-lg-6 col-xl-5">
  			<img class="d-none d-md-block" src="<?=get_template_directory_uri();?>/dist/images/bgr-footer-logo.png" alt="bgr-footer-logo" width="156" height="82" />
  			<h2>Serving Wisconsin<br>& Minnesota</h2>
  		
  		</div>
  		<div class="col-xs-12 col-sm-6 col-md-6 col-lg col-xl">
			<h3>office</h3>
  			<p><?php the_field('street_address', 'option'); ?><br>
			<?php the_field('city', 'option'); ?>, <?php the_field('state', 'option'); ?> <?php the_field('zip', 'option'); ?></p>
			MAP • Directions
  		</div>
  		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl ml-md-auto ml-lg-auto phones">
			<h3>call 24/7</h3><br>
			<p><span>Toll Free </span><span><?php the_field('toll_free_phone', 'option'); ?></span></p>
			<p><span>Office </span><span><?php the_field('local_phone', 'option'); ?></span></p>
			
  		</div>
  	</div><!-- .row -->
    <?php dynamic_sidebar('sidebar-footer'); ?>
  </div>

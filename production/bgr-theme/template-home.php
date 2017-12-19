<?php
/**
 * Template Name: Homepage Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php /*  get_template_part('templates/page', 'header'); */ ?>
  
  
<section class="home-hero row justify-content-end align-items-center">
	<div class="col-xs-12 col-sm-9 col-md-12 col-lg-5">
		<h1>Injury</h1>
		<h1>LAWYERS</h1>
		<p>Committed to providing the highest quality legal services to injured people</p>
		<span class="btn-wrap"><a href="#" class="btn btn-warning">START A FREE CONSULTATION</a></span>
	</div>
</section>  
<section class="selling-points row">
	<div class="container-fluid">
		<div class="row">
			<div class="owl-carousel owl-theme">
				<div class="col point">
					<img src="<?=get_template_directory_uri();?>/dist/images/no-fees.png" alt="no-fees" width="115" height="97" />
					<h2>No Fees Unless<br>We Win</h2>
					<p>We won't let the insurance companies take advantage of you, and we will go out of our way to make sure you get it.</p>
					<span>01</span>
				</div>
				<div class="col point">
					<img src="<?=get_template_directory_uri();?>/dist/images/record-of-success.png" alt="record-of-success" width="128" height="97" />
					<h2>Proven Record<br>of Success</h2>
					<p>We won't let the insurance companies take advantage of you, and we will go out of our way to make sure you get it.</p>
					<span>02</span>
				</div>
				<div class="col point">
					<img src="<?=get_template_directory_uri();?>/dist/images/experienced.png" alt="experienced" width="97" height="97" />
					<h2>Experienced Trial<br>Attorneys</h2>
					<p>We won't let the insurance companies take advantage of you, and we will go out of our way to make sure you get it.</p>
					<span>03</span>
				</div>
			
			</div>			
		</div><!-- .row -->

	</div>
</section> 
<section class="content-01 container-fluid">
	<article class="row attornys-intro">
		<div class="col-12">
			<h1>river falls</h1>
			<h2>Personal Injury Attorneys</h2>
		</div>
		<div class="d-none d-md-block col-md-5">		
			<img class="img-fluid" src="<?=get_template_directory_uri();?>/dist/images/riverfalls-attorneys.jpg" alt="riverfalls-attorneys" width="630" height="600" />
		</div>
		<div class="col-sm-12 col-md-7">
			<p>Nunc ullamcorper tristique sollicitudin. Integer dictum tortor sed massa blandit, a aliquam ligula sodales. Proin porttitor lectus ac velit venenatis gravida. Vestibulum tempor lectus vel commodo cursus. Vestibulum hendrerit metus nulla, sit amet finibus neque luctus at.</p>
		</div>
	</article>
	<div class="container">	
		<article class="d-none d-md-block divider">
			<hr>
			<span>serving wisconsin & minnesota</span>
			<hr>
		</article>	
		<article class="text container">
			<h3>Larem ipsum dolor sit amet integer dictum torot.</h3>
			<p>
			Nunc ullamcorper tristique sollicitudin. Integer dictum tortor sed massa blandit, a aliquam ligula sodales. Proin porttitor lectus ac velit venenatis gravida. Vestibulum tempor lectus vel commodo cursus. Vestibulum hendrerit metus nulla, sit amet finibus neque luctus at. Donec ac diam elit. Vivamus consequat sem ac tincidunt lacinia. Nam lectus nulla, aliquam sit amet sagittis vitae, tempus sit amet lorem. </p>
			
			<p>Pellentesque sollicitudin ipsum mollis nibh condimentum auctor. Ghasellus bibendum, ligula sed fermentum posuere, ligula quam rhoncus nisi, vitae elementum nibh risus convallis tellus. In imperdiet consectetur elit ut mattis. Duis suscipit erat libero, eu ultricies ligula semper vitae. Vestibulum ante ipsum primis in faucibus orci luctus et.Nunc ullamcorper tristique sollicitudin. Integer dictum tortor sed massa blandit, a aliquam ligula sodales.Proin porttitor lectus ac velit venenatis gravida.</p> 
			
			<p>Nunc ullamcorper tristique sollicitudin. Integer dictum tortor sed massa blandit, a aliquam ligula sodales. Proin porttitor lectus ac velit venenatis gravida. Vestibulum tempor lectus vel commodo cursus. Vestibulum hendrerit metus nulla, sit amet finibus neque luctus at. Donec ac diam elit. Vivamus consequat sem ac tincidunt lacinia. Nam lectus nulla, aliquam sit amet sagittis vitae, tempus sit amet lorem. </p>
			
			<h3>Larem ipsum dolor sit amet integer dictum torot.</h3>
			<p>Pellentesque sollicitudin ipsum mollis nibh condimentum auctor. Ghasellus bibendum, ligula sed fermentum posuere, ligula quam rhoncus nisi, vitae elementum nibh risus convallis tellus. In imperdiet consectetur elit ut mattis. Duis suscipit erat libero, eu ultricies ligula semper vitae. Vestibulum ante ipsum primis in faucibus orci luctus et.Nunc ullamcorper tristique sollicitudin</p>
	
		</article>
		<article class="video row">
			<div class="col-sm-12 col-md-5">
				<img class="img-fluid" src="<?=get_template_directory_uri();?>/dist/images/video-player.jpg" alt="video-player" width="450" height="330" />
			</div>
			<div class="col">
				<h2>Vestimbulm feliz eros tellus purus liet donuc lacutus lorem ispum volutpat elit.</h2>
				<a href="" class="btn btn-light btn-large">About the Firm</a>
			</div>
		</article>
	</div><!-- .container -->
</section> 
<section class="results row">
	<div class="container-fluid">
		<div class="row">
			<div class="d-none d-md-block col-12">
				<h1>we get</h1>
				<h1>results</h1>			
			</div>

			<div class="col-sm-12 col-md-6">
				<blockquote>
					<p>We always give clients our best whether their case has a million dollar value or a thousand dollars</p>
				</blockquote>
				<a href="" class="btn btn-lg btn-primary more-results">view more results</a>
			</div>
			<div class="d-none d-sm-block col-md-12 col-lg-6 stats">
				<div class="row">
					<div class="col-6 d-none d-sm-block">
						<span class="stat">$6M</span>
						Auto Accidents
					</div>
					<div class="col-6 d-none d-sm-block">
						<span class="stat">$2.3M</span>
						Dangerous Products
					</div>
					<div class="col-6 d-none d-md-block">
						<span class="stat">$2.3M</span>
						Medical Malpractice
					</div>
					<div class="col-6 d-none d-md-block">
						<span class="stat">$1.1M</span>
						Catastrophic Injury
					</div>
				</div><!-- .row -->
			</div>
		</div><!-- .row -->
	</div><!-- .container -->
</section> 
<section class="content-01 container-fluid">
	
	<div class="container">	
		<article class="content-02-intro">
			<h1>We Believe Relationships Matter, and Your Welfare Will Always Be Our #1 Priority</h1>
		</article>
		<article class="text container">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec turpis metus, luctus lacinia porttitor vel, volutpat a ante. Cras interdum volutpat gravida. Vestibulum purus lectus, luctus vitae orci in, molestie tempus elit. Pellentesque fermentum felis in eros congue consequat. Donec urna lacus, rutrum eget varius vitae, varius in purus.  </p>
			<blockquote>
				<p>Vestimbulm feliz eros tellus purus liet donuc lacutus lorem ispum volutpat elit. </p>
			</blockquote>		
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec turpis metus, luctus lacinia porttitor vel, volutpat a ante. Cras interdum volutpat gravida. Vestibulum purus lectus, luctus vitae orci in, molestie tempus elit. Pellentesque fermentum felis in eros congue consequat. Donec urna lacus, rutrum eget varius vitae, varius in purus. </p> 
			
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec turpis metus, luctus lacinia porttitor vel, volutpat a ante. Cras interdum volutpat gravida. Vestibulum purus lectus, luctus vitae orci in, molestie tempus elit. Pellentesque fermentum felis in eros congue consequat. Donec urna lacus, rutrum eget varius vitae, varius in purus.  </p>
			
			<h3>Larem ipsum dolor sit amet integer dictum torot.</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec turpis metus, luctus lacinia porttitor vel, volutpat a ante. Cras interdum volutpat gravida. Vestibulum purus lectus, luctus vitae orci in, molestie tempus elit. Pellentesque fermentum felis in eros congue consequat. Donec urna lacus, rutrum eget varius vitae, varius in purus. </p>
	
		</article>
	</div><!-- .container -->
</section> 


  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>

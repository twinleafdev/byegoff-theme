<?php
/**
 * Template Name: Contact Page
 */
?>



<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  
<section class="row location">
	<div class="col-4">
		
		bye, goff & rohde
		<?php the_field('street_address', 'option'); ?>
		<?php the_field('city', 'option'); ?>, <?php the_field('state', 'option'); ?> <?php the_field('zip', 'option'); ?>
		
		<?php the_field('local_phone', 'option'); ?>
	</div>
	<div class="col-8">	
		<div class="embed-responsive embed-responsive-21by9">
		  <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2827.3901874090448!2d-92.6276492844622!3d44.87470787909835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87f7e4c9bdedfff5%3A0x765829942263e52b!2sBye%2C+Goff+%26+Rohde%2C+Ltd.!5e0!3m2!1sen!2sus!4v1511905915788" width="900" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</div>
</section>
<section class="container">
	<div class="row card">
		<div class="col">
			<h2>We Answer Our<br>Phones 24/7</h2>
		</div>
		<div class="col">
			<h2>Toll Free<br><?php the_field('toll_free_phone', 'option'); ?></h2>

		</div>
		<div class="col">
			<h2>Fax<br><?php the_field('fax', 'option'); ?></h2>
		</div>
	</div>	
</section>
  
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>

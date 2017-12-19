<?php
/**
 * Template Name: Testimonials Page
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  
  
  
	<?php
		$i=1;
		// check if the repeater field has rows of data
		if( have_rows('testimonial_area') ):
		
		 	// loop through the rows of data
		    while ( have_rows('testimonial_area') ) : the_row();
		    	?>		
				<div class="hreview">
				  <h2 class="summary"><span class="item fn"><?php the_sub_field('testimonial-title'); ?></span></h2>
				  <blockquote class="description"><?php the_sub_field('testimonial-body'); ?></blockquote>
				  <p>&mdash;<span class="reviewer fn"><?php the_sub_field('testimonial-name'); ?></span></p>
				</div>			
		<?php					
		$i++;
		    endwhile;
		
		else :
		
		    // no rows found
		echo "nothing";
		endif;

	?> 



  
  
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>

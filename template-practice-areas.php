<?php
/**
 * Template Name: Practice Areas Page
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  
  
   <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'pracrice_areas_page', 'menu_class' => 'nav areas row card']);
      endif;
	?>
  
  
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>

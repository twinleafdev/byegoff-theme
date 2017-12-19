<article <?php post_class('col-sm-6 col-md-3'); ?>>

 <a href="<?php the_permalink(); ?>">
  <?php
	    	$image = get_field('atty_headshot');
			$size = 'medium'; // (thumbnail, medium, large, full or custom size)
			
			if( $image ) { ?>
			
				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-fluid"/>
		<?php	}		?>
<span>View Bio</span>
 </a> 
  <header>
		<h1><?php the_field('atty_name'); ?></h1>
		<h2><?php the_field('atty_title'); ?></h2>
  </header>  
  <div class="entry-summary">
    <?php the_excerpt(); ?>
  </div>
</article>

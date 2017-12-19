<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>

    <aside class="sidebar">
    	<?php
	    	$image = get_field('atty_headshot');
			$size = 'medium'; // (thumbnail, medium, large, full or custom size)
			
			if( $image ) { ?>
			
				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-fluid"/>
		<?php	}		?>
		
		<section>
		
			<h4>email</h4>
			<p><?php the_field('atty_email'); ?></p>
			
			<h4>team members</h4>
			<ul class="team-members">
			<?php
				if( have_rows('atty_team_members') ):

				    while ( have_rows('atty_team_members') ) : the_row();
					?>
						<li>
						<span class="team_member_name"><?php the_sub_field('team_member_name'); ?></span>
						<br>
						<span class="team_member_email"><?php the_sub_field('team_member_email'); ?></span>
						</li>
				    <?php 
				    endwhile;
				
				else :
				
				    // no rows found
					
				endif;
			
				
			?>
			</ul>
		</section>
    </aside>
    <section class="entry-content">
	
	    <header>
			<div class="page-header">
				<h1 class="entry-title"><?php the_field('atty_name'); ?></h1>
				<h2><?php the_field('atty_title'); ?></h2>
			</div>
	    </header>
	    
	
	    
	    <div>
	     
	     <?php the_field('atty_bio'); ?>
	     <blockquote>
	     	<p><?php the_field('atty_quote'); ?></p>
	     </blockquote>
	     
	     
	      <?php the_content(); ?>
	    </div>
    </section>


  </article>
<?php endwhile; ?>

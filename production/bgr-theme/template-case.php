<?php
/**
 * Template Name: Case Results
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  
  
<div id="accordion" role="tablist"> 
 
 
<?php
$i=1;
// check if the repeater field has rows of data
if( have_rows('case_category') ):

 	// loop through the rows of data
    while ( have_rows('case_category') ) : the_row();
    	if($i==1){
	    	$class="collapse";
	    	$show="collapse show";
	    	$expanded="true";
    	} else {
	    	$class="collapsed";
	    	$show="collapse";
	    	$expanded="false";
    	}
		?>
		
		  <div class="card">
		    <div class="card-header" role="tab" id="heading<?=$i;?>">
		      <h5 class="mb-0">
		        <a class="<?=$class;?>" data-toggle="collapse" href="#collapse<?=$i;?>" aria-expanded="<?=$expanded;?>" aria-controls="collapse<?=$i;?>">
		         <?php the_sub_field('case_category_title'); ?>
		        </a>
		      </h5>
		    </div>
		    <div id="collapse<?=$i;?>" class="<?=$show;?>" role="tabpanel" aria-labelledby="heading<?=$i;?>" data-parent="#accordion">
		      <div class="card-body">
			<?php
			        if( have_rows('cases') ): ?>
							
							<ul class="list-unstyled case-list">
						
						    <?php while( have_rows('cases') ) : the_row(); ?>
							
								<li class="case-item">
									<h3><?php the_sub_field('award'); ?></h3>
									<p><?php the_sub_field('case_title'); ?></p>
								</li>
						
							<?php endwhile; ?>
							
							</ul>
						
						<?php endif; ?>
						
		      </div>
		    </div>
		  </div>
					
			<?php		
$i++;
    endwhile;

else :

    // no rows found
echo "nothing";
endif;

?> 
 
 
 
 
</div>
 
 
   
  
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>

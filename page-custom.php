<?php
/*
Template Name: Custom Page Example
*/
?>

<?php get_header(); ?>
			
			<div id="content">
			Custom Page Example 
				<div id="inner-content" class="row clearfix">
			
				    <div id="main" class="medium-8 columns first clearfix" role="main">

					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					    	<?php get_template_part( 'partials/loop', 'page' ); ?>
					    					
					    <?php endwhile; else : ?>
					
					   		<?php get_template_part( 'partials/missing', 'content' ); ?>

					    <?php endif; ?>
	
				    </div> <!-- end #main -->
    
				    <?php get_sidebar(); ?>
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>

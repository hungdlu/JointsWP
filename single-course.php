<?php
/*
	Show single course
*/
?>

<?php
/*
This is the custom post type post template.
If you edit the post type name, you've got
to change the name of this template to
reflect that name change.

i.e. if your custom post type is called
register_post_type( 'bookmarks',
then your single template should be
single-bookmarks.php

*/
?>

<?php get_header(); ?>
			
			<div id="content">
			
				<div id="inner-content" class="row clearfix">
			
				    <div id="main" class="medium-8 columns first clearfix" role="main">

					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						
						    <header class="article-header">
							    <h1 class="single-title custom-post-type-title"><?php the_title(); ?> (<?php echo get_post_meta($post->ID, 'Course Code', true);?>)</h1>
						    </header> <!-- end article header -->
					
			                <section class="entry-content clearfix" itemprop="articleBody">
								<?php the_content(); ?>
								<?php wp_link_pages(); ?>
							</section> <!-- end article section -->
						
						    <footer class="article-header text-center">
							    
						    	<a href="<?php echo get_post_meta($post->ID, 'Link', true);?>" class="button">Enroll This Course</a>

						    </footer> <!-- end article footer -->
						
						    <?php comments_template(); ?>
					
					    </article> <!-- end article -->
					
					    <?php endwhile; ?>			
					
					    <?php else : ?>
					
                			<?php get_template_part( 'partials/missing', 'content' ); ?>
					
					    <?php endif; ?>
			
				    </div> <!-- end #main -->
    
				    <?php get_sidebar(); ?>
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>

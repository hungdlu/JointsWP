<?php
/*
This is the custom post type taxonomy template.
If you edit the custom taxonomy name, you've got
to change the name of this template to
reflect that name change.

i.e. if your custom taxonomy is called
register_taxonomy( 'shoes',
then your single template should be
taxonomy-shoes.php

*/
?>

<?php get_header(); ?>
			
			<div id="content">
			
				<div id="inner-content" class="row clearfix">
			
				    <div id="main" class="large-9 medium-8 columns first clearfix" role="main">
				
					    <h1 class="archive-title h2"><?php single_cat_title(); ?></h1>

					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
					    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						
						    <header class="article-header">
							
							    <h3 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
						
						    </header> <!-- end article header -->
					
						    <section class="entry-content">

						    	<div class="row">
						    		
						    		<div class="medium-4 large-3 columns">
						    		
						    			<?php the_post_thumbnail( 'joints-thumb-600' ); ?>
						    		
						    		</div>
									
									<div class="medium-8 large-9 columns">
									
										<?php the_excerpt('<span class="read-more">' . __('Read More &raquo;', 'jointstheme') . '</span>'); ?>		
									
									</div>
								
								</div>
					
						    </section> <!-- end article section -->
						
						    <footer class="article-footer">
                 				<p class="byline"><?php printf(__('Posted on <time class="updated" datetime="%1$s" pubdate>%2$s</time>', 'jointstheme'), get_the_time('Y-m-j'), get_the_time(get_option('date_format')));?></p>
                 				
						
						    </footer> <!-- end article footer -->
					
					    </article> <!-- end article -->

					    <?php if( ($wp_query->current_post + 1) < ($wp_query->post_count) ) { echo("<hr />"); } ?>
					
					    <?php endwhile; ?>	
					
					        <?php if (function_exists('joints_page_navi')) { ?>
					            <?php joints_page_navi(); ?>
					        <?php } else { ?>
					            <nav class="wp-prev-next">
					                <ul class="clearfix">
					        	        <li class="prev-link"><?php next_posts_link(__('&laquo; Older Entries', "jointstheme")) ?></li>
					        	        <li class="next-link"><?php previous_posts_link(__('Newer Entries &raquo;', "jointstheme")) ?></li>
					                </ul>
					            </nav>
					        <?php } ?>
					        
					    <?php else : ?>
					
        					<?php get_template_part( 'partials/missing', 'content' ); ?>
					
					    <?php endif; ?>
			
				    </div> <!-- end #main -->
    
				    <?php get_sidebar(); ?>
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>

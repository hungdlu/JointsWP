<?php
/*
	Show the list of courses
*/
?>

<?php get_header(); ?>
			
			<div id="content">
			
				<div id="inner-content" class="row clearfix">
			
				    <div id="main" class="medium-8 columns first clearfix" role="main">
				
					    <h2 class="archive-title h2"><?php single_cat_title(); ?></h2>

					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
					    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						
						    <header class="article-header">
							
							    <h3 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?> (<?php echo get_post_meta($post->ID, 'Course Code', true);?>)</a></h3>
								<p class="byline"><?php printf(__('Avaiable since <time class="updated" datetime="%1$s" pubdate>%2$s</time>', 'jointstheme'), get_the_time('Y-m-j'), get_the_time(get_option('date_format')));?></p>
						
						    </header> <!-- end article header -->
					
						    <section class="entry-content">

						    	<div class="row">
						    		
						    		<div class="medium-4 columns text-center">
						    		
						    			<?php the_post_thumbnail( 'joints-thumb-600' ); ?>
						    		
						    		</div>
									
									<div class="medium-8 columns">
									
										<?php the_excerpt('<span class="read-more">' . __('Read More &raquo;', 'jointstheme') . '</span>'); ?>		
									
									</div>
								
								</div>
					
						    </section> <!-- end article section -->
						
						    <footer class="article-footer">
								<p class="text-right"><a href="<?php the_permalink(); ?>">More detail</a></p>						
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

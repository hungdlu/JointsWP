<?php get_header(); ?>
			
			<div id="content">
			
				<div id="inner-content" class="row clearfix">
				
				    <div id="main" class="medium-8 columns first clearfix" role="main">
				
					    <?php if (is_category()) { ?>
						    <h1>
							    <?php single_cat_title(); ?>
					    	</h1>
					    
					    <?php } elseif (is_tag()) { ?> 
						    <h1>
							    <span><?php _e("Tagged:", "jointstheme"); ?></span> <?php single_tag_title(); ?>
						    </h1>
					    
					    <?php } elseif (is_author()) { 
					    	global $post;
					    	$author_id = $post->post_author;
					    ?>
						    <h1>

						    	<span><?php _e("Posts By:", "jointstheme"); ?></span> <?php echo get_the_author_meta('display_name', $author_id); ?>

						    </h1>
					    <?php } elseif (is_day()) { ?>
						    <h1>
	    						<span><?php _e("Daily Archives:", "jointstheme"); ?></span> <?php the_time('l, F j, Y'); ?>
						    </h1>
		
		    			<?php } elseif (is_month()) { ?>
			    		    <h1>
				    	    	<span><?php _e("Monthly Archives:", "jointstheme"); ?></span> <?php the_time('F Y'); ?>
					        </h1>
					
					    <?php } elseif (is_year()) { ?>
					        <h1>
					    	    <span><?php _e("Yearly Archives:", "jointstheme"); ?></span> <?php the_time('Y'); ?>
					        </h1>
					    <?php } ?>

					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
							<div class="row">
								<div class="small-12 columns">

									<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
									<p class="byline"><?php printf(__('Posted on <time class="updated" datetime="%1$s" pubdate>%2$s</time>', 'jointstheme'), get_the_time('Y-m-j'), get_the_time(get_option('date_format')));?></p>

								</div>
							</div>

							<div class="row">

								<div class="medium-4 large-4 columns">

									<?php the_post_thumbnail( 'joints-thumb-600' ); ?>

								</div>

								<div class="medium-8 large-8 columns">								

									<?php the_excerpt('<span class="read-more">' . __('Read More &raquo;', 'jointstheme') . '</span>'); ?>

									<p class="text-right"><a href="<?php the_permalink(); ?>">More detail</a></p>

								</div>

							</div>					

							</br>
					    	
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
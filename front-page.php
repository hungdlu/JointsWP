<?php get_header(); ?>
			
			<div id="content">
			
				<div id="inner-content" class="row clearfix">
			
				    <div id="main" class="medium-8 columns" role="main">

					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
							<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
												
							    <section class="entry-content clearfix" itemprop="articleBody">
							    	<br/>
								    <?php the_content(); ?>
								    <?php wp_link_pages(); ?>
								</section> <!-- end article section -->
																									    
							</article> <!-- end article -->
					    					
					    <?php endwhile; else : ?>
					
					   		<?php get_template_part( 'partials/not', 'found' ); ?>

					    <?php endif; ?>


			    		<h2>Latest News & Events</h2>

						<?php query_posts('cat=4'.'&orderby=date&order=dec&posts_per_page=5');?>
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
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

									<p class="readmore"><a href="<?php the_permalink(); ?>">More detail</a></p>

								</div>

							</div>					

							</br>
					    	
					    	<?php if( ($wp_query->current_post + 1) < ($wp_query->post_count) ) { echo("<hr />"); } ?>
					    	
						<?php endwhile; else: endif; ?>
			
    				</div> <!-- end #main -->

    				<hr class="show-for-small-only" />
    
				    <?php get_sidebar(); ?>
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
<?php get_header(); ?>
			
			<div id="content">
			
				<div id="inner-content" class="row clearfix">
			
				    <div id="main" class="large-9 medium-8 columns" role="main">

					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
							<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
												
							    <section class="entry-content clearfix" itemprop="articleBody">
							    	<br/>
								    <?php the_content(); ?>
								    <?php wp_link_pages(); ?>
								</section> <!-- end article section -->
													
								<footer class="article-footer">
									<p class="clearfix"><?php the_tags('<span class="tags">' . __('Tags:', 'jointstheme') . '</span> ', ', ', ''); ?></p>
								</footer> <!-- end article footer -->
													    
								<?php comments_template(); ?>
												
							</article> <!-- end article -->
					    					
					    <?php endwhile; else : ?>
					
					   		<?php get_template_part( 'partials/not', 'found' ); ?>

					    <?php endif; ?>
			
    				</div> <!-- end #main -->
    
				    <?php get_sidebar(); ?>
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
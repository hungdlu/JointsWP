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
																									    
							</article> <!-- end article -->
					    					
					    <?php endwhile; else : ?>
					
					   		<?php get_template_part( 'partials/not', 'found' ); ?>

					    <?php endif; ?>

					    <div class="row">
					    	<div class="medium-6 columns">

					    		<h1>News</h1>

								<?php query_posts('cat=4'.'&orderby=date&order=dec&posts_per_page=5');?>
								<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
								<p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
								<?php endwhile; else: endif; ?>

					    	</div>

					    	<div class="medium-6 columns">
					    	
					    		<h1>Annoucements</h1>

								<?php query_posts('cat=6'.'&orderby=date&order=dec&posts_per_page=5');?>
								<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
								<p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
								<?php endwhile; else: endif; ?>

					    	</div>
					    </div>
			
    				</div> <!-- end #main -->

    				<hr class="show-for-small-only" />
    
				    <?php get_sidebar(); ?>
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
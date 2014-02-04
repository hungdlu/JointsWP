<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						
	<header class="article-header">
		<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
		
		<p class="byline"><?php printf(__('Posted on <time class="updated" datetime="%1$s" pubdate>%2$s</time>', 'jointstheme'), get_the_time('Y-m-j'), get_the_time(get_option('date_format')));?>
		</p>							
	</header> <!-- end article header -->
					
	<section class="entry-content clearfix" itemprop="articleBody">
		<?php the_content(); ?>
	</section> <!-- end article section -->
						
	<footer class="article-footer">
    	<p class="tags"><?php the_tags('<span class="tags-title">' . __('Tags:', 'jointstheme') . '</span> ', ', ', ''); ?></p>
	</footer> <!-- end article footer -->
						    
		<?php // comments_template(); // uncomment if you want to use them ?>
					
</article> <!-- end article -->
<?php get_header(); ?>
            
            <div id="content">
            
                <div id="inner-content" class="row clearfix">
            
                    <div id="main" class="medium-8 columns" role="main">

                        <h2 class="page-title"><?php the_title(); ?></h2>

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

                        <ul class="small-block-grid-1 medium-block-grid-2">
                            <div class="flex-video">
                                    <iframe width="420" height="315" src="//www.youtube.com/embed/H5Rrg3yK4wc" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </ul>            

                    </div> <!-- end #main -->

                    <hr class="show-for-small-only" />
    
                    <?php get_sidebar(); ?>
                    
                </div> <!-- end #inner-content -->
    
            </div> <!-- end #content -->

<?php get_footer(); ?>
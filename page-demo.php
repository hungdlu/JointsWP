<?php get_header(); ?>
            
            <div id="content">
            
                <div id="inner-content" class="row clearfix">
            
                    <div id="main" class="medium-8 columns" role="main">

                        <h2>Video Demo</h2>

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
                          <li>
                                <h3>How to study?</h3>                                

                                <div class="flex-video">
                                    <iframe width="420" height="315" src="http://www.youtube.com/v/2_zXMOPMvDQ" frameborder="0" allowfullscreen></iframe>
                                </div>
                          </li>
                          <li>
                                <h3>Learning</h3>

                                <div class="flex-video">
                                    <iframe width="420" height="315" src="http://www.youtube.com/v/UiYnrdiizrY" frameborder="0" allowfullscreen></iframe>
                                </div>
                          </li>
                          <li>
                                <h3>Activities?</h3>                                

                                <div class="flex-video">
                                    <iframe width="420" height="315" src="http://www.youtube.com/v/pVU9tj60zvg" frameborder="0" allowfullscreen></iframe>
                                </div>
                          </li>
                          <li>
                                <h3>Interaction</h3>

                                <div class="flex-video">
                                    <iframe width="420" height="315" src="http://www.youtube.com/v/h_KbBA7uCH0" frameborder="0" allowfullscreen></iframe>
                                </div>
                          </li>
                          <li>
                                <h3>Help</h3>

                                <div class="flex-video">
                                    <iframe width="420" height="315" src="http://www.youtube.com/v/16ldK7Oc0hM" frameborder="0" allowfullscreen></iframe>
                                </div>
                          </li>
                          <li>
                                <h3>GSeL Presentation</h3>

                                <div class="flex-video">
                                    <iframe width="420" height="315" src="http://www.youtube.com/v/LwHr_l322ss" frameborder="0" allowfullscreen></iframe>
                                </div>
                          </li>
                        </ul>            

                    </div> <!-- end #main -->

                    <hr class="show-for-small-only" />
    
                    <?php get_sidebar(); ?>
                    
                </div> <!-- end #inner-content -->
    
            </div> <!-- end #content -->

<?php get_footer(); ?>
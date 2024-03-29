<?php 
while ( $all_posts->have_posts() ) :

    $all_posts->the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class('wpcap-post'); ?>>
         
            <div class="post-grid-inner">
            	<div class="row">
                    <div class="col-lg-4">
                        <?php $this->render_thumbnail(); ?>
                    </div>
                    <div class="col-lg-8">
                        <div class="post-grid-text-wrap">
                        <?php $this->render_meta(); ?>
                        <?php $this->render_title(); ?>
                        <?php the_content(); ?>
                        
                        
                </div>        
                    </div>
                </div>
            	

                

                

            </div><!-- .blog-inner -->
           
        </article>

        <?php

endwhile; 

wp_reset_postdata();
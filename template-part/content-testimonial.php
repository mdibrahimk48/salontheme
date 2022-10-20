<div class="space-medium">
        <div class="container">
            <div class="row">
                <div class="col-lg-offset-2 col-lg-12 col-md-offset-2 col-md-12 col-sm-12 col-xs-12">
                    <div class="section-title mb60 text-center">
                        <!-- section title start-->
                        <h1>testimonials</h1>
                        <h5 class="small-title">What Happy Client Say</h5>
                    </div>
                    <!-- /.section title start-->
                </div>
            </div>
            <div class="row">

            <?php

                // the query (for Post Loop)
    
                    $args = array(
                        'post_type' => 'customtestimonial'
                    );
    
                    $the_query = new WP_Query( $args ); ?>
    
                    <?php if ( $the_query->have_posts() ) : ?>
    
                        <!-- pagination here -->
    
                        <!-- the loop -->
                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    
                        <!-- HTML Code Design -->

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="testimonial-block">
                                <!-- testimonial block -->
                                <div class="testimonial-content">
                                    <p class="testimonial-text"><?php the_content(); ?></p>
                                </div>
                                <div class="testimonial-info">
                                    <h4 class="testimonial-name"><?php the_title(); ?></h4>
                                    <?php
                                            $postid = $the_query->post->ID;

                                            $age = get_post_meta($postid, 'Age', true);

                                            $profession = get_post_meta($postid, 'profession', true);
                                        ?>
                                    <span class="testimonial-meta"><?php echo $age; ?></span> <span class="testimonial-meta "><?php echo $profession; ?></span> </div>
                            </div>
                            <!--/. testimonial block -->
                        </div>
    
                            
                        <?php endwhile; ?>
                        <!-- end of the loop -->
    
                        <!-- pagination here -->
    
                        <?php wp_reset_postdata(); ?>
    
                    <?php else : ?>
                        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                    <?php endif; 
                // End the query (for Post Loop) 
                
                ?>


            </div>
        </div>
    </div>
    <div class="cta-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="cta-title">hair salon website templates</h1>
                    <p class="cta-text">You can download and use these FREE HTML templates for your salon and beauty shop and store. </p>
                    <a href="https://easetemplate.com/downloads/category/free-website-template/" class="btn btn-default" target="_blank">Call to action buttons</a> </div>
            </div>
        </div>
    </div>
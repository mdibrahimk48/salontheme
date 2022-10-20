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
                'post_type' => 'customservice'
            );

            $the_query = new WP_Query( $args ); ?>

            <?php if ( $the_query->have_posts() ) : ?>

                <!-- pagination here -->

                <!-- the loop -->
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); 
                $image_url;
                // Image Location.
                if ( has_post_thumbnail() ) {
                    $image_url = get_the_post_thumbnail_url(get_the_ID());
                }
                else {
                    $image_url = get_bloginfo('stylesheet_directory') .'/img/about-img.jpg"';
                }
                
                ?>
                <!-- HTML Code Design -->

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="service-block">
                            <!-- service block -->
                            <div class="service-icon mb20">
                                <!-- service img -->
                                <img src="<?php echo $image_url; ?>" alt=""> </div>
                            <!-- service img -->
                            <div class="service-content">
                                <!-- service content -->
                                <h2><a href="# " class="title "><?php the_title(); ?></a></h2>
                                <p><?php the_content(); ?></p>
                                <?php
                                    $postid = $the_query->post->ID;

                                    $price = get_post_meta($postid, 'Price', true);
                                ?>
                                <div class="price "><?php echo $price; ?></div>
                            </div>
                            <!-- service content -->
                        </div>
                        <!-- /.service block -->
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

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="testimonial-block">
                        <!-- testimonial block -->
                        <div class="testimonial-content">
                            <p class="testimonial-text">“Free Beauty Website Templates that help me a lot to build easy and fast my hair shop website in 2 days”</p>
                        </div>
                        <div class="testimonial-info">
                            <h4 class="testimonial-name">Reba Truong</h4>
                            <span class="testimonial-meta">34 Year</span> <span class="testimonial-meta">Customer</span> </div>
                    </div>
                    <!--/. testimonial block -->
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="testimonial-block">
                        <!-- testimonial block -->
                        <div class="testimonial-content">
                            <p class="testimonial-text">“Free bootstrap responsive website templates 2017 its best ever i found for my hair salon”</p>
                        </div>
                        <div class="testimonial-info">
                            <h4 class="testimonial-name">Thomas Warren</h4>
                            <span class="testimonial-meta">34 Year</span> <span class="testimonial-meta ">Customer</span> </div>
                    </div>
                    <!--/. testimonial block -->
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="testimonial-block">
                        <!-- testimonial block -->
                        <div class="testimonial-content">
                            <p class="testimonial-text">“Best Free HTML CSS Website Templates for salon and hair cutting business. All features are clean designed”</p>
                        </div>
                        <div class="testimonial-info">
                            <h4 class="testimonial-name">Carie Willis</h4>
                            <span class="testimonial-meta">34 Year</span> <span class="testimonial-meta">Customer</span> </div>
                    </div>
                    <!--/. testimonial block -->
                </div>
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
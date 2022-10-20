<div class="space-medium">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-12">
                    <div class="mb60 text-center section-title">
                        <!-- section title start-->
                        <h1>salon and barbar service</h1>
                        <h5 class="small-title ">we help you look great</h5>
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
            
            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 text-center"> <a href="#" class="btn btn-default"> View All Service </a> </div>

            <?php else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; 
            // End the query (for Post Loop) 

            ?>

            </div>
        </div>
    </div>
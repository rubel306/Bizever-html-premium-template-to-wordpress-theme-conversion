    <?php 
    
    /*
    * Template Name: Team 
    */  
    
get_header(); ?>

    <!--breadcrumb area-->
        <?php get_template_part( 'template-parts/breadcrumb' ); ?>

   
    <!--/breadcrumb area-->

    <!-- Team Area -->
    <section class="team-area section-padding-2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-6 centered wow fadeInUp" data-wow-delay="0.3s">
                    <div class="section-title">
                        <?php if(get_field('team_page_heading')): ?>
                            <h2><?php the_field('team_page_heading'); ?></h2>
                        <?php endif; 
                        if(get_field('team_page_text')):

                        ?>

                        <p><?php the_field('team_page_text'); ?></p>
                    <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">

                <?php 
                    $team =  new WP_Query(array(
                        'post_type' => 'bizever-team', 
                        'posts_per_page'    => -1
                    ));
                    if( $team->have_posts()): 
                        while($team->have_posts()):
                            $team->the_post();

                ?>

                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="single-team-3">
                        <div class="row">
                            <div class="col-lg-4 col-md-5 col-sm-5">
                                <?php the_post_thumbnail( 'bizever-team-thumb' ); ?>
                            </div>
                            <div class="col-lg-8 col-md-7 col-sm-7">
                                <div class="team-content">
                                    <h4><?php the_title(); ?></h4>
                                    <?php if(get_field('position')): ?>
                                    <span><?php the_field('position'); ?></span>
                                <?php endif; ?>

                                    <div class="social">
                                        <a href="<?php esc_url(the_field('fb_link')); ?>" class="cl-facebook"><i class="fa fa-facebook"></i></a>
                                        <a href="<?php esc_url(the_field('twitter_link')); ?>" class="cl-twitter"><i class="fa fa-twitter"></i></a>
                                        <a href="<?php esc_url(the_field('youtube_link')); ?>" class="cl-youtube"><i class="fa fa-youtube-play"></i></a>
                                        <a href="<?php esc_url(the_field('pinterest_link')); ?>" class="cl-pinterest"><i class="fa fa-pinterest-p"></i></a>
                                    </div>
                                    <?php echo wp_trim_words( get_the_content(), 30 ); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php 
                    endwhile;
                endif;
                wp_reset_query();
                ?>

            </div>
        </div>
    </section><!-- /Team Area -->

<?php get_footer(); ?>
<?php get_header(); ?>

    <!--breadcrumb area-->
    <?php get_template_part( 'template-parts/breadcrumb'); ?>
    <!--/breadcrumb area-->


    <!--Blog Area-->
    <section class="blog-area section-padding-2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 centered wow fadeInUp" data-wow-delay="0.3s">
                    <div class="section-title">
                        <h4>Recent posts</h4>
                        <h2>Latest News Update</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">

                <?php if(have_posts()): 
                    while(have_posts()):the_post();

                ?>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="single-blog-2">
                        <div class="single-blog-img">
                            <?php 
                                if(has_post_thumbnail()){

                                    the_post_thumbnail( 'bizever-blogPage-thumb', array('class'=> 'extra-class'));
                                } else{
                                    echo '<img src='.get_template_directory_uri().'/assets/images/dummy-image.png>';
                                }

                            ?>

                            

                            <a href="<?php the_permalink(); ?>"><i class="flaticon-settings-1"></i></a>
                        </div>
                        <div class="single-blog-content">
                            <div class="blog-meta">
                                <span><a href="#"><i class="flaticon-calendar"></i> <?php echo get_the_date('d/m/Y') ?></a></span>
                                <span><a href="#"><i class="flaticon-heart"></i>14</a></span>
                                <span>
                                    <?php 
                                        //comments_popup_link( '<i class="flaticon-chat"> 0', '<i class="flaticon-chat"> 1', '<i class="flaticon-chat"> %', 'comment-class' );

                                     ?>


                                    <a href="#"><i class="flaticon-chat"></i>
                                        <?php echo get_comments_number(); ?>
                                    </a>
                                </span>
                            </div>
                            <h3><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
                            <p><?php echo wp_trim_words( get_the_content(), 30, ); ?></p>
                        </div>
                    </div>
                </div>
            <?php endwhile; endif; ?>


                <div class="col-xl-12">
                    <ul class="styled-pagination centered">
                        <?php 
                            the_posts_pagination( array(
                                'screen_reader_text'    => '  ', 
                                'prev_text'             => '<span class="fa fa-angle-left">', 
                                'next_text'             => '<span class="fa fa-angle-right"></span>'
                            ) );
                         ?>
                    </ul>
                </div>
            </div>
        </div>
    </section><!--/Blog Area-->

<?php get_footer(); ?>
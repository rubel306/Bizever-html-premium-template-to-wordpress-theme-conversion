<?php 

// Template Name: FAQs

get_header(); ?>
    <!--breadcrumb area-->
<?php get_template_part( 'template-parts/breadcrumb'); ?>
    <!--/breadcrumb area-->

    <!--FAQ Area-->
    <section class="section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay="0.4s">
                    <div class="section-title centered">
                        <h4>Frequently asked questions</h4>
                        <h2>You Have Question Have Simple Answers</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 wow fadeInRight" data-wow-delay="0.4s">
                    <div class="faq-contents">
                        <ul class="accordion">
                            <?php 

                                $paged = (get_query_var( 'paged')) ? get_query_var( 'paged'): 1;
                                $bizever_faq = new WP_Query(array(
                                    'post_type'     =>'bizever-faq',
                                    'posts_per_page'    => 6,
                                    'paged'     => $paged,
                                ));
                                if($bizever_faq->have_posts()):
                                    while($bizever_faq->have_posts()):
                                        $bizever_faq->the_post();

                            ?>

                            <li>
                                <a href="#"><?php the_title(); ?></a>
                                <?php the_content(); ?>
                            </li>

                        <?php endwhile; endif; wp_reset_query(); ?>
                        </ul>
                    </div>
                </div>
                <div class="col-12">
                    <div class="faq-pagination">
                        <?php echo paginate_links( array(
                            'total'     => $bizever_faq->max_num_pages,
                            'prev_text'    => '<span class="fa fa-angle-left"></span', 
                            'next_text'     => '<span class="fa fa-angle-right"></span'
                        ) ); ?>
                    </div>
                </div>      
            </div>
        </div>
    </section><!--/FAQ Area-->

<?php get_footer(); ?>
    <?php 
    
    /*
    * Template Name: Services
    */  
    
get_header(); ?>

    <!--breadcrumb area-->
        <?php get_template_part( 'template-parts/breadcrumb' ); ?>

   
    <!--/breadcrumb area-->

    <!--services Area-->
    <section class="services-area section-padding-3">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 centered wow fadeInUp" data-wow-delay="0.3s">
                    <div class="section-title">
                        <?php if(get_field('what_we_offer_title')): ?>
                        <h2><?php the_field('what_we_offer_title'); ?></h2>
                    <?php endif; ?>
                    </div>
                </div>
            </div>

            <?php if( have_rows('all_offer') ): ?>
            <div class="row">
                <?php while(have_rows('all_offer') ): the_row();
                    $offer_title = get_sub_field('offer_heading');
                    $offer_text = get_sub_field('offer_text');
                    $offer_icon = get_sub_field('offer_icon');

                 ?>

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="single-service">
                        <div class="service-icon">
                            <i class="<?php echo $offer_icon; ?>"></i>
                        </div>
                        <div class="service-content">
                            <h4><a href="#"><?php echo $offer_title; ?></a></h4>
                            <p><?php echo $offer_text;  ?></p>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>

            </div>

        <?php endif; ?>
        </div>
    </section><!--/services Area-->


    <?php if(get_field('do_you_want_to_show_pricing') == 'Yes') : ?>;
    
    <!--Pricing Area-->
    <section class="pricing-area section-padding-2 gray-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 centered wow fadeInUp" data-wow-delay="0.3s">
                    <div class="section-title">
                        <h4><?php the_field('pricing_sub_title'); ?></h4>
                        <h2 class="cl-black"><?php the_field('pricing_title'); ?></h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <?php 
                    $pricing = new WP_Query(array(
                        'post_type'     => 'bizever-pricing', 
                        'posts_per_page'    => 3
                    ));
                    if($pricing->have_posts()): 
                        while($pricing->have_posts()): 
                            $pricing->the_post();
                ?>

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="single-pricing price-primary">
                        <i class="flaticon-flag"></i>
                        <h1><span><?php the_field('curreny_symbol'); ?></span><?php the_field('pricing_amount'); ?><b>/<?php the_field('monthly_or_yearly'); ?></b></h1>
                        <h2><?php the_title(); ?></h2>
                        <?php the_content(); ?>
                        <a href="<?php esc_url(the_field('pricing_button_link')); ?>" class="bttn-small btn-emt"><?php esc_html(the_field('pricin_buton_text')); ?></a>
                    </div>
                </div>
                <?php  
                    endwhile;
                endif;
                wp_reset_query();
                ?>

            </div>
        </div>
    </section><!--/Pricing Area-->

<?php endif; ?>
    
    <?php if(get_field('services_post_show_hide') == 'Yes'): ?>
    <!-- Growth Area -->
    <section class="growth-stat section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-6 centered wow fadeInUp" data-wow-delay="0.3s">
                    <div class="section-title">
                        <h4>Business Statics</h4>
                        <h2>Growth is Important In Business</h2>
                    </div>
                </div>
            </div>
            <div class="row mb-30">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0.4s">
                    <img src="assets/images/stat-1.jpg" alt="">
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="growth-content">
                        <h3>Compound Growth Rates</h3>
                        <p>Excited him now natural saw passage offices you minuter. At by asked being court hopes. Farther so friends am to detract. Forbade concern do private be. Offending residence but men engrossed shy. Pretend am earnest offered arrived company so on.</p>
                        <a href="#" class="bttn-small btn-fill">Read More</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 order-2 order-xl-1 order-lg-1 order-md-1 order-sm-2 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="growth-content">
                        <h3>Complex Statics Rates</h3>
                        <p>Excited him now natural saw passage offices you minuter. At by asked being court hopes. Farther so friends am to detract. Forbade concern do private be. Offending residence but men engrossed shy. Pretend am earnest offered arrived company so on.</p>
                        <a href="#" class="bttn-small btn-fill">Read More</a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 order-1 order-xl-2 order-lg-2 order-md-2 order-sm-1 wow fadeInUp" data-wow-delay="0.4s">
                    <img src="assets/images/stat-2.jpg" alt="">
                </div>
            </div>
        </div>
    </section><!-- /Growth Area -->
<?php endif; ?>


<?php get_footer(); ?>
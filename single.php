<?php get_header(); ?>
    <!--breadcrumb area-->
<?php get_template_part( 'template-parts/breadcrumb'); ?>
    <!--/breadcrumb area-->

    <!--Blog Area-->
    <section class="blog-area section-padding-2">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 wow fadeInUp" data-wow-delay="0.4s">
                    <?php 
                        while(have_posts()):the_post();
                    ?>
                    <div class="blog-details">

                        <?php 
                            if(has_post_thumbnail()){
                                the_post_thumbnail( 'bizever-blogdetails-thumb');
                            }
                         ?>
                        <div class="blog-meta">
                            <span><a href="#"><i class="flaticon-calendar"></i>10/04/2019</a></span>
                            <span><a href="#"><i class="flaticon-heart"></i>14</a></span>
                            <span><a href="#"><i class="flaticon-chat"></i>3</a></span>
                        </div>
                        <h2><?php the_title(); ?></h2>
                        <?php the_content(); ?>
                      
                    </div>
                    <div class="post-share-and-tag row">
                        <div class="col-xl-7 col-lg-7 col-md-6">
                            <div class="tags">
                                <span><i class="fa fa-tags"></i></span>
                                <a href="#">Business</a>, 
                                <a href="#">Financial</a>,
                                <a href="#">Advice</a>,
                                <a href="#">Marketing</a>,
                                <a href="#">Planning</a>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 col-md-6">
                            <div class="social">
                                <span><i class="fa fa-share-alt"></i></span>
                                <a href="#" class="cl-facebook"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="cl-twitter"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="cl-youtube"><i class="fa fa-youtube-play"></i></a>
                                <a href="#" class="cl-pinterest"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="blog-all-comments">
                        <h3 class="wow fadeInUp" data-wow-delay="0.3s">04 Comments</h3>
                        <div class="blog-comments wow fadeInUp" data-wow-delay="0.4s">
                            <div class="author-thumb">
                                <img src="assets/images/commenter1.png" alt="" />
                            </div>
                            <div class="author-comments">
                                <div class="author-details">                                
                                    <h4>Will Marvin</h4>
                                    <div class="comment-reply-btn">
                                        <a href="#"><i class="fa fa-share"></i>Reply</a>
                                    </div>
                                </div>
                                <div class="author-designation">
                                    1 day ago
                                </div>
                                <p>Magnis nisl lectus velit parturient vitae, suspendisse fusce in variultusetvitae aenean. Hac metus dui facilisis.</p>
                            </div>
                        </div>
                        <div class="blog-comments wow fadeInUp" data-wow-delay="0.5s">
                            <div class="author-thumb">
                                <img src="assets/images/commenter2.png" alt="" />
                            </div>
                            <div class="author-comments">
                                <div class="author-details">                                
                                    <h4>Mae Hayes</h4>
                                    <div class="comment-reply-btn">
                                        <a href="#"><i class="fa fa-share"></i>Reply</a>
                                    </div>
                                </div>
                                <div class="author-designation">
                                    1 day ago
                                </div>
                                <p>Magnis nisl lectus velit parturient vitae, suspendisse fusce in variultusetvitae aenean. Hac metus dui facilisis.</p>
                            </div>
                        </div>
                    </div>


                    <div class="blog-all-comments mb-60">
                        <div class="blog-comments wow fadeInUp" data-wow-delay="0.3s">
                            <div class="author-thumb">
                                <img src="assets/images/commenter3.png" alt="" />
                            </div>
                            <div class="author-comments">
                                <div class="author-details">                                
                                    <h4>Taylor Johns</h4>
                                    <div class="comment-reply-btn">
                                        <a href="#"><i class="fa fa-share"></i>Reply</a>
                                    </div>
                                </div>
                                <div class="author-designation">
                                    1 day ago
                                </div>
                                <p>Magnis nisl lectus velit parturient vitae, suspendisse fusce in variultusetvitae aenean. Hac metus dui facilisis.</p>
                            </div>
                        </div>
                        <div class="blog-comments wow fadeInUp" data-wow-delay="0.4s">
                            <div class="author-thumb">
                                <img src="assets/images/commenter2.png" alt="" />
                            </div>
                            <div class="author-comments">
                                <div class="author-details">                                
                                    <h4>Mae Hayes</h4>
                                    <div class="comment-reply-btn">
                                        <a href="#"><i class="fa fa-share"></i>Reply</a>
                                    </div>
                                </div>
                                <div class="author-designation">
                                    1 day ago
                                </div>
                                <p>Magnis nisl lectus velit parturient vitae, suspendisse fusce in variultusetvitae aenean. Hac metus dui facilisis.</p>
                            </div>
                        </div>
                    </div>


                    <div class="blog-comment-form wow fadeInUp" data-wow-delay="0.3s">
                        <h3>Leave a Comment</h3>
                        <form action="#">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" placeholder="Name*" required />
                                </div>
                                <div class="col-md-6">
                                    <input type="email" placeholder="Email*" required />
                                </div>
                                <div class="col-md-12">
                                    <textarea rows="6" placeholder="Message"></textarea>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit">Post Comment</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            <?php endwhile; ?>

                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.4s">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
    </section><!--/Blog Area-->

    <?php get_footer(); ?>
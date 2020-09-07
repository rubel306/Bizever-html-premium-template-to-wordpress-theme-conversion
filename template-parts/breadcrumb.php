    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12">
                    <div class="banner-title">
                        <?php if(is_home()): ?>
                            <h2>Blog</h2>
                        <?php else: ?>
                            <h2><?php the_title(); ?></h2>
                    <?php endif; ?>
                    </div>
                   <!--  <ul>
                        <li><a href="#">Home</a></li>
                        <li>Blog</li>
                    </ul> -->
                </div>
            </div>
        </div>
    </section>
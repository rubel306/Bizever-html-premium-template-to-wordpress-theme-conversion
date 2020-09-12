<div class="site-sidebar">
    <?php 
        if(is_active_sidebar( 'right-sidebar' )){
            dynamic_sidebar( 'right-sidebar' );
        } 
    ?>

    <div class="single-sidebar">
        <h3>Follow us</h3>
        <div class="social-follow">
            <a href="#" class="facebook-bg"><i class="fa fa-facebook"></i>158K</a>
            <a href="#" class="twitter-bg"><i class="fa fa-twitter"></i>588K</a>
            <a href="#" class="instagram-bg"><i class="fa fa-instagram"></i>545K</a>
        </div>
    </div>
</div>
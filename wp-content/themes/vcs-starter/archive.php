<?php
    // calling  header.php
    get_header(); 
?>

<!-- start banner Area -->
<section class="banner-area relative" id="home">	
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    <?php echo single_cat_title(); ?>				
                </h1>	
                <p class="text-white link-nav">
                    <a href="<?php echo home_url(); ?>"><?php _e('Home'); ?></a>  
                    <span class="lnr lnr-arrow-right"></span>  
                    <a href="blog-home.html"> <?php echo single_cat_title(); ?></a>
                </p>
            </div>											
        </div>
    </div>
</section>
<!-- End banner Area -->	

<?php
    // calling footer
    get_footer();
?>
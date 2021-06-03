<?php
    // calling  header.php
    get_header(); 
?>

<!-- start banner Area -->
<section class="banner-area relative" id="home" 
style="background-image: url(<?php echo get_field('ci_image', get_queried_object())['sizes']['large'];  ?>)">	
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    <?php echo single_cat_title(); ?>				
                </h1>	
                <p class="text-white link-nav">
                    <a href="<?php echo home_url(); ?>">
                        <?php _e('Home'); ?>
                    </a>  
                    <span class="lnr lnr-arrow-right"></span>  
                    <a href="blog-home.html"> 
                        <?php echo single_cat_title(); ?>
                    </a>
                </p>
            </div>											
        </div>
    </div>
</section>
<!-- End banner Area -->

<!-- Start blog-posts Area -->
<section class="blog-posts-area section-gap">
				<div class="container">
					<div class="row">
                        <div class="col-lg-8 post-list blog-post-list">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <div class="single-post">
                        <a href="<?php the_permalink(); ?>">
                            <img class="img-fluid" src="<?php the_post_thumbnail_url('medium')?>" alt="<?php the_title(); ?>">
                        </a>
                            <div class="tags">
                                <?php get_the_category_list();?>
                            </div>
                            <a href="<?php the_permalink(); ?>">
                                <h1>
                                    <?php the_title(); ?>
                                </h1>
                            </a>
                            <p>
                                <?php the_excerpt(); ?>
                            </p>
                            <a href="<?php the_permalink(); ?>"><?php _e('Read More'); ?></a>
                            <div class="bottom-meta">
                                <div class="user-details row align-items-center">
                                    <div class="comment-wrap col-lg-6">
                                        <ul>
                                            <li><a href="#"><span class="lnr lnr-heart"></span>	4 likes</a></li>
                                            <li><a href="#"><span class="lnr lnr-bubble"></span> 06 Comments</a></li>
                                        </ul>
                                    </div>
                                    <div class="social-wrap col-lg-6">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                        </ul>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    endwhile;
                    endif;
                    ?>
                    <?php
                         $args = array(
                            'prev_text'          => __( '&laquo; Previous' ),
                            'next_text'          => __( 'Next &raquo;' )
                        );

                        echo paginate_links($args);
                    ?>
</div>
            <div class="col-lg-4 sidebar">
                <div class="single-widget search-widget">
                    <form class="example" action="#" style="margin:auto;max-width:300px">
                        <input type="text" placeholder="Search Posts" name="search2">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>								
                </div>

                <div class="single-widget protfolio-widget">
                    <img src="img/blog/user2.jpg" alt="">
                    <a href="#"><h4>Adele Gonzalez</h4></a>
                    <p>
                        MCSE boot camps have its supporters and
                        its detractors. Some people do not understand why you should have to spend money
                        on boot camp when you can get.
                    </p>
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                    </ul>								
                </div>

                <div class="single-widget category-widget">
                    <h4 class="title">Post Categories</h4>
                    <ul>
                        <li><a href="#" class="justify-content-between align-items-center d-flex"><h6>Techlology</h6> <span>37</span></a></li>
                        <li><a href="#" class="justify-content-between align-items-center d-flex"><h6>Lifestyle</h6> <span>24</span></a></li>
                        <li><a href="#" class="justify-content-between align-items-center d-flex"><h6>Fashion</h6> <span>59</span></a></li>
                        <li><a href="#" class="justify-content-between align-items-center d-flex"><h6>Art</h6> <span>29</span></a></li>
                        <li><a href="#" class="justify-content-between align-items-center d-flex"><h6>Food</h6> <span>15</span></a></li>
                        <li><a href="#" class="justify-content-between align-items-center d-flex"><h6>Architecture</h6> <span>09</span></a></li>
                        <li><a href="#" class="justify-content-between align-items-center d-flex"><h6>Adventure</h6> <span>44</span></a></li>
                    </ul>
                </div>

                <div class="single-widget recent-posts-widget">
                    <h4 class="title">Recent Posts</h4>
                    <div class="blog-list ">
                        <div class="single-recent-post d-flex flex-row">
                            <div class="recent-thumb">
                                <img class="img-fluid" src="img/blog/r1.jpg" alt="">
                            </div>
                            <div class="recent-details">
                                <a href="blog-single.html">
                                    <h4>
                                        Home Audio Recording
                                        For Everyone
                                    </h4>
                                </a>
                                <p>
                                    02 hours ago
                                </p>
                            </div>
                        </div>	
                        <div class="single-recent-post d-flex flex-row">
                            <div class="recent-thumb">
                                <img class="img-fluid" src="img/blog/r2.jpg" alt="">
                            </div>
                            <div class="recent-details">
                                <a href="blog-single.html">
                                    <h4>
                                        Home Audio Recording
                                        For Everyone
                                    </h4>
                                </a>
                                <p>
                                    02 hours ago
                                </p>
                            </div>
                        </div>	
                        <div class="single-recent-post d-flex flex-row">
                            <div class="recent-thumb">
                                <img class="img-fluid" src="img/blog/r3.jpg" alt="">
                            </div>
                            <div class="recent-details">
                                <a href="blog-single.html">
                                    <h4>
                                        Home Audio Recording
                                        For Everyone
                                    </h4>
                                </a>
                                <p>
                                    02 hours ago
                                </p>
                            </div>
                        </div>	
                        <div class="single-recent-post d-flex flex-row">
                            <div class="recent-thumb">
                                <img class="img-fluid" src="img/blog/r4.jpg" alt="">
                            </div>
                            <div class="recent-details">
                                <a href="blog-single.html">
                                    <h4>
                                        Home Audio Recording
                                        For Everyone
                                    </h4>
                                </a>
                                <p>
                                    02 hours ago
                                </p>
                            </div>
                        </div>																																					
                    </div>								
                </div>

                <div class="single-widget category-widget">
                    <h4 class="title">Post Archive</h4>
                    <ul>
                        <li><a href="#" class="justify-content-between align-items-center d-flex"><h6>Dec '17</h6> <span>37</span></a></li>
                        <li><a href="#" class="justify-content-between align-items-center d-flex"><h6>Nov '17</h6> <span>24</span></a></li>
                        <li><a href="#" class="justify-content-between align-items-center d-flex"><h6>Oct '17</h6> <span>59</span></a></li>
                        <li><a href="#" class="justify-content-between align-items-center d-flex"><h6>Sep '17</h6> <span>29</span></a></li>
                        <li><a href="#" class="justify-content-between align-items-center d-flex"><h6>Aug '17</h6> <span>15</span></a></li>
                        <li><a href="#" class="justify-content-between align-items-center d-flex"><h6>Jul '17</h6> <span>09</span></a></li>
                        <li><a href="#" class="justify-content-between align-items-center d-flex"><h6>Jun '17</h6> <span>44</span></a></li>
                    </ul>
                </div>			

                <div class="single-widget tags-widget">
                    <h4 class="title">Tag Clouds</h4>
                        <ul>
                        <li><a href="#">Lifestyle</a></li>
                        <li><a href="#">Art</a></li>
                        <li><a href="#">Adventure</a></li>
                        <li><a href="#">Food</a></li>
                        <li><a href="#">Techlology</a></li>
                        <li><a href="#">Fashion</a></li>
                        <li><a href="#">Architecture</a></li>
                        <li><a href="#">Food</a></li>
                        <li><a href="#">Technology</a></li>
                        </ul>
                </div>				

            </div>
        </div>
    </div>	
</section>
<!-- End blog-posts Area -->                    

<?php
    // calling footer
    get_footer();
?>
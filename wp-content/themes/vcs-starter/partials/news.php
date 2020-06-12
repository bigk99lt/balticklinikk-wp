<!-- Start blog Area -->
<section class="blog-area section-gap" id="blog">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 pb-30 header-text">
                <h1><?php the_field('hh_section_heading'); ?></h1>
                <div>
                    <?php the_field('hh_section_content'); ?>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
                $args = [
                    'cat' => get_field('hh_posts_category'),
                    'posts_per_page' => get_field('hh_limit')
                ];

                $result = new WP_Query($args);
                // print_r($result);

                
                if ($result->have_posts() ) {
                    while ($result->have_posts() ) {
                        $result->the_post(); 
                        ?>
                             <div class="single-blog col-lg-4 col-md-4" style="margin: 3% 5%">
                                <div class="thumb" style="margin: 1% 0">
                                    <a href="<?php the_permalink(); ?>">
                                        <img class="f-img img-fluid mx-auto" src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>">	
                                    </a>
                                </div>
                                <div class="bottom d-flex justify-content-between align-items-center flex-wrap">
                                    <div>
                                        <a href="<?php echo get_author_posts_url($post->post_author); ?>"><span><?php the_author_meta('nickname', $post->post_author); ?></span></a>
                                        <img class="img-fluid" src="<?php get_avatar_url($post, ['size'=>30]); ?>" alt="">
                                    </div>
                                    <div class="meta">
                                        <?php echo get_the_date('jS F'); ?>
                                        <span class="lnr lnr-heart"></span> 15
                                        <span class="lnr lnr-bubble"></span> <?php wp_count_comments($posts->ID)->approved; ?> 
                                    </div>
                                </div>							
                                <a href="<?php the_permalink();?>">
                                    <h4><?php the_title(); ?></h4>
                                </a>
                                <p>
                                    <?php the_excerpt(); ?> 
                                    <a href="<?php the_permalink(); ?>"><?php _e('Read More...', 'vcs-starter'); ?> </a>   
                                </p>
                            </div>
                <?php
                     }
                }

                wp_reset_postdata(); //atstato uzklausa i pradine kuri buvo naudojama kraunant puslapi
            ?>
        </div>
    </div>	
</section>
<!-- end blog Area -->	
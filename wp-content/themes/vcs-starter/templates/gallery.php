<?php

/* Template Name: Gallery */

get_header();

?>


<!-- Start Point -->

<section class="photo-gallery">
    <div class="container">
        <h1>
            <?php the_field('gallery_title');?>
        </h1>
        <div class="fancybox">
            <?php
                if( have_rows('gallery_repeater_no') ):
                    while ( have_rows('gallery_repeater_no') ) : the_row();
                        $imageBig = get_sub_field('big_picture');
                        $imageSmall = get_sub_field('small_picture');
                        ?>
                            <a data-fancybox="gallery" href="<?php echo $imageBig['url']; ?>"><img src="<?php echo $imageSmall['url']; ?>" style="%;"></a>
                        <?php
                    endwhile;
                endif;
            ?>    
                <!-- <a data-fancybox="gallery" href="assets/images/naujos_03.2020/2.1.jpg"><img src="assets/images/naujos_03.2020/2.1-crop.jpg"></a>
                <a data-fancybox="gallery" href="assets/images/naujos_03.2020/4.1.jpg"><img src="assets/images/naujos_03.2020/4.1-crop.jpg"></a>
                <a data-fancybox="gallery" href="assets/images/naujos_03.2020/5.1.jpg"><img src="assets/images/naujos_03.2020/5.1-crop.jpg"></a>
                <a data-fancybox="gallery" href="assets/images/naujos_03.2020/6.jpg"><img src="assets/images/naujos_03.2020/6-crop.jpg"></a>
                <a data-fancybox="gallery" href="assets/images/naujos_03.2020/9.1.jpg"><img src="assets/images/naujos_03.2020/9.1-crop.jpg"></a>
                <a data-fancybox="gallery" href="assets/images/naujos_03.2020/13.1.jpg"><img src="assets/images/naujos_03.2020/13.1-crop.jpg"></a>
                <a data-fancybox="gallery" href="assets/images/naujos_03.2020/18.jpg"><img src="assets/images/naujos_03.2020/18-crop.jpg"></a>
                <a data-fancybox="gallery" href="assets/images/naujos_03.2020/21.jpg"><img src="assets/images/naujos_03.2020/21-crop.jpg"></a>
                <a data-fancybox="gallery" href="assets/images/naujos_03.2020/26.jpg"><img src="assets/images/naujos_03.2020/26-crop.jpg"></a>
                <a data-fancybox="gallery" href="assets/images/naujos_03.2020/83913594_116381079778202_7996214049761132544_n.jpg"><img src="assets/images/naujos_03.2020/83913594_116381079778202_7996214049761132544_n-crop.jpg"></a> -->
        </div>
    </div>
</section>
 
 <!-- End Point -->

 


<?php get_footer(); ?>
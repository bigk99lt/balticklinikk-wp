<?php

/* Template Name: Staff*/

get_header();

?>

<!-- Start Point -->
 <!-- STAFF SECTION BEGINS -->
 <section class="staff">
        <div class="container">
            <h1>
                <?php the_field('title_staff_no'); ?>
            </h1>

                <?php 
                    if( have_rows('staff_repeater_no') ):
                        while ( have_rows('staff_repeater_no') ) : the_row();
                        $image = get_sub_field('picture');
                        ?>
                            <div class="justinas">
                                <div class="justinas-picture" 
                                style="background-image: url(<?php echo get_sub_field('picture')['sizes']['large']; ?>)"> 
                                </div>
                                <div class="justinas-background">
                                    <h2>
                                        <?php the_sub_field('name');?>
                                    </h2>
                                    <div>
                                        <?php the_sub_field('position');?>
                                    </div>                            
                                </div>
                            </div>
                            <?php
                        endwhile;
                    endif;
                ?>                        
                
            
            <!-- <div class="dentist">
                <div class="dentist-picture">
                </div>
                <div class="dentist-background">
                    <h2>
                        Pooyan Ghiasifard 
                    </h2>
                    <div>
                        Tannlege
                    </div>                            
                </div>                       
            </div>

            <div class="monika">                        
                <div class="monika-picture"> 
                </div>
                <div class="monika-background">
                    <h2>
                        Monika Navalinskaitė
                    </h2>
                    <div>
                        Tannpleier og assistent  
                    </div>                            
                </div>
            </div>

            <div class="donatas">                        
                <div class="donatas-picture"> 
                </div>
                <div class="donatas-background">
                    <h2>
                        Donatas Nomeika
                    </h2>
                    <div>
                        Tannkirurg 
                    </div>                            
                </div>
            </div> -->
        </div>
    </section>
<!-- STAFF SECTION ENDS -->


 <!-- End Point -->


<?php get_footer(); ?>
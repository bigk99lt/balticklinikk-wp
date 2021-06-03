<?php

/* Template Name: Prices*/

get_header();

?>

<!-- Start Point -->

 <!-- PRICES BEGINS -->
 <section class="prices">
        <div class="container">
            <h1>
                <?php the_field('no_prices_main_title');?>
            </h1>
            <div class="price-title flex_container">
                <h2 class="price-name">
                    <?php the_field('no_prices_service_title');?>
                </h2>
                <h2 class="price-number">
                    <?php the_field('no_prices_price_title'); ?>
                </h2>
            </div>
            <div class="price-container flex_container">
                <div class="pricing">
                    <?php
                        if( have_rows('no_prices_prices_repeater') ):
                            while ( have_rows('no_prices_prices_repeater') ) : the_row();
                                ?>
                                    <ul class="basic">
                                        <li> <?php the_sub_field('service_type'); ?> </li>
                                        <li> <?php the_sub_field('price'); ?> </li>
                                    </ul>
                                <?php
                            endwhile;
                        endif;
                    ?>
                    
                    <!-- Service Group 1 -->
                    <h3>
                        <?php the_field('service_group_1');?>
                    </h3>
                    <?php
                        if( have_rows('price_group_1_repeater_no') ):
                            while ( have_rows('price_group_1_repeater_no') ) : the_row();
                                ?>
                                    <ul class="basic">
                                        <li> <?php the_sub_field('service'); ?> </li>
                                        <li> <?php the_sub_field('price'); ?> </li>
                                    </ul>
                                <?php
                            endwhile;
                        endif;
                    ?>

                    <!-- Service Group 2 -->
                    <h3>
                        <?php the_field('service_group_2_no'); ?>
                    </h3>
                    <?php
                        if( have_rows('price_group_2_repeater_no') ):
                            while ( have_rows('price_group_2_repeater_no') ) : the_row();
                                ?>
                                    <ul class="basic">
                                        <li> <?php the_sub_field('service'); ?> </li>
                                        <li> <?php the_sub_field('price'); ?> </li>
                                    </ul>
                                <?php
                            endwhile;
                        endif;
                    ?>

                    <!-- Service Group 3 -->
                    <h3>
                        <?php the_field('service_group_3'); ?>
                    </h3>
                    <?php
                        if( have_rows('price_group_3_repeater_no') ):
                            while ( have_rows('price_group_3_repeater_no') ) : the_row();
                                ?>
                                    <ul class="basic">
                                        <li> <?php the_sub_field('service'); ?> </li>
                                        <li> <?php the_sub_field('price'); ?> </li>
                                    </ul>
                                <?php
                            endwhile;
                        endif;
                    ?>

                    <!-- Service Group 4 -->
                    <h3>
                        <?php the_field('service_group_4'); ?>
                    </h3>
                    <?php
                        if( have_rows('price_group_4_repeater_no') ):
                            while ( have_rows('price_group_4_repeater_no') ) : the_row();
                                ?>
                                    <ul class="basic">
                                        <li> <?php the_sub_field('service'); ?> </li>
                                        <li> <?php the_sub_field('price'); ?> </li>
                                    </ul>
                                <?php
                            endwhile;
                        endif;
                    ?>

                    <!-- Service Group 5 -->
                    <h3>
                        <?php the_field('service_group_5'); ?>
                    </h3>
                    <?php
                        if( have_rows('price_group_5_repeater_no') ):
                            while ( have_rows('price_group_5_repeater_no') ) : the_row();
                                ?>
                                    <ul class="basic">
                                        <li> <?php the_sub_field('service'); ?> </li>
                                        <li> <?php the_sub_field('price'); ?> </li>
                                    </ul>
                                <?php
                            endwhile;
                        endif;
                    ?>

                    <!-- Service Group 6 -->
                    <h3>
                        <?php the_field('service_group_6'); ?>
                    </h3>
                    <?php
                        if( have_rows('price_group_6_repeater_no') ):
                            while ( have_rows('price_group_6_repeater_no') ) : the_row();
                                ?>
                                    <ul class="basic">
                                        <li> <?php the_sub_field('service'); ?> </li>
                                        <li> <?php the_sub_field('price'); ?> </li>
                                    </ul>
                                <?php
                            endwhile;
                        endif;
                    ?>

                    <!-- Service Group 7 -->
                    <h3>
                        <?php the_field('service_group_7'); ?>
                    </h3>
                    <?php
                        if( have_rows('price_group_7_repeater_no') ):
                            while ( have_rows('price_group_7_repeater_no') ) : the_row();
                                ?>
                                    <ul class="basic">
                                        <li> <?php the_sub_field('service'); ?> </li>
                                        <li> <?php the_sub_field('price'); ?> </li>
                                    </ul>
                                <?php
                            endwhile;
                        endif;
                    ?>

                    <!-- Service Group 8 -->
                    <h3>
                        <?php the_field('service_group_8'); ?>
                    </h3>
                    <?php
                        if( have_rows('price_group_8_repeater_no') ):
                            while ( have_rows('price_group_8_repeater_no') ) : the_row();
                                ?>
                                    <ul class="basic">
                                        <li> <?php the_sub_field('service'); ?> </li>
                                        <li> <?php the_sub_field('price'); ?> </li>
                                    </ul>
                                <?php
                            endwhile;
                        endif;
                    ?>
                        
                 
                    <div style="margin: 30px 0;
                                font-size: 0.7rem;
                                color: red;">
                        ! Ikke-møtt eller avbestilt senere enn 24 timer før 700,-
                        ! Trenger du akkut hjelp eller vanlig tannbehandlingen på kvelden og i helgene – betaler du dobbel pris av vanlig prisen. Det gjelder helligdager også. 
                    </div>
                    <div style="margin: 50px 0 0 0;
                                font-size: 0.7rem;
                                color: red;">
                        *Prisen kan variere
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- PRICES ENDS -->


<?php get_footer(); ?>
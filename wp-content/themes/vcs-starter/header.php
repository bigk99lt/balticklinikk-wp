<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset=" <?php bloginfo('charset'); ?> ">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php wp_title(); ?></title>
    <?php 
        wp_head(); 
    ?>
    
</head>
<body>
<!-- HEADER STARTS -->
<header>
    <div class="container flex_container">
        <div class="lang">
        <?php

            if( have_rows('ho_language_menu_repeater', 'options') ):
                while ( have_rows('ho_language_menu_repeater', 'options') ) : the_row();
                    $link = get_sub_field('link');
                    $image = get_sub_field('icon');
                    ?>
                        <a href="<?php echo $link['url']; ?>">
                            <img src="<?php echo $image['url']; ?>" alt="norwegian_flag">
                        </a>
                    <?php
                endwhile;
            endif;

            ?>
        </div>
        <div class="social">
            <ul >
                <li style="display: flex;">
                    <?php
                        if( have_rows('ho_social_menu_repeater', 'options') ):
                            while ( have_rows('ho_social_menu_repeater', 'options') ) : the_row();
                                $link = get_sub_field('link');
                                $image = get_sub_field('icon');
                                ?>
                                    <a href="<?php echo $link['url']; ?>">
                                        <img src="<?php echo $image['url']; ?>" alt="social_icon">
                                    </a>
                                <?php
                            endwhile;
                        endif;
                    ?>    
                </li>
                <li>
                    <a href="tel: <?php the_field('ho_phone', 'options'); ?>"><?php the_field('ho_phone', 'options'); ?></a>
                </li>
                <li>
                    <?php
                    if( have_rows('ho_email_repeater', 'options') ):
                        while ( have_rows('ho_email_repeater', 'options') ) : the_row();
                        $image = get_sub_field('icon');
                        ?>
                                <a href="mailto:<?php the_field('email_no');?>">
                                    <img src="<?php echo $image['url']; ?>" alt="email_icon">
                                </a>
                            <?php
                        endwhile;
                    endif;
                    ?> 
                </li>
            </ul>
        </div>
    </div>
</header>
<!-- HEADER ENDS -->

 <!-- NAVIGATION STARTS -->
 <nav class="navigation">
        <div class="container flex_container">
            <div class="title">
                <?php

                    // get_field('field_name) - reiksme grazina
                    // the_field('field_name) - reiksme atspausdina

                    $image = get_field('logo', 'option');
                    // echo "<pre>";
                    // print_r($image);
                    // echo "</pre>";
                ?>
                <a href=" <?php echo home_url(); ?> ">
                    <img src="<?php echo $image['sizes']['logo']; ?>" alt="<?php bloginfo('name'); ?>">
                </a>
            </div>
            <nav class="menu">
                <?php 
                    $args = [
                        'container' => false,
                        'menu_class' => 'nav',
                        'theme_location' => 'primary-navigation'
                    ];

                    wp_nav_menu($args);
                ?>
                <div class="burger">
                    Menu
                </div>
            </nav>
        </div>
    </nav>
    <!-- NAVIGATION ENDS -->
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
    <!-- JQUERY OPACITY CHANGE ON SCROLL (IF CLIENT DESIRES IN THE FUTURE) -->
    <!-- <div class="op">
        <i class="fas fa-arrow-down"></i>
    </div> -->
<!-- HEADER STARTS -->
<header>
    <div class="container flex_container">
            <div class="lang">
                <a href="index.html">
                    <img src="assets/icons/norway.png" alt="norwegian_flag">
                </a>
                <a href="index_en.html">
                    <img src="assets/icons/united-kingdom.svg" alt="british_flag">
                </a>
                <a href="index_lt.html">
                    <img src="assets/icons/lithuania.svg" alt="lithuanian_flag">
                </a>
                <a href="index_pl.html">
                    <img src="assets/icons/poland.svg" alt="polish_flag">
                </a>
                <a href="index_ru.html">
                    <img src="assets/icons/russia.svg" alt="russian_flag">
                </a>
                
            </div>
            <div class="social">
                <ul>
                    <li>
                        <a href="https://www.facebook.com/baltic.tannklinikk.9" target="_blank">
                            <img src="assets/icons/facebook2.svg" alt="facebook_icon">
                        </a>
                        <a href="https://www.instagram.com/baltictannklinikk/" target="_blank">
                            <img src="assets/icons/instagram-logo.svg" alt="instagram_icon">    
                        </a>
                    </li>
                    <li>
                        <a href="tel:+4741341010">+4741341010</a>
                    </li>
                    <li>
                        <a href="mailto:info@baltictannklinikk.no">
                            <img src="assets/icons/envelope2.svg" alt="envelope_icon" class="env">
                        </a>
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
                <!-- <ul class="nav">
                    <li>
                        <a href="about.html">Om Oss</a>
                    </li>
                    <li>
                        <a href="prices.html">Pris</a>
                    </li>
                    <li>
                        <a href="staff.html">Spesialister</a>
                    </li>
                    <li>
                        <a href="reviews.html">Anmeldelser</a>
                    </li>
                    <li>
                        <a href="gallery.html">Galleri</a>
                    </li>
                    <li>
                        <a href="contacts.html">Kontakter</a>
                    </li>
                </ul> -->
            </nav>
        </div>
    </nav>
    <!-- NAVIGATION ENDS -->
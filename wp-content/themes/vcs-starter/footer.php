<!-- FOOTER STARTS -->
<footer>
    <div class="flex_container">
        <ul>
            <li>
                <?php the_field('title_footer', 'options');?>
            </li>
            <li>
               <?php echo get_field('address_footer', 'options');?>
            </li>
            <li>
                <a href="tel: <?php the_field('phone_footer', 'options')?>"><?php the_field('phone_footer', 'options')?></a>
                <br>
                <a href="mailto:<?php the_field('email_footer', 'options');?>"><?php the_field('email_footer', 'options');?></a>
            </li>
            <li>
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
                Made by Karolis
            </li>
        </ul>
    </div>        
</footer>
<!-- FOOTER ENDS -->

<?php 
    wp_footer();
?>

</body>
</html>

<!-- SERVICES STARTS -->
<section class="services">
    <div class="container">
        <div class="serv_title">
            <h2>
                <?php the_field('hh_services_title_en');?>
            </h2>
        </div>
        <div class="serv_list">
            <ul>
                <?php

                // check if the repeater field has rows of data
                if( have_rows('hh_services_repeater_en') ):

                    // loop through the rows of data
                    while ( have_rows('hh_services_repeater_en') ) : the_row();
                        ?>
                            <li>
                                <div>
                                    <?php the_sub_field('service'); ?>
                                </div>
                            </li>
                        <?php
                    endwhile;
                endif;

                ?>
            </ul>

        </div>
        <?php
            $link = get_field('hh_services_link_en');
        ?>
        <div class="serv_expand">
            <a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>" >
                <?php echo $link['title']; ?>
            </a>
        </div>
    </div>
</section>
<!-- SERVICES ENDS -->

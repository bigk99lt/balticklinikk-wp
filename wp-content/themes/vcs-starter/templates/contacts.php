<?php

/* Template Name: Contacts */

get_header();

?>


<!-- Start Point -->
     <!-- CONTACTS STARTS -->
     <section class="contact-page">
        <div class="container">
            <h1>
                <?php the_field('title_contacts_no');?>
            </h1>
            <div class="contact-info">
                <div class="address">
                    adresse:            
                </div>
                <div>
                    <strong>Baltic TANNKLINIKK</strong> 
                </div>
                <div>
                    <?php the_field('address_contacts_no');?>
                </div>
                <div class="hop">
                        Åpningstider:
                    <div>
                        <?php the_field('hours_of_operation_contacts_no');?>
                    </div>
                </div>                
                <div class="phone-nr">
                    telefonnummer: 
                    <a href="tel: <?php the_field('phone_contacts_no');?>"><?php the_field('phone_contacts_no');?></a>
                </div>
                <div class="email">
                    Email:
                    <a href="mailto:<?php the_field('email_contacts_no');?>">
                        <?php the_field('email_contacts_no');?>
                    </a> 
                </div>
            </div>
            <div class="location">
                <div class="map-title">
                    hvor finner vi oss:
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d502.59868337070276!2d10.211211695852123!3d59.74288311679539!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46413cb67abf1909%3A0x3a46233c83ba4d71!2sNedre+Storgate+29%2C+3015+Drammen%2C+Norvegija!5e0!3m2!1slt!2slt!4v1538215188887" width="1000" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>  
        </div>
    </section>
    <!-- CONTACTS ENDS -->
    
 <!-- End Point -->


<?php get_footer(); ?>
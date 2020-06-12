 <!-- MAP STARTS -->
 <section class="map container">
    <h2>
        Hvor finner vi oss 
    </h2>
    <div class="container flex_container">
        <div class="contact-info">
            <div class="address">
                adresse:            
            </div>
            <div>
                <strong> <?php the_field('hl_location_title'); ?> </strong> 
            </div>
            <div>
                Nedre Storgate 29
                <br>
                3015 Drammen
            </div>
            
            <div class="phone-nr">
                telefonnummer: 
                    <a href="tel:<?php the_field('hl_phone_number'); ?>"><?php the_field('hl_phone_number'); ?></a> 
            </div>
            <div class="email">
                Email:
                <a href="mailto:<?php the_field('hl_email'); ?>">
                    <?php the_field('hl_email'); ?>
                </a> 
            </div>
        </div>   
        <div class="location">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d502.59868337070276!2d10.211211695852123!3d59.74288311679539!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46413cb67abf1909%3A0x3a46233c83ba4d71!2sNedre+Storgate+29%2C+3015+Drammen%2C+Norvegija!5e0!3m2!1slt!2slt!4v1538215188887" width="500" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
</section>
<!-- MAP ENDS -->
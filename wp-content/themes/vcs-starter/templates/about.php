<?php
/* Template Name: Om Oss */
get_header();
?>

<!-- Start Point -->

<!-- ABOUT US BEGINS -->
<section class="our_intro">
    <div class="container">
        <div class="title">
            <h2>
                <?php the_field('no_about_title');?>
            </h2>
        </div>
        <div class="text">
            <!-- <div>
                Baltic Tannklinikk - er klinikken der dere blir tatt godt imot inn i pålitelig hender.                </div> 
            <div>
                Vårt profesjonelt lag kommer til å hjelpe dere med selvtilliten og fylle opp alle drømmene deres. 
                Våres tannleger og assistenter skal høre dere ut og anbefale det beste alternativet som vil passe til hver enkel. 
                Vi driver med alt som har med odontologi å gjøre, sjekk våres tjenester nede.
            </div>
            <div>
                Alt starter med et smil!               
            </div> -->
            <div>
                <?php the_field('no_about_text'); ?>
            </div>
            <div>
                <?php the_field('no_about_text_2'); ?>
            </div>
            <div>
                <?php the_field('no_about_text_3'); ?>
            </div>
        </div>
    </div>
    
</section>
<!-- ABOUT US ENDS -->

<?php get_footer(); ?>

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

                        // check if the repeater field has rows of data
                        if( have_rows('no_prices_prices_repeater') ):

                            // loop through the rows of data
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

                    <!-- <ul class="basic">
                        <li>Undersøkelse</li>
                        <li>599 kr</li>
                        <li>Undersøkelse etter kontrol </li>
                        <li>499 kr</li>
                        <li>Undersøkelse med behandlingsplan </li>
                        <li>799 kr</li>
                        <li>Bedøvelse</li>
                        <li>299 kr</li>
                        <li>Ett røntgen bilde  </li>
                        <li>199 kr</li>
                        <li>Rsept </li>
                        <li>100 kr</li>
                        <li>Rens + enkel tannsteinrens + polering </li>
                        <li>750 kr</li>
                        <li>Rens + enkel tannsteinrens + polering + Air-flow </li>
                        <li>950 kr</li>
                        <li>Rens per implantat</li>
                        <li>199 kr</li>
                        <li>Diverse </li>
                        <li>fra 100 kr</li>
                    </ul>
                    <h3>
                        Fylligsterapi
                    </h3>
                    <ul class="estetic">
                        <li>Kofferdammer </li>
                        <li>300 kr</li>
                        <li>Midlertidig fylling</li>
                        <li>550 kr</li>
                        <li>Intrakanal medikament (mellom økter)</li>
                        <li> 150 kr</li>
                        <li>Tannfarget fylling, 1 flate</li>
                        <li> fra 899 kr</li>
                        <li>Tannfarget fylling, 2 flate</li>
                        <li>fra 999 kr</li>
                        <li>Tannfarget fylling, 3 flate</li>
                        <li>fra 1299 kr</li>
                        <li>Estetisk fylling per tann</li>
                        <li>fra 2500 kr</li>
                        <li>Hygienetiltak </li>
                        <li>299 kr</li>
                        <li>Midlertig tann lagd hos tekniker</li> 
                        <li>fra 1000 kr</li>
                    </ul>
                    <h3>
                        Rotfylling/Endo
                    </h3>
                    <ul class="root">
                        <li>Akutt behandling</li>
                        <li>fra 3500 kr</li>
                        <li>Behandling av 1 kalsifisert kanal </li>
                        <li>fra 3000 kr</li>
                        <li>Behandling av 1 kanal</li>
                        <li>fra 2300</li>
                        <li>Behandlinger av enkel og komplisert 1 kanal </li>
                        <li>fra 2700</li>
                        <li>Behandling av 2 kanaler </li>
                        <li>fra 3300</li>
                        <li>Behandlinger av enkel og komplisert 2 kanaler </li>
                        <li>fra 3700</li>
                        <li>Behandling av 3 – 4 kanaler </li>
                        <li>fra 4300</li>
                        <li>Behandlinger av enkel og komplisert 3 – 4  kanaler </li>
                        <li>fra 4900</li>
                        <li>Revisjonsbehandling per kanal molas/premolar per kanal itilleg </li>
                        <li>2000 kr</li>
                        <li>For tenner og gjørner tann canine tilleg </li>
                        <li>3000 kr</li>
                        <li>Tillegg for bruk av rotfyllings instrumenter </li>
                        <li>299 kr</li>
                    </ul>
                    <h3>
                        Kjeveortopedisk
                    </h3>
                    <ul class="prot">
                        <li>Bitskinne </li>
                        <li>2900 kr</li>
                        <li>Bitskinne (egenandel)</li>
                        <li>1700 kr</li>
                    </ul>
                    <h3>
                        Fastprotetikk
                    </h3>
                    <ul class="prot">
                        <li>ZRO – krone / bropilar (med tannteknikker)</li>
                        <li>fra 5500 kr</li>
                        <li>Porselensfasetter  (med tanntekniker)</li>
                        <li>5200 kr</li>
                        <li>Delprotese (egenandel med periodontitt) </li>
                        <li>fra 8000 kr</li>
                        <li>Helprotese (egenandel med periodontitt) </li>
                        <li>fra 9500 kr</li>
                        <li>Hellsett protese (egenandel med periodontitt) </li>
                        <li>fra 17 000 kr</li>
                    </ul>
                    <h3>
                        Tanntrekking/Kirurgi
                    </h3>
                    <ul class="surgery">
                        <li>Ukomplisert fjerning av tann </li>
                        <li>fra 1299 kr</li>
                        <li>Kirurgisk fjerning, egenandel </li>
                        <li>1700 kr</li>
                        <li>Komplisert fjerning av tann eller rot</li>
                        <li>fra 1600 kr</li>
                        <li>Incisjon av abscess, egenandel</li>
                        <li>600 kr</li>
                        <li>Spongstan </li>
                        <li>200 kr</li>
                        <li>Suturen </li>
                        <li>200 kr</li>
                        <li>Kirurgisk behandling av tannkjøttrecesjon </li>
                        <li>fra 6000 kr</li>
                    </ul>
                    <h3>
                        Tannimplantat
                    </h3>
                    <ul class="prot">
                        <li>Straumann (Sveits) implantat </li>
                        <li>16 000 kr</li>
                        <li>Ankylos (Tyskland) implantat </li>
                        <li>16 000 kr</li>
                        <li>Beinforstørrelse</li>
                        <li>fra 4000</li>
                        <li>Helende hode </li>
                        <li>1500 kr</li>
                        <li>Metallstøtte</li>
                        <li>3000 kr</li>
                        <li>ZRO støtte </li>
                        <li>5000 kr</li>
                        <li>Midlertig krone på implantat</li>
                        <li>4500 kr</li>
                        <li>Metall krone på implantat </li>
                        <li>6000 kr</li>
                        <li>ZRO krone på implantat </li>
                        <li>8000 kr</li>
                        <li>Gingivoplastikk</li>
                        <li>fra 5000 kr</li>
                    </ul>
                    <h3>
                        Tannbleking
                    </h3>
                    <ul class="whitening">
                        <li>Hjemme tannbleking 1 kjeve inkl. skinne og blekemiddel</li>
                        <li>fra 2000 kr</li>
                        <li>Hjemme tannbleking 2 kjever inkl. skinne og blekemiddel</li>
                        <li>fra 3000 kr</li>
                        <li>Klinikk tannblekking med lampe</li>
                        <li>fra 3000 kr</li>
                    </ul>
                    <h3>
                        Periodontal behandling
                    </h3>
                    <ul class="periodontic">
                        <li >Systematisk behandlinger av periodontitt, egenandel</li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li> 30 min</li>
                        <li>fra 699 kr</li>
                        <li>60 min</li>
                        <li>fra 899 kr</li>
                    </ul> -->
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
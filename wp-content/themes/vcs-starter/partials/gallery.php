 <!-- INTERIOR PHOTOS BEGINS -->
 <section class="interior">
    <div class="owl-carousel owl-theme">
  
        <?php
             $images = get_field('hc_carousel');

             $classes = [
                 1 => "image_1",
                 2 => "image_2",
                 3 => "image_3",
                 4 => "image_4",
             ];

             $i = 1;
             
            // APDOROJAME GALERIJOS MASYVA
             foreach($images as $image):
                 if($i == 5) {
                     $i = 1;
                 }
                 ?>

                  <div class="<?php echo $classes[$i]; ?>" 
                 style="background-image: url(<?php echo $image['sizes']['large']; ?>)">
                 </div> 

                 <?php
                 $i++;
             endforeach;    
        ?>
        
        <!-- <div class="image_1">
        </div>
        <div class="image_2">
        </div>
        <div class="image_3">
        </div>
        <div class="image_4">
        </div> -->
    </div>
</section>
<!-- INTERIOR PHOTOS ENDS -->
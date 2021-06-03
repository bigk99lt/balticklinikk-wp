<?php

/* Template Name: Reviews */

get_header();

?>


<!-- Start Point -->

    <!-- FACEBOOK COMMENTS PLUGIN STARTS -->
    <div id="fb-root"></div>
        <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.1';
        fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
    <!-- FACEBOOK COMMENTS PLUGIN ENDS -->
 
 <!-- End Point -->

 <section class="comments">
    <div class="comments-title">
        <div class="container">
            <h2>
                Hvilke kunder tenker på oss
            </h2>
        </div>
    </div>
    <div class="comment-content">
        <div class="fb-comments" data-href="http://baltictannklinikk.no/" data-width="800" data-numposts="5"></div>
    </div>
</section>


<?php get_footer(); ?>
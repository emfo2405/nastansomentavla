<!--Sidans header läses in -->
<?php 

get_header(); ?>

<!--sidans titel skrivs ut -->
<div id="pageTitle">
    <h1><?php the_title(); ?></h1>
</div>

<!--Om det finns något innehåll läses det ut -->
 <?php 
    if(have_posts()) {
        while(have_posts()) {
            the_post();
            ?>
<!-- Strukturen blir bild, texten som paragraf och datum för inlägget-->
            <div class="theSingleNews">
        <?php the_post_thumbnail('news-image'); ?>
        <div class="newsText">
        <p><?php the_content();?>
        </p>
            <div class="newsDate">
                       <p><?= get_the_date(); ?></p>
            </div>
        </div>
            </div>
     
<?php
        }
    }
/*Frågan återställs */
    wp_reset_query();
    ?>


<!--Footer läses in -->
    <?php get_footer(); ?>
<!-- Sidans header hämtas in -->
<?php 
/*
Template Name: Varukorg
*/

get_header(); ?>

<!-- Sidans titel hämtas in-->
<div id="pageTitle">
    <h1><?php the_title(); ?></h1>
</div>

<!-- Om det finns posts på sidan ska dessa visas-->
<?php
    if(have_posts()) {
        while(have_posts()) {
            the_post();
            ?>
<!-- Strukturen för innehållet är titel och en paragraf-->
        <div id="cartPost">
        <h2><?php the_title(); ?></h2>
        <p><?php the_content();?> </p>
    </div>

<?php
        }
    }
/*Queryn återställs */
    wp_reset_query();
    ?>


<!--  Hämtar in sidans footer -->
    <?php get_footer(); ?>
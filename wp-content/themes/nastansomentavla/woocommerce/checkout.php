<!-- Hämtar in sidans header -->
<?php 
/*
Template Name: Kassa
*/

get_header(); ?>

<!-- Sidans titel hämtas in -->
<div id="pageTitle">
    <h1><?php the_title(); ?></h1>
</div>

<!-- Om det finns några posts på sidan hämtas de in -->
<?php
    if(have_posts()) {
        while(have_posts()) {
            the_post();
            ?>
<!-- Struktur för hur innehållet ska visas med titel och paragraf-->
        <div id="checkoutPost">
        <h2><?php the_title(); ?></h2>
        <p><?php the_content();?> </p>
    </div>

<?php
        }
    }
/*Queryn återställs */
    wp_reset_query();
    ?>


<!-- Sidans footer hämtas in -->
    <?php get_footer(); ?>
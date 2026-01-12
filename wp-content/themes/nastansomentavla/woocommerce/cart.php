
<?php 
/*
Template Name: Varukorg
*/

get_header(); ?>


<div id="pageTitle">
    <h1><?php the_title(); ?></h1>
</div>

<?php
    if(have_posts()) {
        while(have_posts()) {
            the_post();
            ?>

        <div id="cartPost">
        <h2><?php the_title(); ?></h2>
        <p><?php the_content();?> </p>
    </div>

<?php
        }
    }

    wp_reset_query();
    ?>



    <?php get_footer(); ?>
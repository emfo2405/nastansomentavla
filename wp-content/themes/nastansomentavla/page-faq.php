
/*
Template Name: FAQ-sida
*/

<?php 

get_header(); ?>


<div id="pageTitle">
    <h1><?php the_title(); ?></h1>
</div>

<?php
query_posts('category_name=faq');
    if(have_posts()) {
        while(have_posts()) {
            the_post();
            ?>

        <div id="post">
        <h2><?php the_title(); ?></h2>
        <p><?php the_content();?> </p>
    </div>

<?php
        }
    }

    wp_reset_query();
    ?>



    <?php get_footer(); ?>
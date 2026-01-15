<!-- Sidans header läses in-->
<?php 

/*
Template Name: FAQ-sida
*/

get_header(); ?>

<!--Sidans titel läses in -->
<div id="pageTitle">
    <h1><?php the_title(); ?></h1>
</div>

<!--Om det finns några posts i kategorin faq läses de in -->
<?php
query_posts('category_name=faq');
    if(have_posts()) {
        while(have_posts()) {
            the_post();
            ?>
<!--Strukturen för post är titel och innehåll i en paragraf -->
        <div id="post">
        <h2><?php the_title(); ?></h2>
        <p><?php the_content();?> </p>
    </div>

<?php
        }
    }
/*Frågan återställs */
    wp_reset_query();
    ?>


<!--Sidans footer läses in -->
    <?php get_footer(); ?>
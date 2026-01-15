<!--Header läses in -->
<?php 

get_header(); ?>

<!--Sidans titel skrivs ut -->
<div id="pageTitle">
    <h1><?php the_title(); ?></h1>
</div>

<!--Om det finns innehåll läses det ut -->
<?php
    if(have_posts()) {
        while(have_posts()) {
            the_post();
            ?>
<!--Strukturen blir titel och innehåll som en paragraf -->
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


<!--Footer läses in -->
    <?php get_footer(); ?>
<!-- Header läses in-->
<?php 
/*
Template Name: Sidebar page
*/
get_header(); ?>

<!--Sidans titel skrivs ut -->
<div id="pageTitle">
    <h1><?php the_title(); ?></h1>
</div>

<!--Om det finns innehåll läses det ut -->
<div class="sidebarPageContent">
    <div class="sidebarPageText">
<?php
    if(have_posts()) {
        while(have_posts()) {
            the_post();
            ?>
<!--strukturen blir titel och innehåll som en paragraf -->
        <div>
        <h2><?php the_title(); ?></h2>
        <p><?php the_content();?> </p>
    </div>

<?php
        }
    }
/*Frågan återställs */
    wp_reset_query();
    ?>
    </div>
<!--Om en sidebar är skapad läses den in -->
    <aside class="sidebar">
        <?php if(is_active_sidebar('main-sidebar')): ?>
            <?php dynamic_sidebar('main-sidebar'); ?>
        <?php else: ?>
            <p>Lägg till några widgets i din sidebar</p>
        <?php endif; ?>
    </aside>
        </div>
        
<!--Footer läses in -->
<?php get_footer(); ?>
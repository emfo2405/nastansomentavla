<?php 
/*
Template Name: Sidebar page
*/
get_header(); ?>

<div id="pageTitle">
    <h1><?php the_title(); ?></h1>
</div>

<div class="sidebarPageContent">
    <div class="sidebarPageText">
<?php
    if(have_posts()) {
        while(have_posts()) {
            the_post();
            ?>

        <div>
        <h2><?php the_title(); ?></h2>
        <p><?php the_content();?> </p>
    </div>

<?php
        }
    }

    wp_reset_query();
    ?>
    </div>

    <aside class="sidebar">
        <?php if(is_active_sidebar('main-sidebar')): ?>
            <?php dynamic_sidebar('main-sidebar'); ?>
        <?php else: ?>
            <p>Lägg till några widgets i din sidebar</p>
        <?php endif; ?>
    </aside>
        </div>
        </div>

<?php get_footer(); ?>
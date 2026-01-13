<?php 
/*
Template Name: Kontaktsida
*/
get_header(); ?>

    <div id="pageTitle">
        <h1><?php the_title(); ?></h1>
    </div>
</div>

    <?php query_posts('category_name=kontaktinformation');
    if(have_posts()) {
        while(have_posts()) {
            the_post();
            ?>

        <div id="contactInfo">
        <h2><?php the_title(); ?></h2>
        <p><?php the_content();?> </p>
    </div>

<?php
        }
    }

    wp_reset_query();
    ?>


    <div id="contactForm">
        <h2><?php echo esc_html(get_post_meta(get_the_ID(), 'contactForm', true)); ?></h2>

            <?php echo do_shortcode('[contact-form-7 id="6248d14" title="kontaktformulär"]'); ?>
    </div>

<?php 
get_footer();
?>
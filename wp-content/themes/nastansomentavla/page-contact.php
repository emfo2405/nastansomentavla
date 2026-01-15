<!--Header läses in -->
<?php 
/*
Template Name: Kontaktsida
*/
get_header(); ?>

<!-- Titel läses in-->
    <div id="pageTitle">
        <h1><?php the_title(); ?></h1>
    </div>

<!-- Om det finns posts i kategorin kontaktinformation läses de ut-->
    <?php query_posts('category_name=kontaktinformation');
    if(have_posts()) {
        while(have_posts()) {
            the_post();
/*Namn och e-post av författaren läses in */
            $name = get_the_author_meta('first_name');
            $email = get_the_author_meta('email');
            ?>

<!-- Struktur för innehåll är titel, innehåll i paragraf, författarens namn och författarens e-post-->
        <div id="contactInfo">
        <h2><?php the_title(); ?></h2>
        <p><?php the_content();?> </p>
        <p>Kontakta <?= $name ?> på: <?= $email; ?></p>
    </div>

<?php
        }
    }
/*frågan återställs */
    wp_reset_query();
    ?>

<!--Titel för kontaktformulär läses in och skapat kontaktformulär i Contact Form 7 läses in -->
    <div id="contactForm">
        <h2><?php echo esc_html(get_post_meta(get_the_ID(), 'contactForm', true)); ?></h2>

            <?php echo do_shortcode('[contact-form-7 id="6248d14" title="kontaktformulär"]'); ?>
    </div>

    <!--Footer läses in -->
<?php 
get_footer();
?>
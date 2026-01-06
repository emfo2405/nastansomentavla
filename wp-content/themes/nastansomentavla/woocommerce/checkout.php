
<?php 

get_header(); 

?>

<div id="pageTitle">
    <h1><?php the_title(); ?></h1>
</div>

<div class="checkoutFunction">
<?php if (functions_exists('woocommerce_checkout')) {
    woocommerce_checkout();
}
?>
</div>


    <?php get_footer(); ?>
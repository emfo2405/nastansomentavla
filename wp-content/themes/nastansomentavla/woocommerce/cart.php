
<?php 

get_header(); 

?>

<div id="pageTitle">
    <h1><?php the_title(); ?></h1>
</div>

<div class="cartFunction">
<?php if (functions_exists('woocommerce_cart')) {
    woocommerce_cart();
}
?>
</div>


    <?php get_footer(); ?>

<?php 

get_header(); 

?>

<div id="pageTitle">
    <h1><?php the_title(); ?></h1>
</div>


<div id="productSingle">
    <?php 
        while(have_posts()) {
            the_post();
            $product = wc_get_product(get_the_ID());
            if(!$product) continue;
            ?>



    <div class="theProduct">
        <div class="productInfo">
        <?php the_post_thumbnail(); ?>
        <div class="theProductText">
        <h3><?php echo $product -> get_price_html(); ?></h3>
        </div>
        </div>
        <div class="productDescription">
        <p><?php the_content(); ?></p>    
        </div>
 
        <div class="addToCart">
        <form class="cart"  method="post" enctype="multipart/form-data">
            <input type="hidden" name="add-to-cart" value="<?php echo $product->get_id(); ?>" />
       <button type="submit" class="single_add_to_cart_button button alt" >Köp</button>
       </form>
</div>
    </div>

        <?php
        } 
        
  
    wp_reset_query();
    ?>
            

</div>
        </div>




    <?php get_footer(); ?>
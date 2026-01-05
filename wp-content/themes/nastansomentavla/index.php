  <?php get_header(); ?>

    <div id="pageTitleStart">
        <h1><?php bloginfo('name'); ?><br><?php echo esc_html(get_post_meta(get_the_ID(), 'subtitle', true)); ?></h1>
    </div>
    </div>


        <div id="productsDiv">
        <h2><?php echo esc_html(get_post_meta(get_the_ID(), 'productsHeading', true)); ?></h2>

        <div id="productList">
            <div class="oneProduct">
                <img src="/images/profilbild.jpg" alt="Foto av Emma Forsmalm sittades med en kopp i händerna">
                <p>Namn på gata</p>
            </div>
            <div class="oneProduct">
                <img src="/images/profilbild.jpg" alt="Foto av Emma Forsmalm sittades med en kopp i händerna">
                <p>Namn på gata</p>
            </div>
            <div class="oneProduct">
                <img src="/images/profilbild.jpg" alt="Foto av Emma Forsmalm sittades med en kopp i händerna">
                <p>Namn på gata</p>
            </div>
            <div class="oneProduct">
                <img src="/images/profilbild.jpg" alt="Foto av Emma Forsmalm sittades med en kopp i händerna">
                <p>Namn på gata</p>
            </div>
            
        </div>

        <a href="/products.html">Visa alla produkter</a>
    </div>


    <div id="aboutDiv">
        <div id="aboutImg">
            <img src="/images/profilbild.jpg" alt="Foto av Emma Forsmalm sittades med en kopp i händerna">
        </div>
        
        <div id="aboutText">
            <h2>-Om konstnären bakom motiven-</h2>
            <p>text text text text text text </p>
        </div>
    </div>

    


    <div id="faq">
        <h2><?php echo esc_html(get_post_meta(get_the_ID(), 'faqHeading', true)); ?></h2>
        <div id="questions">
            <div class="oneQuestion">
                <h3>Fråga</h3>
                <p>Svar svar svar svar svar svar svar svar svar svar svar svar svar</p>
            </div>
            <div class="oneQuestion">
                <h3>Fråga</h3>
                <p>Svar svar svar svar svar svar svar svar svar svar svar svar svar</p>
            </div>
            <div class="oneQuestion">
                <h3>Fråga</h3>
                <p>Svar svar svar svar svar svar svar svar svar svar svar svar svar</p>
            </div>
            <div class="oneQuestion">
                <h3>Fråga</h3>
                <p>Svar svar svar svar svar svar svar svar svar svar svar svar svar</p>
            </div>
            
        </div>
    </div>

    <div id="news">
        <h2><?php echo esc_html(get_post_meta(get_the_ID(), 'newsHeading', true)); ?></h2>
        <div class="newsArticle">
            
            <img src="images/profilbild.jpg">
            <div class="newsText">
            <h3>Nyhet</h3>
            <p>text text text text text text text text text text text text text text text text text text text text text text text text text text text text </p>
            <p>Datum</p>
        </div>
        </div>

                <div class="newsArticle">
            
            <img src="images/profilbild.jpg">
            <div class="newsText">
            <h3>Nyhet</h3>
            <p>text text text text text text text text text text text text text text text text text text text text text text text text text text text text </p>
            <p>Datum</p>
        </div>
        </div>

 <a href="/products.html">Läs alla nyheter</a>

    </div>


<?php get_footer(); ?>
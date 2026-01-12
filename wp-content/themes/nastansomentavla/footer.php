
    <footer>
       
<nav id="footerMenu">
     <img src="<?= get_template_directory_uri(); ?>/images/logotypMedText.png" alt="Målad bild på en makrill">
        <div id="footerMenuLinks">    
<?php wp_nav_menu(array('theme_location' => 'footer-nav')); ?>
        </div>
        </nav>
        <p>NÄSTAN SOM EN TAVLA EST. 2022</p>
    </footer>

    <script src="<?= get_template_directory_uri(); ?>/js/main.js"></script>
    <?php wp_footer(); ?>
</body>
</html>
<!-- Footer skapas -->
    <footer>
       <!-- Bild inkluderas, länkar från footermeny läses in och publiceras-->
<nav id="footerMenu">
     <img src="<?= get_template_directory_uri(); ?>/images/logotypMedText.png" alt="Målad bild på en makrill">
        <div id="footerMenuLinks">    
<?php wp_nav_menu(array('theme_location' => 'footer-nav')); ?>
        </div>
        </nav>
<!-- webbplatsens namn samt sidans år läses ut-->
        <p><?php bloginfo('name')?>, <?php echo get_post_time(format: 'Y'); ?></p>
    </footer>

<!--Sidan avslutas -->
    <?php wp_footer(); ?>
</body>
</html>



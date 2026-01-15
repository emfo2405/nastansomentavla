<!-- HTML-sida startas-->
<!DOCTYPE html>
<html lang="sv">

<!--Grundinställningar för sidan sätts, typsnitt läses in, favicon läses in och titel sätts -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/styles.css">
    <title><?php the_title(); ?> | <?php bloginfo('name')?></title>
    <link rel="icon" type="image/x-icon" href="<?= get_template_directory_uri(); ?>/images/favicon-32x32.png">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Gotu&family=Londrina+Sketch&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rubik+Doodle+Shadow&family=Shadows+Into+Light&family=Story+Script&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />
<?php wp_head(); ?>
</head>

<!-- Body-innehållet skapas -->
<body>

<!--Header-bild läses in -->
    <div id="headerDiv">
                <img src="<?= get_template_directory_uri(); ?>/images/Fabriksgatan-logotyp2.png" alt="Målning av ett hus på fabriksgatan">
    <nav id="menu">
        
<div id="smallMenu">
<!-- Logotyp läses in-->
        <div><a href="<?= get_home_url(); ?>"><img src="<?= get_template_directory_uri(); ?>/images/logotypMedText.png" alt="Målad bild på en makrill"></a></div>

                <div id="mobileMenu">
<!-- Ikon för mobilsymbolen läses in-->
            <button id="menuButton">Meny<span id="menuIcon" class="material-symbols-outlined">menu</span></button>
        </div>
</div>
<!-- Menylänkar läses in-->
        <div id="menuLinks">
<?php wp_nav_menu(array('theme_location' => 'main-nav')); ?>
        </div>
        
    </nav> 
    </div>
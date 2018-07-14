<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php bloginfo('name');?></title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/brands.css" integrity="sha384-7xAnn7Zm3QC1jFjVc1A6v/toepoG3JXboQYzbM0jrPzou9OFXm/fY6Z/XiIebl/k" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/fontawesome.css" integrity="sha384-ozJwkrqb90Oa3ZNb+yKFW2lToAWYdTiF1vt8JiH5ptTGHTGcN7qdoR1F95e0kYyG" crossorigin="anonymous">
        <?php wp_head(); ?>
    </head>
    <body>
        <div class="container primary-navigation">
            <?php wp_nav_menu(array('theme_location'=>'primary')); ?>
            <ul class="mobile-menu">
                <li>Joss Bleach</li>
                <a class="menu" onclick="toggleMenu()"><li id="navMenu">MENU</li></a>
            </ul>
        </div>
        <div id="toggledMenu" class="overlay hidden">
            <div class="menu-wrap">
                <?php wp_nav_menu(array('theme_location'=>'mobile')); ?>
            </div>
        </div>
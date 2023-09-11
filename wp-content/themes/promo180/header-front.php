<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css',);
    wp_head();
    wp_enqueue_script('main', get_template_directory_uri() . '/main.js', array(), null, true);
    ?>
</head>
<body>
    <header id="header">
        <div class="logo">
            <p id="pLogo" class="scroll">codemorning</p>
        </div>
        <nav>
            <?php
            wp_nav_menu(array())
            ?>
            
        </nav>
        <nav id="navBurger">
            <?php
            wp_nav_menu(array('theme_location'=>'main_menu'))
            ?>
            <span id="croix">X</span>
        </nav>
        <div id="burger">
            <div class="ligneBurger scroll"></div>
            <div class="ligneBurger scroll"></div>
            <div class="ligneBurger scroll"></div>
        </div>
    </header>
    <main>
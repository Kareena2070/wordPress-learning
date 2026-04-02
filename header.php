<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title><?php bloginfo('name'); ?></title>

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
    <div class="header-container">
        <h2 class="logo">
            <a href="<?php echo site_url('/'); ?>">
                Kareena Astrology
            </a>
        </h2>

        <nav>
            <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container' => false,
                    'menu_class' => 'nav-menu'
                ));
            ?>
        </nav>
    </div>
</header>
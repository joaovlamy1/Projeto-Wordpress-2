<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brafé</title>
    <?php wp_head()?>
</head>
<body>
    <header>
        
        <nav>
            <a href="<?php echo get_home_url()?>"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/brafe.png" alt="logo" id="logo"></a>
            <?php 
            $args = array(
            'menu' => 'principal',
            'theme_location' => 'navegacao',
            'container' => false
        );
            wp_nav_menu( $args ) ?>
        </nav>

    </header>
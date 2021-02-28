<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <main id="app" class="app">
            <nav class="primary-menu">
                <!-- <a href="<?= get_home_url(); ?>"><h1>WordPress Starter Theme</h1></a> -->
                <?php wp_nav_menu([
                    'theme_location'  => 'primary',
                    'container'       => false, 
                ])?>
            </nav>
            <div class="full-content">

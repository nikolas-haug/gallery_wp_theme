<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title><?php bloginfo('name'); ?></title>
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>

        <header class="w3-container w3-teal">
            <div class="w3-row">
                <div class="w3-col m9 l9">
                    <h1><span><?php bloginfo('name'); ?></span></h1>
                </div>
                <div class="w3-col m3 l3">
                    <form method="GET" action="<?php echo esc_url(site_url('/')); ?>">
                        <input type="text" name="s" class="23-input" placeholder="Search...">
                    </form>
                </div>
            </div>
        </header>

        <div class="w3-row">
            <div class="w3-col m3 l3">
                <?php if(is_active_sidebar('sidebar')) : ?>
                    <?php dynamic_sidebar('sidebar'); ?>
                <?php endif; ?>
            </div>
            <div class="w3-col m9 l9">
                <div class="w3-row">
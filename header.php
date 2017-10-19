<!doctype html>
<html>
    <head>
        <meta charset="utf8"/>
        <title>Sample Theme</title>

        <?php wp_head() ?>

    </head>
    <body>
        <?php wp_nav_menu(array('theme_location'=='primary')) ?>
<?php 

require_once BASE_PATH . '/components/templates/nav.component.php';
require_once BASE_PATH . '/handlers/rooms.handlers.php';

function head() {
    global $navilist;
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>HOTEL WEBSITE</title>
        <link rel ="stylesheet" href="/assets/css/style.css">
        <link href = "https://fonts.googleapis.com/css2?family=Montserrat:wght$400;700&family=Playfair+Display:wght@600&display=swap" rel="stylesheet">
    </head>
    <body>
        <header class = "header">
            <h1 class="header">HOTEL ROOM WEBSITE</h1>
            <?php nav($navilist) ?>
        </header>
        <?php
}
?>

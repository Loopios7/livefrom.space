<?php
function insertAllCss()
{
    # stylesheets to load
    $stylesheets = ['style', 'uikit'];

    foreach ($stylesheets as $stylesheet) {
        # return minimized version if possible
        if (file_exists('css/' . $stylesheet . '.min.css')) {
            echo '<link rel="stylesheet" type="text/css" href="css/' . $stylesheet . '.min.css" />';
        } else {
            echo '<link rel="stylesheet" type="text/css" href="css/' . $stylesheet . '.css" />';
        }
    }
}

function insertAllJs()
{
    # JS files to load
    $javascripts = ['uikit', 'uikit-icons'];

    foreach ($javascripts as $javascript) {
        # return minimized version if possible
        if (file_exists('js/' . $javascript . '.min.js')) {
            echo '<script src="js/' . $javascript . '.min.js"></script>';
        } else {
            echo '<script src="js/' . $javascript . '.js"></script>';
        }
    }
}

function insertAllOg(
    $title = "LiveFrom.Space",
    $description = "View fantastic streams broadcasted from space!",
    $image = "/image/og_image.png",
    $type = "website",
    $url = null
) {

    if (is_null($url)) {
        $url = $_SERVER['REQUEST_URI'];
    }

    $image = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $image;

    echo '
    <meta property="og:url" content="', $url, '" />
    <meta property="og:title" content="', $title, '" />
    <meta property="og:description" content="', $description, '" />
    <meta property="og:type" content="', $type, '" />
    <meta property="og:image" content="', $image, '" />
    ';
}
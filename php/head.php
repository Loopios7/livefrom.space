<?php
    # stylesheets to load
    $stylesheets = ['style', 'uikit'];

    foreach ($stylesheets as $stylesheet) {
        # return minimized version if possible
        if (file_exists("{$_SERVER['DOCUMENT_ROOT']}/css/" . $stylesheet . ".min.css")) {
            echo '<link rel="stylesheet" type="text/css" href="/css/' . $stylesheet . '.min.css" />';
        } else {
            echo '<link rel="stylesheet" type="text/css" href="/css/' . $stylesheet . '.css" />';
        }
    }

    # JS files to load
    $javascripts = ['uikit', 'uikit-icons'];

    foreach ($javascripts as $javascript) {
        # return minimized version if possible
        if (file_exists("{$_SERVER['DOCUMENT_ROOT']}/js/" . $javascript . ".min.js")) {
            echo '<script src="/js/' . $javascript . '.min.js"></script>';
        } else {
            echo '<script src="/js/' . $javascript . '.js"></script>';
        }
    }

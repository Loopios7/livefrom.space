<?php
$ytid = "21X5lGlDOfg";
?>

<!DOCTYPE html>
<html lang="en">
<!-- GitHub: https://github.com/loopios7/livefrom.space -->

<head>
    <title>Live From Space!</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta name="description" content="" />
    <link rel="icon" href="img/favicon.png">
    
    <meta property="og:title" content="" />
    <meta property="og:description" content="" />
    <meta property="og:image" content="" />
    <meta name="twitter:card" content="">
    <meta name="twitter:site" content="">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="">

    <?php
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
    ?>
</head>

<body>
    <div class="uk-position-relative">
        <iframe id="ytplayer" src="<?php echo 'https://www.youtube.com/embed/' . $ytid . '?controls=1&rel=0&autoplay=1' ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen uk-video="automute: true" uk-height-viewport>Your browser does not support iframes.</iframe>
    </div>
</body>

</html>
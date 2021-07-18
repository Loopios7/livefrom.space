<?php
$ytid = "5qap5aO4i9A";
$ytsrc = 'https://www.youtube.com/embed/' . $ytid . '?controls=1&rel=0&autoplay=1';
?>

<!DOCTYPE html>
<html lang="en">
<!-- GitHub: https://github.com/loopios7/livefrom.space -->

<head>
    <title>Live From Space!</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta name="description" content="" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" href="css/uikit.min.css" />
    <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.min.js"></script>
    <link rel="icon" href="img/favicon.png">
    <meta property="og:title" content="" />
    <meta property="og:description" content="" />
    <meta property="og:image" content="" />
    <meta name="twitter:card" content="">
    <meta name="twitter:site" content="">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="">
</head>

<body>
    <div class="uk-position-relative">
        <div class="uk-position-top">

            <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>
                <div class="uk-navbar-right">
                    <ul class="uk-iconnav uk-padding-large">
                        <li><a href="https://github.com/loopios7/livefrom.space" target="_blank" uk-icon="icon: github; ratio: 3"></a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <iframe style="top:0; left:0; bottom:0; right:0; width:100%; height:100%; border:none; margin:0; padding:0; overflow:hidden;" src="<?php echo $ytsrc ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen uk-video="automute: true" uk-height-viewport>Your browser does not support iframes.</iframe>

    </div>

</body>

</html>

<!-- Helper JS for page fade in -->
<script type="text/javascript">
    window.onload = function() {
        setTimeout(function() {
            document.getElementById("loader").remove();
        }, 1000);
    };
</script>
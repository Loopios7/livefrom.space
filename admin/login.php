<?php
require_once('config.php'); // For storing username and password.

session_start();

//$a = password_hash("", PASSWORD_BCRYPT);
//echo $a;
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <?php 
    include("{$_SERVER['DOCUMENT_ROOT']}/php/head.php")
    ?>

    <title>Sign in</title>
</head>

<body>
    <div class="uk-container">
        <form action="" method="post" name="Login_Form" class="uk-form-horizontal uk-flex uk-flex-center uk-position-center">
            <fieldset class="uk-fieldset uk-width-large">
                <legend class="uk-legend">Sign In</legend>

                <div class="uk-margin">
                    <label for="inputUsername" class="uk-form-label">Username</label>
                    <div class="uk-form-controls">
                        <input name="Username" type="username" id="inputUsername" class="uk-input" placeholder="Username" required autofocus>
                    </div>
                </div>

                <div class="uk-margin">
                    <label for="inputPassword" class="uk-form-label">Password</label>
                    <div class="uk-form-controls">
                        <input name="Password" type="password" id="inputPassword" class="uk-input" placeholder="Password" required>
                    </div>
                </div>

                <button name="Submit" value="Login" class="uk-button uk-button-primary" type="submit">Sign in</button>
            </fieldset>
        </form>
    </div>
    <?php

    /* Check if login form has been submitted */
    if (isset($_POST['Submit'])) {

        // Rudimentary hash check
        $result = password_verify($_POST['Password'], $Password);

        /* Check if form's username and password matches */
        if (($_POST['Username'] == $Username) && ($result === true)) {

            /* Success: Set session variables and redirect to protected page */
            $_SESSION['Username'] = $Username;

            $_SESSION['Active'] = true;
            header("location:/admin/index.php");
            exit;
        } else {
    ?>
            <!-- Show an error alert -->
            <div uk-alert class="uk-alert-danger uk-margin-remove	">
                <a class="uk-alert-close" uk-close></a>
                <h3>Warning!</h3>
                <p>Incorrect Login information.</p>
            </div>
    <?php
        }
    }
    ?>
</body>

</html>
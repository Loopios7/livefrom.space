<?php

  session_start(); /* Starts the session */

  if($_SESSION['Active'] == false){ /* Redirects user to Login.php if not logged in */
    header("location:admin/login.php");
	  exit;
  }
?>

<!-- Show password protected content down here -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="/css/uikit.min.css">

    <title>Admin Area</title>
  </head>
  <body>
    <h1>Hello World</h1>
    <p><a class="uk-button uk-button-danger" href="/admin/logout.php" role="button">Log out</a></p>
  </body>
</html>

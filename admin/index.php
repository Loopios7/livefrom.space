<?php

session_start(); /* Starts the session */

if ($_SESSION['Active'] == false) { /* Redirects user to Login.php if not logged in */
  header("location:login.php");
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

  <?php
  include("{$_SERVER['DOCUMENT_ROOT']}/php/head.php")
  ?>

  <title>Admin Area</title>
</head>

<body>
  <header>
    <!-- Main Navbar -->
    <nav class="uk-container uk-navbar">
      <div class="uk-navbar-left">
        <ul class="uk-navbar-nav">
          <!--li>
            <img src="/img/logo.svg" width="80px" class="uk-logo">
          </li-->
          <li class="uk-active">
            <a href="#">LiveFrom.<strong>Space</strong></a>
          </li>
        </ul>
      </div>
      <div class="uk-navbar-right">
        <ul class="uk-navbar-nav uk-visible@s">
          <li><a class="uk-text-large" href="#">about</a></li>
          <li><a class="uk-text-large" href="#">blog</a></li>
        </ul>
        <a href="#" class="uk-navbar-toggle uk-hidden@s" uk-navbar-toggle-icon uk-toggle="target: #sidenav"></a>
      </div>
    </nav>
  </header>

  <div id="sidenav" uk-offcanvas="flip: true" class="uk-offcanvas">
    <div class="uk-offcanvas-bar">
      <ul class="uk-nav">
        <li><a class="uk-text-large" href="#">about</a></li>
        <li><a class="uk-text-large" href="#">blog</a></li>
      </ul>
    </div>
  </div>
  <h1>Hello World</h1>
  <p><a class="uk-button uk-button-danger" href="/admin/logout.php" role="button">Log out</a></p>


</body>

</html>
<?php

echo '<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <script src="./Bootstrap/js/bootstrap.min.js"></script>


    <title>Island Cars</title>

    <!-- Bootstrap core CSS -->
    <link href="./Bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="./Bootstrap/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <script src="./Bootstrap/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="./Style/carousel.css" rel="stylesheet">
    <link href="./Style/global.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body id ="background">
    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Island Cars LLC</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a href="/Projects/Final/">Home</a></li>
                <li><a href="#about">Rates</a></li>
                <li><a href="Reservations.php">Reserve</a></li>
                <li><a href="/Projects/Final/sites.php">Sites to See</a></li>
                </li>
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="./Resources/Na Pali Coast Wide.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Island Cars</h1>
              <p>Kauai\'s most affordable car rental</p>
              <p><a class="btn btn-lg btn-primary" id="reservations" href="Reservations.php" role="button">Reserve Today</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="./Resources/Big Island.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Plan your next getaway.</h1>
              <p>There is no wonder why Kauai is nicknamed "The Garden Isle"</p>
              <p><a class="btn btn-lg btn-primary" href="sites.php" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="./Resources/Ocean.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Just another day in paradise.</h1>
              <p>We want you to experience everything Kauai has to offer</p>
              <p><a class="btn btn-lg btn-primary" href="sites.php" role="button">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->


    <script src="./Bootstrap/js/bootstrap.min.js"></script>
    <body>

';

?>
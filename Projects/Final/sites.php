<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<?php 

set_include_path("./View/" .PATH_SEPARATOR . 
            "./Model/");

            require_once "NavigationView.php";
            ?>
            
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Island Cars-Sites</title>

    <!-- Bootstrap core CSS -->
    <link href="./Bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="./Bootstrap/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
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

<div class="container marketing">
      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Waimea Canyon </br><span class="text-muted">The Grand Canyon of the Pacific</span></h2>
          <p class="lead">Although not as big or as old as its Arizona cousin, you won’t encounter anything like this geological wonder in Hawaii. Stretching 14 miles long, one mile wide and more than 3,600 feet deep, the Waimea Canyon Lookout provides panoramic views of crested buttes, rugged crags and deep valley gorges. The grand inland vistas go on for miles.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="./Resources/Waimea.jpg" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading">Na Pali Coast </br><span class="text-muted">Visit Jurassic World</span></h2>
          <p class="lead">This fifteen-mile stretch of rugged coastline on the northwest shore of Kauai literally means "the Cliffs." Much of Na Pali Coast is inaccessible due to its characteristic sheer cliffs that drop straight down, thousands of feet into the ocean. Sailing, rafting and hiking are the best ways to experience Na Pali's myriad of natural wonders. A must-do Kauai activity.</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block" src="./Resources/Na Pali.jpg" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Kilauea Point </br><span class="text-muted">Picturesque</span></h2>
          <p class="lead">Kīlauea Point National Wildlife Refuge’s dramatic backdrop of steep cliffs plunging to the ocean is one of the best places on the main Hawaiian Islands to view wildlife, and is also home to some of the largest populations of nesting seabirds found in Hawai'i. Visitors also have a chance to view spinner dolphins, Hawaiian monk seals, native Hawaiian coastal plants and Hawai‘i’s state bird - the nēnē or endangered Hawaiian goose.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="./Resources/Kilauea Point.jpg" alt="Generic placeholder image">
        </div>
      </div>

      <!-- /END THE FEATURETTES -->
</div>
<?php

require_once"FooterView.php";
?>


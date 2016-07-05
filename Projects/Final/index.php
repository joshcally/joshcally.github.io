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

    <title>Island Cars</title>

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

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <h2>Affordable</h2>
          <p>Here at Island Cars, we believe you should be able to spend
your hard earned dollars on something other than a pricey
rental car. We pride ourselves on trying to accommodate all
those who want to get out and see the wonderful island of
Kauai. For these reasons, we can offer to rent a car to those
under age 26 and also rent a car without a major credit card.</p>
          <p><a class="btn btn-default" href="#" role="button">Rates &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <h2>Stylin'</h2>
          <p>Island Cars offers many car types and styles to choose from.
These range from our new 4-door sedans with all the comforts
of air conditioning, stereo, etc. to our basic transportation car
and truck models for those on a budget or who would like to
'blend in' with the local island scene. We also offer seven
passenger minivans as well as SUV models for those with a
special need. Our goal is to put our customers in an affordable
car or vehicle that best suits their desires while here on Kauai.</p>
          <p><a class="btn btn-default" href="#" role="button">View Fleet &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <h2>See the Island</h2>
          <p>We at Island Cars want to give you the freedom and mobility of
having an inexpensive car rental while on Kauai - without the
excessive costs of the major car rental companies. Kauai is an
island paradise with so much beauty, peace and true aloha for
all to enjoy. We strive to keep your car rental as affordable as
possible so that you can experience that much more on Kauai.</p>
          <p><a class="btn btn-default" href="sites.php" role="button">Sites &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Rent a Tesla Model S today. <span class="text-muted">It will blow your mind.</span></h2>
          <p class="lead">Our electric vehicles can help preserve the beautiful planet we live in. Rent a Model S to tour the island in style.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="./Resources/Tesla.jpg" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading">Need something more durable? <span class="text-muted">We've got you covered.</span></h2>
          <p class="lead">We know you want to get out to those isolated sites and waterfalls that the locals have told you
              about. Rent a 4-Wheel drive SUV and don't worry about a thing.</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block" src="./Resources/Armada.jpg" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
          <p class="lead">The fresh island air never feels as good as when you're cruising down Kamehameha Highway in a 2016 Mustang.
             This is a once in a lifetime opportunity you won't want to miss.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="./Resources/Convertible.jpg" alt="Generic placeholder image">
        </div>
      </div>

      <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->

<?php

require_once"FooterView.php";
?>


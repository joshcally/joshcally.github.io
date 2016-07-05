<?php
/**
 * Author: Joshua Callahan
 * u0691598
 * Spring 2016
 */
 
 echo "
<!DOCTYPE html>
<html lang='en'>
    <head>
        <title>Graduate Student Progress Tracker</title>
        <meta charset='UTF-8'>
        <meta name='author' content='Joshua Callahan'>
        <meta name='description' content='Main Page'>
        <meta name='date' content='January 21, 2016'>
         <!-- Bootstrap core CSS -->
        <link href='../dist/css/bootstrap.css' rel='stylesheet'>
        <link href='../Style/sticky_footer_navbar.css' rel='stylesheet'>
        <link href='../Style/carousel.css' rel='stylesheet'>

        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <link href='../../assets/css/ie10-viewport-bug-workaround.css' rel='stylesheet'>

        <!-- Custom styles for this template -->
        <link href='../Style/signin.css' rel='stylesheet'>

        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src='../../assets/js/ie8-responsive-file-warning.js'></script><![endif]-->
        <script src='../../assets/js/ie-emulation-modes-warning.js'></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src='https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js'></script>
        <script src='https://oss.maxcdn.com/respond/1.4.2/respond.min.js'></script>
        <![endif]-->
    </head>
    <body>    
    
     <div id='myCarousel' class='carousel slide' data-ride='carousel'>
      <!-- Indicators -->
      <ol class='carousel-indicators'>
        <li data-target='#myCarousel' data-slide-to='0' class='active'></li>
        <li data-target='#myCarousel' data-slide-to='1'></li>
        <li data-target='#myCarousel' data-slide-to='2'></li>
      </ol>
      <div class='carousel-inner' role='listbox'>
        <div class='item active'>
          <img class='first-slide' src='../Style/graduation.jpg' alt='First slide'>
          <div class='container'>
            <div class='carousel-caption'>
              <h1>Our Dedication. Your Graduation.</h1>
              <p>Log in below to view your information.</p>
              <p><a class='btn btn-lg btn-primary' href='http://www.utah.edu' role='button'>Learn more</a></p>
            </div>
          </div>
        </div>
        <div class='item'>
          <img class='second-slide' src='../Style/studying.jpg' alt='Second slide'>
          <div class='container'>
            <div class='carousel-caption'>
              <h1>We're in this together.</h1>
              <p>Struggling in your classes? We can help.</p>
              <p><a class='btn btn-lg btn-primary' href='http://www.utah.edu' role='button'>Learn more</a></p>
            </div>
          </div>
        </div>
        <div class='item'>
          <img class='third-slide' src='../Style/sign.jpg' alt='Third slide'>
          <div class='container'>
            <div class='carousel-caption'>
              <h1></h1>
            </div>
          </div>
        </div>
      </div>
      <a class='left carousel-control' href='#myCarousel' role='button' data-slide='prev'>
        <span class='glyphicon glyphicon-chevron-left' aria-hidden='true'></span>
        <span class='sr-only'>Previous</span>
      </a>
      <a class='right carousel-control' href='#myCarousel' role='button' data-slide='next'>
        <span class='glyphicon glyphicon-chevron-right' aria-hidden='true'></span>
        <span class='sr-only'>Next</span>
      </a>
    </div><!-- /.carousel -->
    
         <!-- Fixed navbar -->
    <nav class='navbar navbar-default navbar-fixed-top'>
      <div class='container'>
        <div class='navbar-header'>
          <button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#navbar' aria-expanded='false' aria-controls='navbar'>
            <span class='sr-only'>Toggle navigation</span>
            <span class='icon-bar'></span>
            <span class='icon-bar'></span>
            <span class='icon-bar'></span>
          </button>
        </div>
        <div id='navbar' class='collapse navbar-collapse'>
          <ul class='nav navbar-nav'>
            <li class='active'><a href='./mainpage.php'>Student Progress Tracker</a></li>
            <li><a href='http://www.utah.edu'>University of Utah</a></li>
            <li><a href='http://www.cs.utah.edu'>School of Computing</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

        <div id=section class='container'>

            <form class='form-signin' method='post'>
                <h2 class='form-signin-heading'>Please sign in</h2>
                <label for='inputEmail' class='sr-only'>User Name</label>
                <input type='text' id='inputEmail' name='username' class='form-control' placeholder='Username' required autofocus>
                <label for='inputPassword' class='sr-only'>Password</label>
                <input type='password' id='inputPassword' name='password' class='form-control' placeholder='Password' required>
                <div class='checkbox'>
                <label>
                    <input type='checkbox' value='remember-me'> Remember me
                </label>
                </div>
                <button class='btn btn-lg btn-primary btn-block' type='submit'>Secure Login</button>
                            <p><br>
            <a href='./Create_User/new_user.php'>  Register for a New Account</a> 
            </p>
            </form>

        </div> <!-- /container -->
        
      <footer class='footer'>
      <div class='container'>
        <p class='text-muted'>© University of Utah School of Computing</p>
      </div>
    </footer>
    </body>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>
    <script>window.jQuery || document.write('<script src='../../assets/js/vendor/jquery.min.js'><\/script>')</script>
    <script src='../dist/js/bootstrap.min.js'></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src='../assets/js/vendor/holder.min.js'></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src='../assets/js/ie10-viewport-bug-workaround.js'></script>
</html>";
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
        <link href='../../Bootstrap/css/bootstrap.css' rel='stylesheet'>
        <link href='../Style/sticky_footer_navbar.css' rel='stylesheet'>
        <link href='../../Style/carousel.css' rel='stylesheet'>

        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <link href='../../assets/css/ie10-viewport-bug-workaround.css' rel='stylesheet'>

        <!-- Custom styles for this template -->
        <link href='../../Style/signin.css' rel='stylesheet'>

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
        <p class='text-muted'>© Island Cars LLC</p>
      </div>
    </footer>
    </body>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>
    <script>window.jQuery || document.write('<script src='../../assets/js/vendor/jquery.min.js'><\/script>')</script>
    <script src='../../Bootstrap/js/bootstrap.min.js'></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src='../assets/js/vendor/holder.min.js'></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src='../assets/js/ie10-viewport-bug-workaround.js'></script>
</html>";
<?php 
set_include_path( "../../");
require_once("Controller/authentication.php");
require_once("Model/Student/student.php");
session_start();
/*verifyLogin("");*/
$uid = $_SESSION['uid'];
$user = new User($uid);
echo "
<!DOCTYPE html>
<html lang='en'>
    <head>
        <link rel='stylesheet' type='text/css' href='../../Style/grad_progress.css'>
        <link rel='stylesheet' type='text/css' href='../../Style/sticky_footer_navbar.css'>
        <link href='../../dist/css/bootstrap.css' rel='stylesheet'>
        <meta charset='UTF-8'>
        <meta name='author' content='Joshua Callahan'>
        <meta name='description' content='Student profile information'>
        <meta name='date' content='January 21, 2016'>
        <script src='https://code.jquery.com/jquery-1.9.1.js'></script>
        <script src='./ajax_charts.js'></script>
    </head>
<body>
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
            <li><a href='./student_forms.php?id=$user->uid'>My Profile</a></li>
            <li><a href='http://www.utah.edu'>University of Utah</a></li>
            <li><a href='http://www.cs.utah.edu'>School of Computing</a></li>
            <li><a href='../logout.php'>Sign Out</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div id='title'>
        <h1>Welcome $user->firstname $user->lastname</h1>
        <h3>Grad Student Progress Metrics</h3>
    </div>
    
   <div id='barchart'>
         <form  id='barchart'   onsubmit='return success_data()'>
             <input type='submit' value='Show Student Success by Advisor'/>
	    </form></div>
        
   <div id='piechart'>
         <form  id='piechart'   onsubmit='return advisor_data()'>
             <input type='submit' value='Show Students by Advisor'/>
	    </form></div>
    
    
    <div id='gpachart'>
         <form  id='gpachart'   onsubmit='return gpa_data()'>
             <input type='submit' value='Show Student GPA by Credit Hour'/>
	    </form></div> 

    <div id=footer>
        <p>University of Utah School of Computing</p>
    </div>
</body>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>
<script src='https://uofu-cs4540-15.westus.cloudapp.azure.com/Projects/Grad_Progress/V7/Highcharts/api/js/jquery-1.11.3.min.js'></script>
<script src='https://uofu-cs4540-15.westus.cloudapp.azure.com/Projects/Grad_Progress/V7/Highcharts/js/highcharts.src.js'></script>

</html>";
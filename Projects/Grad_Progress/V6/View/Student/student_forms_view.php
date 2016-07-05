<?php
/** 
 * Author: Joshua Callahan
 * u0691598
 * Spring 2016
 * V2
 */

echo "<!DOCTYPE html>
<html lang='en'>
    <head>
        <link rel='stylesheet' type='text/css' href='../../Style/grad_progress.css'>
        <link rel='stylesheet' type='text/css' href='../../Style/sticky_footer_navbar.css'>
        <link href='../../dist/css/bootstrap.css' rel='stylesheet'>
        <meta charset='UTF-8'>
        <meta name='author' content='Joshua Callahan'>
        <meta name='description' content='Student profile information'>
        <meta name='date' content='January 21, 2016'>
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
        <h1>Welcome $user->firstname</h1>
    </div>
    
    <div id='section'>
        <p><a href='contact_info.php?id=$user->uid'>My Contact Information</a></p>
        <p><a href='new_form.php?id=$user->uid'>Create New Form</a></p>
        <p>Past Forms:</p>
        $pastforms               
    </div>
    
    <div id=footer>
        <p>University of Utah School of Computing</p>
    </div>
</body>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>
    <script src='../../dist/js/bootstrap.min.js'></script>
</html>";
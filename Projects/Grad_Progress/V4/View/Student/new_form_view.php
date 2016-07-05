<?php
/**
 * Author: Joshua Callahan
 * u0691598
 * Spring 2016
 */
echo "<!DOCTYPE html>
<html lang='en'>
    <head>
        <link rel='stylesheet' type='text/css' href='../../Style/grad_progress.css'>
        <meta charset='UTF-8'>
        <meta name='author' content='Joshua Callahan'>
        <meta name='description' content='New student form'>
        <meta name='date' content='January 21, 2016'>
    </head>
    <body>    
        <div id='header'>         
            <a href='./student_forms.php?id=$user->uid'>My Profile</a>
            <a href='http://www.utah.edu'>University of Utah</a>
            <a href='http://www.cs.utah.edu'>School of Computing</a>
            <a href='../mainpage.php'>Sign Out</a>
        </div>
        
        <div id='title'>
            <h1>Due Progress Advisory Form for Ph.D. Degree</h1>
        </div>
        $progressform
    </div>
    <div id=footer>
        <p>University of Utah School of Computing</p>
    </div>
    </body>
</html>";
?>
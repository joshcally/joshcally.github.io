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
        <meta charset='UTF-8'>
        <meta name='author' content='Joshua Callahan'>
        <meta name='description' content='Contact info'>
        <meta name='date' content='January 21, 2016'>
    </head>
    <body>    
        <div id='header'>         
            <a href='./student_forms.php?id=$user->uid'>My Profile</a>
            <a href='http://www.utah.edu'>University of Utah</a>
            <a href='http://www.cs.utah.edu'>School of Computing</a>
            <a href='../logout.php'>Sign Out</a>
        </div>

        <div id='title'>
            <h1>General Student Information</h1>
        </div>
            
        <div id='section'>
            <p>
            Student Name: $user->firstname $user->lastname<br>
            Student ID: $user->uid<br>
            Degree: Computer Science<br>
            Track: Machine Learning<br>
            Semester Admitted: Fall 2014<br>
            Advisor: Jim De St Germain<br>
            Committee: Joe Zachary, Mariah Myers, David Johnson<br>
        </div>
        
        <div id=footer>
            <p>University of Utah School of Computing</p>
        </div>
    </body>
</html>";
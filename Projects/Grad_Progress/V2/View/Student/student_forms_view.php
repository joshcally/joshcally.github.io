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
        <meta name='description' content='Student profile information'>
        <meta name='date' content='January 21, 2016'>
    </head>
<body>
    <div id='header'>         
        <a href='../../../../index.html'>Back to Projects</a>
        <a href='http://www.utah.edu'>University of Utah</a>
        <a href='http://www.cs.utah.edu'>School of Computing</a>
        <a href='../../Controller/Advisor/students.php'>Students</a>
    </div>

    <div id='title'>
        <h1>$student->name</h1>
    </div>
    
    <div id='section'>
        <ul id='formselection'>
            <li id='pastforms'>Past Forms<br>
                 <a href='progress_form.php?id=1'>December 25, 2015<br>
                 In Compliance</a></li>    
            <li><a href='new_form.php'>Create New Form</a></li>                
        </ul>
    </div>
    
    <div id=footer>
        <p>University of Utah School of Computing</p>
    </div>
</body>
</html>";
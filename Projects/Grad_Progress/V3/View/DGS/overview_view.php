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
        <title>DGS</title>
        <link rel='stylesheet' type='text/css' href='../../Style/grad_progress.css'>
        <meta charset='UTF-8'>
        <meta name='author' content='Joshua Callahan'>
        <meta name='description' content='All advisors in the system'>
        <meta name='date' content='January 21, 2016'>
    </head>
    <body>    
        <div id='header'>         
            <a href='../../../../index.html'>Back to Projects</a>
            <a href='http://www.utah.edu'>University of Utah</a>
            <a href='http://www.cs.utah.edu'>School of Computing</a>
            <a href='./overview.php'>DGS Home</a>
        </div>
        <div id='title'>
            <h1>Advisors</h1>
        </div>

        <div id=section>
            $studentslist
        </div>
        
        <div id=footer>
            <p>University of Utah School of Computing</p>
        </div>
    </body>
</html>";
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
        <title>Advisor</title>
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
            <a href='./students.php'>Advisor Home</a>
        </div>
        <div id='title'>
            <h1>$advisor->name</h1>
            <h2>Students</h2>
        </div>

        <div id=section>
            <ul>
                <li><a href='../Student/student_forms.php?id=1'>Granger, Hermoine</a></li>
                <li><a href='../Student/student_forms.php?id=2'>Longbottom, Neville</a></li>
                <li><a href='../Student/student_forms.php?id=3'>Malfoy, Draco</a></li>
                <li><a href='../Student/student_forms.php?id=4'>Potter, Harry</a></li>
                <li><a href='../Student/student_forms.php?id=5'>Weasley, Ginny</a></li>        
                <li><a href='../Student/student_forms.php?id=6'>Weasley, Ron</a></li> 
            </ul>
        </div>
        
        <div id=footer>
            <p>University of Utah School of Computing</p>
        </div>
    </body>
</html>";
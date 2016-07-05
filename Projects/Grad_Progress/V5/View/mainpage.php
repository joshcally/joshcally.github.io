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
        <link rel='stylesheet' type='text/css' href='../Style/grad_progress.css'>
        <meta charset='UTF-8'>
        <meta name='author' content='Joshua Callahan'>
        <meta name='description' content='Main Page'>
        <meta name='date' content='January 21, 2016'>
    </head>
    <body>    
        <div id='header'>         
            <a href='../../../../index.html'>Back to Projects</a>
            <a href='http://www.utah.edu'>University of Utah</a>
            <a href='http://www.cs.utah.edu'>School of Computing</a>
        </div>
        <div id='title'>
            <h1>Graduate Student Progress Tracker</h1>
        </div>

        <div id=section>
            <p>Welcome to the University of Utah School of Computing Graduate Student Tracker.<br>
            Please log in to view your information.</p>
            
            <form method='post'>
            <p>User Name: <input type='text' name='username'><br>
            Password: <input type='password' name='password'><br>
            <input id='login' type='submit' value='Secure Login'></p>
            </form>
            
            <p>OR<br>
            <a href='./Create_User/new_user.php'>Register for a New Account</a> 
            </p>
            <p>Test Feature: Sign in as user: jonny, password: password</a></p>
        </div>
        
        <div id=footer>
            <p>University of Utah School of Computing</p>
        </div>
    </body>
</html>";
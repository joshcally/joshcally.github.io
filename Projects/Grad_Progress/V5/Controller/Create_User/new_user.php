<?php
set_include_path("../../");
require_once("Controller/database.php");
require_once("Controller/authentication.php");

if ( (isset ( $_GET['firstName']))&&(isset ( $_GET['lastName']))&&(isset ( $_GET['uID']))
    &&(isset ( $_GET['phoneNumber']))&&(isset ( $_GET['email']))&&(isset ( $_GET['userName']))
    &&(isset ( $_GET['password']))&&(isset ( $_GET['confirmPassword'])))
{
    $first = trim($_GET['firstName']);
    $last = trim($_GET['lastName']);
    $uid = trim($_GET['uID']);
    $phone = trim($_GET['phoneNumber']);
    $email = trim($_GET['email']);
    $username = trim($_GET['userName']);
    $password = trim($_GET['password']);
    $salt = makeSalt();
    $hashedpassword = crypt($password, $salt);
    $db = openDBConnection();    
    $query = "INSERT INTO `Grad_Prog_V5`.`users` (`uid`, `first_name`, `last_name`, `email`,
                     `phone_number`, `role`, `username`, `hashword`) 
                    VALUES ('$uid','$first','$last','$email','$phone', 'student', '$username', '$hashedpassword')";

    $statement = $db->prepare($query);
    $statement->execute();
    $output = "
        <div id='form'>   
            <p>
            Thank you! Your information has been saved.<br>
            <a href='../mainpage.php'>Return to login</a>
            </p>
        </div>";
}
else
{   
    $output = "
    <div id=section>
        <p>Please enter the required information.</p>
    </div>
    
    <div id='form'>
        <form method='get'>
        <table>
            <tr>
                <td>
                    First Name:
                </td>
                <td>
                    <input type='text' name='firstName' pattern='[A-Z][a-z]+' 
                        title='Last name - Alphabet characters only' required placeholder='Josh'>
                </td>
            </tr>
            <tr>
                <td>
                    Last Name:
                </td>
                <td>
                   <input type='text' name='lastName' pattern='[A-Z][a-z]+' 
                        title='Last name - Alphabet characters only' required placeholder='Example'>
                </td>
            </tr>
            <tr>
                <td>
                    uID:
                </td>
                <td>
                    <input type='text' name='uID' pattern='[0-9]{8}' title='8-Digit Uid EX-00691234' 
                        required placeholder='00123456'>
                </td>
            </tr>
            <tr>
                <td>
                    Phone Number:
                 </td> 
                 <td>
                    <input type='text' name = 'phoneNumber' pattern='[0-9]+' 
                        title='Numbers only'required placeholder='1234567890'>
                 </td>       
            </tr>
            <tr>
                 <td>               
                    Email:
                 </td>
                 <td>               
                    <input type='email' name='email' required placeholder='example@utah.edu'>
                 </td>
            </tr>
        </table>
        <br>
        <fieldset>
            <legend>Create a username and password</legend>
            <p>User Name: <input type='text' name='userName' required></p>
            <p>Password: <input type='password' name='password' pattern='.{8}.*' 
                title='Passwords must be 8 characters long and match.'required> </p>
            <p>Confirm Password: <input type='password' name='confirmPassword' pattern='.{8}.*' 
                title='Passwords must be 8 characters long and match.'required></p>
         </fieldset>
        <a href='../mainpage.php'>Cancel</a>   
         <input id='submit' type='submit' value='Submit'>      
        </form>      

    </div>";
}    
require "View/Create_User/new_user.php";

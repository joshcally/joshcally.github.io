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
    
    <div id='newuserform'>
        <p id='centered'>Please enter the required information.</p>
        <form method='get'>
            <div class='form-group row'>
            <label for='firstname' class='col-sm-2 form-control-label'>First Name</label>
                <div class='col-sm-10'>
                    <input type='text' class='form-control' id='firstname' placeholder='Josh'
                name='firstName' pattern='[A-Z][a-z]+' title='First name - Alphabet characters only' 
                required>
                </div>
            </div>
            
            <div class='form-group row'>
            <label for='lastname' class='col-sm-2 form-control-label'>Last Name</label>
                <div class='col-sm-10'>
                    <input type='text' class='form-control' id='lastname' placeholder='Example'
                name='lastName' pattern='[A-Z][a-z]+' title='Last name - Alphabet characters only' 
                required>
                </div>
            </div>
            
            <div class='form-group row'>
            <label for='lastname' class='col-sm-2 form-control-label'>uID</label>
                <div class='col-sm-10'>
                    <input type='text' class='form-control' id='lastname' placeholder='00123456'
                name='uID' pattern='[0-9]{8}' title='8-Digit Uid EX-00691234' 
                required>
                </div>
            </div>
            
            <div class='form-group row'>
            <label for='lastname' class='col-sm-2 form-control-label'>Phone Number</label>
                <div class='col-sm-10'>
                    <input type='text' class='form-control' id='lastname' placeholder='1234567890'
                name='phoneNumber' pattern='[0-9]+' title='Numbers only' 
                required>
                </div>
            </div>            
 
            <div class='form-group row'>
            <label for='lastname' class='col-sm-2 form-control-label'>Email</label>
                <div class='col-sm-10'>
                    <input type='email' class='form-control' id='lastname' placeholder='example@utah.edu'
                name='email' required>
                </div>
            </div>               
        <br>
        <fieldset>
            <legend>Create a username and password</legend>
            
            <div class='form-group row'>
            <label for='userName' class='col-sm-2 form-control-label'>User Name</label>
                <div class='col-sm-10'>
                    <input type='text' class='form-control' id='userName'
                name='userName' required>
                </div>
            </div> 
            
            <div class='form-group row'>
            <label for='password' class='col-sm-2 form-control-label'>Password</label>
                <div class='col-sm-10'>
                    <input type='text' class='form-control' id='password'
                name='password' title='Passwords must be 8 characters long and match.' pattern='.{8}.*' required>
                </div>
            </div> 
            
            <div class='form-group row'>
            <label for='confirmPassword' class='col-sm-2 form-control-label'>Confirm Password</label>
                <div class='col-sm-10'>
                    <input type='text' class='form-control' id='confirmPassword' pattern='.{8}.*'
                name='confirmPassword' title='Passwords must be 8 characters long and match.' required>
                </div>
            </div> 

         </fieldset>
         
        <p id='centered'><a class='btn btn-primary' href='../mainpage.php' role='button'>Cancel</a>
        <input class='btn btn-primary' id='submit' type='submit' value='Submit'>  </p>       
        </form>      

    </div>";
}    
require "View/Create_User/new_user.php";

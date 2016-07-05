<?php
set_include_path( "../" . PATH_SEPARATOR . "../../");

// contains database connection variables
try {
    
    // Connect to the data base and select it.
    $db = new PDO("mysql:host=localhost;dbname=Grad_Prog_V4;charset=utf8", "root", "200337226");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

    if ( (isset ( $_GET['firstName']))&&(isset ( $_GET['lastName']))&&(isset ( $_GET['uID']))
        &&(isset ( $_GET['phoneNumber']))&&(isset ( $_GET['email'])))
    {
        $first = $_GET['firstName'];
        $last = $_GET['lastName'];
        $uid = $_GET['uID'];
        $phone = $_GET['phoneNumber'];
        $email = $_GET['email'];
        
        $query = "INSERT INTO `Grad_Prog_V4`.`users` (`uid`, `first_name`, `last_name`, `email`, `phone_number`) 
            VALUES ('$uid', '$first', '$last', '$email', '$phone');";
    
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
            First Name: <input type='text' name='firstName' pattern='[A-Z][a-z]+' 
                title='Last name - Alphabet characters only' required placeholder='Josh'>
            Last Name: <input type='text' name='lastName' pattern='[A-Z][a-z]+' 
                title='Last name - Alphabet characters only' required placeholder='Example'><br>
            uID: <input type='text' name='uID' pattern='[0-9]{8}' title='8-Digit Uid EX-00691234' required placeholder='00123456'><br>
            Phone Number: <input type='text' name = 'phoneNumber' pattern='[0-9]+' 
                title='Numbers only'required placeholder='1234567890'>
            Email: <input type='email' name='email' required placeholder='example@utah.edu'><br>
            Degree: <select>
                        <option value='Computing'>Computing</option>
                        <option value='Computer Science'>Computer Science</option>
                    </select> Track: 
                    <select>
                        <option value='Artificial Intelligence'>Artificial Intelligence</option>
                        <option value='Machine Learning'>Machine Learning</option>
                    </select> <br>
                    Semester Admitted: 
                    <select>
                        <option value='fall13'>Fall 2013</option>
                        <option value='spring14'>Spring 2014</option>
                        <option value='fall14'>Fall 2014</option>
                        <option value='spring15'>Spring 2015</option>
                        <option value='fall15'>Fall 2015</option>
                        <option value='spring16'>Spring 2016</option>
                    </select> <br>
            Create a username and password. <br>
            User Name: <input type='text' name='userName' required>
            Password: <input type='password' name='password' required><br>        
            <input id='submit' type='submit' value='Submit'>  
            </form>      
  
        </div>";
    }

}
catch (PDOException $ex)
{
    $studentslist .= "<p>oops</p>";
    $studentslist .= "<p> Code: {$ex->getCode()} </p>";
    $studentslist .=" <p> See: dev.mysql.com/doc/refman/5.0/en/error-messages-server.html#error_er_dup_key";
    $studentslist .= "<pre>$ex</pre>";
}       
require "View/Create_User/new_user.php";

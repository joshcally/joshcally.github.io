<?php
set_include_path( "../" . PATH_SEPARATOR . "../../");

// contains database connection variables
require 'database_config.php';         

try {
    
    // Connect to the data base and select it.
    $db = new PDO("mysql:host=localhost;dbname=Grad_Prog_V5;charset=utf8", "root", "200337226");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

    $query = "select * from users where faculty = 1";
    $statement = $db->prepare($query);
    $statement->execute();   

    $result = $statement->fetchAll(PDO::FETCH_ASSOC);

    $studentslist = "<ul>";
    foreach ($result as $row) 
    {
        $studentslist .= "<li><a href='../../Controller/Advisor/students.php?id=" . 
        $row['uid'] . "'>" . htmlspecialchars($row['last_name']) . ", " . htmlspecialchars($row['first_name']) . "</a></li>"; 
    }
}
catch (PDOException $ex)
{
    $studentslist .= "<p>oops</p>";
    $studentslist .= "<p> Code: {$ex->getCode()} </p>";
    $studentslist .=" <p> See: dev.mysql.com/doc/refman/5.0/en/error-messages-server.html#error_er_dup_key";
    $studentslist .= "<pre>$ex</pre>";
}                   
require "View/DGS/overview_view.php";

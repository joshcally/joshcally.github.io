<?php
/**
 * Author: Joshua Callahan
 * u0691598
 * Spring 2016
 */
set_include_path( "../../");
require_once "Model/Student/student.php";
require_once "Model/Student/progress_form.php";
$_uid = $_GET['id'];
$user = new User( $_uid );
$pastforms;
try {
    
    // Connect to the data base and select it.
    $db = new PDO("mysql:host=localhost;dbname=test;charset=utf8", "root", "200337226");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

    $query = "SELECT * from Grad_Prog_V4.form_data where uid = $user->uid order by time_completed asc";
    $statement = $db->prepare($query);
    $statement->execute();   
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);

    $pastforms = "<table id='checklist'>";
    
    foreach ($result as $row) 
    {
        $formtime = $row['time_completed'];
        $formid = $row['form_id'];
        $incompliance;
        if ($row['in_compliance'] == 1) {
            $incompliance = "<font color='#009933'>Approved</font>";
        }
        else {
            $incompliance = "<font color='#b34700'>Waiting Approval</font>";
        }
        $pastforms .= "<tr><td><a href='./progress_form.php?id=$formid'>$formtime</a></td><td>"
         . $incompliance . "</td> <td><a href='./progress_form.php?id=$formid'>Edit</a></td></tr>";
    }
    $pastforms .= "</table>";
}
catch (PDOException $ex)
{
    $studentslist .= "<p>oops</p>";
    $studentslist .= "<p> Code: {$ex->getCode()} </p>";
    $studentslist .=" <p> See: dev.mysql.com/doc/refman/5.0/en/error-messages-server.html#error_er_dup_key";
    $studentslist .= "<pre>$ex</pre>";
}                   
require "View/Student/student_forms_view.php";
?>

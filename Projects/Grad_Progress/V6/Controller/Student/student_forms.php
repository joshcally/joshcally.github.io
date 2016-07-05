<?php
/**
 * Author: Joshua Callahan
 * u0691598
 * Spring 2016
 */
set_include_path( "../../" . PATH_SEPARATOR . "../");
require "Model/Student/student.php";
require_once "Model/Student/progress_form.php";
require_once "Controller/authentication.php";
session_start();
verifyLogin("");


$_uid = $_GET['id'];
$user = new User( $_uid );
$pastforms;
try {
    
    // Connect to the data base and select it.
    $db = new PDO("mysql:host=localhost;dbname=Grad_Prog_V5;charset=utf8", "root", "200337226");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

    $query = "SELECT * from Grad_Prog_V5.form_data where uid = $user->uid order by time_completed asc";
    $statement = $db->prepare($query);
    $statement->execute();   
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);

    $pastforms = "
            <table class='table table-sm' id='pastforms'>
        <thead>
            <tr>
            <th>#</th>
            <th>Date</th>
            <th>Status</th>
            <th>Update</th>
            </tr>
        </thead>
        <tbody>";

    $formlistitem = 1;
    foreach ($result as $row) 
    {
        $formtime = $row['time_completed'];
        $formid = $row['form_id'];
        $incompliance;
        if ($row['in_compliance'] == 1) {
            $incompliance = "<span class='glyphicon glyphicon-ok' aria-hidden='true'></span><font color='#009933'> Approved</font>";
        }
        else {
            $incompliance = "<span class='glyphicon glyphicon-remove' aria-hidden='true'></span><font color='#b34700'> Waiting Approval</font>";
        }
        $pastforms .= " <tr>
            <th scope='row'>$formlistitem</th>
            <td><a href='./progress_form.php?id=$formid'><span class='glyphicon glyphicon-calendar' aria-hidden='true'></span> $formtime</a></td>
            <td>$incompliance</td>
            <td><a href='./progress_form.php?id=$formid'><span class='glyphicon glyphicon-wrench' aria-hidden='true'></span> Edit</td>
            </tr>";
         $formlistitem++;
         
    }
    $pastforms .= " </tbody></table>";
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

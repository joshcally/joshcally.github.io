<?php
/**
 * Author: Joshua Callahan
 * u0691598
 * Spring 2016
 */
set_include_path( "../");
require_once("Controller/authentication.php");
require_once("Model/Student/student.php");
session_start();
verifyLogin("");
$uid = $_SESSION['uid'];
if ($_SESSION['username'] == 'dgs'){
    header("Location: ./DGS/overview.php");
}
else {
header("Location: ./Student/student_forms.php?id=$uid");
}
?>
<?php
/**
 * Author: Joshua Callahan
 * u0691598
 * Spring 2016
 */
set_include_path( "../../");
require_once "Model/Student/student.php";
$id = $_GET['id'];
$student = new Student( $id );
require "View/Student/student_forms_view.php";
?>

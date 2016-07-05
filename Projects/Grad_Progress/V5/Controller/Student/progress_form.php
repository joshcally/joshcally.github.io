<?php
/**
 * Author: Joshua Callahan
 * u0691598
 * Spring 2016
 */
set_include_path( "../../" );
require_once "Model/Student/progress_form.php";
require_once "Model/Student/student.php";
require_once "Controller/authentication.php";
session_start();
verifyLogin("");
$id = $_GET['id'];
$form = new Form( $id );
$user = new User( $form->uid );
require "View/Student/progress_form_view.php";
?>
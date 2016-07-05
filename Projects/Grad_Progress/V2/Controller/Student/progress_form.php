<?php
/**
 * Author: Joshua Callahan
 * u0691598
 * Spring 2016
 */
set_include_path( "../../" );
require_once "Model/Student/progress_form.php";
$id = $_GET['id'];
$form = new Form( $id );
require "View/Student/progress_form_view.php";
?>
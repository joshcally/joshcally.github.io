<?php
/**
 * Author: Joshua Callahan
 * u0691598
 * Spring 2016
 */
set_include_path( "../../" );
require_once "Model/Student/student.php";
require_once "Controller/authentication.php";
session_start();
verifyLogin("");
$id = $_GET['id'];
$user = new User( $id );
require "View/Student/contact_info_view.php";
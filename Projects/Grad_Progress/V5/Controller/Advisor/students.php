<?php
/**
 * Author: Joshua Callahan
 * u0691598
 * Spring 2016
 */
set_include_path( "../Models/Advisor/" .PATH_SEPARATOR .
		  "../../View/DGS");
require_once 'advisor.php';
$id = $_GET['id'];
$advisor= new Advisor( $id );
require "Advisor/students_view.php";
?>

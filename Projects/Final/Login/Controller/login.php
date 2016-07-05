<?php
/**
 * Author: Joshua Callahan
 * u0691598
 * Spring 2016
 */
set_include_path( "../../");
require_once("Login/Controller/authentication.php");
require_once("Login/Model/employee.php");
session_start();
verifyLogin("");
$userID = $_SESSION['userID'];
header("Location: ./edit_page.php");

?>
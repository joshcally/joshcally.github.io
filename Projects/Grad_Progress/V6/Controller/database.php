<?php
/**
 * Author: Joshua Callahan
 * u0691598
 * Spring 2016
 */
set_include_path("../../");
require_once("Hidden/database_config.php");
function openDBConnection () {
    $db = new PDO("mysql:host=localhost;dbname=Grad_Prog_V5;charset=utf8", "root", "200337226");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    return $db;
    }
 ?>
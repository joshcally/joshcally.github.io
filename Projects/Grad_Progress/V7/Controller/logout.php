<?php
/**
 * Author: Joshua Callahan
 * u0691598
 * Spring 2016
 */
set_include_path( "../" );
session_start();
session_destroy();
require "View/logout.php";
?>
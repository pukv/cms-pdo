<?php

// Start Session
session_start();

// Include the main configuration file
require_once "config/config.php";

//Load Database
require_once "classes/Database.php";

// Include helper functions
require_once "helpers.php";

// Define global constants
define("APP NAME", "CMS PDO System");

?>

<?php

/*

* SPARROW - A PHP Framework For Web Artisans

*/

//start session
session_start();

//error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', 'http://localhost/mass/error_log.txt');

//include db.php
//require_once 'config/db.php';

//include globalVariables.php
require_once 'globalVariables.php';

//include globalFunctions.php
require_once 'globalFunctions.php';

//use checklogin function from globalFunctions.php
//checkLogin();

//include sqLfunctions.php
//require_once 'config/sqlFunctions.php';

$currentLocation = getCurrentLocation();

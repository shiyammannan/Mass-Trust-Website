<?php

define('BASEPATH', 'http://localhost/Mass-Trust');
define('GLOBAL_PATH', 'http://localhost/Mass-Trust/global');
define('SEO_URL', 'http://localhost/Mass-Trust');
define('INDEX', BASEPATH . '/index.php');
define('MODULES', BASEPATH . '/modules');
define('ASSETS', BASEPATH . '/assets');
define('AJAX', BASEPATH . '/ajax');
define('PACKAGES', BASEPATH . '/packages');
define('TIMEZONE', 'Asia/Kolkata');
define('LANG', 'EN');
//INDIAN CURRENCY SYMBOL
define('general_currency_symbol', '&#8377;');
define("COOKIE_TIME_OUT", 10); //specify cookie timeout in days (default is 10 days)

date_default_timezone_set(TIMEZONE);

//date format
define('DATE_FORMAT', 'd-m-Y');
//time format
define('TIME_FORMAT', 'h:i:s A');
//date time format
define('DATETIME_FORMAT', 'd-m-Y h:i:s A');

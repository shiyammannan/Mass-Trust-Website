<?php

define('DB_HOST', 'localhost');
define('DB_NAME', 'mass_trust');
define('DB_USER', 'root');
define('DB_PASSWORD', '');

try {
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
} catch (mysqli_sql_exception $exception) {
    die("Failed to connect to MySQL: " . $exception->getMessage());
}

// Connection established successfully, proceed with further actions
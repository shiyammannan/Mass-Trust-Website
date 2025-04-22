<?php

//checklogin function - check $_SESSION['logged_user_id'] is set or not if it is not set redirect to index.php
function checkLogin()
{
    if (!isset($_SESSION['logged_user_id'])) {
        header('Location: ' . INDEX);
    }
}

// Function to get the current location
function getCurrentLocation(): string // Specify return type (optional)
{
    // Extract the location (file name) from the URL
    $location = explode('/', $_SERVER['PHP_SELF']);
    $location = end($location); // Get the last element (file name)

    // Remove the ".php" extension
    $location = pathinfo($location, PATHINFO_FILENAME);

    // Check if the location is "index" and treat it as "Login"
    if ($location === "index") {
        $location = "Home";
    }

    // Retrieve the "type" parameter from the URL if it exists
    $type = isset($_GET['type']) ? $_GET['type'] : '';

    // Concatenate "Mass Trust | " with the type and current location
    if (!empty($type)) {
        return "$type $location | Mass Trust";
    } else {
        return "$location | Mass Trust";
    }
}


//1. Validate Length with value and length
function validateLength($value, $length)
{
    if (strlen($value) <= $length) {
        return false;
    } else {
        return true;
    }
}

//2.validate Email
function isEmail($email)
{
    return preg_match('/^\S+@[\w\d.-]{2,}\.[\w]{2,6}$/iU', $email) ? TRUE : FALSE;
}

//3.Passwword Hash
function hashPassword(string $userPassword, int $cost = 10): string // Specify parameter and return types
{
    // Use a strong algorithm like Argon2id
    $options = [
        'cost' => $cost, // Adjust cost based on server resources and security needs
        'algorithm' => PASSWORD_ARGON2ID,
    ];

    // Hash the password with the specified options
    $hashedPassword = password_hash($userPassword, PASSWORD_ARGON2ID, $options);

    // Return the hashed password
    return $hashedPassword;
}

//4.Verify Password
function verifyPassword(string $userPassword, string $hashedPassword): bool // Specify parameter and return types
{
    // Attempt to verify the password using password_verify
    $isValid = password_verify($userPassword, $hashedPassword);

    // Return true if password matches, false otherwise
    return $isValid;
}

//5. Validate Phone Number 
function isPhoneNumber($phone)
{
    return preg_match('/^[0-9]{10}+$/', $phone) ? TRUE : FALSE;
}

// 6. Is Not Null
function isNotNull($value)
{
    if ($value == null) {
        return false;
    } else {
        return true;
    }
}

// 7. sanitize input
function sanitizeInput(mixed $value, string $type = 'string'): mixed
{
    // Trim leading/trailing whitespace
    $value = trim($value);

    // Sanitize based on input type
    switch ($type) {
        case 'string':
            // Remove HTML entities and escape special characters
            $value = htmlspecialchars($value, ENT_QUOTES);
            // Optionally, remove tags if needed: $value = strip_tags($value);
            break;
        case 'int':
            // Sanitize integer
            $value = filter_var($value, FILTER_SANITIZE_NUMBER_INT);
            break;
        case 'float':
            // Sanitize float format
            $value = filter_var($value, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
            break;
        case 'email':
            // Validate and sanitize email format
            $value = filter_var($value, FILTER_SANITIZE_EMAIL);
            break;
        case 'url':
            // Validate and sanitize URL format
            $value = filter_var($value, FILTER_SANITIZE_URL);
            break;
        default:
            // Treat unknown types as strings (consider throwing an exception for unexpected types)
            $value = htmlspecialchars($value, ENT_QUOTES);
    }

    return $value;
}


// 8.capitalize first letter after all whitespaces
function capitalizeFirstLetter($value)
{
    return ucwords(strtolower($value));
}

//9.remove whitespaces at start and end
function removeWhitespaces($value)
{
    return trim($value);
}

//10. get current date 
function getCurrentDate()
{
    return date(DATE_FORMAT);
}

//11. get current time in 12 hrs format
function getCurrentTime()
{
    return date(TIME_FORMAT);
}

//12. get current date and time
function getCurrentDateTime()
{
    return date(DATETIME_FORMAT);
}

//13.Show Time stamp.  Eg.: few seconds ago
function showTimeStamp(int|string $timeStamp): string
{
    $timeStamp = strtotime($timeStamp);
    $timeElapsed = time() - $timeStamp;  // Time elapsed since the timestamp

    $timeUnits = [
        // Units in descending order of magnitude
        'year'   => 31536000,
        'month'  => 2592000,
        'week'   => 604800,
        'day'    => 86400,
        'hour'   => 3600,
        'minute' => 60,
        'second' => 1,
    ];

    foreach ($timeUnits as $unit => $secondsInUnit) {
        if ($timeElapsed >= $secondsInUnit) {
            $numberOfUnits = floor($timeElapsed / $secondsInUnit);
            return "$numberOfUnits {$unit}" . ($numberOfUnits > 1 ? 's' : '') . ' ago';
        }
    }

    // If no matching unit found, fall back to seconds
    return "a few seconds ago";
}

function convertNumberToWords(int|float $number): string
{
    $dictionary = [
        0 => 'zero',
        1 => 'one',
        2 => 'two',
        3 => 'three',
        4 => 'four',
        5 => 'five',
        6 => 'six',
        7 => 'seven',
        8 => 'eight',
        9 => 'nine',
        10 => 'ten',
        11 => 'eleven',
        12 => 'twelve',
        13 => 'thirteen',
        14 => 'fourteen',
        15 => 'fifteen',
        16 => 'sixteen',
        17 => 'seventeen',
        18 => 'eighteen',
        19 => 'nineteen',
        20 => 'twenty',
        30 => 'thirty',
        40 => 'forty',
        50 => 'fifty',
        60 => 'sixty',
        70 => 'seventy',
        80 => 'eighty',
        90 => 'ninety',
        100 => 'hundred',
        1000 => 'thousand',
        1000000 => 'million',
        1000000000 => 'billion',
        1000000000000 => 'trillion',
        1000000000000000 => 'quadrillion',
        1000000000000000000 => 'quintillion'
    ];

    $numberParts = explode('.', (string) $number);
    $integerString = convertIntegerToWords((int) $numberParts[0], $dictionary);
    $fractionString = '';

    if (isset($numberParts[1])) {
        $fractionDigits = str_split($numberParts[1]);
        $fractionWords = array_map(fn ($digit) => $dictionary[$digit], $fractionDigits);
        $fractionString = " {$dictionary['point']} " . implode(' ', $fractionWords);
    }

    return $integerString . $fractionString;
}

function convertIntegerToWords(int $number, $dictionary): string
{
    if ($number === 0) {
        return $dictionary[0];
    }

    $groups = [];
    $group = $number;
    $groupIndex = 0;

    while ($group > 0) {
        $groups[$groupIndex++] = $group % 1000;  // Extract groups of three digits
        $group = floor($group / 1000);
    }

    $groupWords = array_map(fn ($group) => convertThreeDigitsToWords($group, $dictionary), array_reverse($groups));
    return implode(' ' . $dictionary['thousand'] . ' ', $groupWords);
}

function convertThreeDigitsToWords(int $number, $dictionary): string
{
    if ($number === 0) {
        return '';
    }

    $words = [];

    // Handle hundreds
    if ($hundreds = $number / 100) {
        $words[] = $dictionary[$hundreds * 100];
    }

    // Handle tens and units
    $tensAndUnits = $number % 100;
    if ($tensAndUnits > 0) {
        $words[] = $tensAndUnits < 20 ? $dictionary[$tensAndUnits] : $dictionary[($tensAndUnits / 10) * 10];
        $units = $tensAndUnits % 10;
        if ($units > 0) {
            $words[] = $dictionary[$units];
        }
    }

    return implode(' ', $words);
}

//15. get rounded value
function getRoundedValue($value)
{
    return round($value, 2);
}

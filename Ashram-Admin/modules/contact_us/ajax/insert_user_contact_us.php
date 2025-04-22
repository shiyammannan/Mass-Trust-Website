<?php
include_once('../../../config/sparrow.php');
global $conn;

if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest') && $_SERVER['REQUEST_METHOD'] == 'POST') {

    // Sanitize the POST data to avoid any potential SQL injection or XSS attacks
    $name = trim($_POST['name']);
    $surname = trim($_POST['surname']);
    $email = trim($_POST['email']);
    $phone_number = trim($_POST['phone_number']);
    $comments = trim($_POST['comments']);

    // Define the table name, columns, and values for insertion
    $tableName = 'mass_contact_us';
    $columns = ['name', 'surname', 'email', 'phone_number', 'comments'];
    $values = [
        $name,
        $surname,
        $email,
        $phone_number,
        $comments
    ];

    // Insert the record using the createRecord function
    $result = createRecord($tableName, $columns, $values);

    // Return the result as a JSON response
    if ($result['success']) {
        echo json_encode(['status' => 'success', 'message' => $result['response']]);
    } else {
        echo json_encode(['status' => 'error', 'message' => $result['response']]);
    }
} else {
    // If the request is not an AJAX POST request, return an error
    echo json_encode(['status' => 'error', 'message' => 'Invalid request.']);
}
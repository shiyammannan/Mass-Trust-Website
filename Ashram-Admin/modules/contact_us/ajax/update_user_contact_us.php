<?php
include_once('../../../config/sparrow.php');
global $conn;

if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest') && $_SERVER['REQUEST_METHOD'] == 'POST') {

    // Sanitize the POST data
    $contact_us_id = isset($_POST['contact_us_id']) ? intval($_POST['contact_us_id']) : 1;
    $name = trim($_POST['name']);
    $surname = trim($_POST['surname']);
    $email = trim($_POST['email']);
    $phone_number = trim($_POST['phone_number']);
    $comments = trim($_POST['comments']);

    // Ensure the `contact_us_id` is provided for updating
    if ($contact_us_id === null) {
        echo json_encode(['status' => 'error', 'message' => 'Invalid contact_us_id for update.']);
        exit;
    }

    // Define the table name, columns, and values for updating
    $tableName = 'mass_contact_us';
    $setColumns = ['name', 'surname', 'email', 'phone_number', 'comments'];
    $setValues = [
        $name,
        $surname,
        $email,
        $phone_number,
        $comments
    ];

    // Define the WHERE condition for the update
    $whereConditions = [
        ['operator' => 'contact_us_id = ?', 'value' => $contact_us_id]
    ];

    // Call the updateRecord function to update the record
    $result = updateRecord($tableName, $setColumns, $setValues, $whereConditions);

    // Return the result as a JSON response
    if ($result['success']) {
        echo json_encode(['status' => 'success', 'message' => $result['response']]);
    } else {
        echo json_encode(['status' => 'error', 'message' => $result['response']]);
    }
} else {
    // If the request is not an AJAX POST request, return an error
    echo json_encode(['status' => 'error', 'message' => 'Invalid request.']);
}

<?php
include_once('../../../config/sparrow.php');
global $conn;

if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest') && $_SERVER['REQUEST_METHOD'] == 'POST') {

    // Sanitize and validate the POST data
    $contact_us_id = isset($_POST['contact_us_id']) ? intval($_POST['contact_us_id']) : 1;

    // Ensure the `contact_us_id` is provided for deletion
    if ($contact_us_id === null) {
        echo json_encode(['status' => 'error', 'message' => 'Invalid contact_us_id for deletion.']);
        exit;
    }

    // Define the table name and where conditions for the delete
    $tableName = 'mass_contact_us';
    $whereConditions = [
        ['operator' => 'contact_us_id = ?', 'value' => $contact_us_id]
    ];

    // Call the deleteRecords function to delete the record
    $result = deleteRecords($tableName, $whereConditions);

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

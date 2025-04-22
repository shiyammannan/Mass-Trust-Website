<?php
include_once('../../config/sparrow.php');

// Assuming that $conn is the active MySQLi connection object
global $conn;

// Check if the request is an AJAX request
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest') && $_SERVER['REQUEST_METHOD'] == 'POST') {

    $username = isset($_POST['username']) ? sanitizeInput($_POST['username'], 'string') : '';
    $password = isset($_POST['password']) ? sanitizeInput($_POST['password'], 'string') : '';

    // Check empty fields
    if (empty($username) || empty($password)) {
        echo json_encode(['status' => 'error', 'message' => 'Please fill in all fields']);
        exit();
    }

    try {
        // Fetch the user record from the database using the getRecords function
        $columns = ['firm_profile_id', 'username', 'password'];
        $whereConditions = [['column' => 'username', 'operator' => '=', 'type' => 's', 'value' => 'admin']];

        $result = getRecords('mass_firm_profile', $columns, $whereConditions, "");
        if ($result['success']) {
            if (!empty($result['response'])) {
                $user = $result['response'][0];

                // Verify the password
                if (verifyPassword($password, $user['password'])) {

                    echo json_encode(['status' => 'success', 'message' => 'Login successful', 'redirect' => BASEPATH . '/dashboard']);

                } else {
                    echo json_encode(['status' => 'error', 'message' => 'Invalid password']);
                }
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Invalid username']);
            }
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Database error: ' . $result['response']]);
        }
    } catch (Exception $e) {
        echo json_encode(['status' => 'error', 'message' => $e->getMessage()]);
    }
}

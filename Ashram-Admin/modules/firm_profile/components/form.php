<?php
require_once('../../../config/sparrow.php');
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest')) {

    $username="JENI";
    $pass="aj";
    
    echo json_encode(['status' => 'success', 'username' => $username, 'pass' => $pass]);
}
?>


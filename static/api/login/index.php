<?php

if ($_POST['usermame'] != 'test' || $_POST['password'] != 'test') {
    $protocol = isset($_SERVER['SERVER_PROTOCOL']) ? $_SERVER['SERVER_PROTOCOL'] : 'HTTP/1.0';
    header("$protocol 401 Unauthorized");
    exit;
}
  
$token = 'abcdef01234567890';
//$token = bin2hex(random_bytes(16));

$json = array('token' => $token);

header('Content-Type: application/json');
echo json_encode($json);

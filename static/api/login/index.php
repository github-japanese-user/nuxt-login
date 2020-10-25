<?php

if ($_POST['usermame'] != 'test' || $_POST['password'] != 'test') {
    http_response_code(401);
    exit;
}
  
$token = 'abcdef01234567890';
//$token = bin2hex(random_bytes(16));

$json = [ 'token' => $token ];

header('Content-Type: application/json');
echo json_encode($json);

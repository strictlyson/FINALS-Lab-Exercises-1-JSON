<?php
header('Content-Type: application/json');

$userProfile = [
    "id" => 101,
    "name" => "Alex Rivera",
    "email" => "alex.rivera@student.edu",
    "status" => "active"
];

echo json_encode($userProfile);
?>
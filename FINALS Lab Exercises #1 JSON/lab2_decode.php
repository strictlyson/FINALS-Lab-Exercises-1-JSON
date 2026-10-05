<?php
$jsonString = '{"name":"Maria","age":21,"email":"maria@example.com"}';

$studentObject = json_decode($jsonString);
$studentArray = json_decode($jsonString, true);

echo "Object: " . $studentObject->name . "<br>";
echo "Array: " . $studentArray['email'];
?>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    header('Content-Type: application/json');
    
    $input = file_get_contents('php://input');
    $data = json_decode($input, true);
    
    $name = isset($data['name']) ? $data['name'] : 'Guest';
    
    echo json_encode([
        "status" => "success",
        "message" => "Welcome, " . $name . "!"
    ]);
    exit; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab Exercise 5</title>
</head>
<body>

    <form id="userForm">
        <input type="text" id="nameInput" placeholder="Enter name" required>
        <button type="submit">Send</button>
    </form>

    <div id="responseOutput"></div>

    <script>
        document.getElementById('userForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const name = document.getElementById('nameInput').value;

            fetch('', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({ name: name })
            })
            .then(response => response.json())
            .then(data => {
                document.getElementById('responseOutput').innerText = JSON.stringify(data);
            });
        });
    </script>

</body>
</html>
<?php

include('connect.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
 
    $user_id = $_POST['user_id'];
    $query_text = $_POST['query_text'];

    $stmt = $conn->prepare('INSERT INTO queries (user_id, query_text) VALUES (?, ?)');
    $stmt->bind_param('is', $user_id, $query_text);
    $stmt->execute();
   
}


?>

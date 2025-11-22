<?php

include('connect.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $course_code = $_POST['code'];


    $stmt = $conn->prepare('INSERT INTO users (name, email, password, course_code) VALUES (?, ?, ?, ?)');
    $stmt->bind_param('ssss', $name, $email, $password, $course_code);
    $stmt->execute();
 
}

?>

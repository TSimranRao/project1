<?php
include('connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered Users</title>
</head>
<body style="font-family: 'Arial', sans-serif; background: linear-gradient(to right, #f0e7e7, #c9d6ff); margin: 0; padding: 0; text-align: center; color: #333;">

<?php
$result = $conn->query('SELECT * FROM users');

if ($result->num_rows > 0) {
    echo '<h2 style="color: #FFFF00; margin-top: 50px; font-size: 32px; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);">Registered Users</h2>';
    echo '<div style="display: inline; flex-wrap: wrap; justify-content: center; margin-top: 20px;">';
    
    while ($row = $result->fetch_assoc()) {
        echo '<div style="background: linear-gradient(to right, #FFCOCB, #e1d5ff); box-shadow: 0 0 15px rgba(0, 0, 0, 0.2); padding: 20px; margin: 20px; border-radius: 10px; text-align: left; width: 300px;">';
        echo '<p style="color: #185; font-size: 18px; margin-bottom: 10px;"><strong>Name:</strong> ' . $row['name'] . '</p>';
        echo '<p style="color: #243; font-size: 18px;"><strong>Email:</strong> ' . $row['email'] . '</p>';
        echo '<p style="color: #42; font-size: 18px;"><strong>Course Code:</strong> ' . $row['course_code'] . '</p>';
        echo '</div>';
    }

    echo '</div>';
} else {
    echo '<p style="color: #555; font-size: 24px; margin-top: 50px;">No registered users.</p>';
}


?>
</body>
</html>

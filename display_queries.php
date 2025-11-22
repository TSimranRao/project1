<?php
include('connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Queries</title>
</head>
<body style="font-family: 'Arial', sans-serif; background: linear-gradient(to right, #000, #64b3f4); margin: 0; padding: 0; text-align: center; color: #333;">

<?php
$result = $conn->query('SELECT * FROM queries');

if ($result->num_rows > 0) {
    echo '<h2 style="color: #4caf50; margin-top: 50px; font-size: 32px; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);">User Queries</h2>';
    echo '<div style="display: flex; flex-wrap: wrap; justify-content: center; margin-top: 20px;">';
    
    while ($row = $result->fetch_assoc()) {
        echo '<div style="background: linear-gradient(to right, #d1f2a5, #a7e9af); box-shadow: 0 0 15px rgba(0, 0, 0, 0.2); padding: 20px; margin: 20px; border-radius: 10px; text-align: left; width: 300px;">';
        echo '<p style="color: #333; font-size: 18px; margin-bottom: 10px;"><strong>User ID:</strong> ' . $row['user_id'] . '</p>';
        echo '<p style="color: #333; font-size: 18px;"><strong>Query:</strong> ' . $row['query_text'] . '</p>';
        echo '</div>';
    }

    echo '</div>';
} else {
    echo '<p style="color: #555; font-size: 24px; margin-top: 50px;">No user queries.</p>';
}


?>
</body>
</html>

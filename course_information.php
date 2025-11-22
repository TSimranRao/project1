<?php
include('connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore Our Courses</title>
</head>
<body style="font-family: 'Arial', sans-serif; background: linear-gradient(to right, #000, #64b3f4); margin: 0; padding: 0; text-align: center; color: #333;">

<?php
$result = $conn->query('SELECT * FROM CourseInformation');

if ($result->num_rows > 0) {
    echo '<h2 style="color: #4caf50; margin-top: 50px; font-size: 32px; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);">Explore Our Courses</h2>';
    
    while ($row = $result->fetch_assoc()) {
        echo '<div style="background: linear-gradient(to right, #d1f2a5, #a7e9af); box-shadow: 0 0 15px rgba(0, 0, 0, 0.2); padding: 30px; margin: 30px; border-radius: 15px; text-align: left;">';
        echo '<h3 style="color: #333; font-size: 28px; margin-bottom: 10px;">' . $row['course_name'] . '</h3>';
        echo '<p style="color: #555; font-size: 18px;"><strong>Cost:</strong> $' . $row['cost'] . '</p>';
        echo '<p style="color: #555; font-size: 18px;"><strong>Duration:</strong> ' . $row['duration'] . ' weeks</p>';
        echo '<p style="color: #333; font-size: 20px; margin-top: 20px;">' . $row['description'] . '</p>';
        echo '<p style="color: #4caf50; font-size: 18px; margin-top: 20px;"><strong>Course Code:</strong> ' . $row['course_code'] . '</p>';
        echo '</div>';
    }
} else {
    echo '<p style="color: #555; font-size: 24px; margin-top: 50px;">No courses available.</p>';
}


?>
</body>
</html>

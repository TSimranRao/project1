
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
    $user_id = $_POST['user_id'];
    $query_text = $_POST['query_text'];

  
    include('connect.php');


    $stmt = $conn->prepare('INSERT INTO queries (user_id, query_text) VALUES (?, ?)');
    $stmt->bind_param('is', $user_id, $query_text);

    if ($stmt->execute()) {
        echo '<p>Query submitted successfully!</p>';
    } else {
        echo '<p>Error submitting query.</p>';
    }

   
} else {

    echo '<p>Error: Direct access not allowed.</p>';
}
?>

<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo '<!DOCTYPE html>';
    echo '<html lang="en">';
    echo '<head>';
    echo '<meta charset="UTF-8">';
    echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
    echo '<title>User Registration</title>';
    echo '</head>';
    echo '<body style="font-family: \'Arial\', sans-serif; background: linear-gradient(to right, #3494E6, #EC6EAD); margin: 0; padding: 0; text-align: center; height: 100vh; display: flex; align-items: center; justify-content: center;">';

    echo '<div style="max-width: 400px; margin: 50px auto; background-color: #fff; box-shadow: 0 0 20px rgba(0, 0, 0, 0.1); padding: 30px; border-radius: 10px; text-align: left;">';

    $inputStyle = 'width: 100%; padding: 10px; margin-bottom: 20px; box-sizing: border-box; border: 1px solid #ddd; border-radius: 4px;';

    echo '<h2 style="color: #3494E6; font-size: 32px; text-align: center; margin-bottom: 20px;">User Registration</h2>';

    echo '<form method="post" action="registration_process.php">';

    echo '<label style="color: #333; font-size: 18px; display: block; margin-bottom: 10px;">Name:</label>';
    echo '<input type="text" name="name" required style="' . $inputStyle . '">';

    echo '<label style="color: #333; font-size: 18px; display: block; margin-top: 20px; margin-bottom: 10px;">Email:</label>';
    echo '<input type="email" name="email" required style="' . $inputStyle . '">';

    echo '<label style="color: #333; font-size: 18px; display: block; margin-top: 20px; margin-bottom: 10px;">Password:</label>';
    echo '<input type="password" name="password" required pattern=".{6,}" style="' . $inputStyle . '">';

    echo '<label style="color: #333; font-size: 18px; display: block; margin-top: 20px; margin-bottom: 10px;">Course Code:</label>';
    echo '<input type="text" name="code" required style="' . $inputStyle . '">';

    echo '<input type="submit" value="Register" style="background: linear-gradient(to right, #3494E6, #EC6EAD); color: #fff; padding: 15px 20px; border: none; border-radius: 4px; cursor: pointer; margin-top: 20px; font-size: 18px;">';
    echo '</form>';
    echo '</div>';
    echo '</body>';
    echo '</html>';
}
?>

<?php
require_once 'config.php';

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];

// Validate user input
if (empty($name) || empty($email) || empty($phone) || empty($address)) {
    echo '<p style="color: red;">Please fill in all fields.</p>';
    exit;
}

// Display submitted data
echo '<h2>Registration Successful!</h2>';
echo '<p>Name: ' . $name . '</p>';
echo '<p>Email: ' . $email . '</p>';
echo '<p>Phone: ' . $phone . '</p>';
echo '<p>Address: ' . $address . '</p>';
?>

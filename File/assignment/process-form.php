<?php
session_start();


if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['password']) || empty($_FILES['profile-picture']['name'])) {
    die("All fields are required.");
}

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

// Validate email format
if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Invalid email format.");
}

// Save profile picture to server
$uploadsDir = "uploads/";
$fileName = uniqid() . '-' . $_FILES['profile-picture']['name'];
$targetFilePath = $uploadsDir . $fileName;

if(!move_uploaded_file($_FILES['profile-picture']['tmp_name'], $targetFilePath)) {
    die("Failed to upload profile picture.");
}

// Save user data to CSV file
$userData = array($name, $email, $fileName);
$fp = fopen('users.csv', 'a');
fputcsv($fp, $userData);
fclose($fp);

// Set cookie with user's name
setcookie("name", $name);

// Redirect to success page
header('Location: success.php');
exit();
?>

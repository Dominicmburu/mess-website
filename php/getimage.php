<?php
// Start a session
// session_start();

// Check if user is logged in and has a unique ID
if (!isset($_SESSION['unique_id'])) {
    header('Location: index.php');
    exit;
}

// Get the user's unique ID from the session
$unique_id = $_SESSION['unique_id'];

// Connect to the database
include_once "config.php";


// Prepare and execute a query to get the user's phone number
$sql = "SELECT image FROM users WHERE unique_id = '$unique_id'";
$result = mysqli_query($conn, $sql);

// Check if query was successful
if (!$result) {
    die('Could not fetch user data from the database: ' . mysqli_error($conn));
}

// Get the user's phone number from the query result
$row = mysqli_fetch_assoc($result);
// $phone_number = $row['phone'];

$sql = "SELECT fname FROM users WHERE unique_id = '$unique_id'";
$result2 = mysqli_query($conn, $sql);

if (!$result2) {
    die('Could not fetch user data from the database: ' . mysqli_error($conn));
}

// Get the user's phone number from the query result
$row2 = mysqli_fetch_assoc($result2);
// $phone_number = $row['phone'];
?>

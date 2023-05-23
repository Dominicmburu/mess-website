<?php
// Check if user is logged in and has a unique ID
if (!isset($_SESSION['unique_id'])) {
    header('Location: index.php');
    exit;
}

// Get the user's unique ID from the session
$unique_id = $_SESSION['unique_id'];

// Connect to the database
include_once "config.php";

// Check if the status button is clicked
if (isset($_POST['status_btn'])) {
    $id = $_POST['id'];
    $status = $_POST['status'];
  
    // Update the status in the database
    $sql = "UPDATE food SET status='$status' WHERE id='$id'";
  
    if (mysqli_query($conn, $sql)) {
    //   echo "Status updated successfully";
    } else {
      echo "Error updating status: " . mysqli_error($conn);
    }
  }
?>

<?php 
session_start();
include_once "config.php";
$unique_id = $_SESSION['unique_id'];
  $sql3 = "SELECT id FROM users WHERE unique_id = '$unique_id'";
  $result3 = mysqli_query($conn, $sql3);
  if (!$result3) {
      die('Could not fetch user data from the database: ' . mysqli_error($conn));
  }
  $row3 = mysqli_fetch_assoc($result3);
if(!isset($_SESSION['unique_id']) && !$row3['id'] == 8){
  header("location: login.php");
}

$id = mysqli_real_escape_string($conn, $_SESSION['unique_id']);
$username = mysqli_real_escape_string($conn, $_POST['admin-username']);
$phone = mysqli_real_escape_string($conn, $_POST['admin-phone']);
$old_password = mysqli_real_escape_string($conn, $_POST['old-password']);
$new_password = mysqli_real_escape_string($conn, $_POST['new-password']);
$confirm_new_password = mysqli_real_escape_string($conn, $_POST['confirm-new-password']);

// Basic form validation
if(empty($username)) {
  echo "Username field is required";
  exit();
}

if(empty($phone)) {
    echo "Phone field is required";
    exit();
}

if(empty($old_password)) {
    echo "Old password field is required";
    exit();
}

if(empty($new_password)) {
    echo "New password field is required";
    exit();
}

if(empty($confirm_new_password)) {
    echo "Confirm new password field is required";
    exit();
}

if(strlen($new_password) < 8) {
    echo "New password must be at least 8 characters long ";
    exit();
}
if(!preg_match("#[0-9]+#", $new_password)) {
    echo "New password must contain at least one number ";
    exit();
}

if(!preg_match("#[A-Za-z]+#", $new_password)) {
    echo "New password must contain at least one letter ";
    exit();
}

if ($new_password != $confirm_new_password) {
  echo "New password and confirm password does not match. ";
}

// Check if old password is correct
$sql = mysqli_query($conn, "SELECT password FROM users WHERE unique_id = '{$id}'");
$row = mysqli_fetch_assoc($sql);
$enc_old_pass = md5($old_password);
$old_pass_match = ($row['password'] === $enc_old_pass);

if(!$old_pass_match) {
    echo "Old password is incorrect";
    exit();
}

// Update user information
$enc_new_pass = md5($new_password);

if(strlen($phone) != 10){
  echo "Phone must be 10 numbers and valid ";
}elseif(strlen($username) < 5){
  echo "Username must be atleast 5 characters";
}else{

  $update_sql = mysqli_query($conn, "UPDATE users SET fname = '{$username}', phone = '{$phone}', password = '{$enc_new_pass}' WHERE unique_id = '{$id}'");
  
  if($update_sql) {
    echo "success";
  } else {
      echo "Something went wrong, please try again later";
  }
}
?>
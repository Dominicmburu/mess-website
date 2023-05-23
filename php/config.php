<?php
$conn = mysqli_connect("localhost", "root", "", "messweb");

if(!$conn){
echo "Database connection error".mysqli_connect_error();
}
?>
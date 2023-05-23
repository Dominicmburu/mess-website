<?php
    session_start();
    include_once "config.php";
    $unique_id = mysqli_real_escape_string($conn, $_SESSION['unique_id']);
    $sql3 = "SELECT id FROM users WHERE unique_id = '$unique_id'";
    $result3 = mysqli_query($conn, $sql3);
    if (!$result3) {
        die('Could not fetch user data from the database: ' . mysqli_error($conn));
    }
    $row3 = mysqli_fetch_assoc($result3);

    if(isset($_SESSION['unique_id']) && $row3['id'] == 8){
        session_unset();
        session_destroy();
        header("location: ../login.php");
    }else{  
        header("location: ../login.php");
    }

?>
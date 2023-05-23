<?php 
    session_start();
    include_once "config.php";
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    if(!empty($phone) && !empty($password)){
        $sql = mysqli_query($conn, "SELECT * FROM users WHERE phone = '{$phone}'");
        if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
            $user_pass = md5($password);
            $enc_pass = $row['password'];
            if($user_pass === $enc_pass){
                $_SESSION['unique_id'] = $row['unique_id'];
                if ($row['id'] == 8) {
                    echo "success2";
                } else {
                    echo "success";
                }
            }else{
                echo "Phone or Password is Incorrect!";
            }
        }else{
            echo "This Phone does not Exist!";
        }
    }else{
        echo "All input fields are required!";
    }
?>
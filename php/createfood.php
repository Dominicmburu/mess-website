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

//this values will store the values from the table
$name = "";
$price = "";

//check if the data has been transmitted using the post method
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    //get the values from the form and store them in the variables
    $name = $_POST['food'];
    $price = $_POST['price'];

    //check that we don't have an empty filled
    do{
        if(empty($name) || empty($price)){
            //if one of the fields is empty, display the error message
            $errormessage = "All field are required";
            //stop the script and display the page again
            break;
            // die();
        }else{
            //add new client to database
            $status = "on";
            $sql = "INSERT INTO food (name, price, status)" . 
            "VALUES ('$name', '$price', '$status')";
            $result = $conn->query($sql);

            if(!$result){
                $errmessage = "Invalid query: " . $conn->error;
                break;
            }else{
                //if everything is ok, display the page again
                header("Location: admin.php");
                exit;
                $name = "";
                $price = "";
            }
            
        }
    }while(false);
    // display a success message after redirecting
    $successmessage = "Your data has been saved";
}
?>
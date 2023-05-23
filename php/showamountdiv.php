<?php
include_once "config.php";

//read all row from database table
$sql = "SELECT * FROM food";
$result = mysqli_query($conn, $sql);

//check if data is read in the database
if (!$result) {
    die('Could not fetch food data from the database: ' . mysqli_error($conn));
}

//read data of each row
if ($result->num_rows > 0) {
    echo"
    <div class='amount'>
        <p>Amount</p>
        <span>Ksh 300</span>
    </div>
    
    <div class='view-food'>
        <button>View Selected Food</button>
    </div>
    ";
}  
?>
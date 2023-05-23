<?php
include_once "config.php";

//read all row from database table
$sql = "SELECT * FROM food WHERE status='on'";
$result = mysqli_query($conn, $sql);

//check if data is read in the database
if (!$result) {
    die('Could not fetch food data from the database: ' . mysqli_error($conn));
}

//read data of each row
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()){
        //print data of each row
        echo "
        <li>
            <div class='price'>
                <span>$row[name]</span>
                <p>Ksh $row[price]</p>
            </div>
            <div class='quantity'>
                <span>Quantity</span>
                <div class='toolbox'>
                    <button class='dec'>-</button>
                    <input name='number' type='text' readonly value='0'>
                    <button class='inc'>+</button>
                </div>
            </div>
        </li>";                    
    }
}else{
    echo "<p class='styled-text'>No food available right now</p>";
}    
?>
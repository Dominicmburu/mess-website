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
    while($row = $result->fetch_assoc()){
        $id = $row['id'];
        $status = $row['status'];
        $button_text = ($status == "on" ? "Hide" : "Show");
        $button_color = ($status == "on" ? "blue" : "red");
        //print data of each row
        echo "
        <li>
            <p>$row[name]</p>
            <p>$row[price]</p>
            <p><a class='edit' href='admineditfood.php?id=$row[id]'><i class='fa-solid fa-pen-to-square'></i></a></p>
            <p><a class='delete' href='deleteRow.php?id=$row[id]'><i class='fa-solid fa-trash'></i></a></p>
            <form method='post'>
                <input type='hidden' name='id' value='$id'>
                <input type='hidden' name='status' value='".($status == "on" ? "off" : "on")."'>
                <button type='submit' class='status' name='status_btn' style='background-color: $button_color;'>$button_text</button>
            </form> 
        </li>";                    
    }
}else{
    echo "<p class='styled-text'>No food available right now</p>";
}
?>
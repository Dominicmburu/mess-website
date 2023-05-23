<?php 
  session_start();
  include_once "php/config.php";
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
?>
<?php
require 'php/createfood.php';
?>
<?php
    $title = "Add food";
    require 'php/header.php';
?>
<?php
require 'php/getimage.php';
?>

<body>
<?php
require 'php/admin-header.php';
?>
    <div class="admin-container">
        <div class="manage-food">
            <h2>ADD FOOD</h2>
            <form action="" method="POST">
                <div class="manage">
                    <div class="btns">
                        <button id="save">SAVE</button>
                        <a class="cancel" href="admin.php">CANCEL</a>
                    </div>
                    <div class="manage-names">
                        <label>Name</label>
                        <label>Price</label>
                    </div>
                </div>
                <ul>
                    <li>
                        <input type="text" name="food" placeholder="Food Name" autofocus required value="<?php echo $name; ?>">
                        <input type="number" name="price" placeholder="Price" required value="<?php echo $price; ?>">
                    </li>
                </ul>
            </form>    
        </div>
    </div>
</body>

</html>
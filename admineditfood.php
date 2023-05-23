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

  if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($conn, $_GET['id']);
    $sql = mysqli_query($conn, "SELECT * FROM food WHERE id = '{$id}'");
    if (mysqli_num_rows($sql) > 0) {
        $row = mysqli_fetch_assoc($sql);
        $name = $row['name'];
        $price = $row['price'];
    } else {
        header("location: admin.php");
    }
} else {
    header("location: admin.php");
}

//POST method: update the data of the client
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $price = mysqli_real_escape_string($conn, $_POST['price']);

    mysqli_query($conn, "UPDATE food SET name = '{$name}', price = '{$price}' WHERE id = '{$id}'");
    header("location: admin.php");
}
?>

<?php
    $title = "Edit food";
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
            <a href="admin.php"><i class="fa-sharp fa-solid fa-arrow-left arrow"></i></a>
            <h2>EDIT FOOD</h2>
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
                        <input type="text" name="name" placeholder="Food Name" autofocus required value="<?php echo $name; ?>">
                        <input type="number" name="price" placeholder="Price" required value="<?php echo $price; ?>">
                    </li>
                </ul>
            </form>    
        </div>
    </div>
</body>

</html>
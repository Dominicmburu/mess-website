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
    $title = "Admin";
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
            <h2>MANAGE FOOD</h2>
            <div class="manage">
                <a class="trans" href=""><button>VIEW TRANSACTIONS</button></a>
                <a href="adminaddfood.php"><button>ADD FOOD</button></a>
                <div class="manage-names">
                    <label>Name</label>
                    <label>Price</label>
                    <label>Edit</label>
                    <label>Delete</label>
                    <label>Status</label>
                </div>
            </div>
            <ul>
            <?php
                require 'php/status.php';
                ?>
                <?php
                require 'php/showAdminfood.php';
                ?>                             
            </ul>
        </div>
    </div>
</body>

</html>
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
    $title = "Settings";
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
            <h2>SETTINGS</h2>
            
            <form class="form" id="form" action="" enctype="multipart/form-data" method="POST">
                <span class="error-message">hello</span>
                <div class="upload">
                    <img src="php/images/<?php echo $row['image'] ?>" id = "image">
                    <div class="upload-btns">
                        <span class="box" onclick="document.getElementById('fileImg').click()">Choose image</span>
                        <input type="file" name="my_image" id = "fileImg" accept=".jpg, .jpeg, .png" hidden>
                        <input type="submit" id="save" value="Save image">
                    </div>
                    </div>
                </div>
            </form>
            <form action="" method="POST" class="admin-profile" id="admin-profile">
                <span class="error-txt"></span>

                <label>Change username</label>
                <input type="text" placeholder="Username" autofocus value="" name="admin-username">

                <label>Change phone</label>
                <input type="number" placeholder="0700000000" autofocus value="" name="admin-phone">

                <label>Old password</label>
                <input type="password" placeholder="**********" autofocus value="" name="old-password">

                <label>New password</label>
                <input type="password" placeholder="**********" autofocus value="" name="new-password">

                <label>Confirm new password</label>
                <input type="password" placeholder="**********" autofocus value="" name="confirm-new-password">

                <input type="submit" id="admin-btn" name="admin-submit">
            </form>

            <a href="php/logoutAdmin.php" class="logout" id="logout" style="margin: 0px 0 20px 0; border: none; outline: none; padding: 12px 30px; font-size: 15px; font-weight: 700; border-radius: 5px; width: 100%; background-color: grey; color: white;">Logout</a>
    
        </div>
    </div>
</body>
<script src="javascript/editimage.js"></script>
<script src="javascript/editsettings.js"></script>

</html>
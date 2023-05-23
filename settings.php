<?php 
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['unique_id'])){
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
require 'php/header-body.php';
?>
  <div class="settings-container">
    <h2>Settings</h2>
    <form class="form" id = "form" action="" enctype="multipart/form-data" method="post">
      <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
      <div class="upload">
        <img src="img/<?php echo $user['image']; ?>" id = "image">

        <div class="rightRound" id = "upload">
          <input type="file" name="fileImg" id = "fileImg" accept=".jpg, .jpeg, .png">
          <i class = "fa fa-camera"></i>
        </div>

        <div class="leftRound" id = "cancel" style = "display: none;">
          <i class = "fa fa-times"></i>
        </div>
        <div class="rightRound" id = "confirm" style = "display: none;">
          <input type="submit">
          <i class = "fa fa-check"></i>
        </div>
      </div>
    </form>

    <ul>
      <li>
          <a href="">
              <div class="desc">
                  <i class="fa-solid fa-bell"></i>
                  <div class="desc-info">
                      <h3>Notifications</h3>
                      <p>View and manage your notifications</p>
                  </div>
              </div>
              <i class="fa-solid fa-angle-right"></i>
          </a>
      </li>

      <li>
          <a href="">
              <div class="desc">
                  <i class="fa-solid fa-shield"></i>
                  <div class="desc-info">
                      <h3>Security</h3>
                      <p>Change your sign-in details and password</p>
                  </div>
              </div>
              <i class="fa-solid fa-angle-right"></i>
          </a>
      </li>

      <li>
          <a href="">
              <div class="desc">
                  <i class="fa-solid fa-clock-rotate-left"></i>
                  <div class="desc-info">
                      <h3>History</h3>
                      <p>Your previous activities on Mess app</p>
                  </div>
              </div>
              <i class="fa-solid fa-angle-right"></i>
          </a>
      </li>

      <li>
          <a href="">
              <div class="desc">
                  <i class="fa-regular fa-circle-question"></i>
                  <div class="desc-info">
                      <h3>Help</h3>
                      <p>View the manual on how to use the Application or Contact us</p>
                  </div>
              </div>
              <i class="fa-solid fa-angle-right"></i>
          </a>
      </li>

      <li>
          <a href="">
              <div class="desc">
                  <i class="fa-solid fa-message"></i>
                  <div class="desc-info">
                      <h3>Share Feedback</h3>
                      <p>Share your experience with us</p>
                  </div>
              </div>
              <i class="fa-solid fa-angle-right"></i>
          </a>
      </li>
    </ul>

    <button><a href="php/logout.php?logout_id=<?php echo $row['unique_id']; ?>" class="logout"><i class="fa-solid fa-power-off"></i> Loqout</a></button>
    <a href="php/logout.php?logout_id=<?php echo $row['unique_id']; ?>" class="logout">Logout</a>
  </div>
  <?php
    $page = "settings";
    require 'php/footer.php';
    ?>
</body>
</html>

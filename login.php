<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: home.php");
  }
?>
<?php
$title = "Login";
require 'php/header.php';
?>

<body>
    <div class="wrapper">
        <section class="form login">
            <h3>MESS <span>APP</span></h3>
            <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
                <div class="error-txt" style="display: none;">The Phone number Already Exist</div>
                <div class="name-details">
                    <div class="field input">
                        <label>Phone Number</label>
                        <input class="num" type="number" name="phone" placeholder="Enter Phone Number" required>
                    </div>
                    <div class="field input">
                        <label>Password</label>
                        <input type="password" name="password" placeholder="Enter your password" required>
                    </div>
                    <div class="field button">
                        <input type="submit" name="submit" value="Login">
                    </div>
                </div>
            </form>
            <div class="link">Not yet signed up? <a href="index.php">Signup now</a></div>
        </section>
    </div>
</body>
<script src="javascript/login.js"></script>
</html>

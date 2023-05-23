<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: home.php");
  }
?>
<?php
    $title = "Register";
    require 'php/header.php';
?>
<style>
    .wrapper {
        border-radius: 5px;
    }
</style>
<body>
    <div class="wrapper">
        <section class="form signup">
            <h3>MESS <span>APP</span></h3>
            <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
                <div class="error-txt" style="display: none"></div>
                <div class="name-details">
                    <div class="field input">
                        <label>First Name</label>
                        <input type="text" id="fname" name="fname" placeholder="First Name" required>
                    </div>

                    <div class="field input">
                        <label>Last Name</label>
                        <input type="text" id="lname" name="lname" placeholder="Last Name" required>
                    </div>

                    <div class="field input">
                        <label>Phone Number</label>
                        <input class="num" id="phone" type="number" name="phone" placeholder="Enter your Phone Number" required>
                    </div>

                    <div class="field input">
                        <label>Password</label>
                        <input type="password" id="password" name="password" placeholder="Enter new Password" required autocomplete="current-password">
                    </div>

                    <div class="field image">
                        <label for="image:">Select Image</label>
                        <input type="file" id="image" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
                    </div>

                    <div class="field button">
                        <input type="submit" value="Register">
                    </div>
                </div>
            </form>

            <div class="link">Already signed up? <a href="login.php">Login now</a></div>
        </section>
    </div>
</body>
<script src="javascript/register.js"></script>
</html>
<?php 
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  }
?>
<?php
$title = "Food";
require 'php/header.php';
?>
<?php
require 'php/getimage.php';
?>


<body>
<?php
require 'php/header-body.php';
?>
    <div class="food-container">
      <h2>Available Food</h2>
      <p><sup>*</sup>Select Any Food and ADD Quantity</p>
      <h3>No food Available</h3>
      <div class="all-food">
          <ul>
              
          </ul>
      </div>
      <div class="amount-div">

      </div>
    </div>
    <?php
$page = "food";
require 'php/footer.php';
?>
</body>

<script src="javascript/inc and dec.js"></script>
<script src="javascript/upadatefoodrealtime.js"></script>
<script src="javascript/updateamountdiv.js"></script>

</html>
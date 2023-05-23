<?php
session_start();
include_once "php/config.php";
if(!isset($_SESSION['unique_id'])){
  header("location: login.php");
}
?>
<?php
$title = "Confirm Food";
require 'php/header.php';
?>
<?php
require 'php/getimage.php';
?>

<body>
    <header>
        <div class="logo">MESS<span>APP</span></div>
        <div class="container">
            <div class="help">
                <i class="fa-regular fa-circle-question"></i>
            </div>
            <div class="notification">
                <p><i class="fas fa-envelope"></i></p>
                <span>0</span>
            </div>
            <div class="profile">
                <img src="php/images/<?php echo $row['image']?>">
            </div>
        </div>
    </header>

    <div class="fund">
        <h2>Confirm Food</h2>
        <ul>
            <li class="pay-food">
                <div>
                    <span>Tea</span>
                    <span>Ksh 30</span>
                </div>
                <div class="quant">
                    <span>Quantity</span>
                    <span>3</span>
                </div>
                <p><i class="fa-solid fa-trash"></i></p>
            </li>
            <li class="pay-food">
                <div>
                    <span>Tea</span>
                    <span>Ksh 30</span>
                </div>
                <div class="quant">
                    <span>Quantity</span>
                    <span>3</span>
                </div>
                <p><i class="fa-solid fa-trash"></i></p>
            </li>
            <li class="pay-food">
                <div>
                    <span>Tea</span>
                    <span>Ksh 30</span>
                </div>
                <div class="quant">
                    <span>Quantity</span>
                    <span>3</span>
                </div>
                <p><i class="fa-solid fa-trash"></i></p>
            </li>
            <li class="pay-food">
                <div>
                    <span>Tea</span>
                    <span>Ksh 30</span>
                </div>
                <div class="quant">
                    <span>Quantity</span>
                    <span>3</span>
                </div>
                <p><i class="fa-solid fa-trash"></i></p>
            </li>
            <li class="pay-food">
                <div>
                    <span>Tea</span>
                    <span>Ksh 30</span>
                </div>
                <div class="quant">
                    <span>Quantity</span>
                    <span>3</span>
                </div>
                <p><i class="fa-solid fa-trash"></i></p>
            </li>
        </ul>
        <div class="amount">
            <p>Amount</p>
            <span>Ksh 300</span>
        </div>
        <div class="btns">
            <button type="submit">Confirm</button>
            <button type="submit">Cancel</button>
        </div>
    </div>


    <?php
    require 'php/footer.php';
    ?>

</body>

</html>
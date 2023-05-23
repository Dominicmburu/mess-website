
<?php 
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  }
?>
<?php
$title = "Home";
require 'php/header.php';
?>
<?php
require 'php/getimage.php';
?>

<body>
    
<?php
require 'php/header-body.php';
?>
    <div class="cash-container" style="display: none;">
        <div class="money-container">
            <p class="bal">Balance</p>
            <p class="cash">Ksh <span>450</span></p>
        </div>
        <div class="transact">
            <div class="mny">
                <a href="addFund.php">Add Funds</a>
            </div>
            <div class="mny">
                <a href="transferFund.php">Funds Transfer</a>
            </div>
        </div>
        <div class="transact">
            <div class="mny">
                <a href="">Buy Airtime</a>
            </div>
            <div class="mny">
                <a href="">Pay Bills</a>
            </div>
        </div>
    </div>
    <div class="cash-container">
        <div class="welcome">
            <div class="intro">
                <p>WELCOME</p>
                <span>TO</span>
                <div>MESS WEBSITE</div>
            </div>
            <div class="intro-desc">
                <p>Every dish is made with love and served with a smile</p>
                <p>we believe that a good meal can brighten up anyone's day</p>
            </div>
        </div>
    </div>
    <div class="transactions-container">
        <p>Recent Transactions</p>
        <div class="transactions">
            <li class="received">
                <div class="cash-message">
                    Ksh 500
                </div>
                <div class="received-message">
                    <span class="msg">Transfer from 0717794150</span>
                    <span class="transfer-date">Nov 07, 22</span>
                </div>
            </li>
            <li class="sent">
                <div class="cash-message">
                    Ksh 500
                </div>
                <div class="received-message">
                    <span class="msg">Transfer to 0717794150</span>
                    <span class="transfer-date">Nov 07, 22</span>
                </div>
            </li>
            <li class="deposit">
                <div class="cash-message">
                    Ksh 500
                </div>
                <div class="received-message">
                    <span class="msg">Wallet Deposit</span>
                    <span class="transfer-date">Nov 07, 22</span>
                </div>
            </li>
            <li class="received">
                <div class="cash-message">
                    Ksh 500
                </div>
                <div class="received-message">
                    <span class="msg">Transfer from 0717794150</span>
                    <span class="transfer-date">Nov 07, 22</span>
                </div>
            </li>
            <li class="sent">
                <div class="cash-message">
                    Ksh 500
                </div>
                <div class="received-message">
                    <span class="msg">Transfer to 0717794150</span>
                    <span class="transfer-date">Nov 07, 22</span>
                </div>
            </li>
            <li class="deposit">
                <div class="cash-message">
                    Ksh 500
                </div>
                <div class="received-message">
                    <span class="msg">Wallet Deposit</span>
                    <span class="transfer-date">Nov 07, 22</span>
                </div>
            </li>
        </div>
        <button><a href="">View History</a></button>
    </div>
    <?php
    $page = "home";
    require 'php/footer.php';
    ?>
</body>
</html>
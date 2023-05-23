<?php
require 'php/header.php';
?>
<?php
require 'php/getimage.php';
?>

<body>
<?php
require 'php/header-body.php';
?>

    <div class="addFund">
        <form action="">
            <div class="fund-container">
                <h3>Add Funds</h3>
                <fieldset>
                    <legend>Enter amount</legend>
                    <input type="number" placeholder="Enter amount" required autofocus>
                </fieldset>

                <fieldset>
                    <legend>Select a phone number to fund from</legend>
                    <select name="" id="">
                        <option value="">M pesa +254717794150</option>
                        <option value="">M pesa +254754554750</option>
                        <option value="">M pesa +254732099950</option>
                    </select>
                </fieldset>

                <button type="submit">Transaction Details</button>
                <button type="submit"><a href="transactionDetails.php">fund</a></button>
            </div>
        </form>
    </div>
    
    <?php
    require 'php/footer.php';
    ?>

</body>

</html>
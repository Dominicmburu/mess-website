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

    <div class="fund">
        <form action="">
            <h3>Fund Transfer</h3>
            <fieldset class="transfer">
                <legend>How much would you like to Transfer</legend>
                <input type="number" placeholder="Enter amount" required autofocus>
            </fieldset>
            <div class="btns">
                <button type="submit">Confirm</button>
                <button type="submit">Cancel</button>
            </div>
            <a href="transferFundBeneficiary.php">beneficiary</a>

        </form>

    </div>

    <?php
    require 'php/footer.php';
    ?>

</body>

</html>
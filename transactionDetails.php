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
        <div class="fund-trans">
            <h3>Kindly confirm your details below</h3>
            <div class="confDetails">
                <span class="details">
                    <h4>Fund from account</h4>
                    <p>Mpesa +254717794150</p>
                </span>
                <span class="details">
                    <h4>Account</h4>
                    <p>Mpesa</p>
                </span>
                <span class="details">
                    <h4>Deposit Amount</h4>
                    <p>Ksh 2,055</p>
                </span>
            </div>
            <div class="btns">
                <button type="submit">Confirm</button>
                <button type="submit">Cancel</button>
            </div>
        </div>
    </div>
    <?php
    require 'php/footer.php';
    ?>

</body>

</html>
<?php
require 'php/getvalues.php';
?>

<?php
require 'php/header.php';
?>

<style>
    /* phone verification */

    .phone-container {
        width: 100vw;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: rgba(147, 174, 201, 0.753);
    }
    .phone-container h1{
        font-size: 29px;
        font-weight: 600;
        padding-bottom: 10px;
        border-bottom: 1px solid #e6e6e6;
    }

    .mobile {
        background: var(--box-bg-color);
        max-width: 450px;
        width: 100%;
        border-radius: 7px;
        box-shadow: 1px 2px 10px rgba(0, 0, 0, 0.2), -2px 1px 10px rgba(0, 0, 0, 0.2);
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: auto;
        padding: 30px 10px;
        margin: 0 auto;
        flex-direction: column;
    }

    .mobile form {
        margin: 5px 0;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }
    .mobile .phone{
        transform: translate(45px, 0);
    }
    .mobile .phone input::-webkit-outer-spin-button,
    .mobile .phone input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
    .mobile .phone input {
        width: 70%;
        padding: 5px;
        font-size: 23px;
        font-weight: bold;
        text-align: center;
        border: none;
        border-radius: 5px;
        height: 45px;
        color: #000000;
        /* background: #333; */
        cursor: pointer;
        margin-top: 10px;
        -moz-appearance: textfield;
    }

    .mobile .btn {
        width: 80%;
        padding: 5px;
        font-size: 23px;
        font-weight: bold;
        text-align: center;
        border: none;
        border-radius: 5px;
        height: 45px;
        color: #ffffff;
        background: #333;
        cursor: pointer;
        margin-top: 30px;
    }
    .mobile p{
        margin: 15px 0 0px 0;
    }
</style>

<body>
    <div class="phone-container">
        <div class="mobile">
            <h1>Verify your phone number</h1>
            <p id="stmt">Enter the code sent to your phone</p>
            <form action="" method="POST">
                <div class="phone" id="enternum" style="display: block;">
                    <input id="phonenum" type="number" value="<?php echo '0'.$row['phone']?>" readonly>
                    <input type="hidden" id="otp"><br>
                </div>
                <div class="phone" id="inputotp" style="display: none;">
                    <input type="number" id="user_input" placeholder="00000">
                </div>
                <input type="button" class="btn" id="OTPbtn" value="Send">
                <input type="hidden" class="btn" id="Verbtn" value="Verify">
            </form>
        </div>
    </div>
</body>

<script src="javascript/phoneSend.js"></script>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="mesg"></div>
    <form action="deposit.php" id="paymentForm" method="POST">
        <div class="form">
            <div class="top-bar">TINYPESA STK PUSH</div>
            <small style="background-color:white; color:green;">
                <?php
                    if(isset($_GET['info'])){
                        echo $_GET['info'];
                    }
                ?>
            </small>
            <input name="phonenumber" title="" pattern=".*[^ ].*" autocomplete="off" required type="number" id="username">
            <label for="username" class="name-label"></label>
            <input name="amount" title="" required type="number" id="password">
            <label for="password" class="pass-label"></label>
            <button type="submit" name="pay">MAKE PAYMENT</button>
        </div>
    </form>
</body>
<script>

</script>
</html>
<?php
if(isset($_POST['pay'])){
    $amount = $_POST['amount'];
    $phonenumber = $_POST['phonenumber'];
    $Account_no = 'DOMINIC MBURU';
    $url = 'https://tinypesa.com/api/v1/express/initialize';
    $data = array(
        'amount' => $amount,
        'msisdn' => $phonenumber,
        'account_no' => $Account_no
    );
    $headers = array(
        'Content-Type: application/x-www-form-urlencoded',
        'ApiKey: gQjRRggkcPI'
    );
    $info = http_build_query($data);

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $info);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    $resp = curl_exec($curl);
    $msg_resp = json_decode($resp);
    if($msg_resp ->success == 'true'){
        echo "<script>window.location.href='index.php?info=WAIT FOR STK PUSH'; </script>";
    }
}
?>
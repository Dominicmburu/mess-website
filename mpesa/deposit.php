<?php
if(isset($_POST['pay'])){
    // $sql=mysqli_query($conn, "SELECT * FROM users where id='$id' limit 1");
    // $row = mysqli_fetch_array($sql);
    // $zero=0;
    // $phonenumber= $row['phonenumber'];
    // $phonenumber= $_POST['phonenumber'];
    $phonenumber= "254717794150";
    // $amount = $_POST['amount'];
    $amount = '1';
    $account_no='meal';
    if($amount>0){
    $url="https://tinypesa.com/api/v1/express/initialize";
    $data = array(
        'amount' => $amount,
        'msisdn' => $phonenumber,
        'account_no'=>$account_no
    );
    $headers = array(
       "Content-Type: application/x-www-form-urlencoded",
       "ApiKey: Mwt5PTSvECi"
    );
   
    $info=http_build_query($data);
    $curl=curl_init();
    curl_setopt($curl,CURLOPT_URL,$url);
    curl_setopt($curl,CURLOPT_POST,true);
    curl_setopt($curl,CURLOPT_POSTFIELDS,$info);
    curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($curl,CURLOPT_HTTPHEADER,$headers);
    $resp  = curl_exec($curl);
    $msg_resp = json_decode($resp);
    if($msg_resp->success=='true'){
        echo"<script>alert('wait for stk push')</script>";
    }
    }
  

}
?>
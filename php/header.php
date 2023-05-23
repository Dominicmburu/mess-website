<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="font/css/all.css">
    <link rel="stylesheet" href="font/webfonts/fonts.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title><?php echo $title ?></title>
</head>
<style>
    header .container .help .fa-circle-question{
        margin: 0px 0 0 5px;
    }
    .sets{
        font-size: 20px;
        padding: 10px;
        cursor: pointer;
        margin: 0 5px 0 0;
    }
    .logo{
        /* font-family: 'Great Vibes', cursive; */
        font-family: 'Tilt Prism', cursive;
        /* font-family: 'Great Vibes', cursive; */
        /* font-family: 'Rampart One', cursive; */
    }
    .container .well-come{
        margin-right: 5px;
    }
    .container .well-come-user{
        margin: 0 5px 0 0;
    }
    .container .well-come-user span{
        margin: 0 2px;
        font-size: 18px;
        color: #08e7e4;
    }
    .container .well-come-user p{
        display: flex;
        align-items: center;
        justify-content: center;
        /* flex-direction: column; */
    }

    .mobile form {
        margin: 15px 0;
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
        margin-top: 13px;
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
        margin: 0;
    }
    .container .well-come span{
        font-size: 18px;
        color: #08e7e4;
    }
    .footer{
        justify-content: space-around;
        width: auto;
    }
    .footer a{
        margin: auto;
        padding: 10px 40px;
    }
    .active{
        border-top: 5px solid #13134d;
        background-color: rgba(88, 79, 79, 0.19);
    }
    .active i,
    .active p{
        color:#13134d;
    }
    .welcome{
        background-image: url('img/food.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: bottom;
        background-attachment:  fixed;
        width: 100%;
        height: 100%;
        text-align: center;
        max-width: 100%;
        border-radius: 5px;
    }
    .welcome .intro{
        font-weight: bold;
        color: #fff;
        text-align: center;
    }
    .welcome .intro p{
        font-size: 40px;
        padding: 40px 0 20px 0;
        font-weight: bold;
    }
    .welcome .intro span{
        font-size: 22px;
    }
    .welcome .intro div{
        font-size: 50px;
        padding: 20px 0 20px 0;
        font-family: 'Tilt Prism', cursive; 
    }
    .welcome .intro-desc{
        font-size: 18px;
        font-weight: bold;
        color: rgb(2, 204, 255);
        text-align: center;
        font-style: italic;
        padding: 0 0 20px 0;
    }
    .admin-container{
        background-color: #2f2d2d;
        color: #fff;
        margin: 90px auto;
        max-width: 100%;
        padding: 20px;
        text-align: center;
        width: 98%;
        border-radius: 10px;
    }
    .manage-food{
        position: relative;
    }
    .manage-food h2{
        font-family: 'Tilt Prism', cursive;
        font-size: 50px;
        text-align: center;
        padding-bottom: 10px;
        max-width: 100%;
    }
    .manage-food span{
        color: #08e7e4;
    }
    .manage-food .btns{
        display: flex;
        align-items: center;
    }
    .manage-food .btns .cancel{
        border: 2px solid #fff;
        margin-left: 10px;
        color: #fff;
    }
    .manage-food #save{
        margin-right: 10px;
        border: none;
    }
    .manage-food .btns .cancel,
    .manage-food .manage button{
        border-radius: 12px;
        font-size: 20px;
        width: 100%;
        font-weight: 700;
        padding: 10px 0;
        margin: 20px auto 0;
        cursor: pointer;
        transition:  1.0s ease;
    }
    .manage-food .btns .cancel:hover{
        background-color: #08e7e4;
        color: black;
        border: none;
    }
    .manage-food .manage button{
        color: white;
        background-color: rgba(0, 174, 255, 0.9);
    }
    .manage-food .manage button:hover{
        transform: scale(0.96);
        
    }
    .manage-food .manage .trans button{
        color: black;
        background-color: #08e7e4;
    }
    .manage-food .manage .trans button:hover{
        transform: scale(0.97);
    }
    .manage-food .manage .manage-names{
        display: flex;
        align-items: center;
        justify-content: space-around;
        border-bottom: 2px solid #304ffe;
        margin: 20px auto;
    }
    .manage-food ul li{
        display: flex;
        align-items: center;
        justify-content: space-around;
        border-bottom: 2px solid #08e7e4;
        margin: 20px auto;
    }
    .manage-food ul li .status{
        border: none;
        padding: 10px 30px;
        cursor: pointer;
        margin-bottom: 8px;
        border-radius: 5px;
        transition:  1.0s ease;
        color:#fff
    }
    .manage-food ul li p i.fa-trash{
        background: grey;
    }
    .manage-food ul li p i{
        background: #009912;
        padding: 10px 30px;
        cursor: pointer;
        margin-bottom: 8px;
        border-radius: 5px;
        transition:  1.0s ease;
        color:#fff
    }
    .manage-food ul li p i:hover{
        background: #304ffe;
    }
    .manage-food ul li input{
        border: none;
        font-size: 15px;
        outline: none;
        border-radius: 5px;
        padding: 12px;
        font-weight: 700;
        width: 100%;
        margin: 0 2px;
        margin-bottom: 5px;
    }
    .styled-text{
        font-size: 20px;
        margin: 50px auto;
        font-weight: 700;
    }
    #form{
        margin: 0 0 100px 0;
        max-width: 100%;
    }
    .upload {
      max-width: 100%;
      width: 140px;
      position: relative;
      margin: 0 auto 10px auto;
      text-align: center;
      z-index: 0;
  }

  .upload img {
      border-radius: 50%;
      border: 8px solid #DCDCDC;
      width: 125px;
      height: 125px;
  }
  .upload .upload-btns{
    max-width: 100%;
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .upload .upload-btns .box{
    position: absolute;
    left: -70px;
    top: 30px;
    background: #00B4FF;
    text-align: center;
    overflow: hidden;
    cursor: pointer;
    color: white;
    font-weight: 700;
    border-radius: 5px;
    padding: 8px 20px;
  }
  .upload input[type=submit]{
    position: absolute;
    left: 90px;
    top: 30px;
    background: #00B4FF;
    text-align: center;
    overflow: hidden;
    cursor: pointer;
    border: none;
    color: white;
    font-weight: 700;
    border-radius: 5px;
    padding: 10px 20px;
  }
  
  .upload input::-webkit-file-upload-button,
  .upload input[type=submit] {
      cursor: pointer;
  }
  .admin-profile{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    position: relative;
  }
  .admin-profile label{
    font-size: 18px;
  }
  .admin-profile input{
    border: none;
    outline: none;
    padding: 10px 15px;
    font-size: 15px;
    font-weight: 700;
    border-radius: 5px;
    width: 50%;
    margin: 12px 0 10px 0;
  }
  #admin-btn{
    margin: 25px 0 40px 0;
    background: #08e7e4;
    cursor: pointer;
  }
  .manage-food #logout{
    margin: 0px 0 20px 0;
    border: none;
    outline: none;
    padding: 12px 30px;
    font-size: 15px;
    font-weight: 700;
    border-radius: 5px;
    width: 100%;
    background-color: grey;
    color: white;
  }
  .manage-food .error-message,
  .admin-profile .error-txt{
    border: 1px  solid #00B4FF;
    outline: none;
    padding: 10px 15px;
    font-size: 15px;
    font-weight: 700;
    border-radius: 5px;
    color: black;
    margin: 12px 0;
    background-color: grey;
    display: none;
  }
  .admin-profile .error-txt1{
    font-size: 15px;
    font-weight: 700;
    color: #00B4FF;
    display: none;
  }
  .admin-profile .error-txt2{
    font-size: 15px;
    font-weight: 700;
    color: #00B4FF;
    display: none;
  }
  .admin-profile .error-txt3{
    font-size: 15px;
    font-weight: 700;
    color: #00B4FF;
    display: none;
  }
  .admin-profile .error-txt4{
    font-size: 15px;
    font-weight: 700;
    color: #00B4FF;
    display: none;
  }
  @media screen and (max-width: 670px) {
    .admin-profile input{
        width: 100%;
    }
    .manage-food ul li .status{
        padding: 8px 16px;
    }
    .manage-food ul li p i{
        padding: 8px 16px;
        margin-bottom: 8px;
    }
  }
  @media screen and (max-width: 350px) {
    .container .well-come{
        margin-right: 0px;
        font-size: 15px;
    }
  }
  
</style>

    
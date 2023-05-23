let btn = document.getElementById("OTPbtn");

btn.addEventListener("click", () => {
    let phonenum = document.getElementById("phonenum").value;
    console.log(phonenum);
    let otp = parseInt(Math.random(10000) * 99999);
    console.log(otp);
    document.getElementById("otp").value = otp;
    $.post('otp.php', {
        phonenum: phonenum,
        otp: otp
    }, (response) => {
        alert(response);
        document.getElementById("enternum").style.display = "none";
        document.getElementById("user_input").value = "";
        document.getElementById("inputotp").style.display = "block";
        document.getElementById("stmt").style.display = "block";
        document.getElementById("OTPbtn").type = "hidden";
        document.getElementById("Verbtn").type = "button";
    });
});


function verifyotp() {
    let correct_otp = document.getElementById("otp").value;
    let user_otp = document.getElementById("user_input").value;


    if (correct_otp != user_otp) {
        alert("Wrong OTP Value");
        document.getElementById("user_input").value = "";
    }
}
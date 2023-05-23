const form = document.querySelector(".signup form"),
    continueBtn = form.querySelector(".button input"),
    errorText = form.querySelector(".error-txt");

form.onsubmit = (e) => {
    e.preventDefault(); //preventing form from submitting
}

continueBtn.onclick = () => {
    // let's start ajax
    let xhr = new XMLHttpRequest(); //creating XML object
    xhr.open("POST", "php/register.php", true); //xhr.open takes many parameters but we only pass method, url, and async
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response; //it gives the response of the passed url
                if (data === "success") {
                    location.href = "home.php";
                } else {
                    errorText.style.display = "block";
                    errorText.textContent = data;

                }
            }
        }
    }

    // we have to send the form data through ajax to php

    let formData = new FormData(form); //creating new formData object

    xhr.send(formData); // sending the form data to php
}
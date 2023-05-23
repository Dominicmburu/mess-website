const adminform = document.querySelector("#admin-profile"),
    continueBtn = adminform.querySelector("#admin-btn"),
    errorTxt = adminform.querySelector("#admin-profile .error-txt");

adminform.onsubmit = (e) => {
    e.preventDefault();
}

continueBtn.onclick = () => {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/adminsettings.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                if (data === "success") {
                    location.href = "admin.php";
                } else {
                    errorTxt.style.display = "block";
                    errorTxt.textContent = data;
                }
            }
        }
    }
    let formData = new FormData(adminform);
    xhr.send(formData);
}
const updateform = document.querySelector("#form"),
    save = updateform.querySelector("#save"),
    errorMessage = updateform.querySelector(".error-message");

updateform.onsubmit = (e) => {
    e.preventDefault();
}

save.onclick = () => {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/upload.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                if (data === "success") {
                    location.href = "adminsettings.php";
                } else {
                    errorMessage.style.display = "block";
                    errorMessage.textContent = data;
                }
            }
        }
    }
    let formData = new FormData(updateform);
    xhr.send(formData);
}
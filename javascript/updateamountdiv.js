// Call the function to update the food list every 5 seconds
setInterval(updateFoodList, 2000);

function updatedivamount() {
    fetch('php/showamountdiv.php')
        .then(response => response.text())
        .then(data => {
            document.querySelector('.food-container .amount-div').innerHTML = data;
        })
        .catch(error => {
            console.error('Error fetching food list:', error);
        });
}

// Call the function to update the food list every 5 seconds
setInterval(updatedivamount, 2000);
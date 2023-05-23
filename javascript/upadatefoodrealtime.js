// Function to fetch updated food list data from the server
function updateFoodList() {
    fetch('php/showUserfood.php')
        .then(response => response.text())
        .then(data => {
            document.querySelector('.all-food ul').innerHTML = data;
        })
        .catch(error => {
            console.error('Error fetching food list:', error);
        });
}
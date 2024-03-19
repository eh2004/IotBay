document.getElementById("myForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent default form submission
    var formData = new FormData(this);
    
    // Send data to server
    fetch("submit.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        // Handle response if needed
        console.log(data);
    })
    .catch(error => {
        console.error("Error:", error);
    });
});

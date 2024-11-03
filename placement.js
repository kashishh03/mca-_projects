document.addEventListener("DOMContentLoaded", function() {
    fetch('placement.php')
        .then(response => response.text())
        .then(data => {
            document.getElementById('placement-data').innerHTML = data;
        })
        .catch(error => console.error('Error fetching data:', error));
});

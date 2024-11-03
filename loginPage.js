// Function to display the cookie status
function updateCookieStatus() {
    const cookieStatus = document.getElementById('cookie-status');
    const usernameCookie = document.cookie.split('; ').find(row => row.startsWith('username='));
    
    cookieStatus.textContent = usernameCookie ? 'Cookie is set: ' + usernameCookie : 'No cookie is set.';
}

// Check for existing cookie on page load
window.onload = function() {
    updateCookieStatus(); // Update cookie status on page load

    if (document.cookie.includes('username=')) {
        window.location.href = 'landingPage.html'; // Redirect if cookie exists
    }
};

// Handle login form submission
// document.getElementById('loginForm').addEventListener('submit', function(event) {
//     event.preventDefault(); // Prevent form from submitting
//     const username = document.getElementById('username').value;
//     const password = document.getElementById('password').value;

//     if (username === '24MCA20042' && password === '24MCA20042') {
//         // Set cookie for 60 seconds
//         document.cookie = "username=24MCA20042; max-age=60; path=/"; 
//         alert('Login successful!'); // Show login successful message
//         alert('Welcome to scripting!'); // Show welcome message
//         setTimeout(() => {
//             window.location.href = 'landingPage.html'; // Redirect to main page after alerts
//         }, 1000); // Redirect after 1 second
//     } else {
//         alert('Invalid username or password!'); // Show error alert
//     }
// });

// Change background color on mouse over
const loginButton = document.querySelector('.btn-login');

loginButton.addEventListener('mouseover', function() {
    loginButton.style.backgroundColor = '#4CAF50'; // Change color
});

loginButton.addEventListener('mouseout', function() {
    loginButton.style.backgroundColor = ''; // Reset color
});

// Track mouse movement
document.addEventListener('mousemove', function(event) {
    console.log(`Mouse Position: X: ${event.clientX}, Y: ${event.clientY}`); // Log mouse position
});

// Show message on button double-click
loginButton.addEventListener('dblclick', function() {
    alert('Thank you for using scripting!'); // Show thank you message on double-click
});

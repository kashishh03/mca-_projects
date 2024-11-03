// Function to display a message when the section is clicked
function displayWelcomeMessage() {
    const messageDiv = document.getElementById('message');
    messageDiv.textContent = 'Welcome to scripting on Chandigarh University!';
}

// Function to display a thank you message when the section is double-clicked
function displayThankYouMessage() {
    const messageDiv = document.getElementById('message');
    messageDiv.textContent = 'Thank you for exploring Chandigarh University!';
}

// Function to demonstrate on mouse move event
function handleMouseMove(event) {
    console.log(`Mouse moved to: (${event.clientX}, ${event.clientY})`);
}

// Function to demonstrate on mouse over event
function handleMouseOver() {
    const messageDiv = document.getElementById('message');
    messageDiv.textContent = 'Mouse is over the hero section!';
}

// Function to reset the message when mouse leaves the section
function handleMouseOut() {
    const messageDiv = document.getElementById('message');
    messageDiv.textContent = '';
}

// Adding event listeners to the hero section
const heroSection = document.getElementById('home');
heroSection.addEventListener('click', displayWelcomeMessage);
heroSection.addEventListener('dblclick', displayThankYouMessage);
heroSection.addEventListener('mouseover', handleMouseOver);
heroSection.addEventListener('mouseout', handleMouseOut);

// Adding mouse move event listener to the document
document.addEventListener('mousemove', handleMouseMove);

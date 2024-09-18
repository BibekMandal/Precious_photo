// Toggle mobile navigation menu
const hamburger = document.querySelector('.hamburger-menu');
const navLinks = document.querySelector('.nav-links');

hamburger.addEventListener('click', () => {
    navLinks.classList.toggle('open');
});

// Handle login form submission
document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevents form submission for client-side validation

    const username = document.getElementById('username').value.trim();
    const password = document.getElementById('password').value.trim();
    const message = document.getElementById('message');

    // Simple validation: Check if fields are not empty
    if (username === '' || password === '') {
        message.style.color = 'red';
        message.textContent = 'Username and Password cannot be empty!';
    } else {
        // Let PHP handle further validation
        this.submit(); // Submit form after validation
    }
});

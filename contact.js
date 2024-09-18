document.querySelector('#contactForm').addEventListener('submit', function (event) {
    event.preventDefault(); // Prevent default form submission

    // Get form fields
    const name = document.querySelector('input[placeholder="Enter your name"]').value.trim();
    const email = document.querySelector('input[placeholder="Enter your email"]').value.trim();
    const message = document.querySelector('textarea[placeholder="Enter your message"]').value.trim();
    const notification = document.getElementById('notification');

    // Simple validation
    if (name === '' || email === '' || message === '') {
        notification.textContent = 'Please fill in all fields before submitting.';
        notification.style.color = 'red';
        notification.style.display = 'block';
        return;
    }

    // Create a new FormData object
    const formData = new FormData(this);

    // Send the form data using Fetch API
    fetch('contact.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        notification.textContent = 'Message sent successfully!';
        notification.style.color = 'green';
        notification.style.display = 'block';
        // Optionally clear the form
        document.querySelector('#contactForm').reset();
    })
    .catch(error => {
        notification.textContent = 'An error occurred. Please try again.';
        notification.style.color = 'red';
        notification.style.display = 'block';
    });
});

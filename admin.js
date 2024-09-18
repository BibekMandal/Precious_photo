// Logout functionality
document.getElementById('logout').addEventListener('click', function(event) {
    event.preventDefault(); // Prevent the default anchor behavior

    let confirmation = confirm("Do you really want to logout?");
  
    if (confirmation) {
        window.location.href = 'logout.php'; // Redirect to logout.php
    }
});

// JavaScript for file upload input
// Check if elements exist before adding event listeners
const fileInput = document.getElementById('fileInput');
const chooseFileButton = document.getElementById('chooseFileButton');

if (fileInput && chooseFileButton) {
    chooseFileButton.addEventListener('click', () => {
        fileInput.click();
    });

    fileInput.addEventListener('change', () => {
        if (fileInput.files.length > 0) {
            const fileName = fileInput.files[0].name;
            chooseFileButton.textContent = fileName;
        } else {
            chooseFileButton.textContent = "Choose File"; // Reset to default text if no file is selected
        }
    });
}

// Form validation for user addition (assuming the form exists)
const addUserForm = document.querySelector('form');

if (addUserForm) {
    addUserForm.addEventListener('submit', function(event) {
        const password = document.getElementById('password').value;
        if (password.length < 6) {
            alert("Password must be at least 6 characters long.");
            event.preventDefault(); // Prevent form submission if validation fails
        }

        // Add any additional client-side validation if needed
    });
}

// JavaScript for handling user edit and delete actions
document.addEventListener('DOMContentLoaded', () => {
    // Fetch user data and populate the table
    fetchUsers();

    // Function to fetch users from the server
    function fetchUsers() {
        fetch('fetch_users.php')
            .then(response => response.json())
            .then(data => {
                const userTableBody = document.querySelector('#userTable tbody');
                userTableBody.innerHTML = '';
                data.forEach(user => {
                    const row = document.createElement('tr');
                    row.innerHTML = `
                        <td>${user.name}</td>
                        <td>${user.email}</td>
                        <td>${user.mobile}</td>
                        <td>${user.address}</td>
                        <td>
                            <button class="edit-btn" data-id="${user.id}">Edit</button>
                            <button class="delete-btn" data-id="${user.id}">Delete</button>
                        </td>
                    `;
                    userTableBody.appendChild(row);
                });

                // Add event listeners for edit and delete buttons
                document.querySelectorAll('.edit-btn').forEach(button => {
                    button.addEventListener('click', (e) => {
                        const userId = e.target.getAttribute('data-id');
                        window.location.href = `edit_user.php?id=${userId}`;
                    });
                });

                document.querySelectorAll('.delete-btn').forEach(button => {
                    button.addEventListener('click', (e) => {
                        const userId = e.target.getAttribute('data-id');
                        if (confirm('Are you sure you want to delete this user?')) {
                            fetch('delete_user.php', {
                                method: 'POST',
                                headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                                body: `id=${userId}`
                            })
                            .then(response => response.text())
                            .then(() => fetchUsers()); // Refresh user list after deletion
                        }
                    });
                });
            })
            .catch(error => console.error('Error fetching users:', error));
    }
});

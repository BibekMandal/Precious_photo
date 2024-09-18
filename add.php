<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Add User</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <h2>Admin Dashboard</h2>
            <ul>
                <li><a href="./admin.php"><i class="fa-solid fa-house-user"></i> Dashboard</a></li>
                <li><a href="./view.php"><i class="fa-solid fa-eye"></i> Users View</a></li>
                <li><a href="./add.php"><i class="fas fa-user-plus"></i> Users Add</a></li>
                <li><a href="./message.php"><i class="fa-solid fa-comments"></i> Messages</a></li>
                <li><a href="#" id="logout"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
            </ul>
        </div>
        <div class="main-content">
            <h1>Precious Photography</h1>
            <h2>Add New User</h2>
            <form id="addUserForm" action="add_user.php" method="POST">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" placeholder="Name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Email" required>

                <label for="mobile">Mobile Number:</label>
                <input type="tel" id="mobile" name="mobile" placeholder="Mobile Number" required>

                <label for="address">Address:</label>
                <input type="text" id="address" name="address" placeholder="Address" required>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Password" required>

                <button type="submit">Add</button>
            </form>
        </div>
    </div>

    <script src="admin.js"></script>
    <script>
        document.getElementById('logout').addEventListener('click', function(event) {
            event.preventDefault();
            let confirmation = confirm("Do you really want to logout?");
            if (confirmation) {
                window.location.href = 'login-info.php'; // Redirect to login.html
            }
        });
    </script>
</body>
</html>

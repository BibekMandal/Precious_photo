<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View User</title>
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
            <h2>Users Details</h2>

            <table id="userTable">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile No</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- User rows will be dynamically populated here -->
                </tbody>
            </table>

            <div class="copyright">
                &copy; Precious Photography
            </div>
        </div>
    </div>
    <script src="admin.js"></script>
</body>
</html>

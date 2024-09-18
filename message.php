<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Messages</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <h2>Admin Dashboard</h2>
            <ul>
                <li><a href="./admin.php"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
                <li><a href="./view.php"><i class="fas fa-users"></i> Users View</a></li>
                <li><a href="./add.php"><i class="fas fa-user-plus"></i> Users Add</a></li>
                <li><a href="./message.php"><i class="fas fa-envelope"></i> Messages</a></li> <!-- Changed to .php -->
                <li><a href="#" id="logout"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
            </ul>
        </div>
        <div class="main-content">
            <h1>Messages</h1>
            <div class="messages-container">
            <?php
// Database connection details
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "precious_photography_db"; 

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch messages from the database
$sql = "SELECT id, name, email, message FROM contacts ORDER BY submitted_at DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<div class='message'>";
        echo "<b>Name:</b> " . htmlspecialchars($row['name']) . "<br>";
        echo "<b>Email:</b> " . htmlspecialchars($row['email']) . "<br>";
        echo "<b>Message:</b> " . htmlspecialchars($row['message']) . "<br>";
        echo "<form action='delete_message.php' method='post' style='display:inline;'>";
        echo "<input type='hidden' name='id' value='" . htmlspecialchars($row['id']) . "'>";
        echo "<input type='submit' value='Delete' onclick='return confirm(\"Are you sure you want to delete this message?\")'>";
        echo "</form>";
        echo "</div><br>";
    }
} else {
    echo "No messages found.";
}

// Close the connection
$conn->close();
?>


            </div>
        </div>
    </div>
    
</body>
<script>
    document.getElementById('logout').addEventListener('click', function(event) {
        event.preventDefault();

        let confirmation = confirm("Do you really want to logout?");

        if (confirmation) {
            window.location.href = 'login-info.php'; // Redirect to login.html
        }
    });

    // JavaScript for the file upload input
    const fileInput = document.getElementById('fileInput');
    const chooseFileButton = document.getElementById('chooseFileButton');

    chooseFileButton.addEventListener('click', () => {
        fileInput.click();
    });

    fileInput.addEventListener('change', () => {
        const fileName = fileInput.files[0].name;
        chooseFileButton.textContent = fileName;
    });
</script>
</html>
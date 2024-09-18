<?php
session_start(); // Start session

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "precious_photography_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form inputs
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    
    // Hash the password
    $hashed_password = md5($password);

    // First, check if the username exists
    $sql = "SELECT password FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        // Username exists, now check the password
        $stmt->bind_result($db_password);
        $stmt->fetch();

        if ($db_password === $hashed_password) {
            // Password matches, log the user in
            $_SESSION['username'] = $username;

            // Redirect to admin page
            header("Location: admin.php");
            exit();
        } else {
            // Incorrect password
            echo "<script>
                    document.getElementById('message').style.color = 'red';
                    document.getElementById('message').textContent = 'Incorrect password!';
                  </script>";
        }
    } else {
        // Username not found
        echo "<script>
                document.getElementById('message').style.color = 'red';
                document.getElementById('message').textContent = 'Username does not exist!';
              </script>";
    }

    $stmt->close();
}

$conn->close();
?>

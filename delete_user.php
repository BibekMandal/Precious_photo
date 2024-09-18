<?php
require 'db.php'; // Include database connection

if (isset($_POST['id'])) {
    $userId = $_POST['id'];

    // Delete user from the database
    $sql = "DELETE FROM people WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $userId);

    if ($stmt->execute()) {
        echo "User deleted successfully.";
    } else {
        echo "Error deleting user.";
    }
} else {
    echo "User ID is not set.";
}
?>

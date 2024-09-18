<?php
require 'db.php'; // Include database connection

header('Content-Type: application/json');

// Fetch users from the people table
$sql = "SELECT id, name, email, mobile, address FROM people";
$result = $conn->query($sql);

$users = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $users[] = $row;
    }
}

echo json_encode($users);
?>

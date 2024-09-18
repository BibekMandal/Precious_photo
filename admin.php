<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="admin.css">
  <style>
    .content {
      flex: 1;
      padding: 20px;
    }

    .content h1 {
      margin-bottom: 20px;
    }

    .content form {
      display: flex;
      flex-direction: column;
      gap: 10px;
    }

    .content label {
      font-weight: bold;
    }

    .content input,
    .content textarea,
    .content select {
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    .content button {
      padding: 10px;
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .content button:hover {
      background-color: #0056b3;
    }
  </style>
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
    <div class="content">
      <h1>Add Gallery Item</h1>
      <form action="./upload.php" method="post" enctype="multipart/form-data">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required>

        <label for="category">Category:</label>
        <select id="category" name="category" required>
          <option value="">Select Category</option>
          <option value="jungle">Wild-Life</option>
          <option value="sports">Sports</option>
          <option value="wedding">Wedding</option>
          <option value="events">Events</option>
          <option value="travel">Travel</option>
        </select>

        <label for="image">Image:</label>
        <input type="file" id="image" name="image" accept="image/*" required>

        <label for="description">Description:</label>
        <textarea id="description" name="description" required></textarea>

        <button type="submit">Submit</button>
      </form>

    </div>
  </div>
</body>

</html>


<script>
  document.getElementById('logout').addEventListener('click', function (event) {
    event.preventDefault();

    let confirmation = confirm("Do you really want to logout?");

    if (confirmation) {
      window.location.href = 'login-info.php'; // Redirect
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
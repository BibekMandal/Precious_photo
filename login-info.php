<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100..900&display=swap" rel="stylesheet">
</head>
<body>
    <nav class="navbar">
        <div class="flex-nav">
            <div class="hamburger-menu">
                <i class="fa fa-bars"></i>
            </div>
            <div class="left nav-links">
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="exp.php">Experiences</a></li>
                </ul>
            </div>
            <div class="center">
                <h2>PRECIOUS PHOTOGRAPHY</h2>
            </div>
            <div class="right nav-links">
                <ul>
                    <li><a href="gallery1.php">Portfolio</a></li>
                    <li><a href="contact-info.php">Contact Us</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="login-info.php" id="first">Admin</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    <div class="login">
        <h1>LOG<span>IN</span></h1>

        <div class="login-container">
            <h2>Precious Photography</h2>
            <form id="loginForm" action="login.php" method="post">
                <div class="input-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <a href="#">Forget Password</a>
                <input type="radio" name="check" id="radi">
                <label for="check">Remember Me</label>
                <button type="submit">Login</button>
                <div class="icon">
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-apple"></i>
                </div>
            </form>
            <div id="message"></div> 
        </div>

        
    </div>

    <script src="login.js"></script> 
    <script src="ham.js"></script> 
</body>
</html>

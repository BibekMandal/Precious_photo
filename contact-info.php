<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Playwrite+BE+WAL:wght@100..400&family=Playwrite+CL&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="contact.css">
</head>
<body>
    <nav class="navbar">
        <div class="flex-nav">
            <!-- Hamburger Menu Icon -->
            <div class="hamburger-menu">
                <i class="fa fa-bars"></i>
            </div>
    
            <!-- Left navigation -->
            <div class="left nav-links">
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="exp.php">Experiences</a></li>
                </ul>
            </div>
    
            <!-- Center Navigation -->
            <div class="center">
                <h2>PRECIOUS PHOTOGRAPHY</h2>
            </div>
    
            <!-- Right navigation -->
            <div class="right nav-links">
                <ul>
                    <li><a href="gallery1.php">Portfolio</a></li>
                    <li><a href="contact-info.php" id="first">Contact Us</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="login-info.php">Admin</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- MAIN CONTENT  -->
    <div class="contact">
        <div class="aboutsus">
            <h1>CONTACT<span>US</span></h1>
        </div>

        <div class="container">
            <div class="content">
                <div class="left-side">
                    <div class="address details">
                        <i class="fas fa-map-marker-alt"></i>
                        <div class="topic">Address</div>
                        <div class="text-one">New Baneshwor</div>
                        <div class="text-two">Kathmandu</div>
                    </div>
                    <div class="phone details">
                        <i class="fas fa-phone-alt"></i>
                        <div class="topic">Phone</div>
                        <div class="text-one">+977 9898 9898 98</div>
                        <div class="text-two">+977 9898 9898 98</div>
                    </div>
                    <div class="email details">
                        <i class="fas fa-envelope"></i>
                        <div class="topic">Email</div>
                        <div class="text-one">preciousphotonp@gmail.com</div>
                        <div class="text-two">www.preciousphoto.com.np</div>
                    </div>
                </div>
                <div class="right-side">
                    <div class="topic-text">Send us a message</div>
                    <p>If you have any work from me or any types of queries related to my tutorial, you can send me a message from here. It's my pleasure to help you.</p>
                    <form action="contact.php" method="post" id="contactForm">
                        <div class="input-box">
                            <input type="text" name="name" placeholder="Enter your name" required>
                        </div>
                        <div class="input-box">
                            <input type="email" name="email" placeholder="Enter your email" required>
                        </div>
                        <!-- Message area -->
                        <div class="input-box message-box">
                            <textarea name="message" placeholder="Enter your message" cols="30" rows="10" required></textarea>
                        </div>
                        <div class="notification" id="notification" style="display: none; color: red; margin-bottom: 1rem;"></div>
                        <div class="button">
                            <input type="submit" value="Send Now">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <h4 id="footer-head">GET IN TOUCH </h4>
        <footer>
            <a href="https://instagram.com"><i class="fa-brands fa-instagram"></i></a>
            <a href="https://facebook.com"><i class="fa-brands fa-facebook"></i></a>
            <a href="https://linkedin.com"><i class="fa-brands fa-linkedin"></i></a>
            <a href="tel:98989898"><i class="fa-solid fa-phone-volume"></i></a>
        </footer>
        <h6>&copy;All Right Reserved 2024</h6>
    </div>
    <script src="ham.js"></script>
    <script src="contact.js"></script>
</body>
</html>

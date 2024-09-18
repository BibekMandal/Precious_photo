<?php
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

$sql = "SELECT * FROM portfolio";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        /* CSS Styling for Portfolio */
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        /* Main content styling */
        .port {
            height: 100vh;
            width: 100%;
            background-image: linear-gradient(rgba(4, 9, 30, 0.5), rgba(4, 9, 30, 0.5)), url(bgc3.jpg);
            background-size: cover;
            transition: all 0.5s;

        }

        /* Navbar styling */
        .navbar {
            height: 5rem;
            width: 100%;
            background-color: #fff;
            box-shadow: 0px 2px 5px black;
        }

        .flex-nav {
            display: flex;
            justify-content: space-between;
            background-color: rgba(119, 117, 242, 0.345);
            height: 5rem;
            box-shadow: 0px 2px 5px black;
        }

        /* Navigation links styling */
        .left ul,
        .right ul {
            display: flex;
            list-style: none;
        }

        .left li,
        .right li {
            margin: 1rem;
        }

        .left a,
        .right a {
            text-decoration: none;
            color: black;
            font-size: 1.2rem;
            font-weight: 500;
        }

        /* Hamburger menu styling */
        .hamburger-menu {
            display: none;
            font-size: 2rem;
            cursor: pointer;
            margin: 1rem;
        }

        /* Nav-links container styling */
        .nav-links {
            display: flex;
            align-items: center;
            flex-direction: row;
            /* Default direction for larger screens */
        }

        @media only screen and (max-width: 810px) {
            .hamburger-menu {
                display: block;
            }

            .nav-links {
                display: none;
                /* Hidden by default */
                flex-direction: column;
                /* Stack items in column */
                background-color: rgba(255, 255, 255, 0.9);
                position: absolute;
                top: 5rem;
                left: 0;
                width: 100%;
                text-align: center;
                z-index: 10;
            }

            .nav-links.active {
                display: flex;
                /* Show menu when active */
            }

            .nav-links ul {
                display: flex;
                flex-direction: column;
                /* Stack items in column */
                padding: 0;
            }

            .nav-links li {
                margin: 1rem 0;
                /* Adjust margin for vertical spacing */
            }

            .nav-links a {
                font-size: 1.5rem;
                /* Adjust font size for better readability on small screens */
            }
        }

        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }

        .menu {
            text-align: center;
            margin: 20px 0;
        }

        /* .menu .btn {
    padding: 10px 20px;
    margin: 5px;
    text-decoration: none;
    color: #333;
    background-color: #e2e2e2;
    border: 1px solid #ccc;
    cursor: pointer;
    border-radius: 15px;
} */
        /* CSS */
        .menu .btn {
            all: unset;
            width: 100px;
            height: 30px;
            font-size: 16px;
            font-weight: bolder;
            background: transparent;
            border: none;
            position: relative;
            color: #f0f0f0;
            cursor: pointer;
            z-index: 1;
            margin-left: 2rem;
            padding: 10px 20px;
            flex-direction: row;
            white-space: nowrap;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            font-family: "Poppins", sans-serif;
        }

        .menu .btn::after,
        .menu .btn::before {
            content: '';
            position: absolute;
            bottom: 0;
            right: 0;
            z-index: -99999;
            transition: all .4s;
        }

        .menu .btn::before {
            transform: translate(0%, 0%);
            width: 100%;
            height: 100%;
            background-color: rgba(20, 20, 21, 0.8);
            border-radius: 10px;
        }

        .menu .btn::after {
            transform: translate(10px, 10px);
            width: 35px;
            height: 35px;
            background: #ffffff15;
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
            border-radius: 50px;
        }

        .menu .btn:hover::before {
            transform: translate(5%, 20%);
            width: 110%;
            height: 110%;
        }

        .menu .btn:hover::after {
            border-radius: 10px;
            transform: translate(0, 0);
            width: 100%;
            height: 100%;
        }

        .menu .btn:active::after {
            transition: 0s;
            transform: translate(0, 5%);
        }


 

        .box {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            /* Adjusted based on minimum size */
            gap: 20px;
            /* Space between items */
        }

        #first {
            color: rgb(17, 17, 17);
            font-size: 1.2rem;
            border-bottom: 3px solid blue;
        }

        .store-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: rgba(139, 141, 145, 0.8);
            padding: 15px;
            box-shadow: rgba(0, 0, 100, 0.3) 10px 50px 40px, rgba(0, 100, 200, 0.30) 0px 15px 12px;
            border-radius: 10px;
        }

        .card-img {
            width: 100%;
            height: 200px;
            /* Increased height */
            object-fit: cover;
            /* Ensures images maintain their aspect ratio */
            border-radius: 10px;
            /* Added border radius */
            transition: all 1s linear 0s;
        }

        .card-img:hover {
            transform: scale(0.9);
        }

        .card-title {
            font-size: 20px;
            /* Increased font size */
            margin: 10px 0;
            color: black;
            font-size: BOLDER;
            font-family: "Poppins", sans-serif;
        }

        .card-description {
            font-size: 16px;
            /* Increased font size */
            color: #555;
            color: black;
            font-family: "Poppins", sans-serif;
        }

        .port h1 {
            text-align: center;
            font-size: 8rem;
            font-family: "Poppins", sans-serif;
            font-style: normal;
            position: relative;
            bottom: 1.5rem;
        }

        .port h1 span {
            color: rgb(194, 11, 11);
        }
        
        /* Media query for tablet screens (between 600px and 800px) */
@media only screen and (max-width: 810px) {
    .container {
        width: 90%;
        position: relative;
        /* Adjust container width */
    }

    .port h1 {
        font-size: 4rem;
        position: relative;
        top: 0.5rem;
        /* Smaller font for headings */
    }

    .box {
        grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
        /* Smaller min-width for grid items */
    }

    .card-img {
        height: 150px;
        /* Smaller height for images */
    }

    .card-title {
        font-size: 18px;
    }

    .card-description {
        font-size: 14px;
    }
    .port {
        background-image: url(bgc3.jpg);
        background-size: cover;
        height: 100%;
        background-position: center; /* Ensure the background image is centered */
    }
    .center h2{
        position: relative;
        right: 12rem;
    }
    .menu .btn{
        margin-left: 0.2rem;
        width: 20rem;
    }
}

/* Media query for mobile screens (600px and below) */
@media only screen and (max-width: 545px) {
    .port {
        height: auto;
        padding: 20px;
        /* Adjust height and add padding */
    }

    .container {
        width: 100%;
    }

    .port h1 {
        font-size: 4rem;
    }

    /* .menu .btn {
        margin: 10px 0;
        width: 10px;
        flex-wrap: wrap;
        
    } */
    .menu .btn {
        width: 60px; /* Make the button narrower */
        padding: 5px 10px; /* Adjust padding for a smaller button */
        font-size: 12px; /* Reduce font size for a compact look */
        margin: 5px 0; /* Reduce margin for closer spacing */
    }

    .box {
        grid-template-columns: 1fr;
        /* Single column layout for mobile */
    }

    .card-img {
        height: 120px;
    }

    .card-title {
        font-size: 16px;
    }

    .card-description {
        font-size: 12px;
    }
    .port {
        background-image: url(bgc3.jpg);
        background-size: cover;
        height: 100%;
        background-position: center; /* Ensure the background image is centered */
    }
    .center h2{
        position: relative;
        right: 5rem;
    }










    </style>
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
                    <li><a href="contact-info.php">Contact Us</a></li>
                    <li><a href="gallery.php" id="first">Gallery</a></li>
                    <li><a href="login-info.php">Admin</a></li>
                </ul>
            </div>
        </div>
    </nav>



    <div class="port">
        <h1>OUR <span> GALLERY</span></h1>

        <!-- Portfolio Filtering Menu -->
        <div class="container">
            <div class="menu">
                <a href="#" class="btn" data-filter="all">All</a>
                <a href="#" class="btn" data-filter="jungle">Wild-Life</a>
                <a href="#" class="btn" data-filter="sports">Sports</a>
                <a href="#" class="btn" data-filter="wedding">Wedding</a>
                <a href="#" class="btn" data-filter="events">Events</a>
                <a href="#" class="btn" data-filter="travel">Travel</a>
            </div>


            <div class="box" id="store-items">
                <?php while ($row = $result->fetch_assoc()): ?>
                    <div class="store-item <?php echo htmlspecialchars($row['category']); ?>">
                        <div class="card">
                            <img src="<?php echo htmlspecialchars($row['image']); ?>" class="card-img" alt="<?php echo htmlspecialchars($row['title']); ?>">
                            <div class="card-content">
                                <h3 class="card-title"><?php echo htmlspecialchars($row['title']); ?></h3>
                                <p class="card-description"><?php echo htmlspecialchars($row['description']); ?></p>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>

    </div>



<script src="ham.js"></script>

    <!-- JavaScript for Interactive Navbar and Portfolio Filter -->
    <script>
        (function() {
            const buttons = document.querySelectorAll('.btn');
            const storeItems = document.querySelectorAll('.store-item');

            buttons.forEach(button => {
                button.addEventListener('click', (e) => {
                    e.preventDefault();
                    const filter = e.target.dataset.filter;

                    storeItems.forEach((item) => {
                        if (filter === 'all') {
                            item.style.display = 'block';
                        } else {
                            if (item.classList.contains(filter)) {
                                item.style.display = 'block';
                            } else {
                                item.style.display = 'none';
                            }
                        }
                    });
                });
            });

            // By default, show all items
            document.querySelector('.btn[data-filter="all"]').click();
        })();
    </script>

    

</body>

</html>

<?php
$conn->close();
?>

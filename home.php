<?php

// Includes db config
include('../db_config.php');

// Fetches 1st 8 books from db
$query = "SELECT Book, Title, ISBN, Author, Edition, Publisher, Genre, Date_Published FROM bookshelf_tbl LIMIT 8";
$result = $conn->query($query);

?>

<!DOCTYPE html>

<html lang="en">

    <head>

        <title>University Library | Home</title>

        <!-- meta tags -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- CSS/stylesheet links -->
        <link href="../web resources/main.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Allura&family=Playfair+Display&display=swap" rel="stylesheet">

      <style>
        nav{
            padding: 0.5em 2em;
            border-end-end-radius: 35px;
            border-end-start-radius: 35px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            top: 0;
            left: 0;
            right: 0;
            height: 85px;
            box-shadow: 0 20px 20px rgba(0, 0, 0, 0.55);
        }

        .btn-primary:link,
        .btn-primary:visited{
            background-color: #ebe9dd;
            border: 3px solid rgba(143, 117, 62, 0.68);
            border-radius: 20px;
            text-decoration: none;
            margin-left: 20px;
            color: #766b5d;
            font-family: Playfair Display;
            font-weight:bold;
        }

        .btn-secondary:link,
        .btn-secondary:visited{
            background-color: #ebe9dd;
            border-radius: 20px;
            text-decoration: none;
            margin-left: 20px;
            color: #766b5d;
            font-family: Playfair Display;
            font-weight:bold;
        }

        .btn-primary:hover,
        .btn-primary:active{ 
        background-color:rgba(255, 249, 243, 0.5);
        transition: 0.5s;
        }

        .btn-secondary:hover,
        .btn-secondary:active{ 
        background-color:rgba(255, 249, 243, 0.5);
        transition: 0.5s;
        }
       
      </style>
    </head>

    <body style="background: linear-gradient(rgba(151, 150, 150, 0.69),rgba(153, 135, 118, 0.4)), url('../web resources/images/try.jpg') center center / cover no-repeat;">

        <!-- Loading Screen -->
        <div id="loading">
            <img src="../web resources/others/Loading_icon.gif">
        </div>

        <!-- Fixed Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #766b5d;">
            <div class="container d-flex justify-content-between align-items-center">
                <!-- Logo and University Name -->
                <div class="d-flex align-items-center">
                    <img src="../web resources/images/logo1.png" alt="Logo" class="navbar-logo" style="height: 55px; margin-right: 10px;">
                    <span class="navbar-brand mb-0 h1" style="font-family: Playfair Display; color: #ebe9dd; font-size: 30px;">Page Turner's</span>
                </div>
                <!-- Navbar Buttons -->
                <div class="d-flex align-items-center">
                    <a href="log_opt.php" class="btn btn-primary mx-1">Log-In</a>
                    <a href="../student view/student_signup.php" class="btn btn-secondary">Sign-Up</a>
                </div>
            </div>
        </nav>

        <!-- Carousel -->
        <section id="carouselExample" class="carousel slide" style="margin-top: 50px;">
            <div class="carousel-inner">
                <!-- Slide 1 -->
                <div class="carousel-item active" style="height: 75vh; background: url('../web resources/images/bg4.jpg') center center / cover no-repeat;">
                    <div class="d-flex justify-content-center align-items-center position-relative h-100 text-center">
                        <div class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(to bottom, rgba(0,0,0,0.4), rgba(0,0,0,0.7));" ></div>
                        <div class="position-relative text-white">
                            <h2 style="font-family: Playfair Display; font-size: 65px; text-transform: uppercase; color: #ebe9dd;">
                                Welcome to the Page Turner's</h2>
                            <p style="font-family: Playfair Display; font-size: 20px; color: #ebe9dd;">
                                Your gateway to endless reading possibilities.</p>
                            <a href="#catalog" class="btn btn-light mt-3" style="font-family: Playfair Display; color: #ebe9dd; background-color: #766b5d;">
                                Browse Books</a>
                        </div>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="carousel-item" style="height: 75vh; background: url('../web resources/images/bg2.jpg') center center / cover no-repeat;">
                    <div class="d-flex justify-content-center align-items-center position-relative h-100 text-center">
                        <div class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(to bottom, rgba(0,0,0,0.4), rgba(0,0,0,0.7));"></div>
                        <div class="position-relative text-white">
                            <h2 style="font-family: Playfair Display; font-size: 65px; text-transform: uppercase; color: #ebe9dd;">
                                Reading made easy</h2>
                            <p style="font-family: Playfair Display; font-size: 20px; color: #ebe9dd;">
                                Explore, rent, and enjoy books of all kinds.</p>
                            <a href="../student view/student_log.php" class="btn btn-light mt-3" style="font-family: Playfair Display; color: #ebe9dd; background-color: #766b5d;">
                                Start Renting</a>
                        </div>
                    </div>
                </div>
                <!-- Slide 3 -->
                <div class="carousel-item" style="height: 75vh;background: url('../web resources/images/bg3.jpg') center center / cover no-repeat;">
                    <div class="d-flex justify-content-center align-items-center position-relative h-100 text-center">
                        <div class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(to bottom, rgba(0,0,0,0.4), rgba(0,0,0,0.7));"></div>
                        <div class="position-relative text-white">
                            <h2 style="font-family: Playfair Display; font-size: 65px; text-transform: uppercase; color: #ebe9dd;">
                                Join Our Community</h2>
                            <p style="font-family: Playfair Display; font-size: 20px; color: #ebe9dd;">
                                Become a member and get access to a world of stories.</p>
                            <a href="../student view/student_signup.php" class="btn btn-light mt-3" style="font-family: Playfair Display; color: #ebe9dd; background-color: #766b5d;"">
                                Sign Up Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Carousel controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev" style="width: auto;">
                <span class="carousel-control-prev-icon" aria-hidden="true" style="background-color: rgba(0, 0, 0, 0.5); border-radius: 50%; padding: 10px;"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next" style="width: auto;">
                <span class="carousel-control-next-icon" aria-hidden="true" style="background-color: rgba(0, 0, 0, 0.5); border-radius: 50%; padding: 10px;"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </section>

        <!-- Book Catalog Section -->
        <section class="container my-5" id="catalog">
            <h2 class="hp-catalog-title" style="font-family: allura; color:rgb(94, 85, 72); font-size: 100px; text-shadow: 0 10px 40px rgba(0, 0, 0, 0.79);">
                Book Catalog</h2>
            <div class="hp-card-deck">
                <?php
                // Display the books from the database
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo '<div class="hp-card">';
                        echo '<div class="hp-book-card">';
                        // Book Image (if exists in the "Book" column)
                        echo '<img src="' . $row['Book'] . '" class="hp-book-card-img" alt="' . $row['Title'] . '">';
                        // Book Title and other details
                        echo '<h5 class="mt-3"><strong>' . $row['Title'] . '</strong></h5>';
                        echo '<p><strong>Author:</strong> ' . $row['Author'] . '</p>';
                        echo '<p><strong>Genre:</strong> ' . $row['Genre'] . '</p>';
                        echo '<p><strong>Edition:</strong> ' . $row['Edition'] . '</p>';
                        echo '<p><strong>ISBN:</strong> ' . $row['ISBN'] . '</p>';
                        echo '<p><strong>Publisher:</strong> ' . $row['Publisher'] . '</p>';
                        echo '<p><strong>Date Published:</strong> ' . $row['Date_Published'] . '</p>';
                        echo '</div>';
                        echo '</div>';
                    }
                } else {
                    echo '<p>No books found.</p>';
                }
                ?>
            </div>
            <!-- Browse More Button -->
            <div class="hp-browse-more-btn">
                <a href="../student view/student_log.php" class="btn btn-primary" style="background-color: #766b5d; color: #ebe9dd;" >Browse More</a>
            </div>
        </section>

        <!-- Footer Section -->
        <footer  style="background-color: #766b5d; font-family: Playfair Display; text-transform: uppercase; color: #ebe9dd; " class="py-4 mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <p>&copy; <?php echo date("Y"); ?> Page Turner's. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Bootstrap JS (for Carousel functionality) -->
        <script src="../web resources/main.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    </body>

</html>

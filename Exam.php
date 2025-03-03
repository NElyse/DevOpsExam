<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RP Ngoma College</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        .container {
            margin-top: 20px;
        }
        .gallery {
            display: flex;
            flex-direction: column; /* Images appear in a vertical line */
            align-items: center; /* Centers images */
            gap: 20px; /* Space between images */
        }
        .gallery img {
            width: 250px; /* Adjusted image size */
            height: auto;
            border-radius: 10px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2); /* Adds a slight shadow */
        }
        footer {
            margin-top: 30px;
            padding: 10px;
            background: #f8f9fa;
        }
    </style>
</head>
<body>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div><a class="navbar-brand" href="#">RP Ngoma College</a></div>
        
        <div class="container">
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto"> <!-- Centered navigation -->
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">About Us</a>
                    </li>
                  
                </ul>
            </div>
        </div>
    </nav>

    <!-- Welcome Message -->
    <div class="container mt-3">
        <h2>Welcome to RP Ngoma College</h2>
        <p>Providing quality education and skills for the future.</p>
    </div>
    <h2>Gallery</h2>
    <div class="group2">
        <div class="SchoolInfor">
            <div class="images">
                <img src="img/Visitors.jpeg" alt="Image 3">
                <img src="img/Pulbic.jpeg" alt="Image 3">
                <img src="img/LandSurva.jpeg" alt="Image 3">
            </div>
           
        </div>
       
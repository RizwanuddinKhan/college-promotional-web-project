<!DOCTYPE html>
<html>
<?php require "E:\wamp64\www\project file\header.php";?>

<head>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        @media only screen and (max-width: 768px) {
            body {
                font-size: 14px;
            }
        }

        @media only screen and (max-width: 480px) {
            body {
                font-size: 12px;
            }
        }

        h1 {
            text-align: center;
            margin: 30px 0;
        }

        h2 {
            font-size: xx-large;
            text-align: center;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .card {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            width: 300px;
            transition: all 0.3s ease-in-out;
        }

        .card:hover {
            transform: scale(1.1);
            box-shadow: 2px 5px 10px rgba(0, 0, 0, 0.4);
        }

        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            transition: all 0.3s ease-in-out;
        }

        .card:hover img {
            transform: scale(1.2);
        }

        .card h2 {
            margin: 10px;
            font-size: 24px;
            text-align: center;
            transition: all 0.3s ease-in-out;
        }

        .card:hover h2 {
            transform: translateY(-10px);
            font-size: 26px;
        }

        .card p {
            margin: 10px;
            font-size: 18px;
            text-align: center;
            transition: all 0.3s ease-in-out;
        }

        .card:hover p {
            transform: translateY(-10px);
            font-size: 20px;
        }
    </style>
</head>

<body>
    <h2>Campus View</h2>
    <div class="container">
        <div class="card">
            <img src="lib.jpg" alt="Library">
            <h2>Library</h2>
            <p>A peaceful study area with plenty of resources for research and learning.</p>
        </div>
        <div class="card">
            <img src="lab.jpg" alt="Computer Lab">
            <h2>Computer Lab</h2>
            <p>A state-of-the-art facility with up-to-date software and hardware for coding, design, and more.</p>
        </div>
        <div class="card">
            <img src="class.jpg" alt="Classroom">
            <h2>Classroom</h2>
            <p>A welcoming and inclusive learning space with modern equipment for engaging lessons.</p>
        </div>
        <div class="card">
            <img src="gym.jpg" alt="Gym">
            <h2>Gym</h2>
            <p>A fitness center where students can stay healthy and active by working out on their own or participating in group fitness classes.</p>
        </div>
        <div class="card">
            <img src="mainbuilding.jpg" alt="Main Building">
            <h2>Main Building</h2>
            <p>The heart of campus, home to administrative offices, academic departments, and more.</p>
        </div>
        <div class="card">
            <img src="corr.jpg" alt="Corridor">
            <h2>Corridors and Halls</h2>
            <p>Beautifully designed spaces to move from one area of campus to another.</p>
        </div>
    </div>
    <?php include "./footer.php"?>
</body>

</html>

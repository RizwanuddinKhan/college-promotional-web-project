<!DOCTYPE html>
<html>
<?php require "E:\wamp64\www\project file\header.php";?>

<head>
    <title>Event Photograph Gallery</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
        }
        .event {
            width: 100%;
            margin-top: 50px;
            display: flex;
            flex-direction: column;
            align-items: center;
            overflow: hidden;
        }
        .name {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
            opacity: 0;
        }

        .photos1 {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
        }
        .photo {
            margin: 0 10px;
            overflow: hidden;
            max-width: calc(20% - 20px);
            height: 370px;
        }
        .photo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .slider {
            display: flex;
            flex-wrap: nowrap;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
            white-space: nowrap;
        }
        .etitle {
            font-family: 'crystal core';
            font-size: 35px;
            font-weight: bold;
            padding: 10px;
            color:red;
        }

        /* Responsive styles */
        @media only screen and (max-width: 768px) {
            .photo {
                max-width: calc(33.33% - 20px);
                height: 200px;
            }
        }

        @media only screen and (max-width: 480px) {
            .event {
                margin-top: 30px;
            }

            .photo {
                max-width: calc(50% - 20px);
                height: 150px;
            }

            .etitle {
                font-size: 24px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="event">
            <div class="etitle">Car Show</div>
            <div class="photos1">
                <div class="slider">
                    <div class="photo"><img src="c1.JPG"></div>
                    <div class="photo"><img src="c2.JPG"></div>
                    <div class="photo"><img src="c3.JPG"></div>
                    <div class="photo"><img src="c4.JPG"></div>
                    <div class="photo"><img src="c5.JPG"></div>
                </div>
            </div>
        </div>
        <div class="event">
            <div class="etitle">Stage Perfomances</div>
            <div class="photos">
                <div class="slider">
                    <div class="photo"><img src="s1.JPG"></div>
                    <div class="photo"><img src="s2.JPG"></div>
                    <div class="photo"><img src="s3.JPG"></div>
                    <div class="photo"><img src="s4.JPG"></div>
                    <div class="photo"><img src="s5.JPG"></div>
                </div>
            </div>
        </div>
        <div class="event">
            <div class="etitle">Outdoor Competitions</div>
            <div class="photos">
                <div class="slider">
                    <div class="photo"><img src="o1.JPG"></div>
                    <div class="photo"><img src="o2.JPG"></div>
                    <div class="photo"><img src="o3.JPG"></div>
                    <div class="photo"><img src="o4.JPG"></div>
                    <div class="photo"><img src="o5.JPG"></div>
                </div>
            </div>
        </div>
        <div class="event">
            <div class="etitle">Indoor Competitions</div>
            <div class="photos">
                <div class="slider">
                    <div class="photo"><img src="i1.JPG"></div>
                    <div class="photo"><img src="i2.JPG"></div>
                    <div class="photo"><img src="i3.JPG"></div>
                    <div class="photo"><img src="i4.JPG"></div>
                    <div class="photo"><img src="i5.JPG"></div>
                </div>
            </div>
        </div>
        <div class="event">
            <div class="etitle">Quizes and Seminars</div>
            <div class="photos">
                <div class="slider">
                    <div class="photo"><img src="q1.JPG"></div>
                    <div class="photo"><img src="q2.JPG"></div>
                    <div class="photo"><img src="q3.JPG"></div>
                    <div class="photo"><img src="q4.JPG"></div>
                    <div class="photo"><img src="q5.JPG"></div>
                </div>
            </div>
        </div>
    </div>
    <?php include "./footer.php"?>
</body>
</html>

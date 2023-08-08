<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="mainpage.css" rel="stylesheet">
    <?php require "E:\wamp64\www\project file\header.php";?>
    <style type="text/css">
        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        .block {
            width: 30%;
            padding: 20px;
            margin-bottom: 20px;
            text-align: center;
            font-family: Impact;
            border: 1px solid #ccc;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
        .block img {
            max-width: 100%;
            height: auto;
            margin-bottom: 10px;
        }
        .block h3 {
            margin-top: 0;
        }
        .block p {
            margin-bottom: 0;
        }
        #hy {
            font-family: 'Times New Roman', Times, serif;
            align-items: center;
            color:goldenrod;
        }
    </style>
</head>
<body>
    <marquee scrollamount="8" direction="left" style="font-size: xx-large;font-family: 'Lucida Sans';">"Important notice appears here"</marquee>
    <div class="pic-ctn">
        <img src="livestream1.png" alt="livestreambanner" class="pic">
        <img src="registrationimage.jpg" alt="registrationbanner" class="pic">
        <img src="announcement1.png" alt="announcement1banner" class="pic">
        <img src="announcement2.jpg" alt="announcement2banner" class="pic">
        <img src="announcement3.jpg" alt="announcement3banner" class="pic">
    </div>
 <center><h1 id="hy">"Where Leaders are Born, Built, and Earned!"</h1></center>
    <div class="container">
        <div class="block">
            <img src="a1.png" alt="Image">
            <h3>College of the year</h3>
            <p>"Times new magzines have recognised us the best college of the year".

            </p>
        </div>
        <div class="block">
            <img src="a2.png" alt="Image">
            <h3>NIRF Ranking</h3>
            <p>"NIRF stands for National Institutional Ranking Framework, which is an annual ranking system by the Ministry of Education, Government of India. It ranks colleges and universities based on several parameters such as teaching, research, placements, etc.".
            </p>
        </div>
        <div class="block">
            <img src="a3.png" alt="Image">
            <h3>NAAC Accreditation</h3>
            <p>"NAAC stands for National Assessment and Accreditation Council, which is an autonomous body established by the University Grants Commission (UGC) to assess and accredit institutions of higher education in India. The accreditation is based on a set of criteria that evaluate the institution's infrastructure, faculty, teaching-learning process, student support, research, and innovation."
            </p>
        </div>
        <div class="block">
            <img src="a3.png" alt="Image">
            <h3>Times Higher Education Rankings</h3>
            <p>" Times Higher Education (THE) is a weekly magazine based in London that publishes a global ranking system for universities and colleges. THE World University Rankings evaluates the institutions based on parameters such as teaching, research, citations, industry income, and international outlook."</p>
        </div>
        <div class="block">
            <img src="a2.png" alt="Image">
            <h3>QS Rankings</h3>
            <p>"QS World University Rankings is a global ranking system for universities and colleges. It is published annually by Quacquarelli Symonds (QS), a British education company. The ranking evaluates the institutions based on several parameters such as academic reputation, employer reputation, faculty-student ratio, citations per faculty, international faculty, and international students." </p>
        </div>
        <div class="block">
            <img src="a1.png" alt="Image">
            <h3>FICCI Higher Education Excellence Awards</h3>
            <p>": The Federation of Indian Chambers of Commerce and Industry (FICCI) Higher Education Excellence Awards is an annual award that recognizes and honors institutions of higher education in India for their excellence in various categories such as research, innovation, employability, industry collaborations, social responsibility, and overall excellence"</p>
        </div>
    </div>
    <footer>
        <?php include "./footer.php"?>
    </footer>
</body>
</html>

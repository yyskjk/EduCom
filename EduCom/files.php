<?php
session_start();

if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
}
?>
<!doctype html>
<html lang="en">
<head>
    <title>Ebooks</title>
    <link rel="stylesheet" href="styles/files.css" />
    <?php include "header.php";
    ?>
    <style>
        .content a:hover{
            background-color: #eeeeee;
            color: #ff5722;
        }
    </style>
</head>
<body>
<section id="header-section">
    <div class="container-fluid">
        <?php include "navbar.php";
        ?>
    </div>
</section>

    <h1 class="notes">E-BOOKS</h1>
    <hr class="top"/>
    <section class="sec" style="text-align: left">
        <div class="subject">
            <button type="button" class="collapsible">Machine Learning</button>
            <div class="content">
                <a href="files\ML1.pdf"><img src="img\ML1.png" width="150" height="150">Step-by-Step Guide To Implement Machine Learning Algorithms with Python BY Rudolph Russell</a>
                <a href="files\ML2.pdf"><img src="img\ML2.png" width="150" height="150">Machine Learning with Python Cookbook by Chris Albon</a>
                <a href="files\ML3.pdf"><img src="img\ML3.png" width="150" height="150">Natural Language Processing Recipes by Akshay Kulkarni, Adarsha Shivananda</a>
            </div>
        </div>
        <hr/>
        <div class="subject">
            <button type="button" class="collapsible">Artificial Intelligence</button>
            <div class="content">
                <a href="files\AI1.pdf"><img src="img\AI1.png" width="150" height="150">Emerging Artificial Intelligence Applications In Computer Engineering by J. Breuker, R. Dieng-Kuntz, N. Guarino, J.N. Kok, J. Liu, R. López de Mántaras, R. Mizoguchi, M. Musen </a>
                <a href="files\AI2.pdf"><img src="img\AI2.png" width="150" height="150">Artificial Intelligence and Molecular Biology by Lawrence Hunter</a>
                <a href="files\AI3.pdf"><img src="img\AI3.png" width="150" height="150">Artificial Intelligence A Guide to Intelligent Systems by MICHAEL NEGNEVITSKY</a>
            </div>
        </div>
        <hr/>
        <div class="subject">
            <button type="button" class="collapsible">MATLAB</button>
            <div class="content">
                <a href="files\MT1.pdf"><img src="img\MT1.png" width="150" height="150">MATLAB Deep Learning With Machine Learning, Neural Networks and Artificial Intelligence by Phil Kim</a>
                <a href="files\MT2.pdf"><img src="img\MT2.png" width="150" height="150">MATLAB DATA ANALYSIS  by The MathWorks, Inc.</a>
                <a href="files\MT3.pdf"><img src="img\MT3.png" width="150" height="150">MATLAB PROGRAMMING FUNDAMENTALS  by The MathWorks, Inc.</a>
            </div>
        </div>
        <hr/>
        <div class="subject">
            <button type="button" class="collapsible">Advanced JAVA</button>
            <div class="content">
                <a href="files\AJV1.pdf"><img src="img\AJV1.png" width="150" height="150">ADVANCED JAVA PROGRAMMING by TUYEN DO – TUNG NGUYEN - NGOC DONG</a>
                <a href="files\AJV2.pdf"><img src="img\AJV2.png" width="150" height="150">Introduction to Java Programming Advanced Features (Core Series) by Harry.H.Chaudhary.</a>
                <a href="files\AJV3.pdf"><img src="img\AJV3.png" width="150" height="150">Functional Programming in Java How Functional techniques improves java programs by Pierre-Yves Saumont</a>
            </div>
        </div>
        <hr/>
        <div class="subject">
            <button type="button" class="collapsible">Block Chain</button>
            <div class="content">
                <a href="files\BC1.pdf"><img src="img\BC1.png" width="150" height="150">Blockchain BLUEPRINT FOR A NEW ECONOMY by Melanie Swan</a>
                <a href="files\BC2.pdf"><img src="img\BC2.png" width="150" height="150">DEVELOPING BLOCKCHAIN SOFTWARE by David Schwartz, Chief Cryptographer</a>
                <a href="files\BC3.pdf"><img src="img\BC3.png" width="150" height="150">Mastering Bitcoin Programming the Open Blockchain by Andreas M. Antonopoulos</a>
            </div>
        </div>
        <hr/>
        <div class="subject">
            <button type="button" class="collapsible">Cyber Security</button>
            <div class="content">
                <a href="files\CS1.pdf"><img src="img\CS1.png" width="150" height="150">CYBERSECURITY Protecting Critical Infrastructures from Cyber Attack and Cyber Warfare Edited by Thomas A. Johnson</a>
                <a href="files\CS2.pdf"><img src="img\CS2.png" width="150" height="150">DATA ANALYSIS FOR NETWORK CYBER-SECURITY edited by Niall Adams Nicholas Heard</a>
                <a href="files\CS3.pdf"><img src="img\CS3.png" width="150" height="150">CYBERSECURITY ESSENTIALS Edited by James Graham, Richard Howard, Ryan Olson</a>
            </div>
        </div>
        <hr/>
    </section>
<?php include "footer.php";
?>
    <script>
        let coll = document.getElementsByClassName("collapsible");
        let i;
        for (i = 0; i < coll.length; i++) {
            coll[i].addEventListener("click", function () {
                this.classList.toggle("active");
                let content = this.nextElementSibling;
                if (content.style.display === "block") {
                    content.style.display = "none";
                } else {
                    content.style.display = "block";
                }
            });
        }
    </script>
</body>
</html>
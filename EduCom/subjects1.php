<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUBJECTS</title>
    <link rel="stylesheet" href="styles/subjects.css">
    <?php include "header.php";
    ?>
</head>
<body>
<section id="header-section">
    <div class="container-fluid">

        <!-- Nav Bar -->
        <nav class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand" href="index.php">Educom</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
                    aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <p class="nav-link">Welcome</p>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" onclick="alert('Please login first');" href="home.php">Notices</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="subjects1.php">Subjects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" onclick="alert('Please login first');" href="home.php">Online Lectures</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" onclick="alert('Please login first');" href="home.php">Ebooks</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="info1.php">About Us</a>
                    </li>
                </ul>
            </div>
            <button type="button" class="btn btn-dark" id="logout-button"><a href="home.php"
                                                                             style="color: #ff5722; text-decoration: none">LOGIN</a>
            </button>
        </nav>
    </div>
</section>

<br/>
<h1 text-align="center" style="color: #ff5722">OUR SUBJECTS</h1>
<br/>
<div class="container">
    <div class="row">
        <div class="col-lg-6 mb-4">
            <div class="card" id="d1" style="display: table-cell;" onclick="alert('Please login first');">
                <img src="img/ai.jpg" alt="AI" style="width:500px;height:300px;"><br>
                <div class="container">
                    <h4><b>ARTIFICIAL INTELLIGENCE</b></h4>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mb-4">
            <div class="card" id="d2" style="display: table-cell;" onclick="alert('Please login first');">
                <img src="img/ml.jpg" alt="ML" style="width:500px;height:300px;"><br>
                <div class="container">
                    <h4><b>MACHINE LEARNING</b></h4>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <div class="row">
        <div class="col-lg-6 mb-4">
            <div class="card" id="d3" style="display: table-cell;" onclick="alert('Please login first');">
                <img src="img/matlab.jpg" alt="MATLAB" style="width:500px;height:300px;"><br>
                <div class="container">
                    <h4><b>MATLAB</b></h4>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mb-4">
            <div class="card" id="d4" style="display: table-cell;" onclick="alert('Please login first');">
                <img src="img/aj.png" alt="ADV JAVA" style="width:500px;height:300px;"><br>
                <div class="container">
                    <h4><b>ADVANCE JAVA</b></h4>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <div class="row">
        <div class="col-lg-6 mb-4">
            <div class="card" id="d5" style="display: table-cell;" onclick="alert('Please login first');">
                <img src="img/blockchain.jpg" alt="BLOCKCHAIN" style="width:500px;height:300px;">
                <div class="conatiner">
                    <h4><b>BLOCKCHAIN</b></h4>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mb-4">
            <div class="card" id="d6" style="display: table-cell;" onclick="alert('Please login first');">
                <img src="img/cs.jpg" alt="CYBSEC" style="width:500px;height:300px;">
                <div class="container">
                    <h4><b>CYBER SECURITY</b></h4>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php";
?>
</body>
</html>
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
        <?php include "navbar.php";
        ?>
    </div>
</section>

<br/>
<h1 text-align="center" style="color: #ff5722">Please select your subjects as per mentioned below</h1>
<br/>
<div class="container">
    <div class="row">
        <div class="col-lg-6 mb-4">
            <a href="ai.php">
                <div class="card" id="d1" style="display: table-cell;">
                    <img src="img/ai.jpg" alt="AI" style="width:500px;height:300px;"><br>
                    <div class="container">
                        <h4><b>ARTIFICIAL INTELLIGENCE</b></h4>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-6 mb-4">
            <a href="ml.php">
                <div class="card" id="d2" style="display: table-cell;">
                    <img src="img/ml.jpg" alt="ML" style="width:500px;height:300px;"><br>
                    <div class="container">
                        <h4><b>MACHINE LEARNING</b></h4>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <br><br>
    <div class="row">
        <div class="col-lg-6 mb-4">
            <a href="matlab.php">
                <div class="card" id="d3" style="display: table-cell;">
                    <img src="img/matlab.jpg" alt="MATLAB" style="width:500px;height:300px;"><br>
                    <div class="container">
                        <h4><b>MATLAB</b></h4>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-6 mb-4">
            <a href="aj.php">
                <div class="card" id="d4" style="display: table-cell;">
                    <img src="img/aj.png" alt="ADV JAVA" style="width:500px;height:300px;"><br>
                    <div class="container">
                        <h4><b>ADVANCE JAVA</b></h4>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <br><br>
    <div class="row">
        <div class="col-lg-6 mb-4">
            <a href="blockchain.php">
                <div class="card" id="d5" style="display: table-cell;">
                    <img src="img/blockchain.jpg" alt="BLOCKCHAIN" style="width:500px;height:300px;">
                    <div class="conatiner">
                        <h4><b>BLOCKCHAIN</b></h4>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-6 mb-4">
            <a href="cs.php">
                <div class="card" id="d6" style="display: table-cell;">
                    <img src="img/cs.jpg" alt="CYBSEC" style="width:500px;height:300px;">
                    <div class="container">
                        <h4><b>CYBER SECURITY</b></h4>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
<?php include "footer.php";
?>
</body>
</html>
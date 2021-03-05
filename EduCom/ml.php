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
    <title>Machine Learning</title>
    <link rel="stylesheet" href="styles/video.css">
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
  <div id="d1" style="display:flex;">
        <video id="v1" width="500" height="300" controls>
            <source src="files\ML PART 1.mp4" type="video/mp4">
        </video><br>
        <label style="text-align:center;"><b>INTRODUCTION TO MACHINE LEARNING</b><br>
        In this video we will discuss here:
        linear regression<br>
        K Nearest Neighbors<br>
        Support Vector Machines (SVM)<br>
        flat clustering<br>
        hierarchical clustering<br>
        neural networks.<br>
        </label>
        </div>
        <div id="d2" style="display:flex;">
        <a>
        <video id="v2" width="500" height="300" controls>
            <source src="files\ML PART 2.mp4" type="video/mp4">
        </video></a><br>
        <label style="text-align:center;"><B>REGRESSION INTRODUCTION</B><br>
            In this video we will discuss here:
            what is regression in terms of us using it with machine learning?<br>
            the equation of that line to forecast out into the future<br>
        </label>
        </div>
        <div id="d3" style="display:flex;">
        <a href="D:\ipminiproj\ML PART 3.mp4" download="AI1">
            <video id="v3" width="500" height="300" controls>
                <source src="files\ML PART 3.mp4" type="video/mp4">
            </video>
        </a>
        <br>
        <label style="text-align:center;"><B>REGRESSION FEATURES AND LABELS</B><br>
        In this video we will discuss here: how the machine actually thinks?<br>
        And features and labels with descriptive attributes<br> 
        </label>
        </div>
        <div id="d4" style="display:flex;">
            <video id="v4" width="500" height="300" controls>
                <source src="files\ML PART 4.mp4" type="video/mp4">
            </video><br>
            <label style="text-align:center;"><b>REGRESSION TRAINING AND TESTING</b><br>
            In this video we will discuss here:
            basic programming of regression<br>
            testing the program and compilation<br>
            </label>
        </div>
        <div id="d5" style="display:flex;">
            <video id="v5" width="500" height="300" controls>
                <source src="files\ML PART 5.mp4" type="video/mp4">
            </video><br>
            <label style="text-align:center;"><b>REGRESSION FORECASTING AND PREDICTING</b><br>
            In this video we will discuss here:
            Forecasting through regression in Machine<br>
            Predicting the output regression<br>
            </label>
        </div>
        <div id="d6" style="display:flex;">
            <video id="v6" width="500" height="300" controls>
                <source src="files\ML PART 6.mp4" type="video/mp4">
            </video><br>
            <label style="text-align:center;"><b>PICKLING AND SCALING</b><br>
            In this video we will discuss here:
            Pickling technique in regression<br>
            Scaling technique in regression <br>
            </label>
        </div>
        <div id="d7" style="display:flex;">
            <video id="v7" width="500" height="300" controls>
                <source src="files\ML PART 7.mp4" type="video/mp4">
            </video><br>
            <label style="text-align:center;"><b>REGRESSION HOW IT WORKS</b><br>
            In this video we will discuss here:
            the working of regression.
            </label>
        </div>
<?php include "footer.php";
?>
</body>
</html>
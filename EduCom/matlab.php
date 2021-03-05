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
    <title>MATLAB BASICS</title>
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
            <source src="files\MT PART 1.mp4" type="video/mp4">
        </video><br>
        <label style="text-align:center;"><b>INTRODUCTION TO MATLAB</b><br><br>
        In this video we will discuss here:
        The video walks through how to calculate solar panel energy production.<br>
        Visualize data using prebuilt plots, and then customize those visualizations.<br>
        documentation to find built-in functions, guidance on their syntax, and code examples<br>
        </label>
        </div>
        <div id="d2" style="display:flex;">
        <a>
        <video id="v2" width="500" height="300" controls>
            <source src="files\MT PART 2.mp4" type="video/mp4">
        </video></a><br>
        <label style="text-align:center;"><B>WORKING IN ENVIRONEMNT DEVELOPMENT OF MATLAB</B><br><br>
            In this video we will discuss here:
            - An overview of the main MATLAB windows
            - Manipulating MATLAB windows
            - Logistical commands for navigation
            - The toolstrip
            - The quick access toolbar
        </label>
        </div>
        <div id="d3" style="display:flex;">
        <a href="files\MT PART 3.mp4" download="AI1">
            <video id="v3" width="500" height="300" controls>
                <source src="D:\ipminiproj\MT PART 3.mp4" type="video/mp4">
            </video>
        </a>
        <br>
        <label style="text-align:center;"><B>PROGRAMMING IN MATLAB</B><br>
        In this video we will discuss here:
        how to write a program in MATLAB<br>
        Compiling the program<br>
        Executing the program<br>
        </label>
        </div>
        <div id="d4" style="display:flex;">
            <video id="v4" width="500" height="300" controls>
                <source src="files\MT PART 4.mp4" type="video/mp4">
            </video><br>
            <label style="text-align:center;"><b>USING BASIC PLOTTING FUCNTIONS</b><br>
                creating sets of numbers that are ready to be inputted into a plot.<br>
                make sample data for a plot using commands like randn and linspace.<br>
                covers the plot function itself, and it shows how using the plot 
                function instantly creates a plot figure window containing the data.<br>

            </label>
        </div>
        <div id="d5" style="display:flex;">
            <video id="v5" width="500" height="300" controls>
                <source src="files\MT PART 5.mp4" type="video/mp4">
            </video><br>
            <label style="text-align:center;"><b>ARRAYS IN MATLAB</b><br>
                In this video we will discuss here:
                Create and manipulate MATLAB arrays<br>
                Accessing elements using indexing.<br>
            </label>
        </div>
        <div id="d6" style="display:flex;">
            <video id="v6" width="500" height="300" controls>
                <source src="files\MT PART 6.mp4" type="video/mp4">
            </video><br>
            <label style="text-align:center;"><b>INTRODUCTION TO STRUCTURES AND CELL ARRAYS</b><br>
            In this video we will discuss here:
            Using structures and cell arrays to manage heterogeneous data of different types and sizes.<br>
            </label>
        </div>
        <div id="d7" style="display:flex;">
            <video id="v7" width="500" height="300" controls>
                <source src="files\MT PART 7.mp4" type="video/mp4">
            </video><br>
            <label style="text-align:center;"><b>FUNDAMENTAL CLASSES AND DATA TYPES</b><br>
                In this video we will discuss here:
                Work with numerical, textual, and logical data types.<br>
            </label>
        </div>
<?php include "footer.php";
?>
</body>
</html>
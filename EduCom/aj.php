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
    <title>ADVANCE JAVA</title>
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
            <source src="files\AJV PART1.mp4" type="video/mp4">
        </video><br>
        <label style="text-align:center;"><b>TYPES OF APPLICATIONS USING JAVA</b><br><br>
            Java applications has to classified into:

            Standalone applications<br>
            Web applications<br>
            Enterprise applications<br>
            Mobile applications<br>
        </label>
        </div>
        <div id="d2" style="display:flex;">
        <a>
        <video id="v2" width="500" height="300" controls>
            <source src="files\AJV PART 2.mp4" type="video/mp4">
        </video></a><br>
        <label style="text-align:center;"><B>INTRODUCTION TO JAVA MVC</B><br><br>
        In this video we will discuss here:
        Introduction to java MVC(model view and controller)<br>
        It's applications<br>
        </label>
        </div>
        <div id="d3" style="display:flex;">
        <a href="files\AJV PART 3.mp4" download="AI1">
            <video id="v3" width="500" height="300" controls>
                <source src="files\AJV PART 3.mp4" type="video/mp4">
            </video>
        </a>
        <br>
        <label style="text-align:center;"><B>JAVA JDBC ARCHITECTURE PART 1</B><br>
            In this video we will discuss here:
            Steps to Connect with DataBase<br>
            Servlets Container<br>
            How to Write a Servlet<br>
        </label>
        </div>
        <div id="d4" style="display:flex;">
            <video id="v4" width="500" height="300" controls>
                <source src="files\AJV PART 4.mp4" type="video/mp4">
            </video><br>
            <label style="text-align:center;"><b>JAVA JDBC ARCHITECTURE PART 2</b><br>
            In this video we will discuss here:
            Hello World Example<br>
            Servlets Life Cycle<br>
            Context and Config Params<br>
            HTTP Servlet<br>
            </label>
        </div>
        <div id="d5" style="display:flex;">
            <video id="v5" width="500" height="300" controls>
                <source src="files\AJV PART 5.mp4" type="video/mp4">
            </video><br>
            <label style="text-align:center;"><b>JAVA JDBC ARCHITECTURE PART 3</b><br>
                Servlet-Servlet Communication<br>
                AJAX-Servlet<br>
                Servlet Listners<br>
                JSP<br>
            </label>
        </div>
<?php include "footer.php";
?>
</body>
</html>
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
    <link rel="stylesheet" href="styles/video.css">
    <title>ARTIFICIAL INTELLIGENCE</title>
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
        <source src="files\AI PART 1.mp4" type="video/mp4">
    </video><br>
    <label style="text-align:center;"><b> SYLLABUS OF ARTIFICIAL INTELLIGENCE</b><br>
    In this video we will discuss:
    the syllabus of AI<br>
    the Applications and use in Machines<br>
    </label>
    </div>
    <div id="d2" style="display:flex;">
    <a>
    <video id="v2" width="500" height="300" controls>
        <source src="files\AI PART 2.mp4" type="video/mp4">
    </video></a><br>
    <label style="text-align:center;"><B>WHAT MACHINES THINK</B><br>
    In this video we will discuss here:
    Learning<br>
    Reasoning<br>
    Problem solving on machines.<br>
    </label>
    </div>
    <div id="d3" style="display:flex;">
    <a href="files\AI PART 3.mp4" download="AI1">
        <video id="v3" width="500" height="300" controls>
            <source src="files\AI PART 3.mp4" type="video/mp4">
        </video>
    </a>
    <br>
    <label style="text-align:center;"><B>STATE SPACE SEARCH</B><br>
    In this video we will discuss here:
    S set of all possible states<br>
    A  the set of all possible action<br>
    ACTION  the function to perform the action in certain state<br>
    RESULT  the fucntion return the solution of the action in certain state<br>
    COST  the function returns the cost of performing function<br>
    </label>
    </div>
    <div id="d4" style="display:flex;">
        <video id="v4" width="500" height="300" controls>
            <source src="files\AI PART 4.mp4" type="video/mp4">
        </video><br>
        <label style="text-align:center;"><b>INFORMED VS UNINFORMED SEARCH IN ARTIFICIAL INTELLIGENCE</b><br>
        In this video we will discuss here:
        the informed search <br>
        the uninformed search<br>
        the difference between the informed and uninformed search in artificial intelligence<br>
        </label>
    </div>
    <div id="d5" style="display:flex;">
        <video id="v5" width="500" height="300" controls>
            <source src="files\AI PART 5.mp4" type="video/mp4">
        </video><br>
        <label style="text-align:center;"><b>BREADTH FIRST SEARCH ALGORITHM</b><br>
        In this video we will see here:
        the Introduction to BFS<br>
        working of BFS<br>
        problem-solving in BFS<br>

        </label>
    </div>
    <div id="d6" style="display:flex;">
        <video id="v6" width="500" height="300" controls>
            <source src="files\AI PART 6.mp4" type="video/mp4">
        </video><br>
        <label style="text-align:center;"><b>DEPTH FIRST SEARCH</b><br>
        In this video we will discuss here:
        Intrduction to DFS<br>
        Working of DFS<br>
        Problem-solving in DFS<br>
        </label>
    </div>
<?php include "footer.php";
?>
</body>
</html>
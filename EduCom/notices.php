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
    <title>Notices</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            font-family: "Lato", sans-serif
        }

        .mySlides {
            display: none
        }
    </style>
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
<!-- Page content -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">


    <!-- The notices Section -->
    <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="notices">
        <h2 class="w3-wide">Notices</h2>
        <p class="w3-opacity"><i>All information for students and parents</i></p>
        <p class="w3-justify">The notice section is created for all parents and students to access all information
            easily.Exam dates class schedules all information is regularly updates.For any assistance feel free to call
            us.
        <h1>IMPORTANT NOTICES</h1>
        <p>Schedule for December Batch 2020: <a href="files/DEC 2020.pdf">DEC 2020</a>.</p>

        <p>Exam Schedule for December 2020: <a href="files/EXAM SCHEDULE 2020.pdf">EXAM SCHEDULE</a>.</p>

        <p>Note for Christmas Break: <a href="files/christmas.pdf">Christmas Break</a>.</p>

        <p>Note for Holiday on 30/11/20: <a href="files/holiday.pdf">Holiday notice</a>.</p>

        <p>Results for Test 3: <a href="files/marks1.pdf">Download Marksheet</a>.</p>

    </div>
</div>





<?php include "enquiry.php"; ?>
<!-- The Contact Section -->
<div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
    <h2 class="w3-wide w3-center">CONTACT</h2>
    <p class="w3-opacity w3-center"><i>Doubt? Drop a note!</i></p>
    <div class="w3-row w3-padding-32">
        <div class="w3-col m6 w3-large w3-margin-bottom">
            <i class="fa fa-map-marker" style="width:30px"></i> Mumbai, India<br>
            <i class="fa fa-phone" style="width:30px"></i> Phone: 022-20029872<br>
            <i class="fa fa-envelope" style="width:30px"> </i> Email: enquiry@educom.com<br>
        </div>
        <div class="w3-col m6">
            <form action="notices.php" method="POST" target="_blank">
                <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
                    <div class="w3-half">
                        <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
                    </div>
                    <div class="w3-half">
                        <input class="w3-input w3-border" type="text" placeholder="Email" required name="Email">
                    </div>
                </div>
                <input class="w3-input w3-border" type="text" placeholder="Message" required name="Message">
                <button class="w3-button w3-black w3-section w3-right" type="submit">SEND</button>
            </form>
        </div>
    </div>
</div
<!-- End Page Content -->



<?php include "footer.php";
?>

<script>
    // Automatic Slideshow - change image every 4 seconds
    var myIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) {
            myIndex = 1
        }
        x[myIndex - 1].style.display = "block";
        setTimeout(carousel, 4000);
    }

    // Used to toggle the menu on small screens when clicking on the menu button
    function myFunction() {
        var x = document.getElementById("navDemo");
        if (x.className.indexOf("w3-show") === -1) {
            x.className += " w3-show";
        } else {
            x.className = x.className.replace(" w3-show", "");
        }
    }

    // When the user clicks anywhere outside of the modal, close it
    var modal = document.getElementById('ticketModal');
    window.onclick = function (event) {
        if (event.target === modal) {
            modal.style.display = "none";
        }
    }
</script>

</body>
</html>



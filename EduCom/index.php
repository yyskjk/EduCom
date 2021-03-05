
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Educom</title>



    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,400,900|Ubuntu&display=swap" rel="stylesheet">

    <!-- CSS Stylesheets -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/7827eb46f9.js" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</head>

<body>
<section id="header-section">
    <div class="container-fluid">

        <!-- Nav Bar -->
        <nav class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand" href="index.php">Educom</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
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
            <button type="button" class="btn btn-dark" id="logout-button"><a href="home.php" style="color: #ff5722; text-decoration: none">LOGIN</a></button>
        </nav>
        <!--Jumbotron-->
        <div class="jumbotron">
            <h1 class="display-4">Welcome to Educom<br>Let's redefine learning</h1>
        </div>
    </div>
</section>

<div class="container-fluid">
    <p id="intro-para">Founded in 2015 by four engineering students,Educom Tutorials have been
        a pioneer in technical education for the last 5 years. We have coached
        around 2000+ students since then from 20+ different engineering colleges who have gone on to excel
        in their respective fields. Our faculty includes some of the most experienced
        professors out there who themselves are engineers and PhDs.
        While other institutes rely
        on theoretical knowledge we believe in learning through practical
        experience which is why we also conduct lab sessions for all our
        students. Our motto is "Tenebris Illuminare Et Vias Dirigere"
        which means to enlighten darkness and direct paths and we wish to achieve this by providing world
        class education. So join us in this amazing adventure.
    </p>

</div>
<section id="mid-section">
    <div class="container-fluid">
        <div class="jumbotron">
            <h1 class="display-4">Why choose us?</h1>
        </div>
        <div class="row">
            <div class="feature-box col-lg-4">
                <i class="icon fas fa-chalkboard-teacher fa-5x"></i>
                <h3 class="feature-title">Faculty</h3>
                <p class="feature-para">The most experienced and friendly teachers who are well versed with their conecpts.</p>
            </div>

            <div class="feature-box col-lg-4">
                <i class="icon fas fa-sticky-note fa-5x"></i>
                <h3 class="feature-title">Notes</h3>
                <p class="feature-para">The most concise and to the point notes which will help you crack the exams easily.</p>
            </div>

            <div class="feature-box col-lg-4">
                <i class="icon fas fa-diagnoses fa-5x"></i>
                <h3 class="feature-title">Analysis</h3>
                <p class="feature-para">In depth analysis of your tests to give you the most valuable inputs.</p>
            </div>
        </div>
    </div>

</section>

<!-- Testimonials -->

<section id="testimonials">
    <div id="testimonial-carousel" class="carousel slide" data-ride="false">
        <div class="carousel-inner">
            <div class="carousel-item active container-fluid">
                <h2 class="testimonial-text">"Educom has the best teachers in town who helped me achieve my goal with consistent effort and hardwork."</h2>
                <img class="testimonial-img" src="img/student1.jpg" alt="boy">
                <em>John, New York</em>
            </div>
            <div class="carousel-item container-fluid">
                <h2 class="testimonial-text">"The faculty here was so friendly and always ready to help students. I would recommend educom to all of my friends"</h2>
                <img class="testimonial-img" src="img/student2.jpg" alt="boy">
                <em>Mason, Illinois</em>
            </div>
            <div class="carousel-item container-fluid">
                <h2 class="testimonial-text">"The notes and study material provided by our teachers was really very helpful in scoring well in the exams. It was to the point and concise"</h2>
                <img class="testimonial-img" src="img/student3.jpg" alt="girl">
                <em>Julie, Kansas</em>
            </div>
        </div>
        <a class="carousel-control-prev" href="#testimonial-carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#testimonial-carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
</section>
<!-- the calendar section-->
<div class="w3-black" id="calendar">
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
        <h2 class="w3-wide w3-center">SEMINAR CALENDAR</h2>
        <p class="w3-opacity w3-center"><i>Remember to book your Seminars with our expert and international faculty!</i>
        </p><br>

        <ul class="w3-ul w3-border w3-white w3-text-grey">
            <li class="w3-padding">November <span class="w3-tag w3-red w3-margin-left">Sold out</span></li>
            <li class="w3-padding">December <span class="w3-tag w3-red w3-margin-left">Sold out</span></li>
            <li class="w3-padding">January <span class="w3-badge w3-right w3-margin-right">3</span></li>
        </ul>

        <div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
            <div class="w3-third w3-margin-bottom">
                <img src="img/matlab.jpg" alt="MATLAB" style="width:100%;" class="w3-hover-opacity">
                <div class="w3-container w3-white">
                    <p><b>MATLAB</b></p>
                    <p class="w3-opacity">Fri 07 Jan 2021</p>
                    <p>Enroll now to avail demo and trial classes.</p>
                    <button class="w3-button w3-black w3-margin-bottom"
                            onclick="document.getElementById('ticketModal').style.display='block'">Book Slot
                    </button>
                </div>
            </div>
            <div class="w3-third w3-margin-bottom">
                <img src="img/java.jpg" alt="Advance Java" style="width:100%;height:270px;" class="w3-hover-opacity">
                <div class="w3-container w3-white">
                    <p><b>Advance Java</b></p>
                    <p class="w3-opacity">Sat 08 Nov 2021</p>
                    <p>Enroll now to avail demo and trial classes.</p>
                    <button class="w3-button w3-black w3-margin-bottom"
                            onclick="document.getElementById('ticketModal').style.display='block'">Book Slot
                    </button>
                </div>
            </div>
            <div class="w3-third w3-margin-bottom">
                <img src="img/blockchain.jpg" alt="Block Chain" style="width:100%;height:270px;"
                     class="w3-hover-opacity">
                <div class="w3-container w3-white">
                    <p><b>Block Chain</b></p>
                    <p class="w3-opacity">Sun 09 Jan 2021</p>
                    <p>Enroll now to avail demo and trial classes.</p>
                    <button class="w3-button w3-black w3-margin-bottom"
                            onclick="document.getElementById('ticketModal').style.display='block'">Book Slot
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Ticket Modal -->
<div id="ticketModal" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-4">
        <header class="w3-container w3-teal w3-center w3-padding-32">
        <span onclick="document.getElementById('ticketModal').style.display='none'"
              class="w3-button w3-teal w3-xlarge w3-display-topright">×</span>
            <h2 class="w3-wide"><i class="fa fa-suitcase w3-margin-right"></i>Slots</h2>
        </header>
        <div class="w3-container">
            <p><label><i class="fa fa-shopping-cart"></i> One Slot, valid per person</label></p>
            <input class="w3-input w3-border" type="text" placeholder="How many?">
            <p><label><i class="fa fa-user"></i> Send To</label></p>
            <input class="w3-input w3-border" type="text" placeholder="Enter email">
            <button class="w3-button w3-block w3-teal w3-padding-16 w3-section w3-right" 
            onclick="alert('Your slot has been booked. We will email you as soon as possible');
            document.getElementById('ticketModal').style.display='none';">BOOK <i
                        class="fa fa-check"></i></button>
            <button class="w3-button w3-red w3-section"
                    onclick="document.getElementById('ticketModal').style.display='none'">Close <i
                        class="fa fa-remove"></i></button>
            <p class="w3-right">Need <a href="#" class="w3-text-blue">help?</a></p>
        </div>
    </div>
</div>
<?php include('enquiry.php') ?>
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
            <form action="index.php" method="POST" target="_blank">
                <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
                    <div class="w3-half">
                        <input class="w3-input w3-border" type="text" placeholder="Name" name="Name">
                    </div>
                    <div class="w3-half">
                        <input class="w3-input w3-border" type="text" placeholder="Email" name="Email">
                    </div>
                </div>
                <input class="w3-input w3-border" type="text" placeholder="Message"  name="Message">
                <button class="w3-button w3-black w3-section w3-right" type="submit" name="send">SEND</button>
            </form>
        </div>
    </div>
</div>
<!-- End Page Content -->
<?php include "footer.php";
?>
</body>

</html>

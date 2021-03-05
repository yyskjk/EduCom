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
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Educom</title>
    <?php include "header.php";
    ?>
</head>

<body>
<section id="header-section">
    <div class="container-fluid">
        <?php include "navbar.php";
        ?>
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
  

    <?php include "footer.php";
    ?>
</body>

</html>

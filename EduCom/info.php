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
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Our teachers</title>
  <link rel="stylesheet" href="styles/info.css">
<?php include "header.php";
?>

</head>

<body>
<section id="header-section">
    <div class="container-fluid" style="font-size: 16px">
        <?php include "navbar.php";
        ?>
    </div>
</section>

  <section style="font-size: 10px">
    <div class="container">
      <h1 class="heading">Meet our Teachers</h1>
      <h1 class="sub-heading">Machine Learning</h1>
      <div class="card-wrapper">
        <div class="card">
          <img src="img/card-bg.jpg" alt="background-img" class="card-bg">
          <img src="img/teacher1.jpg" alt="teacher-img" class="profile-img">
          <h1>Ms. Jenna Williams</h1>
          <p class="job-title">Machine Learning Teacher</p>
          <p class="about">Lorem ipsum dolor sit amet, consectetur
            adipiscing elit. Nulla ultricies ultricies diam ut viverra.
            Duis sem erat, cursus eu commodo vitae, tristique eu lacus.
            Suspendisse interdum quam at enim ultrices scelerisque.
            Mauris placerat vulputate sapien vel rhoncus.
            Pellentesque eget turpis purus.
          </p>

          <ul class="social-media">
            <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram-square"></i></a></li>
            <li><a href="#"><i class="fab fa-google-plus-square"></i></a></li>
          </ul>
        </div>

        <div class="card">
          <img src="img/card-bg.jpg" alt="background-img" class="card-bg">
          <img src="img/teacher2.jpg" alt="teacher-img" class="profile-img">
          <h1>Mr. Ari Gold</h1>
          <p class="job-title">Machine Learning Teacher</p>
          <p class="about">Lorem ipsum dolor sit amet, consectetur
            adipiscing elit. Nulla ultricies ultricies diam ut viverra.
            Duis sem erat, cursus eu commodo vitae, tristique eu lacus.
            Suspendisse interdum quam at enim ultrices scelerisque.
            Mauris placerat vulputate sapien vel rhoncus.
            Pellentesque eget turpis purus.
          </p>

          <ul class="social-media">
            <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram-square"></i></a></li>
            <li><a href="#"><i class="fab fa-google-plus-square"></i></a></li>
          </ul>
        </div>

        <div class="card">
          <img src="img/card-bg.jpg" alt="background-img" class="card-bg">
          <img src="img/teacher3.jpg" alt="teacher-img" class="profile-img">
          <h1>Mr. Josh Rodrigues</h1>
          <p class="job-title">Machine Learning Teacher</p>
          <p class="about">Lorem ipsum dolor sit amet, consectetur
            adipiscing elit. Nulla ultricies ultricies diam ut viverra.
            Duis sem erat, cursus eu commodo vitae, tristique eu lacus.
            Suspendisse interdum quam at enim ultrices scelerisque.
            Mauris placerat vulputate sapien vel rhoncus.
            Pellentesque eget turpis purus.
          </p>

          <ul class="social-media">
            <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram-square"></i></a></li>
            <li><a href="#"><i class="fab fa-google-plus-square"></i></a></li>
          </ul>
        </div>

      </div>

    </div>
  </section>

  <section class="sub-section">
    <div class="container">
      <h1 class="sub-heading">Artificial Intelligence</h1>
      <div class="card-wrapper">
        <div class="card">
          <img src="img/card-bg.jpg" alt="background-img" class="card-bg">
          <img src="img/teacher4.jpg" alt="teacher-img" class="profile-img">
          <h1>Ms. Ashley Headley</h1>
          <p class="job-title">AI Teacher</p>
          <p class="about">Lorem ipsum dolor sit amet, consectetur
            adipiscing elit. Nulla ultricies ultricies diam ut viverra.
            Duis sem erat, cursus eu commodo vitae, tristique eu lacus.
            Suspendisse interdum quam at enim ultrices scelerisque.
            Mauris placerat vulputate sapien vel rhoncus.
            Pellentesque eget turpis purus.
          </p>

          <ul class="social-media">
            <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram-square"></i></a></li>
            <li><a href="#"><i class="fab fa-google-plus-square"></i></a></li>
          </ul>
        </div>

        <div class="card">
          <img src="img/card-bg.jpg" alt="background-img" class="card-bg">
          <img src="img/teacher5.jpg" alt="teacher-img" class="profile-img">
          <h1>Ms. Kate Winslet</h1>
          <p class="job-title">AI Teacher</p>
          <p class="about">Lorem ipsum dolor sit amet, consectetur
            adipiscing elit. Nulla ultricies ultricies diam ut viverra.
            Duis sem erat, cursus eu commodo vitae, tristique eu lacus.
            Suspendisse interdum quam at enim ultrices scelerisque.
            Mauris placerat vulputate sapien vel rhoncus.
            Pellentesque eget turpis purus.
          </p>

          <ul class="social-media">
            <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram-square"></i></a></li>
            <li><a href="#"><i class="fab fa-google-plus-square"></i></a></li>
          </ul>
        </div>

        <div class="card">
          <img src="img/card-bg.jpg" alt="background-img" class="card-bg">
          <img src="img/teacher6.jpg" alt="teacher-img" class="profile-img">
          <h1>Ms. Scarlett Jones</h1>
          <p class="job-title">AI Teacher</p>
          <p class="about">Lorem ipsum dolor sit amet, consectetur
            adipiscing elit. Nulla ultricies ultricies diam ut viverra.
            Duis sem erat, cursus eu commodo vitae, tristique eu lacus.
            Suspendisse interdum quam at enim ultrices scelerisque.
            Mauris placerat vulputate sapien vel rhoncus.
            Pellentesque eget turpis purus.
          </p>

          <ul class="social-media">
            <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram-square"></i></a></li>
            <li><a href="#"><i class="fab fa-google-plus-square"></i></a></li>
          </ul>
        </div>

      </div>

    </div>
  </section>

  <section class="sub-section">
    <div class="container">
      <h1 class="sub-heading">MATLAB</h1>
      <div class="card-wrapper">
        <div class="card">
          <img src="img/card-bg.jpg" alt="background-img" class="card-bg">
          <img src="img/teacher7.jpg" alt="teacher-img" class="profile-img">
          <h1>Ms. Monica Rose</h1>
          <p class="job-title">Matlab Teacher</p>
          <p class="about">Lorem ipsum dolor sit amet, consectetur
            adipiscing elit. Nulla ultricies ultricies diam ut viverra.
            Duis sem erat, cursus eu commodo vitae, tristique eu lacus.
            Suspendisse interdum quam at enim ultrices scelerisque.
            Mauris placerat vulputate sapien vel rhoncus.
            Pellentesque eget turpis purus.
          </p>

          <ul class="social-media">
            <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram-square"></i></a></li>
            <li><a href="#"><i class="fab fa-google-plus-square"></i></a></li>
          </ul>
        </div>

        <div class="card">
          <img src="img/card-bg.jpg" alt="background-img" class="card-bg">
          <img src="img/teacher20.jpg" alt="teacher-img" class="profile-img">
          <h1>Mr. John Stamos</h1>
          <p class="job-title">Matlab Teacher</p>
          <p class="about">Lorem ipsum dolor sit amet, consectetur
            adipiscing elit. Nulla ultricies ultricies diam ut viverra.
            Duis sem erat, cursus eu commodo vitae, tristique eu lacus.
            Suspendisse interdum quam at enim ultrices scelerisque.
            Mauris placerat vulputate sapien vel rhoncus.
            Pellentesque eget turpis purus.
          </p>

          <ul class="social-media">
            <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram-square"></i></a></li>
            <li><a href="#"><i class="fab fa-google-plus-square"></i></a></li>
          </ul>
        </div>

        <div class="card">
          <img src="img/card-bg.jpg" alt="background-img" class="card-bg">
          <img src="img/teacher9.jpg" alt="teacher-img" class="profile-img">
          <h1>Mr. Mason Mount</h1>
          <p class="job-title">Matlab Teacher</p>
          <p class="about">Lorem ipsum dolor sit amet, consectetur
            adipiscing elit. Nulla ultricies ultricies diam ut viverra.
            Duis sem erat, cursus eu commodo vitae, tristique eu lacus.
            Suspendisse interdum quam at enim ultrices scelerisque.
            Mauris placerat vulputate sapien vel rhoncus.
            Pellentesque eget turpis purus.
          </p>

          <ul class="social-media">
            <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram-square"></i></a></li>
            <li><a href="#"><i class="fab fa-google-plus-square"></i></a></li>
          </ul>
        </div>

      </div>

    </div>
  </section>

  <section class="sub-section">
    <div class="container">
      <h1 class="sub-heading">Advanced Java</h1>
      <div class="card-wrapper">
        <div class="card">
          <img src="img/card-bg.jpg" alt="background-img" class="card-bg">
          <img src="img/teacher10.jpg" alt="teacher-img" class="profile-img">
          <h1>Mr. William Jonas</h1>
          <p class="job-title">Advanced Java Teacher</p>
          <p class="about">Lorem ipsum dolor sit amet, consectetur
            adipiscing elit. Nulla ultricies ultricies diam ut viverra.
            Duis sem erat, cursus eu commodo vitae, tristique eu lacus.
            Suspendisse interdum quam at enim ultrices scelerisque.
            Mauris placerat vulputate sapien vel rhoncus.
            Pellentesque eget turpis purus.
          </p>

          <ul class="social-media">
            <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram-square"></i></a></li>
            <li><a href="#"><i class="fab fa-google-plus-square"></i></a></li>
          </ul>
        </div>

        <div class="card">
          <img src="img/card-bg.jpg" alt="background-img" class="card-bg">
          <img src="img/teacher11.jpg" alt="teacher-img" class="profile-img">
          <h1>Mrs. Dolores</h1>
          <p class="job-title">Advanced Java Teacher</p>
          <p class="about">Lorem ipsum dolor sit amet, consectetur
            adipiscing elit. Nulla ultricies ultricies diam ut viverra.
            Duis sem erat, cursus eu commodo vitae, tristique eu lacus.
            Suspendisse interdum quam at enim ultrices scelerisque.
            Mauris placerat vulputate sapien vel rhoncus.
            Pellentesque eget turpis purus.
          </p>

          <ul class="social-media">
            <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram-square"></i></a></li>
            <li><a href="#"><i class="fab fa-google-plus-square"></i></a></li>
          </ul>
        </div>

        <div class="card">
          <img src="img/card-bg.jpg" alt="background-img" class="card-bg">
          <img src="img/teacher12.jpg" alt="teacher-img" class="profile-img">
          <h1>Ms. Kasey Dutch</h1>
          <p class="job-title">Advanced Java Teacher</p>
          <p class="about">Lorem ipsum dolor sit amet, consectetur
            adipiscing elit. Nulla ultricies ultricies diam ut viverra.
            Duis sem erat, cursus eu commodo vitae, tristique eu lacus.
            Suspendisse interdum quam at enim ultrices scelerisque.
            Mauris placerat vulputate sapien vel rhoncus.
            Pellentesque eget turpis purus.
          </p>

          <ul class="social-media">
            <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram-square"></i></a></li>
            <li><a href="#"><i class="fab fa-google-plus-square"></i></a></li>
          </ul>
        </div>

      </div>

    </div>
  </section>

  <section class="sub-section">
    <div class="container">
      <h1 class="sub-heading">Blockchain</h1>
      <div class="card-wrapper">
        <div class="card">
          <img src="img/card-bg.jpg" alt="background-img" class="card-bg">
          <img src="img/teacher13.jpg" alt="teacher-img" class="profile-img">
          <h1>Ms. Samantha Miller</h1>
          <p class="job-title">Blockchain Teacher</p>
          <p class="about">Lorem ipsum dolor sit amet, consectetur
            adipiscing elit. Nulla ultricies ultricies diam ut viverra.
            Duis sem erat, cursus eu commodo vitae, tristique eu lacus.
            Suspendisse interdum quam at enim ultrices scelerisque.
            Mauris placerat vulputate sapien vel rhoncus.
            Pellentesque eget turpis purus.
          </p>

          <ul class="social-media">
            <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram-square"></i></a></li>
            <li><a href="#"><i class="fab fa-google-plus-square"></i></a></li>
          </ul>
        </div>

        <div class="card">
          <img src="img/card-bg.jpg" alt="background-img" class="card-bg">
          <img src="img/teacher14.jpg" alt="teacher-img" class="profile-img">
          <h1>Mr. Roy Hudson</h1>
          <p class="job-title">Blockchain Teacher</p>
          <p class="about">Lorem ipsum dolor sit amet, consectetur
            adipiscing elit. Nulla ultricies ultricies diam ut viverra.
            Duis sem erat, cursus eu commodo vitae, tristique eu lacus.
            Suspendisse interdum quam at enim ultrices scelerisque.
            Mauris placerat vulputate sapien vel rhoncus.
            Pellentesque eget turpis purus.
          </p>

          <ul class="social-media">
            <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram-square"></i></a></li>
            <li><a href="#"><i class="fab fa-google-plus-square"></i></a></li>
          </ul>
        </div>

        <div class="card">
          <img src="img/card-bg.jpg" alt="background-img" class="card-bg">
          <img src="img/teacher15.jpg" alt="teacher-img" class="profile-img">
          <h1>Mr. Josh Peckins</h1>
          <p class="job-title">Blockchain Teacher</p>
          <p class="about">Lorem ipsum dolor sit amet, consectetur
            adipiscing elit. Nulla ultricies ultricies diam ut viverra.
            Duis sem erat, cursus eu commodo vitae, tristique eu lacus.
            Suspendisse interdum quam at enim ultrices scelerisque.
            Mauris placerat vulputate sapien vel rhoncus.
            Pellentesque eget turpis purus.
          </p>

          <ul class="social-media">
            <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram-square"></i></a></li>
            <li><a href="#"><i class="fab fa-google-plus-square"></i></a></li>
          </ul>
        </div>

      </div>

    </div>
  </section>

  <section class="sub-section">
    <div class="container">
      <h1 class="sub-heading">Cyber Security</h1>
      <div class="card-wrapper">
        <div class="card">
          <img src="img/card-bg.jpg" alt="background-img" class="card-bg">
          <img src="img/teacher16.jpg" alt="teacher-img" class="profile-img">
          <h1>Mr. Noah McKinsey</h1>
          <p class="job-title">Cyber Security Teacher</p>
          <p class="about">Lorem ipsum dolor sit amet, consectetur
            adipiscing elit. Nulla ultricies ultricies diam ut viverra.
            Duis sem erat, cursus eu commodo vitae, tristique eu lacus.
            Suspendisse interdum quam at enim ultrices scelerisque.
            Mauris placerat vulputate sapien vel rhoncus.
            Pellentesque eget turpis purus.
          </p>

          <ul class="social-media">
            <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram-square"></i></a></li>
            <li><a href="#"><i class="fab fa-google-plus-square"></i></a></li>
          </ul>
        </div>

        <div class="card">
          <img src="img/card-bg.jpg" alt="background-img" class="card-bg">
          <img src="img/teacher17.jpg" alt="teacher-img" class="profile-img">
          <h1>Mr. Eric Scott</h1>
          <p class="job-title">Cyber Security Teacher</p>
          <p class="about">Lorem ipsum dolor sit amet, consectetur
            adipiscing elit. Nulla ultricies ultricies diam ut viverra.
            Duis sem erat, cursus eu commodo vitae, tristique eu lacus.
            Suspendisse interdum quam at enim ultrices scelerisque.
            Mauris placerat vulputate sapien vel rhoncus.
            Pellentesque eget turpis purus.
          </p>

          <ul class="social-media">
            <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram-square"></i></a></li>
            <li><a href="#"><i class="fab fa-google-plus-square"></i></a></li>
          </ul>
        </div>

        <div class="card">
          <img src="img/card-bg.jpg" alt="background-img" class="card-bg">
          <img src="img/teacher18.jpg" alt="teacher-img" class="profile-img">
          <h1>Mr. Vincent Chase</h1>
          <p class="job-title">Cyber Security Teacher</p>
          <p class="about">Lorem ipsum dolor sit amet, consectetur
            adipiscing elit. Nulla ultricies ultricies diam ut viverra.
            Duis sem erat, cursus eu commodo vitae, tristique eu lacus.
            Suspendisse interdum quam at enim ultrices scelerisque.
            Mauris placerat vulputate sapien vel rhoncus.
            Pellentesque eget turpis purus.
          </p>

          <ul class="social-media">
            <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram-square"></i></a></li>
            <li><a href="#"><i class="fab fa-google-plus-square"></i></a></li>
          </ul>
        </div>

      </div>

    </div>
  </section>
<?php include "footer.php";
?>

</body>

</html>

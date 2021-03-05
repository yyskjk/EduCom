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
    <title>CYBER SECURITY</title>
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
        <video id="v1" width="500" height="300" controls download>
            <source src="files\CS PART 1.mp4" type="video/mp4">
        </video>
        <label style="text-align: center;"><b>INTRODUCTION TO CYBER SECURITY</b><br><br>
            In this video we will see:
            1. Why we need Cyber Security?<br>
            2. What is Cyber Security?<br>
            3. The CIA Triad<br>
            4. Vulnerability, Threat and Risk<br>
            5. Cognitive Cyber Security<BR></label>
    <br>
        
        </div>
        <div id="d2" style="display:flex;">
            <a>
            <video id="v2" width="500" height="300" controls>
                <source src="files\CS PART 2.mp4" type="video/mp4">
            </video></a><br>
            <label style="text-align: center;"><B>CYBERSECURITY CERTIFICATIONS<br></B><br><br>
                In this video we will see: 
                Why Learn Cyber Security?<BR>
                Objectives of Cyber Security Course<br>
                Who Should go for this Training?<br></label>

            
        
        </div>
        <div id="d3" style="display:flex;">
            <a href="files\CS PART 3.mp4" download="AI1">
                <video id="v3" width="500" height="300" controls>
                    <source src="D:\ipminiproj\CS PART 3.mp4" type="video/mp4">
                </video>
            </a><br>
            <label style="text-align: center;"><B>CYBERSECURITY FRAMEWORKS</B><br>
                In this video we will discuss :
                Cybersecurity Frameworks<br>
                NIST security frameworks<br>
            </label>
        
        <br>
        
        </div>
        <div id="d4" style="display:flex;">
            <video id="v4" width="500" height="300" controls>
                <source src="files\CS PART 4.mp4" type="video/mp4">
            </video><br>
            <label style="text-align:center;"><b>DEMO OF MAN IN THE MIDDLE ATTACK</b><br>
                In this video we will discuss:
                1. Packet structure<br>
                2. Network architecutre<br>
                3. Addressing<br>
                4. IP/MAC<br>
                5. Firewalls<br>
                6. Symetric Cryptography<br>
                7. Public key Cryptography<br>
                </label>
        </div>
        <div id="d5" style="display:flex;">
            <video id="v5" width="500" height="300" controls>
                <source src="files\CS PART 5.mp4" type="video/mp4">
            </video><br>
            <label style="text-align:center;"><b>CYBERSECURITY TOOLS</b><br>
                In this video we will discuss:
                - BluVector<br>
                - Bricata<br>
                - Cloud Defender<br>
                - Contrast Security<br>
                - Digital Guardian<br>
                - Intellicta<br>
                - Mantix4<br>
                - SecBI<br>
            </label>
        </div>
        <div id="d6" style="display:flex;">
            <video id="v6" width="500" height="300" controls>
                <source src="files\CS PART 6.mp4" type="video/mp4">
            </video><br>
            <label style="text-align: center;"><b>INTRODUCTION TO CRYPTOGRAPHY</b><br>
                In this video we will discuss:
                1. What is Cryptography?<br>
                2. Classification of Cryptography<br>
                3. How various Cryptographic Algorithm Works?<br>
                4. Demo: RSA Cryptography <br>
            </label>
        </div>
<?php include "footer.php";
?>
</body>
</html>
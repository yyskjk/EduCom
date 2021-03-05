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
    <title>BLOCKCHAIN TECHNOLOGY</title>
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
            <source src="files\BC PART 1.mp4" type="video/mp4">
        </video>
        <label style="text-align: center;"><b>WHAT IS BLOCKCHAIN? TECHNOLOGY BEHIND BITCOIN</b><br><br>
            In this video we will see:
            - What is BlockChain
            - Why blockchain is important
            - Who is Satoshi Nakamoto
            - What is bitcoin
            - Bitcoin with blockchain
            - Security and trust over internet
            - Asymmetric cryptography
            - What is ledger - block chain
            - Database
            - Change database history
            - Node in a netwrok
            - Why Blockchain is needed
            - How bitcoin works</label>
    <br>
        
        </div>
        <div id="d2" style="display:flex;">
            <a>
            <video id="v2" width="500" height="300" controls>
                <source src="files\BC PART 2.mp4" type="video/mp4">
            </video></a><br>
            <label style="text-align: center;"><B>BLOCKCHAIN PREREQUISITES<br></B><br><br>
                In this video we will see: 
                Why Blockchain is so famous?<br>
                What are the Pre Requisites to learn Blockchain?<br></label>

            
        
        </div>
        <div id="d3" style="display:flex;">
            <a href="files\BC PART 3.mp4" download="AI1">
                <video id="v3" width="500" height="300" controls>
                    <source src="D:\ipminiproj\BC PART 3.mp4" type="video/mp4">
                </video>
            </a><br>
            <label style="text-align: center;"><B>CRYPTOGRAPHY</B><br>
                In this video we will discuss :
                Peer to peer network<br>
                Confidentiality<br>
                Integrity<br>
                Non-repudiation<br>
                Authentication<br>
                Cryptography<br>
                Encryption<br>
                Decryption<br>
            </label>
        
        <br>
        
        </div>
        <div id="d4" style="display:flex;">
            <video id="v4" width="500" height="300" controls>
                <source src="files\BC PART 4.mp4" type="video/mp4">
            </video><br>
            <label style="text-align:center;"><b>TYPES OF CRYPTOGRAPHY</b><br>
                In this video we will discuss:
                Symmetric Key Cryptography<br>
                Asymmetric Key Cryptography<br>
                Encryption<br>
                Decryption<br>
                </label>
        </div>
        <div id="d5" style="display:flex;">
            <video id="v5" width="500" height="300" controls>
                <source src="files\BC PART 5.mp4" type="video/mp4">
            </video><br>
            <label style="text-align:center;"><b>DIGITAL SIGNATURE</b><br>
                In this video we will discuss:
                Digital signature<br>
                Encryption and decryption<br>
                Achieving Confidentiality and authentication using a digital signature<br>
            </label>
        </div>
        <div id="d6" style="display:flex;">
            <video id="v6" width="500" height="300" controls>
                <source src="files\BC PART 6.mp4" type="video/mp4">
            </video><br>
            <label style="text-align: center;"><b>NODES IN BLOCKCHAIN</b><br>
                In this video we will discuss:
                Nodes in blockchain<br>
                Full node<br>
                Partial node<br>
                Miners<br>
            </label>
        </div>
        <div id="d7" style="display:flex;">
            <video id="v7" width="500" height="300" controls>
                <source src="files\BC PART 7.mp4" type="video/mp4">
            </video><br>
            <label style="text-align: center;"><b>HASHING IN BLOCKCHAIN</b><br>
            In this video we will discuss here:
            Hashing<br>
            Hash function<br>
            Hash value<br>
            </label>
        </div>
<?php include "footer.php";
?>
</body>
</html>
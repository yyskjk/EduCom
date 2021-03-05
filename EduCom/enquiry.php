<?php
 $servername = "localhost:3306";
 $username = "root";
 $password = "";
 $dbname = "registration";
 
 $conn = new mysqli($servername, $username, $password, $dbname);

if($_SERVER["REQUEST_METHOD"]=="POST")
{


 $name = $_REQUEST['Name'];
 $email = $_REQUEST['Email'];
 $message = $_REQUEST['Message'];
 $query = "INSERT INTO enquiry VALUES('$name','$email','$message')";
 $conn->query($query);

}
 $conn->close();
?>
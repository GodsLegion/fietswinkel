<?php
session_start(); 

// connect met de database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dderksen_fietswinkel";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['login'])){
    $sql = "SELECT * FROM klanten WHERE email='" . $_POST['email'] . "' AND wachtwoord='" . $_POST['password'] . "'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        $_SESSION['gebruiker'] = $row;
        // Redirect to index page
        header("location: ../account.php");
        exit;
      }
    } else {
      echo "0 results";
    }
}

$conn->close();
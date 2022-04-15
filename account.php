<?php include 'includes/header.php'; ?>
<body>
    <div class="container">

<?php
session_start();

// checkt of je ingelogd bent zo nee ga je naar de inlog pagina
if(!isset($_SESSION['gebruiker'])){
    header("location: inlog.php");
    exit;
}


//als je bent ingeloged zie je dit
echo "Welkom " . $_SESSION['klanten']['voornaam'] . " " . $_SESSION['klanten']['achternaam'] . "!";
?>


<a href="logout.php"></br></br>Logout</a>


    </div>


<?php include 'includes/footer.php'; ?>
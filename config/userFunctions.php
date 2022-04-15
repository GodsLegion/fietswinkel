<?php require_once "databaseFunctions.php"; ?>
<?php

function registerUser($voornaam, $achternaam, $email, $wachtwoord, $land, $stad, $postcode, $straatnaam, $huisnummer){
    $result = db_insertData("INSERT INTO klanten (`voornaam`, `achternaam`, `email`, `wachtwoord`, `land`, `stad`, `postcode`, `straatnaam`, `huisnummer`)
    VALUES ('$voornaam', '$achternaam', '$email', '$wachtwoord', '$land', '$stad', '$postcode', '$straatnaam','$huisnummer')");
    return $result;
}

?>

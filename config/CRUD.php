<?php

    session_start();

    // maakt verbinding met database en stopt het in de variable "db" locatie, inlog naam, wachtwoord, database naam
    $db = new mysqli('localhost','root','','dderksen_fietswinkel');
    
    // maakt lege variablen aan
    $prijs = "";             //aanpassen nieuwe database 
    $titel = "";       //aanpassen nieuwe database
    $beschrijving = ""; 
    $type = ""; 
    $afbeelding = ""; 
    $merk = ""; 
    $model = "";
    $kleur = ""; 
    $versnellingen = ""; 
    $elektrisch = ""; 

    $id=0;
    $update=false;


        // maakt nieuwe persoon aan CREATE
        if(isset($_POST['save'])) {

            $prijs = $_POST['prijs'];             //aanpassen nieuwe database 
                $titel = $_POST['titel'];       //aanpassen nieuwe database
                $beschrijving = $_POST['beschrijving']; 
                $type = $_POST['type']; 
                $afbeelding = $_POST['afbeelding']; 
                $merk = $_POST['merk']; 
                $model = $_POST['model']; 
                $kleur = $_POST['kleur']; 
                $versnellingen = $_POST['versnellingen']; 
                $elektrisch = $_POST['elektrisch']; 

            $db->query("INSERT INTO fietsen (prijs, titel, beschrijving, type, afbeelding, merk, model, kleur, versnellingen, elektrisch) VALUES ('$prijs', '$titel', '$beschrijving', '$type', '$afbeelding', '$merk', '$model', '$kleur', '$versnellingen', '$elektrisch')");

            $_SESSION['message']="Address saved";
            header('location: ../accountBeheerder.php');
        }
        
 
        // haalt uit de database en je kunt het aanpassen UPDATE
        if (isset($_POST['update'])){

            $id = $_POST['id'];             //aanpassen nieuwe database
            $prijs = $_POST['prijs'];             //aanpassen nieuwe database 
            $titel = $_POST['titel'];       //aanpassen nieuwe database
            $beschrijving = $_POST['beschrijving']; 
            $type = $_POST['type']; 
            $afbeelding = $_POST['afbeelding']; 
            $merk = $_POST['merk']; 
            $model = $_POST['model']; 
            $kleur = $_POST['kleur']; 
            $versnellingen = $_POST['versnellingen']; 
            $elektrisch = $_POST['elektrisch']; 

            $db->query("UPDATE fietsen SET  prijs='$prijs', titel='$titel', beschrijving='$beschrijving', type='$type', afbeelding='$afbeelding', merk='$merk', model='$model', kleur='$kleur', versnellingen='$versnellingen', elektrisch='$elektrisch' WHERE ID=$id");


            $_SESSION['message'] = "updated!";
            header('location: ../accountBeheerder.php');
        }

        // verwijdert uit de database DELETE
        if (isset($_GET['del'])){

            $id = $_GET['del'];             //aanpassen nieuwe database

            $db->query("DELETE FROM fietsen WHERE ID=$id");

            $_SESSION['message'] = "deleted!";
            header('location: ../accountBeheerder.php');
        }
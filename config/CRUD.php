<?php

    session_start();

    // maakt verbinding met database en stopt het in de variable "db" locatie, inlog naam, wachtwoord, database naam
    $db = new mysqli('localhost','root','','crud');
    
    // maakt lege variablen aan
    $n = $record->fetch_array();
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

            $prijs = $n['prijs'];             //aanpassen nieuwe database 
                $titel = $n['titel'];       //aanpassen nieuwe database
                $beschrijving = $n['beschrijving']; 
                $type = $n['type']; 
                $afbeelding = $n['afbeelding']; 
                $merk = $n['merk']; 
                $model = $n['model']; 
                $kleur = $n['kleur']; 
                $versnellingen = $n['versnellingen']; 
                $elektrisch = $n['elektrisch']; 

            $db->query("INSERT INTO fietsen (prijs, titel, beschrijving, type, afbeelding, merk, model,kleur, versnellingen) VALUES ('$prijs', '$titel', '$beschrijving', '$type', '$afbeelding', '$merk', '$model', '$kleur', '$versnellingen', '$elektriesch')");

            $_SESSION['message']="Address saved";
            header('location: accountBeheerder.php');
        }
        
 
        // haalt uit de database en je kunt het aanpassen UPDATE
        if (isset($_POST['update'])){

            $id = $_POST['ID'];             //aanpassen nieuwe database
            $prijs = $n['prijs'];             //aanpassen nieuwe database 
            $titel = $n['titel'];       //aanpassen nieuwe database
            $beschrijving = $n['beschrijving']; 
            $type = $n['type']; 
            $afbeelding = $n['afbeelding']; 
            $merk = $n['merk']; 
            $model = $n['model']; 
            $kleur = $n['kleur']; 
            $versnellingen = $n['versnellingen']; 
            $elektrisch = $n['elektrisch']; 

            $db->query("UPDATE fietsen SET  prijs='$prijs', titel'$titel', beschrijving='$beschrijving', type='$type', afbeelding='$afbeelding', merk='$merk', model='$model', kleur='$kleur', versnellingen='$versnellingen', elektriesch='$elektriesch' WHERE ID=$id");


            $_SESSION['message'] = "updated!";
            header('location: accountBeheerder.php');
        }

        // verwijdert uit de database DELETE
        if (isset($_GET['del'])){

            $id = $_GET['del'];             //aanpassen nieuwe database

            $db->query("DELETE FROM fietsen WHERE ID=$id");

            $_SESSION['message'] = "deleted!";
            header('location: accountBeheerder.php');
        }
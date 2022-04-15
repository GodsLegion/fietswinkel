<?php

    session_start();

    function db_connect(){
        $db = new mysqli('localhost','root','','dderksen_fietswinkel'); 
        return $db;
    }

    // maakt verbinding met database en stopt het in de variable "db" locatie, inlog naam, wachtwoord, database naam
    
    //$db = new mysqli('localhost','root','','pc-builder'); 
    
    // maak lege variablen aan  worden later gevuld
    $prijs="";
    $titel="";
    $beschrijving="";
    $type="";
    $afbeelding="";
    $merk="";
    $model="";
    $kleur="";
    $versnellingen="";
    $elektrisch="";


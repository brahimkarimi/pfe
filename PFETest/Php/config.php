<?php
    try 
    {
        $bdd = new PDO("mysql:host=localhost;dbname=pfe;charset=utf8", "root", "");
        //echo "Connected";
    }
    catch(PDOException $e)
    {
        die('Erreur HOOOOOO: '.$e->getMessage());
    }
    ?>
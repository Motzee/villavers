<?php session_start(); ?>

<!DOCTYPE html>

<html lang="fr">
<?php
    require_once("templates/head.html") ;
    
    require("gardens/Garden.php") ;
    require("gardens/DbGardens.php") ;
?>

<body>
    <?php

    $bdd = new DbGardens('garden.json') ;

    $garden = $bdd->creerGarden() ;

    $garden->afficheGarden() ;

    include_once("templates/v_game.php") ;

    ?>    

    <script src="controleur.js"></script>
    
</body> 
</html>
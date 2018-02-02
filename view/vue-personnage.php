<!doctype html>

<html>

<?php
    include ("../model/Personnage.class.php");

    // Instancier avec une armure et un nombre de potions = 3.
    $perso = new Personnage("David", "400", "12", "5", "3");
    $perso2 = new Personnage("Leonidas", "380", "15", "4", "3");



    $perso->seBattre($perso, $perso2);



    // Mettre à jour la fonction se battre pour faire prendre une potion à chaque joueur
    // tous les 3 coups.
    // Si un joueur n'a plus de potion, il ne peut plus en utiliser.
    // Chaque joueur commence avec 3 potions au début de chaque partie. L'armure c'est toi qui choisis.
    // N'oublie pas les getters et les setters.



?>

</html>

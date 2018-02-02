<!doctype html>

<html>

<?php
    include ("../model/Personnage.class.php");
    $perso = new Personnage("David", "400", "12");
    //echo $perso->getPseudo();
    //$perso->setPseudo("Guy");
    //echo $perso->getPseudo();
   // $perso->setVie("400pv<br>");
    //echo $perso->getVie();
    $perso2 = new Personnage("Leonidas", "380", "15");

    $perso->seBattre($perso, $perso2);
    //echo $perso2->getPseudo();
    //echo $perso2->getVie();
?>

</html>
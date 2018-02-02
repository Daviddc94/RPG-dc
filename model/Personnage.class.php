<!doctype html>

<html>

<?php
    class Personnage {

        private $pseudo;
        private $vie;
        private $attaque;

        // Nouvel attribut, il faut soustraire l'armure avant de prendre des dégats
        private $armure;

        // Nouvel attribut, compte le nombre de potion de vie que possède le joueur
        private $nombreDePotions;


    // GETTERS ET SETTERS POUR $armure
    public function setArmure($armure){
        $this->armure = $armure;
    }

    public function getArmure(){
        return $this->armure;
    }
    //...
    // GETTERS ET SETTERS POUR $nombreDePotions
    public function setNombredepotions($nombreDePotions){
        $this->nombreDePotions = $nombreDePotions;
    }

    public function getNombredepotions(){
        return $this->nombreDePotions;
    }
    //...


    // Modifier le constructeur pour rajouter armure et nombre de potions.
    public function __construct($pseudo, $vie, $attaque, $armure, $nombreDePotions)
    {
        $this->pseudo = $pseudo;
        $this->vie = $vie;
        $this->attaque = $attaque;
        $this->armure = $armure;
        $this->nombreDePotions = $nombreDePotions;
    }

    public function setPseudo($pseudo){
        $this->pseudo = $pseudo;
    }

    public function setVie($vie){
        $this->vie = $vie;
    }

    public function setAttaque($attaque){
        $this->attaque = $attaque;
    }

    public function getPseudo(){
        return $this->pseudo;
    }

    public function getVie(){
        return $this->vie;
    }

    public function getAttaque(){
        return $this->attaque;
    }



    // Mettre à jour la fonction en prenant compte de l'armure, qui réduit chaque attaque de sa valeur
    public function seBattre($perso1, $perso2){
       /*echo $life1 = $perso1->getVie();
       echo "<br>";
       echo $life2 = $perso2->getVie();
       echo "<br>";
       echo "<br>";*/
       $i = 1;
       $health = 3;
       $nb = 3;
        while (($perso1->getVie() > 0) && ($perso2->getVie() >= 0))
        {
            echo $perso1->getVie();
            echo "<br>";
            echo $perso2->getVie();
            echo "<br><br>";
            
            if($i % 3 == 0 && $perso1->getNombredepotions() > 0 && $perso2->getNombredepotions() > 0)
            {
                $perso1->healthPotion();
                $perso2->healthPotion();
                
                $nb = $nb - 1;
            }
            else
            {
                $perso1->setVie($perso1->getVie() - ($perso2->getAttaque() - $perso1->getArmure()));
                // echo $perso1->getVie();
                //echo "<br>";
                $perso2->setVie($perso2->getVie() - ($perso1->getAttaque() - $perso2->getArmure()));
                //echo $perso2->getVie();
            }
            echo "-------------------<br>";
            echo "phase  $i <br>-------------------<br><br>";
           
            $i++;
        }
        if ($perso1->getVie() > 0 /*<&& $perso2->getVie() <= 0*/)
        {
            echo $perso1->getVie();
            echo "<br>";
            $perso2->setVie(0);
            echo $perso2->getVie();
            //echo '0';
            echo "<br><br>";
            echo $perso1->getPseudo();
            echo ' à gagné';
        }
        else if ($perso2->getVie() > 0)
        {
            $perso1->setVie(0);
            echo $perso1->getvie();
            //echo '0';
            echo "<br>";
            echo $perso2->getVie();
            echo "<br><br>";
            echo $perso2->getPseudo();
            echo ' à gagné';
        }
        //$perso1 ->setVie("10");

        //echo $perso1->getVie();

        //        while ($vie1 > '0' || $vie2 > '0')
            //{
                //$vie1 = $perso1->setVie(400) - $perso2->setAttaque(15);
              //  $vie2 = $perso2->setVie(380) - $perso1->setAttaque(12);
            //getVie($vie1);
            //getVie($vie2);
                //}

        /*if ($vie1 > $vie2)
            echo 'le joueur 1 à gagné';
        else
            echo 'le joueur 2 à gagné';*/
    }


    // Nouvelle fonction : potion de vie, permet de regagner de la vie
    public function healthPotion()
    {
        // ...
        //$valpot1 = 4;
        //$valpot2 = 2;
        //$perso1->getNombredepotions();
        //$perso2->getNombredepotions();
    $this->setVie($this->getVie() + 4/*$valpot1*/);
    $this->setNombredepotions($this->getNombredepotions() - 1);
    echo 'les joueurs ont bu une potions<br/>';

    }



    /*public function name(){
        echo $pseudo;
    }

    public function heal(){
        echo $vie;
    }*/
}

?>

</html>

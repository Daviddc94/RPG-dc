<!doctype html>

<html>

<?php
    class Personnage {

        private $pseudo;
        private $vie;
        private $attaque;

    
    public function __construct($pseudo, $vie, $attaque)
    {
        $this->pseudo = $pseudo;
        $this->vie = $vie;
        $this->attaque = $attaque;
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

    public function seBattre($perso1, $perso2){
       echo $life1 = $perso1->getVie();
       echo "<br>";
       echo $life2 = $perso2->getVie();
       echo "<br>";
       echo "<br>";
        while (($perso1->getVie() > 0) && ($perso2->getVie() > 0))
        {         
            echo $perso1->getVie();
            echo "<br>";
            echo $perso2->getVie();
            echo "<br><br>";
            $perso1->setVie($perso1->getVie() - $perso2->getAttaque());
            // echo $perso1->getVie();
            //echo "<br>";
            $perso2->setVie($perso2->getVie() - $perso1->getAttaque());
            //echo $perso2->getVie();
            //echo "<br/><br/>";
        }
        if ($perso1->getVie() > 0 /*<&& $perso2->getVie() <= 0*/)
        {
            echo $perso1->getVie();
            echo "<br>";
            echo $perso2->setVie(0);
            echo "<br><br>";
            echo $perso1->getPseudo();
            echo ' à gagné';
        }
        else
        {
            $perso1->setVie(0);
            echo '0';
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

    /*public function name(){
        echo $pseudo;
    }

    public function heal(){
        echo $vie;
    }*/
}

?>

</html>

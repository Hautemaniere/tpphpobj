<?php
class user{
    private $nom;
    private $prenom;

    public function afficheUser(){
        echo 'je suis un User';
    }

}
?>

<?php
class personnage1{
    private $pseudo;
    private $vie;

    public function __construct(){
        $this -> vie =  100;
    }

    public function afficheVie(){
        echo $this -> vie;
    }

}
?>

<?php
class personnage2{
    private $pseudo;
    private $vie;

    public function __construct($psuedoUser){
        $this -> vie =  100;
        $this -> pseudo = $psuedoUser;
    }

    public function afficheVie(){
        echo "Points de vie : " .$this -> vie;
        echo "<br> Pseudo : " .$this -> pseudo;
    }

}
?>

<?php
class personnage3{
    private $pseudo;
    private $vie;

    public function __construct($psuedoUser){
        $this -> vie =  100;
        $this -> pseudo = $psuedoUser;
    }

    public function afficheViePseudo(){
        echo "<br>Je suis  " .$this -> pseudo ." et j'ai : " .$this -> vie. " points de vie";
    }

    public function affichePseudo(){
        return $this -> pseudo;
    }

    public function attaquer($PersoAattaquer){
       $PersoAattaquer-> defense(50);
       echo "<br>Je suis ". $this -> pseudo . " et j'attaque ".$PersoAattaquer->affichePseudo();
    }

    public function defense($ValeurDattaque){
        $this->vie -= $ValeurDattaque;
    }


}
?>

<?php
class personnage4{
    private $pseudo;
    private $vie;
    private $id;




    public function __construct($id)
    {

        try {

            $ipserver = "********";
            $nomBase = "********";
            $loginPrivilege = "**********";
            $passPrivilege = "*******";

            $GLOBALS["PDO"] = new PDO('mysql:host=' . $ipserver . ';dbname=' . $nomBase . '', $loginPrivilege, $passPrivilege);



            $requete = "SELECT * FROM personnage WHERE id = $id";
            $affichePersonnage = $GLOBALS["PDO"]->query($requete);

            if ($affichePersonnage != false) {
                $row_count = $affichePersonnage->rowCount();
                if ($row_count > 0) {
                    $perso = $affichePersonnage->fetch();

                    $this->id = $perso["id"];
                    $this->pseudo = $perso["pseudo"];
                    $this->vie = $perso["vie"];
                }
            }
        } catch (Exception $error) 
        {
            $error->getMessage();
            echo "Erreur est : " . $error;
        }
    }


    public function getInfos(){
        echo "<p>id : ".$this->id;
        echo "</p><p>pseudo : ".$this->pseudo;
        echo "</p><p>vie : ".$this->vie;
    }


}
?>
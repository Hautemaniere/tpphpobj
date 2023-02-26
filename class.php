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
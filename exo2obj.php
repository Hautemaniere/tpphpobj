<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require("class.php"); ?>
    <title>Exo2</title>
</head>

<body>

    <?php

    $perso1 = new personnage1();
    $perso1->afficheVie();

    ?>

    <pre>
    require("classphp");

    class personnage{
        private $pseudo;
        private $vie;

        public function __construct(){
            $this -> vie =  100;
        }

        public function afficheVie(){
            echo $this -> vie;
        }

    }

    $perso1 = new personnage1();
    $perso1->afficheVie();
    </pre>

</body>

</html>
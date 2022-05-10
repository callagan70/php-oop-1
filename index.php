<?php
class Movies {
    public $title;
    public $genere;
    public $year;
    public $country;
    public $forbidden;

    public function __constructor ($_title, $_genere, $_year, $_country, $_forbidden){
        $this -> title = $_title;
        $this -> genere = $_genere;
        $this -> year = $_year;
        $this -> country = $_country;
        $this -> forbidden = $_forbidden;
    }
}

$star = new Movies ("Star Trek", "sci-fi", "1968", "usa", "false");
    echo "<p>". $star -> title . "</p>";

$spider = new Movies ("Spiderman", "fantasy", "2022", "usa", "false")

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOHPssss..</title>
</head>
<body>

<!-- Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
- è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

    <div>
                <?php
                        echo "<h1>" .  $star -> title . "</h1>";
                
                
                
                ?>
    </div>

    <div>


    </div>


    <!-- <?php?> -->

</body>
</html>
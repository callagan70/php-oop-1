<?php
class Movies {
    public $title;
    public $genere;
    public $year;
    public $country;
    public $forbidden;

    public function __construct ($_title, $_genere, $_year, $_country, $_forbidden){
        $this -> title = $_title;
        $this -> genere = $_genere;
        $this -> year = $_year;
        $this -> country = $_country;
        $this -> forbidden = $_forbidden;
    }
}

$star = new Movies ("Star Trek", "sci-fi", "1968", "usa", "false");
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
<p>Senza foreach</p>
    <div>
            <h1> Titolo: <?php  echo $star -> title ?> </h1>
            <h3> Genere: <?php  echo $star -> genere?> </h3>
            <h3> Anno: <?php  echo $star -> year?> </h3>
            <h3> Paese di origine: <?php  echo $star -> country?> </h3>
            <h3> Vietato ai minori: <?php  echo $star -> forbidden?> </h3>
    </div>

<br><br>

    <div>
            <h1> Titolo: <?php  echo $spider -> title ?> </h1>
            <h3> Genere: <?php  echo $spider -> genere?> </h3>
            <h3> Anno: <?php  echo $spider -> year?> </h3>
            <h3> Paese di origine: <?php  echo $spider -> country?> </h3>
            <h3> Vietato ai minori: <?php  echo $spider -> forbidden?> </h3>
    </div>
<br><br>
<p>Con foreach</p>
<?php
        foreach ($Movies as $film){
            echo    "<h1> Titolo: " . $film['title'] . "</h1>";
            echo    "<h3> Genere: " . $film['genere'] . "</h3>";
            echo    "<h3> Anno: " . $film['year'] . "</h3>";
            echo   "<h3> Paese di origine: " . $film['country'] . "</h3>";
            echo   "<h3> Vietato ai minori: ". $film['orbidden'] . "</h3>";
        }
?>

</body>
</html>
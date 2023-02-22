<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1° classe</title>
</head>

<body>
    <?php
    //definizione di classe
    
    class Esempio
    {
        public $stringa = "";

        function __construct($stringaDIngresso)
        {
            $this->stringa = $stringaDIngresso;
        }
        function stampaStringa()
        {
            echo $this->stringa;
        }
        function stampaStringaInGrassetto()
        {
            echo "<b>";
            //echo $this->stringa; 
            $this->stampaStringa();
            echo "</b>";
        }
        function stampaStringaInCorsivo()
        {
            echo "<i>";
            //echo $this->stringa; 
            $this->stampaStringa();
            echo "</i>";
        }
        function stampaStringaConTag($tag)
        {
            echo "<$tag>";
            //echo $this->stringa; 
            $this->stampaStringa();
            echo "</$tag>";
        }


    }
    $e1 = new Esempio("stringa dinamica da stampare");
    $e2 = new Esempio("2° stringa da stampare");

    $e1->stampaStringa();
    echo "<br>";
    $e1->stampaStringaInCorsivo();
    echo "<br>";
    $e1->stringa = "Nuovo valore di stringa";
    $e1->stampaStringa();
    echo "<br>";
    $e2->stampaStringaInGrassetto();
    echo "<hr>";
    $e2->stampaStringaConTag("span");



    ?>

</body>

</html>
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
    //come il file classe_1.php 
    //ma senza la proprietà $stringa
    class Esempio
    {
        public $stringa = "";
        function stampaQualcosa($stringa)
        {
            echo $stringa;
        }
        function stampaQualcosaInGrassetto($stringa)
        {
            echo "<b>";
            $this->stampaQualcosa($stringa);
            echo "</b><br>";
        }


    }




    $e = new Esempio();
    $e->stampaQualcosaInGrassetto("Stringa da stampare");

    echo "<hr>";

    ?>

</body>

</html>
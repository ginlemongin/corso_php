<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> Variabili</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <?php
        /*$var1 = "1";
        $var1 = "stringa";
        $var2 = "pippo";
        echo "$var1 <br> $var2";

        //echo 'Ciao a tutti $var1';
        echo " apice singolo: ' ";
        echo "<br>";
        echo 'virgolette " ';
        */ 
        
        // la variabile $var1 = stringa
        $var1 =  'la variabile $var1 = stringa';
        echo $var1;
        echo '\'';
        echo " simbolo speciale \\";
        //  \il carattere backslash toglie il significato speciale al carattere successivo

        echo "<hr>";
        //PER CASA
        //assegnare ad una var la stringa "andare a casa!"
        //scrivere in una sola echo
        //l'insegnante dice "è ora di (contenuto della var)" 

        $s = "andare "." a "."casa!";
        echo"1) l'insegnante dice \"è ora di $s\"";
        echo "<br>";
        echo "2) l'insegnante dice \"è ora di $s".'"';
        echo "<br>";
        echo '3) l\'insegnante dice "è or di '.$s. '"';
        //echo $s;
        
        ?>
    </body>
</html>
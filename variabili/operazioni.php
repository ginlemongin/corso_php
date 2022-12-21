<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <?php
        //oggi vediamo le operazioni con le variabili
        $a=1;
        $b=2;
        $c=$a+$b;
        echo '$c='.$c;
        echo "<br>";
        echo '$a + $b=$c <br>';
        echo "$a + $b=$c <br>";
        echo $a + $b=$c;
        echo "<br>";
        echo "$a * $b = " . $a * $b; /*la parte statica è fra le virgolette, valgono le priorità matematiche,
        viene eseguita prima la moltiplicazione poi concatena il risultato, se vuoi essere sicuro aggiungi le parentesi*/
        echo "<br>";
        $s = "stringa";
        //echo $s + $a;
        echo "<br>";
        // modulo % resto intero della divisione
        //5%2 vale 1
        //il risultato intero è 2 e il resto è 1
        echo "<br>";
        echo $a >= $b;

        //operatore ternario
        echo "a = $a e b = $b ";
        $risultato = ($a >= $b ? ($a == $b ? "a uguale a b" : "a maggiore di b" ) : "b maggiore di a");
        echo $risultato;
        echo "<hr>";

        // media tra $a e $b
        $a=1;
        $b=2;
        echo "la media tra $a e $b è ". ($a+$b) / 2;
        echo "<br>";

        //invertire il contenuto di $a e $b
        echo "prima a = $a e b = $b <br>";
        $t = $a;
        $a = $b;
        $b = $t;
        echo "dopo a = $a e b = $b <br>";
        echo "<hr>";

        //operatore ++ e --
        $a = 2;
        echo "prima a = $a <br> ";
        //$a++; //$a = $a + 1; //restituisce $a e POI incrementa
        //++$a; //PRIMA incremento il valore di a e restituisce il valore già incrementato
        echo "dopo a = ". $a++;

        echo "<hr>";

        /*OPERATORI LOGICI
        restituiscono vlaori booleani*/
        $x = 100;
        //$compreso = ($x>= $a) && /*AND*/($x <= $b);
        echo (($x>= $a) && ($x <= $b)) ? 
        "x compreso" 
        : "x NON compreso";

        echo "<br>";
        //OR
        $nome1 = "Mario";
        $nome2 = "Giuseppe";
        $nome = "Mario";

        $nome_corretto = ( ($nome==$nome1) OR ($nome==$nome2) )?
                 "nome corretto"
                :"nome non corretto";
        echo $nome_corretto;


        ?>
    </body>
</html>
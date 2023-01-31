<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       //Dati $a e $b, calcolare la media tra i 2 numeri
       //assegno un valore alle due variabili
       $a = rand(10,20); 
       $b = rand(10,20);
       //sommo le due variabili
       $c = $a + $b;
       //stampo i risultati
        echo "$a + $b = $c";

       echo "<hr>";
       echo "<hr>";
       echo "<hr>";

       //Scrivere se la variabile $x è multipla di 3
       //assegno un valore casuale ad $x
       $x = rand(0,100);
       if ( $x % 3 == 0) { // se $x è multiplo di 3
        echo "$x è multiplo di 3"; //stampo che lo è
       }else {  //altrimenti
        echo "$x non è multiplo di 3"; //stampo che non lo è
    }

    echo "<hr>";
    echo "<hr>";
    echo "<hr>";

    //Invertire il contenuto di $x e $y
    $a = 6;
    $b = 7;
    $c = $a;
    $a = $b;
    $b = $c;
    echo "$a "."$b";

    echo "<hr>";
    echo "<hr>";
    echo "<hr>";
    
    //2 fratelli hanno $f1 e $f2 anni: calcolare la differenza di età (non è detto che $f1 sia maggiore di $f2!)
    $f1 = rand(0,10);
    $f2 = rand(0,10);

    if ($f1 > $f2) { //se f1 è maggiore di f2
        $f3 = $f1 - $f2; //f3 sarà la prima meno la seconda
    } else { //altrimenti
        $f3 = $f2 - $f1; //f3 sarà la seconda meno la prima
    }
    echo "$f1-"."$f2-"."$f3"."<br>";
    echo "La differenza fra le due età è $f3";

    echo "<hr>";
    echo "<hr>";
    echo "<hr>";

    //Dato $numero scrivere a quale decina appartiene (es 1 nella 1° decina, 11 nella 2°, 21 nella 3°, ecc.)
    $n1 = rand(0,6);
    switch ($n1) {
        case '1':
            echo "$n1 appartiene alla prima decina";
            break;
        case '2':
            echo "$n1 appartiene alla seconda decina";
            break;
        case '3':
            echo "$n1 appartiene alla terza decina";
            break;
        case '4':
            echo "$n1 appartiene alla quarta decina";
            break;
        case '5':
            echo "$n1 appartiene alla quinta decina";
            break;
        
        default:
            "$n1 non appartiene a nessuna decina";
            break;
    }

    echo "<hr>";
    echo "<hr>";
    echo "<hr>";

    //Il corso è composto da 8 ore a settimana. Quante settimane servono per fare 105 ore?
    $ore_totali = 105;
    $ore_settimanali = 8;
    $settimane_necessarie = $ore_totali / $ore_settimanali;
    //calcolo quante settimane servono e le arrotondo
    echo round($settimane_necessarie);

    echo "<hr>";
    echo "<hr>";
    echo "<hr>";

    //Verificare se è più grande il nome o il cognome!
    $nome = "nome";
    $cognome = "cognome";
    if ($nome > $cognome) {
        echo "nome è maggiore di cognome";
    }else {
        echo "cognome è maggiore di nome";
    }

    echo "<hr>";
    echo "<hr>";
    echo "<hr>";

    //$x è un numero compreso tra $a e $b?
    $x = rand(0,100);
    $a = rand(0,100);
    $b = rand(0,100);
    if ($x > $a && $x < $b) {
        echo "$x è compreso fra $a e $b";
    }

    echo "<hr>";
    echo "<hr>";
    echo "<hr>";

    //Elencare i numeri da 10 a 100; di fianco scrivere se è pari o dispari; elencare i primi 10 numeri dispari;
    foreach (range(0, 100) as $a1) {
        if ($a1 % 2 == 0 ) {
            echo "$a1 pari <br>";
        }elseif ($a1 % 2 == 1) {
            echo "$a1 dispari <br>";
        }
    }
    echo "<br>";
    
    foreach (range(0, 10) as $a2) {
        if ($a2 > 0 && $a1 < 10) {
            # code...
        }elseif ($a2 % 2 == 1) {
            echo $a2;
        }
    }

    echo "<hr>";
    echo "<hr>";
    echo "<hr>";

    //elencare i numeri multipli di 7 da 1 a 100, elencarne solo 7, stampare la tavola pitagorica
        foreach (range(1, 100) as $a1) {
            if ($a1 % 7 == 0) {
                echo "$a1<br>";
            }
        }

        foreach (range(1, 100) as $a1) {
            if ($a1 > 0 && $a1 <= 7) {
                echo "$a1<br>";
            }
        }
    //stampare il contenuto di un array, un elemento per ogni riga
    $g = [21,212,213,545,23,5,12,56,453,23];
    print_r($g);

    echo "<hr>";
    echo "<hr>";
    echo "<hr>";

    //sommare gli elementi di un array di interi
    $h = [23,34,1,24,6,454,78];
    echo array_sum($h);

    echo "<hr>";
    echo "<hr>";
    echo "<hr>";

    //cercare un elemento all'interno di un array, quante volte compare? trovato 1 volta l'elemento, fermare la ricerca ed elencare tutte le posizioni in cui c'è l'elemento (nuovo array)
  //non so fare diocane

    

    





   


    








	
    
    
    
    
    
    
    
    
    
    ?>














































    
</body>
</html>
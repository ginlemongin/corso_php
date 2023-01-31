<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--per passare dal for al ciclo while devo mettere lindex del for all'inizio del while
    tutti gli esercizi fatti cvol for possono essere rifatti con i lwhile index, condizione ed i++, puoi scorrere gli array
    rifare l'esame ed esercitarsi sugli array. Nel ciclo while è uguale al for finche la condizione è vera continua ad 
    iterare ma devi prevedere una condizione di stop-->
    <?php
    //PER CASA somma dei soli n. pari
    // for ($i = 1; $i <= 10; $i++) {
    //     echo $i;
    // }

    // $i=1;
    // while($i<=10){
    //     echo "$i";
    //     $i++; //istruziomne per far diventare falsa la condizione
    // }
    //ogni volta che c'è il while for metti sempre le graffe
    //finchè sei nabbo

    //scrivere numeri interi positivi la cui somma arrivi a $target a partire
    //da $start
    //ciclo for
    $target = 10;
    $somma = 0;
    $start = 1;
    for($i=1; ($somma < $target); $i++){
        echo "$i<br>";
        $somma = $somma + $i;
        // if ($somma >= $target) {
        //     break;
        // }
    }
    echo "somma = " . $somma;

    echo "<hr>";
    
    //stesso esercizio con ciclo while 
    $somma = 0;
    $i = $start - 1;
    echo "inizio la somma da " . ($i + 1);
    while($somma < $target) {
        $i++;
        //..
        $somma += $i;
    }
    echo " fino a $i <br>";
    echo "<br>somma = $somma";

    //scrivere i primi interi positivi a partire da $start
    //che sommati raggiungano 
    //il target $target
    $target = 10;
    $start = 1;
    $somma = 0;

    for ($i = $start; ($somma < $target); $i++) {
        $somma = $somma + $i;
        if($somma <= $target){
            echo "$i<br>";
        }
    }
    echo "somma = " . $somma;

    echo "<hr>";

    //stesso esercizio con il while
    $somma = 0;
    $i = $start - 1;
    echo "inizio la somma da " . ($i + 1);
    while ($somma < $target) {
        //...
        $somma += $i;
        if($somma < $target){
            $i++;
        }

    }
    echo " fino a $i <br>";
    echo "<br>somma = $somma";

    //ancora stesso esercizio rispetto all'esercizio di prima decremento
    //la i di 1 prende la somma da 3  a 4. (il primo che supera il target e
    //poi l'ultimo che non lo supera)

    $somma = 0;
    $i = $start - 1;
    echo "inizio la somma da " . ($i + 1);
    while ($somma < $target) {
        //...
        $i++;
        $somma += $i;
    }
    $i--;
    echo " fino a $i <br>";
    echo "<br>somma = $somma";


    ?>
</body> 
</html>


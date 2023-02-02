<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>

<body>
    <?php
    /*ARRAY
    Gli array sono come dei cassetti che contengono piu informazioni (anche di tipo diverso),
    esattamente come le variabili contengono un nome ma hanno una serie di valori (non solo uno come le variabili)
    i diversi valori occupano diverse posizioni dentro il cassetto array, e queste posizioni in cui sono contenuti i valori 
    possono essere identificate con un indice (indice 0 = valore 1, indice 1 = valore "pippo", etc) anche detti KEY
    che viene indicato con una parentesi quadra $array[0] (che contiene il valore 1), $array[1] (contiene "pippo"), etc

    Per inizializzare una variabile a un array vuoto scrivo:*/
    $a = []; //inizializzo un indice dell'array
    $a[0] = 1; //assegno un valore al primo indice che ho inizializzato
    $a[1] = 2; //assegno un valore al secondo indice che ho inizializzato
    echo $a[0]; //stamperà il valore 1 del primo indice 0 dell'array
    echo $a[1]; //stamperà il valore 2 del secondo indice 1 dell'array

    echo "<hr>";

    //creiamo un ciclo per rendere dinamico l'indice degli array

    for ($i = 0; $i < 10; $i++) { //imposto il valore dei primi 10 indici tutti in una volta con il FOR
        $a[$i] = rand(0,100); //metto un indice dinamico in modo che ogni indice fino al decimo assumano valore di un numero random tra 0 e 100
    }

    //stampo il contenuto dell'array che ho inizializzato col ciclo
    for ($i = 0; $i < 10; $i++) {
        echo ($i + 1) . ") " . $a[$i] . "<br>"; //in questo modo mi stamperà tutti i valori degli indici degli array che sono tutti 1
        //metto ($i+1) per far partire il contantore da 1) e non da 0)
    }







    ?>

</body>

</html>
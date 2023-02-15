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
    /*1) Scrivere una funzione che riceve come parametro di 
    ingresso un array e restituisce il valore del primo elemento in ordine crescente */
    function ordinamento($a){
        //ordino l'array passato con sort e poi stampo un valore alla volta
        sort($a);
        foreach ($a as $key => $value) {

            echo "$value ";
            
        }

    }
    //inizializzo l'array con 5 elementi random e li stampo
    $numeri = [rand(0,5), rand(0,5), rand(0,5), rand(0,5), rand(0,5)];
    foreach ($numeri as $key => $value) {

        echo "$value ";

    }
    echo"<br>";
    echo"<hr>";
    //chiamo la funzione
    ordinamento($numeri);
    ?>
</body>
</html>
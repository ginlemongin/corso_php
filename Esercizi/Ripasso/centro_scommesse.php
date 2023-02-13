<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centro Scommesse</title>
</head>
<body>
    <?php
    /*il cliente del centro scommesse 
    sceglie un numero $numero e scommette 
    che è uguale alla media (arrotondata all'intero più piccolo)
    di $estrazioni numeri casuali da 1 a 10
    Verificare se il cliente ha vinto
    */

    $numero_scelto = 3;
    $estrazioni = 5;
    $numeri_estratti = [];
    $somma = 0;
    $media = 0;

    for ($i= 0; $i <= $estrazioni ; $i++) {
        //inizializzo l'array con numeri casuali 
        $numeri_estratti [$i] = rand(1,10);
        echo $numeri_estratti [$i] . "<br>";
        //devo sommare tutti gli elementi dell'array
        $numeri_estratti [$i] +=  $numeri_estratti [$i];
        

        //$media =  $numeri_estratti [$i] / $estrazioni;
    }
    echo $numeri_estratti . "<br>";
    //echo $media;
    ?>
</body>
</html>
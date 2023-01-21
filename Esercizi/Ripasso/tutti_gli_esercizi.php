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
    // <!-- Dati $a e $b, calcolare la media tra i 2 numeri -->
    // $a=5;
    // $b=2;
        
    //         echo ($a + $b) / 2;



    // Scrivere se la variabile $x è multipla di 3
    // $x=5;
    
    // if  (($x % 3)==0) {
        
    //     echo "multiplo";
    // }else{
    //     echo "non multiplo";
    // }


    //Invertire il contenuto di $x e $y
    // echo '2) Invertire il contenuto di $a e $b <br>';
    // $a = 9;
    // $b = 4;
    // echo "prima a = $a e b = $b <br>";
    // //ho bisogno di una variabile temporanea, una sorta di contenitore in cui passare le mie variabili per invertirne i contenuti
    // $temp = $a;
    // $a = $b;
    // $b = $temp;
    // //uso $temp come contenitore per switcharne i valori
    // echo "dopo a = $a e b = $b <br>"; //questa deve rimanere identica


    // 2 fratelli hanno $f1 e $f2 anni: calcolare la differenza di età (non è detto che $f1 sia maggiore di $f2!)
    //  $f1=110;
    //  $f2=90;
    //     if ($f1 > $f2) {
    //         echo "Age differ for " . $f1 - $f2 . " years";
    //     } elseif ($f1 < $f2) {
    //         echo "Age differ for " . $f2 - $f1 . " years";
    //     }

    // Dato $numero scrivere a quale decina appartiene (es 1 nella 1° decina, 11 nella 2°, 21 nella 3°, ecc.)
    // $n1 = rand(0,6);
    // switch ($n1) {
    //     case '1':
    //         echo "$n1 appartiene alla prima decina";
    //         break;
    //     case '2':
    //         echo "$n1 appartiene alla seconda decina";
    //         break;
    //     case '3':
    //         echo "$n1 appartiene alla terza decina";
    //         break;
    //     case '4':
    //         echo "$n1 appartiene alla quarta decina";
    //         break;
    //     case '5':
    //         echo "$n1 appartiene alla quinta decina";
    //         break;
        
    //     default:
    //         "$n1 non appartiene a nessuna decina";
    //         break;
    // }

    
    // Il corso è composto da 8 ore a settimana. Quante settimane servono per fare 105 ore?
    //echo "Servono " . round(105 / 8) . " settimane";
    

    // Verificare se è più grande il nome o il cognome!
    // $nome = "nome";
    // $cognome = "cognome";
    // if ($nome > $cognome) {
    //     echo "nome è maggiore di cognome";
    // }else {
    //     echo "cognome è maggiore di nome";
    // }


    // Data la stringa $testo verificare se inizia con una lettera maiuscola;
    //         se inizia con una lettera (maiuscola o minuscola)



    // $x è un numero compreso tra $a e $b?
    // $x=9;
    // $a=8;
    // $b=20;

    // if ($x > $a & $x <$b){
    //     echo "compreso";
    // } else {
    //     echo "incompreso, poverino";
    // }
    
    
    // Elencare i numeri da 10 a 100;
	// 	di fianco scrivere se è pari o dispari
	// 	elencare i primi 10 numeri dispari;
    
    $idle=0;
    for ($i=0; $i <= 100 ; $i++) { 
        if (($i % 2)==0) {
            echo  $i . "pari" . "<br>";
        } else {
            echo  $i . "dispari" . "<br>";
        }
    $idle++;        
    }
    
    for ($i=0; $i <= 10 && $idle==100; $i++) { 
        if (($i % 2)!=0) {
            echo  $i . "dispari" . "<br>";
        } 
    }

//----------------SOLUZIONI--------------------
//ESERCIZI
// echo '1) Dati $a e $b, calcolare la media tra i 2 numeri <br>';
// $a = 6;
// $b = 10;
// $media = ($a + $b) / 2;
// echo "la media tra $a e $b è " . $media;
// echo "<br>";

// echo '2) Invertire il contenuto di $a e $b <br>';
// $a = 9;
// $b = 4;
// echo "prima a = $a e b = $b <br>";
// //ho bisogno di una variabile temporanea, una sorta di contenitore in cui passare le mie variabili per invertirne i contenuti
// $temp = $a;
// $a = $b;
// $b = $temp;
// //uso $temp come contenitore per switcharne i valori
// echo "dopo a = $a e b = $b <br>"; //questa deve rimanere identica




// echo '2) Scrivere se la variabile $x è multipla di 3 <br>';
// $x = 10;
// $x % 3; //modulo per vedere se da resto zero
// $condizione = $x % 3 ? "$x non è multiplo di 3" : "$x è multiplo di 3";
// echo $condizione;
// echo "<br>";
// echo "<hr>";
     ?>
</body>
</html>

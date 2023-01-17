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
    /* dato array a1 creare a2 in cui ogni elemento en 
    è la somma degli (3) en elementi successivi di a1(compreso en)
    se c'è 0 riportare 0
    es a1={1,2,3,4,0}  a2={1,5,7,4,0}
    */
    //inizializzazione di a1
    for ($i = 0; $i < 5; $i++)
        $a1[$i] = rand(0, 5);


    print_r($a1);

    $valore = "non ancora gestito"; //per testare prima di finire
    for ($i = 0; $i < count($a1); $i++) {
        //calcolo il valore da assegnare ad a2 in posizione $i
        //casi particolari 1 e 0
        if ($a1[$i] == 0 || $a1[$i] == 1) {
            $valore = $a1[$i];
        } else {
            //tra poco usiamo count per Mariana 
            $somma = 0;
            for ($j = $i; ($j < ($a1[$i] + $i) and $j < count($a1)); $j++) {
                //echo "<br> i= $i j=$j a1[i]= {$a1[$i]} a1[j]={$a1[$j]}";
                $somma += $a1[$j];
            }
            $valore = $somma;

        }

        $a2[$i] = $valore;
    }
    print_r($a2);



    ?>

</body>

</html>
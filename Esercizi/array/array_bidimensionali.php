<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array bidimensionali</title>
</head>
<body>
<table>
        <tr>
            <th>Nome</th>
            <th>Cognome</th>
            <th>Voto</th>
        </tr>
    <?php
    //ARRAY BIDIMENSIONALE
    //array di array, ne esistono anche di piu dimensioni
    // $s1=['nome'=>"Mario", 'cogn'=>"Rossi", 'voto'=>10];
    // $s2=['nome'=>"Giacomo", 'cogn'=>"Verdi", 'voto'=>8];
    // $s=[$s1, $s2];
    // $s=[$s1, $s2];
    // $s[0] //coincide con $s1
    // $s1['nome'] //con Mario
    // $s[0]['nome'] //questo è un array di array

    // foreach($s as $studente){//al primo ciclo $k corrisponde a Mario di $1 al secondo ciclo a Giacomo di $2 ecc
    //     foreach ($studente as $k=>$v){
    //         echo "$v";
    //     }
    // }

    $s1=['nome'=>"Mario", 'cogn'=>"Rossi", 'voto'=>10];
    $s2=['nome'=>"Giacomo", 'cogn'=>"Verdi", 'voto'=>10];
    $s3=['nome'=>"Federico", 'cogn'=>"Rossini", 'voto'=>5];
    $s4=['nome'=>"Osvaldo", 'cogn'=>"Faustini", 'voto'=>3];

    $s = [$s1, $s2, $s3, $s4];

    // print_r($s1);
    echo "<table>";
    foreach ($s as $studente) {
        // echo $studente['nome'] . "<br>";//$studente coincide con il singolo studente
        // echo $studente['cognome'] . "<br>";
        // //cosi stampo il nome sopra il cognome
        echo "<tr>";
        echo "<td>";
        echo $studente['nome'] . " ";//stampo affiancati
        echo "</td> <td>";
        echo $studente['cogn'] . " ";
        echo "</td> <td>";
        echo $studente['voto'] . "<br>";
        echo "</td>";
        echo "</tr>";
    }
    echo "</table>";

    
        //PER CASA creare la tabella sopra 
        //senza conoscere le chiavi dei singoli elementi di $s
        //2 foreach innestati
        //da fare senza leggere sotto

        echo "<table>";
        foreach ($s as $studente) {
            echo "<tr>";
            foreach ($studente as $k => $v) {
                echo "<td> $v</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
        
    ?>
</body>
</html>
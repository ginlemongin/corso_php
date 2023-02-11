<?php
/**
 * Restituisce la stringa con tutti i dati dello studente
 * @param array $a dati dello studente
 * @return string
 * 
 */
function elenco_dati_studente($a)
{
    $stringa = "";
    foreach ($a as $k => $v) {
        $stringa .= "$k: $v ";
    }
    return $stringa;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio 2d</title>
</head>

<body>
    <?php
    $p1 = ["Primini Primo", "Secondini Secondo"];
    $p2 = ["Giannini Gianni", "Stefanini Stefano", "Mariolini Maria", "Giacomini Giacomo"];
    $p3 = ["Violetti Viola", "Gaietti Gaia", "nome1", "nome2", "nome3"];
    $partecipanti = [$p1, $p2, $p3];
    $a = [1, 2, 3];

    // $partecipanti = [
    //     ["Primini Primo", "Secondini Secondo"],
    //     ["Giannini Gianni", "Stefanini Stefano", "Mariolini Maria", "Giacomini Giacomo"]    
    //     ["Violetti Viola", "Gaietti Gaia"]
    // ];
    $corsi = ["Autocad", "Informatica", "Inglese"];

    //inizio dal punto 2
    foreach ($partecipanti as $p) {
        foreach ($p as $nome) {
            echo $nome . "<br>";
        }
    }


    //punto 2 svolto con il for
    // for ($i = 0; $i < count($partecipanti); $i++) {
    //     $p = $partecipanti[$i]; //array monodimensionale
    //     $nome_corso = $corso[$i];
    //     //echo $p[$i];
    //     for ($j = 0; $j < count($p); $j++) {
    //         $nome = $p[$j];
    //         echo $nome . "<br>";
    //     }
    // }
    
    //come si scorre un array monodimensionale (ripasso!!!)
    // $a = [1, 2, 3];
    // for ($i = 0; $i < count($a); $i++) {
    //     $b = $a[$i];
    //     echo $b;
    // }
    
    echo "<hr>";
    //inizio dal punto 2
    $somma = 0;
    if ($partecipanti)
        $max_partecipanti = count($partecipanti[0]);
    $corso_max_partecipanti = "";

    foreach ($partecipanti as $i => $p) {
        if ($corsi[$i] == "Informatica") {
            //aggiungo il nuovo partecipante
            $p[] = "Novellini Novella";
        }
        $numero_partecipanti = count($p);
        //3. somma dei partecipanti
        $somma += $numero_partecipanti;

        //4. max dei partecipanti
        // if ($max_partecipanti <= $numero_partecipanti) {
        //     $max_partecipanti = $numero_partecipanti;
        //     $corso_max_partecipanti = $corsi[$i];
        // }
        //4 con variante: tutti i corsi che hanno il max n. partecipanti
        if ($max_partecipanti <= $numero_partecipanti) {
            if ($max_partecipanti < $numero_partecipanti) {
                //ho trovato un nuovo max
                $max_partecipanti = $numero_partecipanti;
                $corsi_max_partecipanti = [];
            }
            $corsi_max_partecipanti[] = $corsi[$i];
        }

        echo "Elenco dei partecipanti del corso " . $corsi[$i] . ":<br>";
        echo "<ol>";
        foreach ($p as $nome) {
            echo "<li>" . $nome . "</li>";
            //5) cercare il minore tra i nomi DA FARE
        }
        echo "</ol>";
    }

    echo "<hr>";
    if ($corsi) { //se vero c'è almeno 1 elemento
        echo "<br>3) la media vale " . ($somma / count($corsi));
        echo "<br>4) corso con max partecipanti: " . $corso_max_partecipanti;
        echo "<br>4bis) ";
        foreach ($corsi_max_partecipanti as $c) {
            echo "$c ";
        }
    } else { //se falso, è un array vuoto
        echo "3) non ci sono corsi!";
    }

    echo "<hr>";
    //6) aggiungi un elemento...
    foreach ($partecipanti as $i => $p) {
        //$p è un array
        $nome_corso = $corsi[$i];
        $p['corso'] = $nome_corso;
        print_r($p);
        echo "<br>----<br>";
    }



    //AVVIO ES. ALTERNATIVO PER CASA
    $s1 = ['cognome' => 'Rossi', 'nome' => "Mario", 'corso' => "Informatica"];
    $s2 = ['cognome' => 'Rossini', 'nome' => "Mariolino", 'corso' => "Inglese"];
    $s3 = ['cognome' => 'Bossi', 'nome' => "Maria", 'corso' => "Informatica"];
    $studenti = [$s1, $s2, $s3];

    //1)aggiunta di uno studente
    $nuovo_studente = ['cognome' => 'Novellini', 'nome' => "Novella", 'corso' => "Informatica"];
    $studenti[] = $nuovo_studente;

    $partecipanti_corsi = []; //n. partecipanti ad ogni corso
    
    foreach ($studenti as $studente) {
        //2)
        echo "<br>" . elenco_dati_studente($studente);
        //echo $studente['cognome'] . "<br>";
    
        //scrivere una funzione che 
        //conta gli studenti di un particolare corso $corso
        $corso = "Informatica";
        echo "studenti totali: " . count_studenti_corso($studenti, $corso);

        //3 e 4 prossima volta !
        $nome_corso = $studente['corso'];
        if (array_key_exists($nome_corso, $partecipanti_corsi))
            $partecipanti_corsi[$nome_corso]++;
        else
            $partecipanti_corsi[$nome_corso] = 1;

    }

    ?>
</body>

</html>
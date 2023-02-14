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
    /**Si deve gestire l’elenco dei punteggi ottenuti dai partecipanti ad un bando regionale. Si chiede di
svolgere le seguenti attività:
1. inizializzare il numero di partecipanti al bando assegnando un numero casuale da 10 a 100;
8. valorizzare un array con i punteggi di ogni partecipante presente con interi casuali da 0 a
10, considerando che il giorno della prova 5 partecipanti erano malati;
9. elencare tutti i punteggi presenti nell&#39;array con uno sfondo alternato nelle varie righe,
scrivendo in grassetto i punteggi sufficienti e in corsivo quelli insufficienti;
10. modificare l’elenco del punto precedente utilizzando un elenco non ordinato html;
11. in un riquadro, riportare quanti partecipanti hanno ottenuto il punteggio pieno (10 punti) e
quante volte è stato assegnato il punteggio più basso (tra quelli assegnati realmente);
12. calcolare e visualizzare il punteggio medio dei bocciati.
13. Questo bando permette di accedere immediatamente a $posti posti di lavoro già disponibili
se il punteggio ottenuto è maggiore di 8: calcolare e visualizzare quanti sono i partecipanti
che potrebbero essere immediatamente assunti e di questi la percentuale che rimane in lista
d&#39;attesa. */


    //numero partecipanti random meno 5 malati e le lodi
    $numero_partecipanti = rand(10, 100) - 5;
    $lodi = 0;
    //la variabile che memorizza il voto minimo deve partire dal massimo a scalare
    $voto_min = 10;
    //variabili che contano la somma dei voti insufficienti ed il numero dei bocciati
    $punteggio_medio = 0;
    $bocciati = 0;
    //posti di lavoro disponibili
    $posti = 5;
    $assumibili = 0;

    //aggiungo la unordered list
    "<ul>";
    //inizializzo array voti di ogni partecipante random
    for ($i = 0; $i < $numero_partecipanti; $i++) {
        $voti[$i] = rand(0, 10);

        //conto i voti 10
        if ($voti[$i] == 10) {
            $lodi++;
        }

        //conto i voti piu bassi
        if ($voti[$i] < $voto_min) {
            $voto_min = $voti[$i];
            $totale_voti_minimi = 0;
        }
        if ($voti[$i] == $voto_min) {
            $totale_voti_minimi++;
        }

        //calcolo punteggio medio bocciati
        if ($voti[$i] < 6) {
            $punteggio_medio += $voti[$i];
            $bocciati++;
        }

        //conto le persone assumbili subito
        if ($voti[$i] > 8) {
            $assumibili++;
        }

        //imposto lo sfondo di ogni riga e lo stile del voto.
        //gestisco lo zero
        if (($i % 2) && ($voti[$i] == 0)) {
            echo "<p><li><i>$voti[$i]</i></li></p>";
        } elseif (($i % 2 == 0) && ($voti[$i] == 0)) {
            echo "<p><li style=background-color:gray><i>$voti[$i]</i></li></p>";
        } elseif (($i % 2) && ($voti[$i] >= 6)) {
            echo "<p><li><b>$voti[$i]</b></li></p>";
        } elseif (($i % 2) && ($voti[$i] < 6)) {
            echo "<p><li><i>$voti[$i]</i></li></p>";
        } elseif ($i >= 6) {
            echo "<p><li style=background-color:gray><b>$voti[$i]</b></li></p>";
        } else {
            echo "<p><li style=background-color:gray><i>$voti[$i]</i></li></p>";
        }
    }
    "</ul>";

    echo "<fieldset> <p>Partecipanti promossi a pieni voti: $lodi</p>
        <p>Voti minimi: $totale_voti_minimi</p></fieldset>";
    echo "Media voti bocciati: " . $punteggio_medio / $bocciati . "<br>";

    //stampa delel assunzioni e liste di attesa
    if ($assumibili > $posti) {
        //stampa solo se gli assumbili sono più dei posti disponibili
        echo "Assunti subito: " . $posti . "<br>";
        echo "Le persone in lista d'attesa sono: " . $assumibili-$posti;
    } else {
        echo "Assunti subito: " . $posti;
    }


    //soluzione docente
    /**$npartecipanti = rand(6, 50);
    $assenti = 5;
    $bg1 = "#fff";
    $bg2 = "#ccc";
    //copio e incollo l'inizializzazione dagli esercizi svolti
    for ($i = 0; $i < $npartecipanti - $assenti; $i++) {
        $voti[$i] = rand(0, 10);
    }
    echo "<ul>";
    $dieci = 0;
    $minimo = 10;
    $nminimi = 0;
    $somma = 0;
    $promossi = 0;
    $elite = 0;
    $posti = 10;
    for ($i = 0; $i < count($voti); $i++) { //ciclo che scorre tutti gli elementi dell'array
        //$voto = $voti[$i];
    
        //stampa elenco
        $bg = $bg1;
        if ($i % 2) {
            $bg = $bg2;
        }
        echo "<li style='background-color:$bg' >";
        if ($voti[$i] >= 6)
            echo "<strong> {$voti[$i]} </strong>";
        else
            echo "<i> {$voti[$i]} </i>";
        echo "</li>";

        //conto le lodi o il 10
        if ($voti[$i] == 10) {
            $dieci++;
        }
        //minimo
        if ($voti[$i] < $minimo) {
            $minimo = $voti[$i];
            $nminimi = 0; //resetto il n. di minimi perchè è cambiato il minimo di riferimento
        }
        if ($voti[$i] == $minimo) {
            $nminimi++;
        }

        //punteggio dei voti sufficienti
        if ($voti[$i] >= 6) {
            $somma += $voti[$i];
            $promossi++;
        }

        //assunzione o corso specialistico
        if ($voti[$i] >= 8) {
            //abilitato all'assunzione
            $elite++;
        }

    }
    echo "</ul>";

    echo "<hr>";
    echo "N. punteggi massimi assegnabili: $dieci";
    echo "<br>N. punteggio minimo assegnato: $minimo, $nminimi volte";
    echo "<br>Media voti promossi: " . ($somma / $promossi);

    //n lista d'attesa = $elite - $posti;
    //percentuale lista d'attesa = n lista d'attesa / $elite *100
    if ($posti > $elite)
        $perc_attesa = 0;
    else {
        $perc_attesa = ($elite - $posti) / $elite * 100;
    }
    echo "<br>posti = $posti elite = $elite - in lista d'attesa = $perc_attesa%";
 */
    ?>

</body>
</html>
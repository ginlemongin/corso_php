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
    /**Viene fornito un array di interi, dove ogni numero rappresenta l'età degli abitanti di un piccolo
comune. Si chiede di svolgere le seguenti attività:
1. elencare tutte le età presenti nell'array con uno sfondo alternato nelle varie righe,
scrivendo in grassetto le età dei maggiorenni e in corsivo quelle dei minorenni (0
corrisponde ad un neonato);
2. in un riquadro, riportare il numero dei neonati e l'età del più anziano;
3. calcolare e visualizzare l'età media dei maggiorenni.
4. Per aver diritto al voto si deve avere almeno 18 anni: calcolare e visualizzare quante
schede servono in totale per le elezioni. */

    //definisco numero abitanti e inizializzo variabili per contare neoanti, vecchi
    $abitanti = 5;
    $neonati = 0;
    $vecchi = 0;
    $somma_eta_maggiorenni = 0;
    $schede_elettorali = 0;
    //assegno ad ogni abitante una età random
    for ($i = 0; $i < $abitanti; $i++) {
        $eta[$i] = rand(0, 99);
    }
    //cicli for in base al numero di elementi nell'array eta
    for ($i = 0; $i < count($eta); $i++) {
        //conto i neonati
        if ($eta[$i] == 0) {
            $neonati++;
        }
        //valorizzo la variabile del più anziano
        if ($eta[$i] > $vecchi) {
            $vecchi = $eta[$i];
        }
        //ad ogni età assegno uno stile ed ad ogni riga un colore di sfondo    
        if ($eta[$i] >= 18) {
            //conto le schede elettorali necessarie ed il numero di persone maggiorenni
            $schede_elettorali++;
            //sommo le età dei maggiorenni per la media
            $somma_eta_maggiorenni += $eta[$i];
            if ($i % 2) {
                echo "<p style=background-color:red><b>$eta[$i]</b></p>";
            } else {
                echo "<p><b>$eta[$i]</b></p>";
            }
        } else {
            if ($i % 2) {
                echo "<p style=background-color:red><i>$eta[$i]</i></p>";
            } else {
                echo "<p><i>$eta[$i]</i></p>";
            }
        }
    }

    //stampo neonati ed anziani in un riquadro
    echo "<fieldset> Neonati :  $neonati  <br> Età più anziano:  $vecchi </fieldset>";

    //calcolo media eta dei maggiorenni dividendo la somma per le schede elettorali che hanno solo i maggiorenni
    echo "Età media: " . round($somma_eta_maggiorenni / $schede_elettorali) . "<br>";
    echo "Schede elettorali necessarie:" . $schede_elettorali;

    /*soluzione docente
    
    //inizializzo l'array $eta
    $eta = []; //opzionale
    for ($i = 0; $i < 20; $i++) {
        $eta[$i] = rand(0, 90);
    }

    //echo $eta; //NON VA BENE
    //print_r($eta);
    //var_dump($eta);
    
    $max = $eta[0]; //solo se so che l'indice 0 esiste!!
    $neonati = 0;
    $eta_maggiorenni = 0;
    $numero_maggiorenni = 0;
    for ($i = 0; $i < count($eta); $i++) {
        //echo $eta[$i] . "<br>";
        if ($eta[$i] >= 18) {
            //gestione età dei maggiorenni
            $numero_maggiorenni++;
            $eta_maggiorenni += $eta[$i];

            echo "<strong>" . "$eta[$i]" . "</strong>";
        } else {
            echo "<i>";
            $color = "#000";
            if ($eta[$i] == 0) {
                $color = '#f00';
            }
            echo "<span style='color:$color'>" . $eta[$i] . "</span>";
            echo "</i>";
        }
        //calcolo il più anziano
        if ($eta[$i] > $max) {
            $max = $eta[$i];
        }
        //numero neonati
        if ($eta[$i] == 0) {
            $neonati++;
        }

        echo "<br>";


    }
    echo "<table border=1><tr><td>";
    echo "Il più anziano ha $max anni (e si trova ad indice ????)";
    echo "<br>Il numero di neonati è $neonati";
    // if ($numero_maggiorenni > 0) {
    //     echo "<br>L'età media dei maggiorenni è " .
    //         ($eta_maggiorenni / $numero_maggiorenni);
    // } else
    //     echo "<br>L'età media dei maggiorenni è 0 ";
    
    echo "<br>L'età media dei maggiorenni è " .
        (($numero_maggiorenni > 0) ? 
            ($eta_maggiorenni / $numero_maggiorenni)
            : "non disponibile!");

    echo "<br>Le schede per le elezioni sono " . $numero_maggiorenni;
    echo "</td></tr></table>" */
    ?>
</body>

</html>
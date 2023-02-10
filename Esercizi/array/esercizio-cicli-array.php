<!-- Esercizio PHP

Viene fornito un array di interi, dove ogni numero rappresenta letà degli abitanti di un piccolo
comune. Si chiede di svolgere le seguenti attività:
1. elencare tutte le età presenti nell&#39;array con uno sfondo alternato nelle varie righe,
scrivendo in grassetto le età dei maggiorenni e in corsivo quelle dei minorenni (0
corrisponde ad un neonato);
2. in un riquadro, riportare il numero dei neonati e l'età del più anziano;
3. calcolare e visualizzare l&#39;età media dei maggiorenni.
4. Per aver diritto al voto si deve avere almeno 18 anni: calcolare e visualizzare quante
schede servono in totale per le elezioni. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio comune</title>
</head>
<body>
    <?php
    //inizializzo array eta
    for ($i=0; $i < 20 ; $i++) { 
        $eta [$i] = rand(0,90);
    }

    // for ($i=0; $i < 10 ; $i++) {
    //     echo $eta[$i] . "<br>";
    // }

    // print_r o dump perchè echo di $eta metti in difficoltà l'interprete php non riesce a convertire tutti i tipi di dato in stringa
    // print_r ($eta) ; //stampa ricorsivamente tutti i contenuti dell'array stampa l'indice freccia valore
    // "<br>";
    // var_dump ($eta); //indica quanti elementi ci sono nell'array e gli elementi
    $max = $eta[0]; //solo se so che l'indice 0 esiste
    $neonato = 0;
    $eta_maggiorenni = 0;
    $numero_maggiorenni = 0;
    for ($i = 0; $i < count($eta); $i++) { //count è una funzione che restituisce quanti elementi ci sono nell'array
        if ($eta[$i] >= 18) {
            //gestione età dei maggiorenni
            $numero_maggiorenni++;
            $eta_maggiorenni += $eta[$i];
            echo "$i) " . "<b>" . $eta[$i] . "</b>";
            }else {
                echo "<i>";
                $color = "#000";
                if ($eta[$i] == 0) {
                    $color = '#f00';
                }
                echo "<span style='color:$color'>" . $eta[$i] . "</span>";
                echo "</i>";
            }
    //2. in un riquadro, riportare il numero dei neonati e l'età del più anziano;
        if ($eta[$i] > $max) {
            $max = $eta[$i];
        }
    
     //numero neonati
        if($eta[$i] == 0){
            $neonati++;
        }

        echo "<br>";

    }
    echo "<table border=1><tr><td>";
    echo "Il più anziano ha $max anni";
    echo "<br>Numero neonati: $neonato";
    // if ($numero_maggiorenni > 0) {
    //     echo "<br>L'età media dei maggiorenni è " .
    //         ($eta_maggiorenni / $numero_maggiorenni);
    // } else
    //     echo "<br>L'età media dei maggiorenni è 0 ";
    echo "<br>L'età media dei maggiorenni è " . (($numero_maggiorenni>0)?($eta_maggiorenni / $numero_maggiorenni):"non disponibile!");

    echo "<br>Le schede per le elezioni sono " . $numero_maggiorenni;
    echo "</td></tr></table>"
    
    ?>
</body>
</html>
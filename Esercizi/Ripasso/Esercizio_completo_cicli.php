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
    /**Esercizio completo sui cicli

1. Realizzare una pagina php che presenti una sequenza di numeri interi con sfondo alternato per
ogni riga. I dati elencati devono rispettare le seguenti regole:
- la sequenza deve iniziare da un numero assegnato (memorizzato nella variabile $start) e
analizzare tutti gli interi precedenti;
- l'analisi deve essere ripetuta per un numero di volte assegnato (memorizzato nella variabile
$repeat);
- se il numero considerato corrisponde al mese della data corrente, deve essere scritto in
corsivo;
- di ogni numero considerato, scrivere sulla stessa riga il suo valore e il valore doppio (in
rosso)
2. Al termine dell' elenco, separando con una riga orizzontale, scrivere:
- i dati assegnati, con questa specifica frase: “$start: ''; $repeat: ''; “;
- quanti numeri pari sono stati scritti (considerando anche i valori del doppio);
- il numero di ripetizioni effettivamente eseguite.
3. Modificare l'algoritmo che produce la lista del punto 1, inserendo la condizione che non si
devono considerare i numeri negativi.
FACOLTATIVO: realizzare una seconda pagina identica alla precedente con una istruzione ciclica
differente */

    $start = 10;
    $repeat = 2;
    //la varibile $pari conta i numeri pari tra le cifre ed i loro doppi, gli sottraggo preventivamente il numero delle
    //ripetizioni per 2 perchè altrimenti conterebbe anche gli 0 base e doppi
    $pari = -$repeat*2;
    $esecuzioni = 0;
    for ($a=$repeat; $a >= 1; $a--) {

        for ($i = $start; $i >= 0; $i--) {
            $double = $i * 2;
             $pari++;
             $esecuzioni++;
            
             if ($i % 2 == 0) {
                 $pari++;
             }
            if ($i % 2) {
                if (date("m") == $i) {
                    echo "<p style=background-color:#ccc><i>$i</i> <span style=color:red>$double</span></p>";
                } else {
                    echo "<p style=background-color:#ccc>$i <span style=color:red>$double</span></p>";
                }

            } else {

                if (date("m") == $i) {
                    echo "<p style=background-color:#fff><i>$i</i> <span style=color:red>$double</span></p>";
                } else {
                    echo "<p style=background-color:#fff>$i <span style=color:red>$double</span></p>";
                } 
            }
        }
    }
    echo "<hr>";
    echo '$start:' . $start . "<br>" . '$repeat:' . $repeat . "<br>";
    echo "numeri pari:" . $pari . "<br>";
    echo "numero esecuzioni:" . $esecuzioni;
    ?>
</body>

</html>
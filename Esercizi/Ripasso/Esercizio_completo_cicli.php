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

    $start = 20;
    $repeat = 2;

    for ($repeat; $repeat >= 1; $repeat--) {

        for ($i = $start; $i >= 0; $i--) {
            $double=$i*2;

             if ($i % 2) {
                if (date("m")==$i) {
                    echo "<p style=background-color:#ccc><i>$i</i> $double</p>";
                }else {
                    echo "<p style=background-color:#ccc>$i $double</p>";
                }
                 
             } else {
                if (date("m")==$i) {
                    echo "<p style=background-color:#fff><i>$i</i> $double</p>";
                }else {
                    echo "<p style=background-color:#fff>$i $double</p>";
                }
             }
           
    }
}
    ?>
</body>

</html>
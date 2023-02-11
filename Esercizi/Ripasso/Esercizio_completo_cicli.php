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
 la sequenza deve iniziare da un numero assegnato (memorizzato nella variabile $start) e
analizzare tutti gli interi precedenti;
 l'analisi deve essere ripetuta per un numero di volte assegnato (memorizzato nella variabile
$repeat);
 se il numero considerato corrisponde al mese della data corrente, deve essere scritto in
corsivo;
 di ogni numero considerato, scrivere sulla stessa riga il suo valore e il valore doppio (in
rosso)
2. Al termine dell&#39;elenco, separando con una riga orizzontale, scrivere:
 i dati assegnati, con questa specifica frase: “$start: ''; $repeat: ''; “;
 quanti numeri pari sono stati scritti (considerando anche i valori del doppio);
 il numero di ripetizioni effettivamente eseguite.
3. Modificare l&#39;algoritmo che produce la lista del punto 1, inserendo la condizione che non si
devono considerare i numeri negativi.
FACOLTATIVO: realizzare una seconda pagina identica alla precedente con una istruzione ciclica
differente */

    $start = 20;
    $repeat = 2;

for ($repeat;  $repeat >=1;  $repeat--) {
    
    for ($start; $start >= 0; $start--) {
        if ($start % 2) {
            echo "<p style=background-color:#ccc>";
            echo "$start<br>";
        }else {
            echo "<p style=background-color:#fff>";
            echo "$start<br>";
        }
        
    }
}
    ?>
</body>

</html>
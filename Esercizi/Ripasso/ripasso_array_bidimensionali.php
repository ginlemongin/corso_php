<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array 3: a good day to array hard</title>
</head>

<body>
    <?php
    /* ARRAY BIDIMENSIONALI
    Fin ora abbiamo visto solo array con un solo valore dentro ciascun indice/chiave, 
    ma ci sono anche quelli con piu dimensioni (bidimensionali e multidimensionali)
    $studente0 = ['nome' => "mario", 'cognome' => "rossi", 'voto' => 10];
    $studente1 = ['nome' => "luigi", 'cognome' => "verdi", 'voto' => 8];

    // se volessi raggruppare in una variabile/array tutte queste info
    $studenti = [$studente0, $studente1];
    // il primo valore ha chiave 0, il secondo ha chiave 1
    // la variabile che abbiamo creato è a sua volta un array che contiene 
    // come primo elemento un array dove sono memorizzati tutti i suoi elementi specifici

    // se io volessi raggiungere il valore "mario" partendo da $studenti, come faccio?
    // $studenti[0] coincide con $studente0
    // $studente0[nome] coincide con "mario"
    // dunque:
    $studenti[0]['nome']; //semplicemente unisco entrambi!
    echo $studenti[0]['nome']; //mi stamperà "mario"

    echo "<hr>";
    // cosa vuol dire a questo punto fare un FOREACH di $studenti?
    foreach ($studenti as $s) {
        //do un nome all'elemento $i-esimo di $studenti => $s è come scrivere $studenti[$i]
        //ad ogni iterazione di quella variabile viene memorizzato l'array coi dati di ogni singolo studente
        // echo $s; //non lo posso assolutamente fare cosi!!
        echo $s['nome'] . "<br>"; //così invece siii, devo specificare la cella e mi stamperà tutti i nomi
    }

    // FOREACH INNESTATI
    // per scorrere tutti i valori dentro tutti gli array bidimensionali 
    // devo utilizzare due foreach innestati!
    echo "<hr>";
    foreach ($studenti as $s) {
        foreach ($s as $k => $v) {
            echo "$v<br>"; //stampo tutti i valori presenti nei miei array bidimensionali
        }
    }
    echo "<hr>";


    // ESERCIZIO
    $s1 = ['nome' => "Mario", 'cognome' => "Rossi", 'voto' => 10];
    $s2 = ['nome' => "Luigi", 'cognome' => "Verdi", 'voto' => 8];
    $s3 = ['nome' => "Maria", 'cognome' => "Rossini", 'voto' => 5];
    $s4 = ['nome' => "Osvaldo", 'cognome' => "Faustini", 'voto' => 3];

    $s = [$s1, $s2, $s3, $s4]; //questo bad mf li contiene tutti!

    print_r($s1); //stampo tutti i valori dentro il primo array
    echo "<br>";
    print_r($s); //così invece stampa tutto con davanti la chiave 0,1,2,3 per elencare gli array interni
    echo "<br>";

    echo "<br>";
    // tabella THML dentro la quale inserisco i dati
    echo "<table>";
    echo "<thead>";
    echo "<th>Nome</th>";
    echo "<th>Cognome</th>";
    echo "<th>Voto</th>";
    echo "</thead>";

    foreach ($s as $studente) { //chiamiamo $studente il $a di $i di ciascun elemento per scorrerli
        // print_r ($studente);
        echo "<tr>";
        echo "<td>" . $studente['nome'] . "</td>"; //così vedrò tutti i nomi
        echo "<td>" . $studente['cognome'] . "</td>"; //così i cognomi
        // così facendo non vedrò tutti i nomi e poi tutti i cognomi, vedo un nome e sotto il cognome!
        echo "<td>" . $studente['voto'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "<hr>";

/**/
    // ESERCIZIO PER CASA
    // creare la tabella sopra senza conoscere le chiavi dei singoli elementi di $s
    // (basically due for each innestati)
    $studente1 = ["Mario",   "Rossi",     10];
    $studente2 = ["Luigi",   "Verdi",      8];
    $studente3 = ["Maria",   "Rossini",    5];
    $studente4 = ["Osvaldo", "Faustini",   3];

    $studenti = [$studente1, $studente2, $studente3, $studente4]; //questo bad mf li contiene tutti!
    echo "<table>";
        echo"<thead>
                <th>Nome</th>
                <th>Cognome</th>
                <th>Voto</th>
            </thead>";
        
    foreach ($studenti as $studente) {
        echo "<tr>";
        foreach ($studente as $dato => $valore) {
            echo "<td>$valore</td>";
        }
        echo "</tr>";
    }
    "</table>";
    ?>
</body>

</html>
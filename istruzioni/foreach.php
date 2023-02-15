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
    //$val è una variabile non inizializzata prima che ad ogni ciclo viene valorizzata
    //'prof'=>"Bianchi" serve ad aggiungere una chiave stringa e valorizzarla
    //questo è un array Associativo perchè ad una chiave è associato un significato

    // $a=[5,6,8,2,14 =>3, 'chiave'=>"valore", 'prof'=>"Bianchi"];
    // $a['prof'] = "Rossi";

    // foreach($a as $val){
    //     //ad ogni ciclo vale 5, 6, ecc fino a Rossi
    //     echo $val;
    // }

    //quando un array è associativo bisogna usare il foreach, se usi sempre per tutti gli array il foreach non sbagli mai insomma
    // $a=[5,6,8,2,14 =>3, 'chiave'=>"valore", 'prof'=>"Bianchi"];
    // $a['prof'] = "Rossi";

    // foreach($a as $k=>$val){
    //     echo $val;
    // }

    //$a = []; //inizializo un array vuoto
    $a = ['mario' => 10, 'giacomo' => 1, 'maria' => 1, 'simone' => 5, 'giuseppe' => 8, 'materia' => 'HTML', 'prof' => ""]; //inizializzazione
    $a['coordinatore'] = "Sara Forlivesi";

    foreach ($a as $chiave => $valore) {
        echo "<br>[$chiave] => $valore";
    }

    echo "<hr>";
    //memorizzare in questo array $risultato le chiavi dell'array $a 
    //relative alle posizioni in cui è memorizzato il valore $val
    //cioè: chi ha preso 10???
    $val = 10;
    $risultato = []; //inizializzato ad array vuoto
    foreach ($a as $k => $v) {
        //$v valore dell'elemento considerato
        //$k chiave dell'elemento considerato
        //$v e $a[$k] sono la stessa cosa!!!!!
        if ($v == $val) {
            //trovato elemnto da aggiungere in $risultato
            $risultato[] = $k; //aggiunge in "fondo" all'array
        }
    }

    //assegno alla chiave prof ore Rossi se la materia è database
    //il valore Casadei se la materia è HTML
    if ($a['materia'] == 'database') {
        $a['prof'] = "Rossi";
    } else if ($a['materia'] == 'HTML') {
        $a['prof'] = "Casadei";
    }


    echo "La materia " . $a['materia'] . " insegnata da {$a['prof']} ha ottenuto questi risultati";
    if ($risultato) { //true se l'array ccontiene almeno 1 elemento
        echo "<br>Contenuto di risultato:";
        //con ciclo for
        for ($i = 0; $i < count($risultato); $i++) {
            echo "<br>" . $risultato[$i];
        }
        //con ciclo foreach (stessa cosa del ciclo sopra)
        foreach ($risultato as $r) {
            echo "<br>" . $r;
        }
    } else { //false se è un array vuoto
        echo "<br>Nessun risultato";
    }


//appunti davide giardi
    //FOR EACH
    // si utilizza per scorrere i valori di un QUALSIASI TIPO di array
    $arr = array(1, 2, 3, 4);
    foreach ($arr as $value) {
        // decido io di chiamare i contenuti di $partecipanti => $p
        // voglio scorrere l'intero array $p per fare la echo dei suoi contenuti
        $value = $value * 2;
    }

    //SCORRERE UN ARRAY ASSOCIATIVO
    // inizializzo un array vuoto con dentro i voti che corrispondono ai singoli studenti
    $a = ['mario' => 3, 'giacomo' => 10, 'jacopo' => 4, 'maria' => 10, 'simone' => 5, 'giuseppe' => 8];
    //qui non posso mica usare il ciclo for!! uso invece il FOR EACH
    foreach ($a as $chiave => $valore) { //la variabile $valore viene inizializzata automaticamente 
        // e contiene i singoli valori ad ogni interazione, uno per volta in ordine di inserimento
        echo "[$chiave] => $valore<br>";
    }

    // ESERCIZIO 2
    // aggiungo altri valori all'array
    $a['materia'] = "HTML";
    $a['prof'] = " "; //valore vuoto per ora
    $a['tutor'] = "adriano amadio";
    $a['coordinatore'] = "sara forlivesi";

    // assegno alla chiave 'prof' il valore 'rossi' se è database, 'casadei' se è HTML
    if ($a['materia'] == "database") {
        $a['prof'] = "rossi";
    } else {
        $a['prof'] = "casadei";
    }
    echo "La materia " . $a['materia'] . " insegnata da  {$a['prof']} ha ottenuto questi risultati";
    echo "<hr>";


    ESERCIZIO 1
    Memorizza in un nuovo array $risultato le chiavi dell'array $a (che è gia inizializzato e tutto) 
    relative alle posizioni in cui è memorizzato il valore $val, 
    cioè voglio sapere 'chi è che ha preso 10?'*/
    $val = 10;
    foreach ($a as $k => $v) { //per prima cosa scorro il mio array
        // ad ogni iterazione $v memorizza il valore dell'elemento considerato
        // ad ogni iterazione $k memorizza la chiave dell'elemento considerato
        // $v e $a[$k] sono la stessa cosa!!!!!
        if ($v == 10) { //se il valore della mia chiave è 10
            //in questo modo trovo un nuovo elemento da aggiungere in $risultato
            $risultato[] = $k;
            //aggiungo il nuovo elemento all'array $risultato con indice vuoto così fa lui in automatico
            //devo memorizzarci dentro le chiavi come loro valori per sapere chi ha preso 10
            //alla fine di questo ciclo l'array $risultato conterrà solo i nomi di coloro che hanno 10
        }
    }
    if ($risultato) { //sto valutando se ha elementi dentro (ora è vuoto quindi no)
        echo 'contenuto di $risultato => ';
        for ($i = 0; $i < count($risultato); $i++) {
            echo $risultato[$i] . " ";
        }
    } else {
        echo "nessun risultato trovato<br>"; //nel caso non ci siano dei 10
    }


    echo "oppure ";
    // oppure con il foreach
    foreach ($risultato as $r) {
        echo "$r ";
    }
 
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESERCIZIO SIMI-VERIFICA</title>
</head>

<body>
    <?php
    /*//     Esercizio PHP
// Sono forniti i 2 array elencati di seguito:
$corso1 = ["Primini Primo", "Secondini Secondo"]; //(partecipanti corso 1)
$corso2 = ["Giannini Gianni", "Stefanini Stefano", "Mariolini Maria","Giacomini Giacomo"]; //(partecipanti corso 2)
$corso3 = ["Violetti Viola","Gaietti Gaia"]; //(partecipanti corso 3)
$partecipanti= [$corso1, $corso2, $corso3];
$corsi = ["Autocad","Informatica","Inglese"];
Nell’array bidimensionale $partecipanti ogni elemento rappresenta un array di partecipanti ai
vari corsi svolti dall'ente di formazione Enaip. I singoli array $corso1, $corso2, ecc contengono i
cognomi e nomi dei partecipanti ad un corso specifico.
L’array $corsi contiene i nomi dei corsi, nello stesso ordine del primo, cioè il corso Autocad è
stato seguito dai partecipanti elencati in $corso1, Informatica è stato seguito dai partecipanti di $corso2,
ecc.*/
    /* 
    $p1 = ["Primini Primo", "Secondini Secondo"];
    $p2 = ["Giannini Gianni", "Stefanini Stefano", "Mariolini Maria", "Giacomini Giacomo"];
    $p3 = ["Violetti Viola", "Gaietti Gaia"];
    $partecipanti = [$p1, $p2, $p3];

    // un altro modo per scrivere il contenuto di $partecipanti
    // $partecipanti = [
    //     ["Primini Primo", "Secondini Secondo"],
    //     ["Giannini Gianni", "Stefanini Stefano", "Mariolini Maria", "Giacomini Giacomo"]    
    //     ["Violetti Viola", "Gaietti Gaia"]
    // ]; 
    $corsi = ["Autocad", "Informatica", "Inglese"];*/

    // Si chiede di svolgere le seguenti attività:
    // 1. aggiungere il nuovo partecipante "Novella Novellini" al corso di Informatica (aggiungere un elemento ad un array in posizione non specificata)
    // 2. elencare i nomi di tutti i partecipanti (di tutti i corsi)
    // 3. calcolare il numero medio dei partecipanti ai corsi
    // 4. indicare il nome del corso con il maggior numero di partecipanti
    // 5. tutti i partecipanti devono superare un esame di selezione, che si svolge nello stesso
    // giorno e con la stessa commissione: scrivere il nome del partecipante che sarebbe il
    // primo in ordine alfabetico a sostenere l'esame (tra tutti i partecipanti di tutti i corsi).
    // 6. si chiede di aggiungere in fondo ad ogni array dei partecipanti un ulteriore elemento, con
    // chiave 'corso' e valore il nome del corso, fornito nel secondo array (in $p1 avrò gli studenti e il corso corrispettivo).

    // --- PER CASA ---
    // Svolgere le stesse attività richieste sopra (escluso il punto 6) con questi array:
    // $s1=[‘cognome’=>"Primini", ‘nome’=>"Primo",’corso’ =>
    // "Autocad"];$s2=[‘cognome’=>"Secondini", ‘nome’=>"Secondo",’corso’ => "Autocad"];
    // $s3=[‘cognome’=>"Giannini", ‘nome’=>"Gianni",’corso’ => "Informatica"];
    // …
    // $studenti = [$s1, $s2, $s3, …];


    //arrays partecipanti ai corsi
    $corso1 = ["Primini Primo", "Secondini Secondo"];
    $corso2 = ["Giannini Gianni", "Stefanini Stefano", "Mariolini Maria", "Giacomini Giacomo"];
    $corso3 = ["Violetti Viola", "Gaietti Gaia",];
    //array bidimensionale
    $partecipanti = [$corso1, $corso2, $corso3];
    //Array con i nomi dei corsi
    $corsi = ["Autocad", "Informatica", "Inglese"];

    /* 1. aggiungere il nuovo partecipante "Novella Novellini" al corso di Informatica 
    (aggiungere un elemento ad un array in posizione non specificata)*/
    $corso2[] = "Novella Novellini";

    // 2. elencare i nomi di tutti i partecipanti (di tutti i corsi)
    echo "<p><b>Elenco partecipanti ai corsi</b></p>";
    //2.apro un elenco ordinato
    echo "<ol>";

    // 3. calcolare il numero medio dei partecipanti ai corsi
    //3.definisco variabile per il totale dei partecipanti
    $somma = 0;

    foreach ($partecipanti as $corso) {

        /*3.conto gli elementi degli array facenti parte dell'array partecipanti
        e li sommo a $somma ad ogni iterazione*/
        $somma += count($corso);

        //2.ad ogni iterazione stampo il valore dell'indice $nome nell'elenco
        foreach ($corso as $nome => $value) {

            echo "<li>$value</li>";
            //5. aggiungo tutti i nomi all'array $nomi
            $nomi[]="$value";
        }
    }
    //2.fare echo anche della chiusura del tag altrimenti non lo chiude a schermo e l'elenco diventa endless
    echo "</ol>";
    echo "<hr>";

    //3.la variabile $somma viene divisa per il numero degli elementi di array $partecipanti
    echo "media partecipanti ai corsi: " . $somma / count($partecipanti);
    echo "<hr>";


    //4. indicare il nome del corso con il maggior numero di partecipanti
    //4.definisco variabile per il corso con il maggior numero dei partecipanti
    //array keys stampa gl iindici voglio contare l'array piu grande e stampare il suo indice
    //print_r(array_keys($corso)) ; stampa sia l'array dove si ferma il foreach sia gl iindici dell'array dove si è fermato
    /*
    $max_array = 0;
    foreach ($partecipanti as $corso) {
        
        if (count($corso) > $max_array) {

            $max_array = count($corso);

            // print_r(array_keys($corso));

            // echo count($corso);
        }
    }
    */
    
    //4.alternativa: contare tutti gli array e confrontarli
    $ncorso1 = count($corso1); //conto per ogni corso quanti elementi hanno al loro interno
    $ncorso2 = count($corso2);
    $ncorso3 = count($corso3);
    if ($ncorso1 > $ncorso2 && $ncorso1 > $ncorso3) { //se corso1 ha più elementi di corso2 e corso3
        echo "Autocad è il corso con il maggior numero di partecipanti";
    }elseif ($ncorso2 > $ncorso1 && $ncorso2 > $ncorso3) { //se corso2 ha più elementi di corso1 e corso 3
        echo "Informatica è il corso con il maggior numero di partecipanti";
    }elseif ($ncorso3 > $ncorso1 && $ncorso3 > $ncorso2) { //se corso3 ha più elementi di corso1 e corso2
        echo "Inglese è il corso con il maggior numero di partecipanti";
    }else { //altrimenti, nel caso fossero tutte uguali (questo else è facoltativo)
        echo "Tutti i corsi hanno lo stesso numero di elementi";
    }
    echo "<hr>";



    /*5. tutti i partecipanti devono superare un esame di selezione, che si svolge nello stesso
    giorno e con la stessa commissione: scrivere il nome del partecipante che sarebbe il
     primo in ordine alfabetico a sostenere l'esame (tra tutti i partecipanti di tutti i corsi).*/
     //5.ordino in ordine alfabetico l'array $nomi
    sort($nomi);
    //5.stampo il nome
    echo "Il primo a sostenere un esame è: " . $nomi[0];
    
    /*6. si chiede di aggiungere in fondo ad ogni array dei partecipanti un ulteriore elemento, con
     chiave 'corso' e valore il nome del corso, fornito nel secondo array (in $p1 avrò gli studenti
    e il corso corrispettivo).*/

    $corso1['corso']="Autocad";
    $corso2['corso']="Informatica";
    $corso3['corso']="Inglese";
    print_r($corso1);
    print_r($corso2);
    print_r($corso3);

    /*//la materia del corso viene assegnata sulal base della corrispondenza tra l'indice di partecipanti e dell'array corsi
    foreach ($partecipanti as $corso => $value) {
        $nome_corso = $corsi[$corso];
        $value['corso'] = $nome_corso;
        print_r($value);
        echo "<br>";
        
    }*/
    

    //soluzione docente
    /*
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
    }*/
    ?>
</body>

</html>
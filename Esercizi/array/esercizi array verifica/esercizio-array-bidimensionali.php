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
$p1 = ["Primini Primo", "Secondini Secondo"]; //(partecipanti corso 1)
$p2 = ["Giannini Gianni", "Stefanini Stefano", "Mariolini Maria","Giacomini Giacomo"]; //(partecipanti corso 2)
$p3 = ["Violetti Viola","Gaietti Gaia"]; //(partecipanti corso 3)
$partecipanti= [$p1, $p2, $p3];
$corsi = ["Autocad","Informatica","Inglese"];
Nell’array bidimensionale $partecipanti ogni elemento rappresenta un array di partecipanti ai
vari corsi svolti dall'ente di formazione Enaip. I singoli array $p1, $p2, ecc contengono i
cognomi e nomi dei partecipanti ad un corso specifico.
L’array $corsi contiene i nomi dei corsi, nello stesso ordine del primo, cioè il corso Autocad è
stato seguito dai partecipanti elencati in $p1, Informatica è stato seguito dai partecipanti di $p2,
ecc.*/

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
    $corsi = ["Autocad", "Informatica", "Inglese"];

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

    // ---------------------------------------------------------------------------------------------------------------------------------------------------------- //

    // 2. elencare i nomi di tutti i partecipanti (di tutti i corsi) => devo scorrere tutti i partecipanti
   
    // foreach ($partecipanti as $i => $p) { // decido io di chiamare i contenuti di $partecipanti => $p
    //     // questo mi serve per prendere in mano i singoli valori $a[$i-esimi] di $partecipanti
    //     // $p è quindi la variabile generica che memorizza un elemento di $p1, $p2, $p3 ad ogni iterazione!
    //     // voglio scorrere l'intero array $p per fare la echo dei suoi contenuti
    //     echo "Elenco dei partecipanti del corso " . $corsi[$i] . ":<br>";
    //     echo "<ol>";
    //     foreach ($p as $nome) { //decido di chiamare i contenuti di ogni $p => $nome
    //         // in questo modo scorro tutti gli elementi di $p1, $p2, $p3
    //         echo "<li>" . $nome . "</li>";;
    //     }
    //     echo "</ol>";
    // }
    

    // for ($i = 0; $i < count($partecipanti); $i++) {
    //     $p = $partecipanti[$i]; //array monodimensionale
    //     $nome_corso = $corso[$i];
    //     //echo $p[$i];
    //     //for($i=0) se usassi lo stesso indice in due cicli innestati cambierei anche l'indice superiore, devo chiamarlo in un altro modo
    //     for($j=0; $j <count($p); $j++ ){
    //         //echo $a[$j];//scrive tutti gli elementi di $a che è array monodimensionale
    //         $nome = $p[$j];
    //         echo $nome . "<br>";
    //     }    
    // }

    // $a = [1, 2, 3];
    // for ($i = 0; $i < count($a); $i++){
    //     $b = $a[$i];
    //     echo $b;
    // }
//la variabile $b è inizializzata dentroi il ciclo solo per non 
//usare sempre la variabile $i


//ricomincio a seguire la consegna dell'esercizio
   //inizio dal punto 2
   foreach ($partecipanti as $p) {
    foreach ($p as $nome) {
        echo $nome . "<br>";
    }
}

echo "<hr>";
//inizio dal punto 2
$somma = 0;
if ($partecipanti)
    $max_partecipanti = count($partecipanti[0]);

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
    //4 con variante

    echo "Elenco dei partecipanti del corso " . $corsi[$i] . ":<br>";
    echo "<ol>";
    foreach ($p as $nome) {
        echo "<li>" . $nome . "</li>";
    }
    echo "</ol>";
}

echo "<hr>";
if ($corsi) { //se vero c'è almeno 1 elemento
    echo "3) la media vale " . ($somma / count($corsi));
} else { //se falso, è un array vuoto
    echo "3) non ci sono corsi!";
}


    echo "<hr>";
    if ($corsi) { //se vero c'è almeno 1 elemento
        echo "3) la media vale " . ($somma / count($corsi));
    } else { //se falso, è un array vuoto
        echo "3) non ci sono corsi!";
    }

    ?>
</body>

</html>
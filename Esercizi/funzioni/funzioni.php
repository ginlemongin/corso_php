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
    // function nomef($a,$b){

    //}
    //è possibile forzare il rtipo di dato perche le funzioni solitamente sono debolmente tipizzate
    //quando viene chiamata la funzione nomef($x,1); i parametri vengono passati come argomenti in base alla posizione
    //quindi le variabili $a,$b vengono inizializzate
    //le variabili $a,$b esistono solo all' interno della funzione dopo l'ultima graffa non vengono più considerate, tutta la funzione esiste solo //
    //dentro se stessa
    //neòlla programmazione procedurale noi i nomi li separiamo con _ media_promossi
    //nella programmazione ad oggetti useremo il CamelCase
    //per calcolare la media dei promossi dai voti di un array dovrai passare alla funzione un array. Quando dovrai progettare una funzione andranno decise
    //i paramentri di ingresso fondamentali

    // function media_promossi($a,$s){
    //     foreach($a as $v){
    //         if($v >= $s){
    //             $somma += $v; $i++;
    //         }
    //     }
    //     $m=$i>0?($s/$i):0);
    // }
    // //solitmente le echo non stanno dentro le funzioni perhè una funziona serve per essere riutilizzata
    // media_promossi($a,6)

    //apppunti Davide Giardi
    // /*FUNZIONI
    // Sono delle sorta di scatolette che ricevono qualcosa e restituiscono qualcos'altro di trasformato
    // input (1,2) ==> [FUNZIONE SOMMA] ==> output (3)
    // Abbiamo gia visto alcune funzioni, tra cui DATE, COUNT, RAND 
    // che vogliono sempre qualcosa in ingresso come input per poter fornire il loro output
    // Queste sono funzioni standard previste dal codice, ma ne possiamo anche creare di nostre personalizzate
    // Definire queste funzioni cusom mi permette di riutilizzare il loro codice senza scrivere tutto ogni volta!
    // Un altro vantaggio è che rende molto piu leggibile il codice, 
    // soprattutto grazie ai commenti che mi dicono cosa fa ciascuna funzione*/

    // // tutte le funzioni hanno questa sintassi:
    // $r = rand(1, 100);
    // // prima un nome poi tra parentesi gli input, che si chiamano parametri, $r è il risultato
    // // i parametri di ingresso talvolta potrebbero non essere necessari!

    // // creiamo una funzione custom
    // $r = mia_somma(3, 2);
    // // ogni volta che l'interprete php trova una sintassi che definisce una funzione si mette a cercare
    // // in un punto qualunque del mio codice corrente se ho gia definito questa funzione

    // // come si definisce una funzione?
    // // per prima cosa scrivo la parola chiave FUNCTION, serve per dire 'sto definendo una funzione'
    // function mia_somma($a, $b)
    // { // così definisco la mia funzione, indicandone i parametri di input
    //     // dentro le graffe scrivo il codice che deve eseguire la funzione
    //     $risultato = $a + $b; //questa è l'operazione da svolgere
    //     // le variabili che appaiono dentro la FUNCTION sono celle di memoria
    //     // temporanee, che hanno visibilità SOLO DENTRO alla funzione e non interferiscono
    //     // con ciò che c'è fuori dalla mia funzione!
    //     // finita la funzione le mie variabili $risultato, $a, $b si resettano,
    //     // hanno ciclo di vita e visibilità solo interne alla funzione!
    //     return $risultato;
    //     // utilizzando RETURN posso salvarmi il valore della mia operazione 
    //     // e RESTITUIRLA alla funzione che la ha richiamata => $r = mia_somma(3, 2);
    //     // inoltre, tutto ciò che scrivo dopo return non conta 
    //     // perche è il terminatore della mia funzione
    //     // return lo scrivo sempre come ultima cosa prima di chiudere la graffa
    // }


    // // voglio scrivere una funzione che calcola la media dei promossi soltanto
    // // per farlo devo passargli l'array per dirgli in modo dinamico quanti voti
    // // e di che valore sono ($a è l'array dunque, $s è il voto minimo sufficiente)
    // // questi sono i due valori fondamentali per poter eseguire questa funzione
    // function media_promossi($a, $s)
    // { // inizializzo dei valori dentro la funzione
    //     $somma = 0; 
    //     $i = 0;
    //     foreach ($a as $voto) {
    //         if ($voto >= $s) {
    //             $somma += $voto;
    //             $i++;
    //         }
    //     }
    //     return ($i > 0 ? ($s / $i) : 0);
    // }

    // FUNZIONI DEFAULT
// Su PHP ci sono un sacco di funzioni di default che iniziano tutte
// con array_ per quelle che si usano per gli array, etc
// Se mi servono funzioni specifiche vado su google e cerco quello che mi serve!


// array_sum (array $array) : int|float (restituisce o un intero o un num decimale)

// count — Counts all elements in an array or in a Countable object
// count(Countable|array $value, int $mode = COUNT_NORMAL): int

// array_key_exists — Checks if the given key or index exists in the array
// array_key_exists(string|int $key, array $array): bool (ti restituisce ture o false)

// array_keys — Return all the keys or a subset of the keys of an array
// array_keys(array $array, mixed $filter_value, bool $strict = false): array

// array_push — Push one or more elements onto the end of array
// array_push(array &$array, mixed ...$values): int

// extract — Import variables into the current symbol table from an array
// extract(array &$array, int $flags = EXTR_OVERWRITE, string $prefix = ""): int

// substr — Returns the portion of string specified by the offset and length parameters.
// substr(string $string, int $offset, ?int $length = null): string
// offset è lo spostamento, se è 1 mi sposto di un carattere nella stringa "pippo" => "ippo"
// se l'offset è negativo lo spostamento lo faccio dal fondo "pippo" => "pipp"
// ?int $length = null è un parametro opzionale che quando richiami la funzione
// può esserci o meno, nella funzione viene sempre definito un valore di default
// che viene inserito automaticamente se non lo si specifica nella chiamata

// i parametri opzionali si segnano come ultimi di una funzione e gli si da un = valore default


// str_replace — Replace all occurrences of the search string with the replacement string
// str_replace(
//     array|string $search, (elemento da cercare = lettera P)
//     array|string $replace, (elemento da sostituire = lettera C)
//     string|array $subject, (elemento in cui cercare = pippo)
//     int &$count = null
// ): string|array (restituirà pippo => cicco)


// explode — Split a string by a string
// explode(string $separator, string $string, int $limit = PHP_INT_MAX): array
// mi restituisce un array come risultato, perche ogni funzione può restituire
// un singolo dato, quindi qui siccome saranno molti te li mette in un array


// number_format — Format a number with grouped thousands
// può servire perche nei database separiamo i numeri decimali con il punto
// mentre sul browser ci servono scritti con la virgola
// number_format(
//     float $num, (numero decimale)
//     int $decimals = 0, (numero di decimali con cui voglio scriverlo)
//     ?string $decimal_separator = ".", (simbolo che rappresenta il separatore dei decimali)
//     ?string $thousands_separator = "," (separatore delle migliaia)
// ): string


// strpos — Find the position of the first occurrence of a substring in a string
// strpos(string $haystack, string $needle, int $offset = 0): int|false
// con === si verifica se il contenuto e il tipo di dato è uguale
    
    ?>
</body>
</html>
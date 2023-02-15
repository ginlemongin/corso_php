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
    // //array vuoto
    // $a=[];//l'array vuoto è come il bool FALSE

    // //ho inzializzato automaticamente 5 elementi con indici 0 1 2 3 php parte da solo dallo 0
    // $a=[5,6,8,2];
    //     echo $a=[2];//così stampo il valore all'indice 2 (8)

    // $a=[2] = 10;//assegno all'indice 2 un valore 10

    // $a=[4] = 100;//aggiungo un indice all' array di valore 100

    // //vorrei aggiungereun indice all'array senza tenere traccia degli indici. Aggiunge l'indice numerico piu alto +1
    // $a=[] = 10;


    //a volte ci sono dei buchi negli array
    // $a=[25] = 1;//aggiungo indice 25 lasciando vuoti da 4 a 25
    //     for ($i=0; $i<count($a), $i++){
    //         $a[$i];
    //     }

    //     $a=[] = 10;//aggiunge l'indice numerico piu alto +1 (26)
    //in questi casi non posso piu scorrere il mio array con il ciclo for il ciclo for quindi si usa solo se l'array ha indici nuerici
    //consecutivi

    //gli indici degli array (chiavi) non sono sempre numerici potrebbero essere delle stringhe!!Potrei refernziare un elemento dell'array
    //con un nome "chiave-> Mario Rossi = Viale Bovini 2"

    //l'array è talmente debolmente tipizzato che nello stesso array potresti avere chaivi stringe e chaivi numeriche insieme
    //una chiave può essere inizializzata con una stringa anche -> $a['prof'] = "Rossi";


    //$a = []; //inizializzo un array vuoto
    // $a = ['mario'=> 3, 'giovanni' => 10, 'maria' => 10, 'simone' => 5, 'giuseppe' => 8];
    // //la variabile $valore è inizializzata dall'interprete php automaticamente
    // foreach ($a as $chiave => $valore) {
    //     echo "<br>[$chiave] => $valore";
    // }


    //memorizzare in $risultato le chiavi dell'array $a 
    //relative alle posizioni in cui è memorizzato il valore $val
    //cioè: chi ha preso 10???

    //possiamo scorrere un array associativo ed 
    //aggiungere un array con elementi consecutivi
    $a = ['mario' => 3, 'giacomo' => 10, 'maria' => 10, 'simone' => 5, 'giuseppe' => 8, 'prof' => "",'materia'=>'HTML'];
    $a['tutor'] = "Adriano Amadei";
    $a['coordinatore'] = "Sara Forlivesi";
    foreach ($a as $chiave => $valore) {
        echo "<br>[$chiave] => $valore";
    }
    echo "<hr>";
 
    $val = 10
    $risultato = []; //inizializzato ad array vuoto;
    foreach($a as $k => $v){
        //$v valore dell'elemento considerato
        //$k chiave dell'elemento considerato
        //$v e $a[$k] sono la stessa cosa!!!!!
        if( $v == $val ){//$v memorizza il valore dell'elemento corrente
           //trovato elemnto da aggiungere in $risultato
           $risultato[] = $k; //aggiunge in "fondo" all'array
    }
}

    //assegno alla chiave prof ore Rossi se la materia è database
    //il valore Casadei se la materia è HTML
    if($a['materia'] == 'database'){
        $a['prof'] = "Rossi";
    }else if($a['materia']=='HTML'){
        $a['prof'] = "Casadei";
    }
echo "La materia " . $a['materia'] . " insegnata da {$a['prof']} ha ottenuto questi risultati";
if ($risultato) { //true se l'array contiene almeno 1 elemento
    //ciclo for che stampa l'array
    echo "<br>Contenuto di risultato:";
    for ($i = 0; $i < count($risultato); $i++) {
        echo "<br>" . $risultato[$i];
    }
    //stessa cosa del ciclo sopra
    foreach ($risultato as $r) {
        echo "<br>" . $r;
    } 
}else { //false se è un array vuoto
        echo "<br>Nessun risultato";
    }


    //appunti davide giardi
/*Fin ora abbiamo visto gli array con indici numerici e tutti consecutivi, ma in realtà
    non si presentano sempre così, eeh, voleeeevi!*/

    $a = []; //così si rappresenta un array vuoto, che di default vale FALSE
    $a = [5, 6, 8, 2]; //così inizializzo un array con i suoi elementi, ordinatamente
    // distribuiti nei suoi indici 0, 1, 2, 3
    $a[2] = 10; // in questo modo invece assegno un valore diverso all'indice 2, 
    // sostituendo il valore 8 che c'era prima
    $a[4] = 12; // così invece aggiungo un nuovo elemento all'array in un nuovo indice
    $a[] = 15; //in questo modo invece aggiungo un nuovo elemento 
    // nel primo indice disponibile consecutivo a quelli gia esistenti (in questo caso il 5)

    //ma talvolta può capitare che negli indici del mio array ci sono dei buchi!
    $a[25] = 8; //aggiungo un indice 25 lasciando vuoti quelli da 4 a 25, OMG!
    /*in questi casi non posso più scorrere il mio array con il ciclo for :c
    il ciclo for quindi si usa solo se l'aray ha indici numerici consecutivi*/
    // se dopo aver fatto questo aggiungessi un altro elemento così
    $a[] = "pippo"; // lui lo aggiungerà nell'indice 26, non va a riempire i buchi precedenti!

    /*inoltre gli indici degli array possono essere anche STRINGHE (non solo numeri)! che schifo!
    in questi casi utilizzare un indice mnemonico fa perdere di significato al termine 'posizione'
    l'array diventa un semplice contenitore di elementi non consecutivi, 
    e prendono il nome di ARRAY ASSOCIATIVI*/
    $a["prof"] = "rossi";


    /*in questi tipi di array utilizziamo un altra istruzione, FOR EACH, 
    che indica 'per ogni elemento di $a*/
    foreach ($a as $valore) { //per ogni elemento di $a che chiamero $valore
        echo "$valore<br>";
        //così facendo stamperà tutti i valori non vuoti, compresi le stringhe di testo
    }
    echo "<hr>";


    // un altro modo per assegnare indice e valore in modo piu specifico è tramite il simbolo =>
    $a = [1, 5, 8, 3 => 4, 'chiave' => "valore"];
    // 3 (indice) => 4 (valore)
    // 'chiave' (tra gli apici singoli) => "valore" (tra virgolette)

    // utilizzare il foreach per gli array non sbagli mai!
    foreach($a as $k => $v){
        echo "$v<br>";
    }

    ?>
</body>
</html>
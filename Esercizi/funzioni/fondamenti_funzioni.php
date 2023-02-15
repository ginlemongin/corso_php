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
    function nomefunzione(){ //per creare una funzione uso "function" e di fianco ci metto il suo nome, con le varie parentesi
        echo "ciao Luca"; //qui ci scrivo il contenuto di essa
    }
    nomefunzione(); //richiamo la funzione semplicemente scrivendo il suo nome

    $prova = function(){ //funzione anonima senza nome. Attribuisco il suo valore a una variabile che chiamerò $prova
        echo "Ciao Marco";
    };
    $prova(); //per richiamare la funzione anonima messa dentro al variabile, basta scrivere il nome della variabile con di fianco le parentesi
    echo "<hr>";
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$numero = 5; //se definisco una variabile fuori dalla funzione, non posso richiamare quella variabile così

function blabla(){
    echo $numero; //ci dà errore, perché quello che succede fuori dalla funzione, resta fuori
}//la funzione prende i dati solo dall'interno di essa
    
//se vogliamo chiamare una variabile esterna e metterla dentro una funzione, bisogna fare così
    function blabla2(){
       $GLOBALS['numero'] = 10; //qui ho modificato la variabile $numero mettendogli 10 invece di 5
       echo $GLOBALS['numero']."<br>";
    }
    echo $numero."<br>"; //qui stamperà il valore della variabile $numero assegnato fuori dalla funzione
    echo blabla2(); //qui mi stamperà il valore che ho cambiato all'interno della funzione
    echo "<hr>";
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    function somma($valore1, $valore2){ //ho creato una funzione somma per sommare due valori, che ancora non ho specifcato
        $sommavalori = $valore1 + $valore2; //creo la variabile che conterrà il risultato e le dico di stamparlo
        echo $sommavalori;
    }
    somma($numero,13); //richiamo la funzione e le metto dentro i due valori: nel primo ho ripreso $numero modificato precedentemente nell'altra funzione, nel secondo gli ho messo 13
    echo "<br>";
    somma(50,100); //posso richiamarla quante volte voglio, mettendogli tutti i valori che voglio
    echo "<br>";
    //questa cosa la possiamo fare anche in quest'altro modo:
    function somma2($valorex, $valorey = 92){ //in questo modo ho specificato il valore di default nella parentesi, in modo da avere sempre un punto di partenza
        $sommavalori2 = $valorex + $valorey;
        echo $sommavalori2;
    }
    somma2($numero); //dato che il secondo valore è già stato specificato prima, basta mettere solo il primo. Se mettiamo comunque il secondo valore, esso verrà preso. Il default funziona solo se non abbiamo nulla da specificare
    echo "<hr>";
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    //return
    function somma3($valorexx, $valoreyy){ 
        $sommavalori3 = $valorexx + $valoreyy;
        return $sommavalori3; //si usa il return per restituire il risultato. Meglio questo di echo
    }
    echo somma3($numero,27);
    echo "<br>";

    //possiamo anche salvare l'operazione della funzione in una variabile
    $numerox = 49; //innanzitutto specifico quali numeri usare
    $numeroy = 57;
    $nuovasomma = somma3($numerox, $numeroy); //creo una variabile nuova a cui affidare il risultato della funzione e ci specifico dentro quali valori usare
    echo $nuovasomma; //la mando a schermo
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    //return type si usa per tipizzare la funzione, utile in fase di debug
    function somma4(int $valorex2, int $valorey2): int{ //mettendogli ": int" alla fine della tonda, diciamo alla funzione che abbiamo a che fare con interi
        $sommavalori4 = $valorex2 + $valorey2;
        return 'ciao'; //gli ho messo una stringa, quindi dato che abbbiamo specificato alla funzione che vogliamo lavorare con interi, mi darà errore
    }
    echo somma4(12,37);//darà errore dicendo che abbiamo bisogno di interi, non di stringhe

    //rifaccio usando interi
    function somma5(int $valorex2, int $valorey2): int{
        $sommavalori4 = $valorex2 + $valorey2;
        return $sommavalori4; // gli ho messo la variabile contenente i due interi
    }
    echo somma5(12,37); //l'operazione verrà visualizzata senza problemi

    
    
    
    
    
    
    
    
    
    ?>  
</body>
</html>
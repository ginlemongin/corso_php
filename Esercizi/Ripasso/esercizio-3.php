<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio 3</title>
</head>
<body>
<h2>Esercizio PHP su array bidimensionali e funzioni</h2>
<p>
Sono forniti gli array elencati di seguito (i valori memorizzati sono solo indicativi) utilizzati per
monitorare la correttezza delle risposte della chat aziendale del sito internet:
</p>
<p>
$domanda1 = array('categoria' => 'commerciale', 'risposta_corretta' => 0);<br>
$domanda2 = array('categoria' => 'assistenza', 'risposta_corretta' => 1);<br>
$domanda3 = array('categoria' => 'assistenza', 'risposta_corretta' => 0);<br>
$domande = [$domanda1, $domanda2, $domanda3];<br>
</p>
<p>
Si chiede di svolgere le seguenti attività:
<ol>
    <li>
    elencare le categorie delle domande (senza ripetizione!)
    </li>
    <li>
    quante sono le risposte corrette? (il valore 1 corrisponde alla risposta corretta);

    </li>
    <li>
        definire la funzione che ha come parametro d’ingresso l’array $domande e restituisce il nome della categoria più utilizzata;

    </li>
    <li>
        modificare la funzione del punto precedente in modo che restituisca anche il numero di volte che è stata utilizzata la categoria (N.B. una funzione può restituire 2 valori solo restituendo un array)

    </li>
    <li>
        se ogni risposta alle domande costasse all’azienda 50 centesimi di euro, quanto sarebb costato rispondere alle domande? (scrivere i numeri nel formato corretto!)

    </li>

</Ol>
</p>
<br>




    <?php
    $domanda1 = array('categoria' => 'commerciale', 'risposta_corretta' => 0);
    $domanda2 = array('categoria' => 'assistenza', 'risposta_corretta' => 1);
    $domanda3 = array('categoria' => 'assistenza', 'risposta_corretta' => 0);
    $domande = [$domanda1, $domanda2, $domanda3];
   
    //1. elencare le categorie delle domande (senza ripetizione!)

    // inizializzo un'array enumerativo che racchiude tutte le categorie delle domande
    // e lo inizializzo ad array vuoto
    $categorie =[];
       
    //inizializzo il contattore d3elle risposte
    $risposte=0;
    //inizializzo il contattore d3elle risposte corrette
    $risposte_corrette = 0; 
    foreach ($domande as $domanda) { // scorro tutte le domande in $domande
        //incremento il conteggio delle risposte
        $risposte++;
        //incremento il conteggio delle rtisposte corrette
        //N.B. 'risposta corretta' è uguale a 1 solo se è corretta per cui
        // posso tranquillamente sommare tutte le 'risposta_corretta' 
        $risposte_corrette += $domanda['risposta_corretta'];

        //cerco se è già presente la categoria nell'array posizionale $categoria
        if (!(in_array($domanda['categoria'], $categorie))){ //non è presente
            $categorie[]=$domanda['categoria'];
        }
    
    }
        
    echo '<hr>';
    echo '1. elencare le categorie delle domande (senza ripetizione!)';
    echo '<hr><br>';
    echo 'le categorie sono: <br>';
    echo '<ul>';
    for ($i=0; $i < count($categorie); $i++) { 
        echo '<li>'. $categorie[$i] .'</li>';
    }
    echo '</ul>';

    

    //2. quante sono le risposte corrette? (il valore 1 corrisponde alla risposta corretta);
    
    echo '<br><hr>';
    echo '2. quante sono le risposte corrette';
    echo '<hr><br>';
    echo 'Le risposte corrette sono: '.$risposte_corrette.'<br>'; 
    
    /*
    3. definire la funzione che ha come parametro d’ingresso l’array 
    $domande e restituisce il nome della categoria più utilizzata;
    */
    
    function categoria_migliore($array_di_domande){
        
        $occorrenze = []; // inizializzo un array del tipo ['nome categoria'=> occorrenze]
        
        foreach ($array_di_domande as $domanda_in_esame) { 
            // scorro tutte le domande in $domande e popolo l'array $occorrenze
            $categoria_int = $domanda_in_esame['categoria'];
            
            //cerco se è già presente la 'categoria' della $domanda_in_esame come chiave nell'array $occorrenze
            if (array_key_exists($categoria_int, $occorrenze)){ //è presente
                
                /*
                incremento di uno il valore del campo dell'array $occorrenze che ha 
                per chiave il nome della 'categoria' della domanda che sto esaminando 
                */
                $occorrenze[$categoria_int] += 1;

            }else{ // non è presente
                
                /*
                aggiungo un nuovo campo nell'array $occorrenze che ha per chiave il nome 
                della 'categoria' della domanda che sto esaminando e come valore 1 (è la prima occorrenza) 
                */
                $occorrenze[$categoria_int] = 1; 
                
            }
            
        }
        // ordino in modo discendente l'array $occorrenze con la funzione arsort
        arsort($occorrenze);
        
        /*
        estraggo l'indice del primo valore di $occorrenze che ora rappresente la 
        categoria  più utilizzata
        */
        
        $i = 0; //inizializzo un contatore per sapere che elemento sto visitando
        foreach ($occorrenze as $categoria => $value) {
            if ($i == 0){ //prendo in considerazione solo il primo valore dell'array
                $categoria_maggiore = $categoria;
                $i++;
            }
        }
        return $categoria_maggiore;
    }
    
    echo '<br><hr>';
    echo '3. la funzione per determinare il nome della categoria più utilizzata';
    echo '<hr><br>';
    echo 'La categoria più utilizzata è: <b>'.categoria_migliore($domande).'</b><br>'; 
    
    /*
    4. modificare la funzione del punto precedente in modo che restituisca anche il numero di volte
    che è stata utilizzata la categoria (N.B. una funzione può restituire 2 valori solo restituendo
    un array)
    */ 
    
    function categoria_migliore_valorizzata($array_di_domande){
        
        $occorrenze = []; // inizializzo un array del tipo ['nome categoria'=> occorrenze]
        
        foreach ($array_di_domande as $domanda_in_esame) { 
            // scorro tutte le domande in $domande e popolo l'array $occorrenze
            $categoria_int = $domanda_in_esame['categoria'];
            
            //cerco se è già presente la 'categoria' della $domanda_in_esame come chiave nell'array $occorrenze
            if (array_key_exists($categoria_int, $occorrenze)){ //è presente
                
                /*
                incremento di uno il valore del campo dell'array $occorrenze che ha 
                per chiave il nome della 'categoria' della domanda che sto esaminando 
                */
                $occorrenze[$categoria_int] += 1;
                
            }else{ // non è presente
                
                /*
                aggiungo un nuovo campo nell'array $occorrenze che ha per chiave il nome 
                della 'categoria' della domanda che sto esaminando e come valore 1 (è la prima occorrenza) 
                */
                $occorrenze[$categoria_int] = 1; 
                
            }
            
        }
        // ordino in modo discendente l'array $occorrenze con la funzione arsort
        arsort($occorrenze);
        
        /*
        estraggo l'indice del primo valore di $occorrenze che ora rappresente la 
        categoria  più utilizzata
        */
        
        $i = 0; //inizializzo un contatore per sapere che elemento sto visitando
        foreach ($occorrenze as $categoria => $value) {
            if ($i == 0){ //prendo in considerazione solo il primo valore dell'array
                $categoria_maggiore_valorizzata[0]= $categoria;
                $categoria_maggiore_valorizzata[1]= $value;
                $i++;
            }
        }
        return $categoria_maggiore_valorizzata;
    }


    echo '<br><hr>';
    echo '4. la funzione che restituisce un array con la categoria più utilizzata e il numero delle occorrenze';
    echo '<hr><br>';
    
    $cat_val = categoria_migliore_valorizzata($domande);
    
    echo 'La categoria più utilizzata è: <b>'.$cat_val[0].'</b> con <b>'.$cat_val[1].'</b> occorrenze <br>'; 
    
    echo '<br><hr>';
    echo '5. costo di tutte le risposte se una costa 50 centesimi di euro';
    echo '<hr><br>';

    $costo_risposta = 50; //in centesimi di euro
   $spesa_totale=($risposte*$costo_risposta/100);  
    
    $spesa_totale_form = number_format(($risposte*0.5), 2, "," , ".");
    echo 'la spesa totale è di :<b>' .$spesa_totale_form.' €</b>';
    ?>
</body>
</html>
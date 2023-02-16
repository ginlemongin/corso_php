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
    /*

        Esercizio PHP su array bidimensionali e funzioni
        Sono forniti gli array elencati di seguito (i valori memorizzati sono solo indicativi) utilizzati per
        monitorare la correttezza delle risposte della chat aziendale del sito internet:
        $domanda1 = array(‘categoria’ => “commerciale”, ‘risposta_corretta’ => 0);
        $domanda2 = array(‘categoria’ => “assistenza”, ‘risposta_corretta’ => 1);
        $domanda3 = array(‘categoria’ => “assistenza”, ‘risposta_corretta’ => 0);
        $domande = [$domanda1, $domanda2, $domanda3];
        Si chiede di svolgere le seguenti attività:
        1. elencare le categorie delle domande (senza ripetizione!)
        2. quante sono le risposte corrette? (il valore 1 corrisponde alla risposta corretta);
        3. definire la funzione che ha come parametro d’ingresso l’array $domande e restituisce il
        nome della categoria più utilizzata;
        4. modificare la funzione del punto precedente in modo che restituisca anche il numero di volte
        che è stata utilizzata la categoria (N.B. una funzione può restituire 2 valori solo restituendo
        un array)
        5. se ogni risposta alle domande costasse all’azienda 50 centesimi di euro, quanto sarebbe
        costato rispondere alle domande? (scrivere i numeri nel formato corretto!) */

        $domanda1 = array("categoria" => "commerciale", "risposta_corretta" => 0);
        $domanda2 = array("categoria" => "assistenza", "risposta_corretta" => 1);
        $domanda3 = array("categoria" => "assistenza", "risposta_corretta" => 0);
        $domande = [$domanda1, $domanda2, $domanda3];

        //1. elencare le categorie delle domande (senza ripetizione!)
        //1.elenco ordinato per le categorie
        //1.inizializzo la variabile $doppio che conserva il valore del $value 
        $doppio = 0;
        //2.variabile per memorizzare le risposte esatte
        $risposte_esatte = 0;

        //5.variabile per memorizzare le risposte esatte
        $risposte = 0;
        echo"<ol>";
        foreach ($domande as $domanda) {

                foreach ($domanda as $key => $value) {
                    //5.le risposte possono valere solo 0 e 1 quindi ad ognuno di questi aumenta la variabile costo_risposte
                    if ($value <= 1) {
                        $risposte++;
                    }
                     //1.se la variabile $doppio è uguale al $value if fallisce   
                    if ($key == "categoria" && $value != $doppio) {
                        /*1.$doppio memorizza il valore di value ogni volta che entra in if quindi
                        assistenza non potrà entrare due volte in questo if */
                        $doppio = $value;
                        echo "<li>$value</li>";
                   
                    }

                    //2.quante sono le risposte corrette? (il valore 1 corrisponde alla risposta corretta);
                    //2.un if verifica che la risposta sia corretta
                    if ($value == 1) {
                       //2.aumenta di 1 $risposte_esatte
                        $risposte_esatte++;
                        
                    }  
                }
                
           }
        echo"</ol>";
        echo "<hr>";

    //2.stampo le risposte esatte 
    echo "Risposte esatte: " . $risposte_esatte;
    echo "<hr>";

    /*3. definire la funzione che ha come parametro d’ingresso l’array $domande e restituisce il
        nome della categoria più utilizzata;*/
    //creo un array con tutte le categorie
    $categorie = [];
    function categoria($domande){
        foreach ($domande as $domanda) {

            foreach ($domanda as $key => $value) {
                //ogni volta che l'indice è un categoria pusha nell'array
                if ($key == "categoria") {
                    
                    
                    $categorie[]=$value;
                    
                }

            }

        }
        
        $categoria_max = [];
        /*4. modificare la funzione del punto precedente in modo che restituisca anche il numero di volte
        che è stata utilizzata la categoria (N.B. una funzione può restituire 2 valori solo restituendo
        un array)*/
        /*array_count_values crea un array dove gli indici sono i valori di $categorie ed 
        i valori sono le volte che si ripetono queesti valori (categorie)*/
        //ora creo un altro array con i valori di array count poi spero che array keys funzioni
        foreach(array_count_values($categorie) as $key => $value) {


            $categoria_max[$key]=$value;

          }
          
          /*array_keys stampa le chiavi di un array, specificando il secondo paramentro stampa 
            solo la chiave con il valore maggiore*/
          //estraggo il valore assistenza e lo assegno ad una variabile
          foreach (array_keys($categoria_max, max($categoria_max)) as $key => $value) {
            
                $categoria_piu_utilizzata = $value;

          }
 
          //3.4.creo un array dove raccogliere tutti i due valori e faccio array push per assegnarglieli
         $categoria_max_volte = [];
         array_push($categoria_max_volte, $categoria_piu_utilizzata, max($categoria_max));
         
         //3.4.la funzione quando chiamata manderà come output questo array
         return $categoria_max_volte;    
    }
    
    //3.4.chiamo la funzione ed estraggo i dati dall'array returnato
    $categoria = categoria($domande)[0];
    $volte = categoria($domande)[1];
    
     echo "$categoria è stata utilizzata $volte volte";
     echo "<hr>";

     /*5. se ogni risposta alle domande costasse all’azienda 50 centesimi di euro, quanto sarebbe
        costato rispondere alle domande? (scrivere i numeri nel formato corretto!) */
    $costo_risposte = $risposte * 0.5;
    //number_format definisce le cifre decimali ed il separatore dopo virgola
    echo  "Costo risposte: €" . number_format($costo_risposte, 2, ",");
    ?>
   
</body>
</html>
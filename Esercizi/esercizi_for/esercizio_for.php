<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <title>Esercizio tipo verifica</title>
    </head>
    <body>
        <?php
            /*1. Realizzare una pagina php che presenti una sequenza di numeri interi con sfondo alternato per
            ogni riga. I dati elencati devono rispettare le seguenti regole:
             la sequenza deve iniziare da un numero assegnato (memorizzato nella variabile $start) e
            analizzare tutti gli interi precedenti;
             l&#39;analisi deve essere ripetuta per un numero di volte assegnato (memorizzato nella variabile
            $repeat);
             se il numero considerato corrisponde al mese della data corrente, deve essere scritto in
            corsivo;
             di ogni numero considerato, scrivere sulla stessa riga il suo valore e il valore doppio (in
            rosso)*/
            
            // for($i=1; $i<=5; $i++){
            //     echo $i;
            // }
            $numeri_pari=0;
            $iteraction_number=0;
            $bc1 = "#ccc";
            $bc2 = "#fff";
            $start = 10;
            $repeat = 5;
            //n.pari sono zero
            for ($i=$start; $i>($start-$repeat); $i--){

                //se $i è pari => incremento i nn.pari tovati
                $bc = $bc1;
                if ($i % 2){
                    $bc = $bc1;
                }
                else {
                    $bc = $bc2; 
                }
                echo"<div style:'background_color:$bc'>";
                echo $i;
                if ($i % 2==0) {//$i pari
                    $numeri_pari++;
                }
                echo "- " . "<span style='color:#f00'>" . (2 * $i) . "</span>";
                echo"</div>";


                //echo" una iterazione in più";
                $iteraction_number++;
                //echo " ".($iteraction_number);
                echo"<br>";
            }

            // 2. Al termine dell&#39;elenco, separando con una riga orizzontale, scrivere:
            //     i dati assegnati, con questa specifica frase: "valore_variabile"; $repeat: "..."; “;
            echo "<hr>";
            echo '$iteraction_number: '."'$iteraction_number'";

            // il numero di ripetizioni effettivamente eseguite.
            // 3. Modificare l&#39;algoritmo che produce la lista del punto 1, inserendo la condizione che non si
            // devono considerare i numeri negativi.

            //quanti numeri pari sono stati scritti (considerando anche i valori del doppio)
            ?>
    </body>
</html>
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
    
Sono forniti gli array elencati di seguito (i valori memorizzati sono solo indicativi):
$camera1 = ['nome' => "101", 'n_persone'=>60, 'incasso'=>8000);
$camera2 = ['nome" => "102", 'n_persone'=>30, 'incasso'=>2000); 
$camera3 = ['nome' => "103", 'n_persone'=>50, 'incasso'=>6000); 
$camere = [$camera1, $camera2, $camera3];
Si chiede di svolgere le seguenti attività
1. elencare i nomi delle camere:
2. calcolare il valore totale dell'incasso, nel formato valuta;
3. indicare qual è la camera con l'incasso più alto;
4. definire la funzione totale_persone che ha come parametro d'ingresso un array e che
restituisce la somma totale dei numeri di persone memorizzati nei vari elementi dell'array:
5. calcolare il valore medio di persone per camera, usando la funzione definita sopra;
6. aggiungere in fondo ad ogni array di Scamere un ulteriore elemento, con chiave 'mese' e
valore il mese corrente; 
7. sapendo che l'hotel è attivo esattamente da 1 anno, creare un ulteriore array 
con un elemento per ogni mese di attività; ogni elemento deve avere come chiave il mese di competenza e 
come valore l'incasso di quel mese. Si consideri che l'incasso di ogni mese sia cresciuto di 200€ rispetto 
al mese precedente fino ad arrivare al valore del mese corrente (es. se questo mese l'incasso fosse di 10.000€ 
allora quello del mese scorso sarebbe di 9.800€, quello del mese prima 9.600€ e cosi via). 
Elencare il contenuto di questo array.

Opzionale
creare una funzione che possa essere utilizzata nei punti 2 e 4; elencare il contenuto dell'array $camere in una tabella.
 */



    $camera1 = ['nome' => "101", 'n_persone' => 60, 'incasso' => 8000];
    $camera2 = ['nome' => "102", 'n_persone' => 30, 'incasso' => 2000];
    $camera3 = ['nome' => "103", 'n_persone' => 50, 'incasso' => 6000];
    $camere = [$camera1, $camera2, $camera3];

    //3. indicare qual è la camera con l'incasso più alto;
    $incasso_camera = 0;
    $numero_camera  = "";
    //2. calcolare il valore totale dell'incasso, nel formato valuta;
    $incasso = 0;
    //1. elencare i nomi delle camere:
    echo "<ul>";
    foreach ($camere as $camera) {

        if ($camera['incasso'] > $incasso_camera) {

            $incasso_camera = $camera['incasso'];

            $numero_camera  = $camera['nome'];
        }

        foreach ($camera as $key => $value) {
            //2.se la variabile $key è uguale a "incasso" if va a true
            if ($key == 'incasso') {

                $incasso += $value;
            }
            //1.se la variabile $key è uguale a "nome" if va a true  
            if ($key == 'nome') {

                echo "<li>Camera: $value</li>";
            }
            //4.se la variabile $key è uguale a "n_persone" if va a true
            if ($key == 'n_persone') {
                //faccio un array vuoto e lo riempio delle persone per ogni camera
                $persone[] = $value;
            }
        }
    }
    echo "</ul>";
    echo "<hr>";

    //2.stampo la variabile incasso formattata in valuta, per i centesimi e le migliaia
    echo "Incasso totale: €" . number_format($incasso, 2, ",", ".");
    echo "<hr>";

    //3. stampo il numero della camera con l'incasso più alto
    echo "L'incasso più alto è della camera $numero_camera";
    echo "<hr>";

    /*4. definire la funzione totale_persone che ha come parametro d'ingresso un array e che
    restituisce la somma totale dei numeri di persone memorizzati nei vari elementi dell'array:*/
    function totale_persone($persone)
    {
        //4.la funzione array sum restituisce un int on la somam degli elementi di $persone
        $totale = array_sum($persone);

        //5.utilizzo la funzione count e $media per la media
        $media =  $totale / count($persone);

        //faccio un array vuoto ci pusho due variabili e lo returno
        $totale_media = [];
        array_push($totale_media, $totale, $media);
        return $totale_media;
    }

    //estraggo i dati dalla funzione e memorizzo in due variabili
    //var_dump(totale_persone($persone);
    $totale = totale_persone($persone)[0];
    $media = totale_persone($persone)[1];
    echo "Le persone totali prenotate sono " . $totale;
    echo "<hr>";

    //5. calcolare il valore medio di persone per camera, usando la funzione definita sopra;
    echo "Nelle camere ci sono in media " . $media . " persone";
    echo "<hr>";

    /*
    6. aggiungere in fondo ad ogni array di $camere un ulteriore elemento, con chiave 'mese' e
    valore il mese corrente; 
    */
    foreach ($camere as $key => &$value) {
        //dell'array camere parto dal suo indice e aggiungo ad ogni suo elemento la chiave "mese"
        $data = date("m");
        $camere[$key]["mese"] = $data;
    }
    //var_dump($camere);

    /*
    7. sapendo che l'hotel è attivo esattamente da 1 anno, creare un ulteriore array 
    con un elemento per ogni mese di attività; ogni elemento deve avere come chiave il mese di competenza e 
    come valore l'incasso di quel mese. Si consideri che l'incasso di ogni mese sia cresciuto di 200€ rispetto 
    al mese precedente fino ad arrivare al valore del mese corrente (es. se questo mese l'incasso fosse di 10.000€ 
    allora quello del mese scorso sarebbe di 9.800€, quello del mese prima 9.600€ e cosi via). 
    Elencare il contenuto di questo array.
    */
    //la vita non aspetta, il tempo non basta mai

    /*
    Opzionale
    creare una funzione che possa essere utilizzata nei punti 2 e 4; elencare il contenuto dell'array $camere in una tabella.
    */

    function due_quattro($camere)
    {
        $incasso = 0;
        foreach ($camere as $camera) {

            foreach ($camera as $key => $value) {

                if ($key == 'incasso') {

                    $incasso += $value;
                }

                if ($key == 'n_persone') {
                    
                    $persone[] = $value;
                }
            }
        }
        number_format($incasso, 2, ",", ".");
        $totale = totale_persone($persone)[0];

        $due_quattro = [];
        array_push($due_quattro, number_format($incasso, 2, ",", "."), $totale);
        return $due_quattro;
    }
    ?>
</body>

</html>
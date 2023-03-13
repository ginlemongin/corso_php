<?php 

/*2.stampa le chavi elencate di ogni record*/
    function elenca_records($records, $chiave){

            foreach($records as $v) {
                echo $v[$chiave] . "<br>";
            }

        }

/**3.conta gli elementi dell'array che gli passi*/
    function conta_elementi($records){
       echo "<hr>" . "Elementi trovati: " . count($records) . "<hr>";
    }

/**4. Scrivere la regione del Sud con più città collegate */
function numero_citta($citta_sud)
{
    //variabili per memorizzare le citta di ogni regione
    $abruzzo = 0;
    $basilicata = 0;
    $calabria = 0;
    $campania = 0;
    $molise = 0;
    $puglia = 0;

    //il foreach scorre l'array citta_sud e per ogni case aumenta di uno le variabili delle citta
    foreach ($citta_sud as $citta) {
        foreach ($citta as $K => $valore) {
            switch ($valore) {
                case "Abruzzo":
                    $abruzzo++;
                    break;
                case "Basilicata":
                    $basilicata++;
                    break;
                case "Calabria":
                    $calabria++;
                    break;
                case "Campania":
                    $campania++;
                    break;
                case "Molise":
                    $molise++;
                    break;
                case "Puglia":
                    $puglia++;
                    break;
            }
        }
    }

    /*
 *creo un array con i valori delle citta di ogni regione e facci ostampare
 * la  regione con piu città con le funzioni array_search e max
 */
    $regioni = array(

        "Abruzzo" => $abruzzo,
        "Basilicata" => $basilicata,
        "Calabria" => $calabria,
        "Campania" => $campania,
        "Molise" => $molise,
        "Puglia" => $puglia

    );

    /*max ritorna il valore massimo, array search associa il valore ad un indice e lo ritorna*/
    $max_regione = array_search(max($regioni), $regioni);

    echo "La regione con più città: " . $max_regione . "<hr>";

    return $max_regione;
}
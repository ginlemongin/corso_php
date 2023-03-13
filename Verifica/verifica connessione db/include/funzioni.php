<?php

/*2.stampa le chavi elencate di ogni record*/
function elenca_records($records, $chiave)
{

    foreach ($records as $v) {
        echo $v[$chiave] . "<br>";
    }
}

/**3.conta gli elementi dell'array che gli passi*/
function conta_elementi($records)
{
    echo "<hr>" . "Elementi trovati: " . count($records) . "<hr>";
}

/**4. Scrivere la regione del Sud con più città collegate */
function numero_citta_sud($citta_sud)
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
    $regioni_sud = array(

        "Abruzzo" => $abruzzo,
        "Basilicata" => $basilicata,
        "Calabria" => $calabria,
        "Campania" => $campania,
        "Molise" => $molise,
        "Puglia" => $puglia

    );

    /*max ritorna il valore massimo, array search associa il valore ad un indice e lo ritorna*/
    $max_regione = array_search(max($regioni_sud), $regioni_sud);

    echo "La regione del Sud con più città: " . $max_regione . "<hr>";

    return $max_regione;
}

/*5. Definire la classe Regione con le proprietà nome (privata)
      e numeroCittaCollegate (pubblica).*/

//devo scrivere una regione nel metodo e restituire le città collegate ad essa
class Regione
{

    private $nome;

    /**la proprietà la inizializzo con un errore in caso si assegni una regione non valida (con 0 città)*/
    public $numeroCittaCollegate = "REGIONE NON VALIDA";

    /*la funzione construct si attiva immediatamente quando crei un oggetto
        e assegna il nome della regione che passi alla propietà Nome della classe*/
    function __construct($nome)
    {
        $this->nome = $nome;
    }

    /**6. Definire il metodo che accede al database e valorizza la proprietà numeroCittaCollegate. */
    function cittaCollegate()
    {

        //nuova query con tutte le regioni
        $citta_italia = query(
            "SELECT citta.citta, regioni.regione
            FROM regioni
            INNER JOIN citta ON regioni.id_regione = citta.regione"
        );

        //rifaccio il punto 4 ma con tutte le regioni   
        $abruzzo = 0;
        $basilicata = 0;
        $calabria = 0;
        $campania = 0;
        $molise = 0;
        $puglia = 0;
        $lazio = 0;
        $marche = 0;
        $toscana = 0;
        $umbria = 0;
        $sardegna = 0;
        $sicilia = 0;
        $emiliaRomagna = 0;
        $friuliVeneziaGiulia = 0;
        $trentinoAltoAdige = 0;
        $veneto = 0;
        $liguria = 0;
        $lombardia = 0;
        $piemonte = 0;
        $valledAosta = 0;

        foreach ($citta_italia as $citta) {
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
                    case "Lazio":
                        $lazio++;
                        break;
                    case "Marche":
                        $marche++;
                        break;
                    case "Toscana":
                        $toscana++;
                        break;
                    case "Umbria":
                        $umbria++;
                        break;
                    case "Sardegna":
                        $sardegna++;
                        break;
                    case "Sicilia":
                        $sicilia++;
                        break;
                    case "Emilia-Romagna":
                        $emiliaRomagna++;
                        break;
                    case "Friuli-Venezia Giulia":
                        $friuliVeneziaGiulia++;
                        break;
                    case "Trentino-Alto Adige":
                        $trentinoAltoAdige++;
                        break;
                    case "Veneto":
                        $veneto++;
                        break;
                    case "Liguria":
                        $liguria++;
                        break;
                    case "Lombardia":
                        $lombardia++;
                        break;
                    case "Piemonte":
                        $piemonte++;
                        break;
                    case "Valle d'Aosta":
                        $valledAosta++;
                        break;
                }
            }
        }

        $regioni_italia = array(
            "Abruzzo" => $abruzzo,
            "Basilicata" => $basilicata,
            "Calabria" => $calabria,
            "Campania" => $campania,
            "Molise" => $molise,
            "Puglia" => $puglia,
            "Lazio" => $lazio,
            "Marche" => $marche,
            "Toscana" => $toscana,
            "Umbria" => $umbria,
            "Sardegna" => $sardegna,
            "Sicilia" => $sicilia,
            "Emilia-Romagna" => $emiliaRomagna,
            "Friuli-Venezia Giulia" => $friuliVeneziaGiulia,
            "Trentino-Alto-Adige" => $trentinoAltoAdige,
            "Veneto" => $veneto,
            "Liguria" => $liguria,
            "Lombardia" => $lombardia,
            "Piemonte" => $piemonte,
            "Valle d'Aosta" => $valledAosta
        );

        /**scorro l'array associativo con tutte le regioni e le città*/
        foreach ($regioni_italia as $k => $v) {
            if ($k == $this->nome) {

                //valorizzo la proprietà numeroCittaCollegate
                $this->numeroCittaCollegate =  $v;
            }
        }
        /**ritorno la una stringa con le proprietà valorizzate */
        return "La regione $this->nome ha $this->numeroCittaCollegate città collegate." . "<hr>";
    }
}

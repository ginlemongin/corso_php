<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>verifica</title>
</head>

<body>
    <?php
    /*
Esercizio PHP
Si chiede di realizzare una sezione di un sito web che permetta di consultare i dati
memorizzati nel database ifts.
In particolare, le operazioni richieste sono le seguenti:
//1. Collegarsi al db ifts
//2. Elencare tutte il nome delle città del Sud
//3. Indicare il numero di città elencate
//4. Scrivere la regione del Sud con più città collegate
5. Definire la classe Regione con le proprietà nome (privata) e numeroCittaCollegate
(pubblica).
6. Definire il metodo che accede al database e valorizza la proprietà
numeroCittaCollegate.
     */

    /**prima di tutto includo gli altri file alla pagina html dove farò le operazioni per manipolare i dati */
    include("include/connect_db.php");
    include("include/funzioni.php");

    /*2. Elencare tutte il nome delle città del Sud
//query punto2 
SELECT citta.citta
FROM regioni
INNER JOIN citta ON regioni.id_regione = citta.regione
WHERE area_geografica = 'Sud'
*/

/**facciamo select all perchè verrano scremati nella funzioen elenca_records i risultati*/
   $citta_sud = query("SELECT * 
            FROM regioni
            INNER JOIN citta ON regioni.id_regione = citta.regione
            WHERE area_geografica = 'Sud'"
            );

    /**gli passiamo come argomenti un array ed una stringa*/
   elenca_records($citta_sud, 'citta');

   /**3. Indicare il numero di città elencate */
   conta_elementi($citta_sud);

   /**4. Scrivere la regione del Sud con più città collegate */
   function numero_citta($citta_sud)
   {
       $abruzzo = 0;
       $basilicata = 0;
       $calabria = 0;
       $campania = 0;
       $molise = 0;
       $puglia = 0;

       foreach ($citta_sud as $citta) {
           foreach ($citta as $valore) {
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
       $regioni = array ("Abruzzo" => $abruzzo, 
       "Basilicata" => $basilicata, 
        "calabria" => $calabria,
        "campania" => $campania,
        "molise" => $molise,
        "puglia" => $puglia);

       foreach ($regioni as $k => $v){
           $regione_max = max($v);
       }

       $regione_max = max($regioni);
       return $regione_max;
   }

   echo numero_citta($citta_sud);
    ?>
</body>

</html>
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
//5. Definire la classe Regione con le proprietà nome (privata) e numeroCittaCollegate(pubblica).
//6. Definire il metodo che accede al database e valorizza la proprietànumeroCittaCollegate.
     */

    /**prima di tutto includo gli altri file alla pagina html dove farò le operazioni per manipolare i dati */
    include("include/connect_db.php");
    include("include/funzioni.php");

    /*2. Elencare tutte il nome delle città del Sud*/

    /////**facciamo select all perchè verrano scremati nella funzioen elenca_records i risultati*/
    /*non posso fare select all altrimenti ci saà il campo regione duplicato e
    da problemi con l'array associativo*/
    $citta_sud = query(
        "SELECT citta.citta, regioni.regione, regioni.area_geografica,  regioni.ID_regione
            FROM regioni
            INNER JOIN citta ON regioni.id_regione = citta.regione
            WHERE area_geografica = 'Sud'"
    );

    /**gli passiamo come argomenti un array ed una stringa*/
    elenca_records($citta_sud, 'citta');

    /**3. Indicare il numero di città elencate */
    conta_elementi($citta_sud);

    /**4. Scrivere la regione del Sud con più città collegate */
    numero_citta_sud($citta_sud);

    /*5. Definire la classe Regione con le proprietà nome (privata)
      e numeroCittaCollegate (pubblica).*/
    /**6. Definire il metodo che accede al database e valorizza la proprietà numeroCittaCollegate. */
    $campania = new Regione("Lombardia");
    echo $campania->cittaCollegate();

    //perchè il metodo città collegate funziona anche se non ho fatto l'include di connessione_db nel
    //file funzioni.php?
    ?>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connessione</title>
</head>
<body>
<?php
//dati per connettersi
$dsn="mysql:dbname=ifts;host=127.0.0.1";

//nella try racchiudi le situazioni anomale, le eccezioni, le eccezioni sono utilizzate molto
try {
    /*
    il codice potrebbe andare in blocco quindi le situzioni vanno catturate dall' istruzione catch che lancia una eccezione
    ry tenta di eseguire il codice quando viene lanciato il codice l'istruzione viene catturato nella istruzione catche e viene compilato
    dalla classe try perr codificare cosa è successo, dopo l'istruzione che ha generato una eccezione il codice si blocca e non viene
    eseguito nulla.
    die("errore".$e->getMessage()) die fa morire l'esecuzione del programma ed il metodo interno getMessage(che non conosco) lancia
    una stringa con dei dati che puoi visionare
    E' OBBLIGATORIO INSERIRE TUTTO IL CODICE CHE PUO GENERARE ECCEZIONI NEL TRY*/

    /*a newpdo devi dare i parametri di connessione al database*/

    //1.connessione
    $con = new PDO($dsn,'root',"");
    //echo "connessione effettuata";

    //2. praparo lo statement (istruzione sql = query)
    $sql = "SELECT * FROM citta 
            INNER JOIN regioni ON regioni.ID_regione = citta.regione
            WHERE area_geografica = 'Sud' ";
    $st = $con->prepare("SELECT * FROM regioni");/*questa se funziona sempre bene possoanche toglierla dal try
    //echo "statement preparato";                   $st è un oggetto della classe PDOStatement*/

    //3. bind - da fare

    //4. eseguo lo statement preparato
    $st->execute();
    //echo "statement eseguito";

    //5. fetch - recupero dei dati estratti (solo con select)
    $righe = $st->fetchAll(PDO::FETCH_ASSOC);

} catch(PDOException $e){
    echo "Errore di connessione";
    echo $e->getMessage();
}

    //se tutto è andato bene $righe contiene 
    //l'array bidimensionale dei record estratti
    //print_r($righe);
    echo "<pre>";
    var_dump($righe);
    echo "</pre>";

    /*per casa provare a fare un INSERT sulla tabella regioni, poi la DELETE per cancellarla
    se vuoi cerca il pdo statement che restiutisce il valore appena inserito */

?>



</body>
</html>
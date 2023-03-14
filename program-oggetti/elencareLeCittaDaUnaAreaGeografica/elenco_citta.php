<?php 
/**gli include meglio farli sempre all'inizio per non doverli cercare */
include('citta.php')
?>

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

    /**selezionare le città di un'area geografica  scelta nella pag precedente.
     * cambiamo la query precednte*/
    $dsn = "mysql:dbname=ifts;host=127.0.0.1";
    try {
        $connessione = new PDO($dsn, "root", "");
        $sql = "SELECT * FROM citta ";
        $st = $connessione->prepare($sql);
        $st->execute();
        $righe = $st->fetchAll();
    } catch (PDOException $e) {
        echo "Errore di connessione" . $e->getMessage();
    }


    /*istanziare un nuovo oggetto di classe Citta per ogni città selezionata*/
    foreach($righe as $riga){

        /**passare come argomento dove è memorizzata la stringa rimnini, con il campo selezionato come chiave */
       $c = new Citta($riga['citta']);

       /**stamapre l'attributo nome dell'oggetto $c*/
       echo $c->getNome() . "<br>";
    }

    ?>
</body>
</html>
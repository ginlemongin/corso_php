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

    /**creo la variabile per rendere la query di ricerca dinamica*/
    $localita = "%" . $_POST["localita"] . "%";

    /*connessione al db con bind*/
    $dsn = "mysql:dbname=ifts;host=127.0.0.1";
    try {
        $connessione = new PDO($dsn, "root", "");

        /**2. Selezionare dalla tabella citta i record che contengono nel nome città o nel nome 
         * provincia il valore inserito nel form precedente (non la corrispondenza esatta ma anche solo una porzione). */
        $sql = "SELECT citta.citta, citta.id_citta
        FROM citta
        WHERE citta.citta LIKE :ricerca";

        $statement = $connessione->prepare($sql);

        //bind dei parametri della query
        $statement->bindParam("ricerca", $localita);

        $statement->execute();
        $citta = $statement->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $errore) {

        echo "errore di connessione ";
        echo $errore->getMessage();
    }
    ?>

    <?php
    print_r($citta);

    /**3. Scrivere il nome della città dei record selezionati*/

    foreach ($citta as $risultati) {

            echo $risultati["citta"] . "<br>";

    }

    /**4. Inserire un link sui record del punto 4 alla pagina ./citta.php passando l'id del record. */
    //nel link per il file citta.php inserisco la pagina ed il parametro per la get  echo "<a href='./citta.php?id=$id'></a>";
    echo "<hr>";
    foreach ($citta as $risultati) {
            $id = $risultati["id_citta"];
            echo "<a href='./citta.php?id=$id'>" . $risultati["citta"] . "</a>"  . "<br>";
    }
    ?>

</body>
</html>
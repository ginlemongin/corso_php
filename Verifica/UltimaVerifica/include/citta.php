<?php

//5. Creare la pagina citta.php con l'elenco di tutti i campi della città

    /*connessione al db con bind*/
    $dsn = "mysql:dbname=ifts;host=127.0.0.1";
    try {
        $connessione = new PDO($dsn, "root", "");

        /**2. Selezionare dalla tabella citta i record che contengono nel nome città o nel nome 
         * provincia il valore inserito nel form precedente (non la corrispondenza esatta ma anche solo una porzione). */
        $sql = "SELECT id_citta, citta.citta, provincia_sigla, provincia_nome, regione, ID_cliente, nome, cognome, dataNascita
        FROM citta
        INNER JOIN clienti ON id_citta = clienti.citta
        WHERE id_citta = :id_citta";

        $statement = $connessione->prepare($sql);

        //bind dei parametri della query con la varibile get che ha il valore passato dalla url
        /**
         * il bind è necessario perchè quando verrà eseguita la query il contenuto del form verrà 
         * scritto tra apici '' impedendo le sql injection!!
         */
        $statement->bindParam("id_citta", $_GET["id"]);

        $statement->execute();
        $citta = $statement->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $errore) {

        echo "errore di connessione ";
        echo $errore->getMessage();
    }
    
    /**stampa piu volte i campi perchè i clienti possono avere lo stesso id_citta e viene un array doppio, non ho tempo di correggere */
    //print_r($citta);
    //echo "<hr>";

    foreach ($citta as $risultati) {
       echo "Campo 1: " . $risultati["id_citta"] . "<br>";
       echo "Campo 2: " . $risultati["citta"] . "<br>";
       echo "Campo 3: " . $risultati["provincia_sigla"] . "<br>";
       echo "Campo 4: " . $risultati["provincia_nome"] . "<br>";
       echo "Campo 5: " . $risultati["regione"];
    }

    //6. Nella pagina citta.php inserire l'elenco dei clienti della città.
    foreach ($citta as $risultati) {
        echo "Cliente della città: " . $risultati["id_citta"] . "<br>";
     }
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PreVerifica</title>
</head>

<body>

    <?php
    /* 
Si chiede di realizzare una sezione di un sito web che permetta di consultare l’elenco
degli utenti, memorizzati nel database “ifts”.
In particolare, le operazioni richieste sono le seguenti:
1. Indicare il numero di record presenti nella tabella utenti.
2. Creare un form con 2 campi: email e password
3. Selezionare dalla tabella utenti i record che hanno nei campi users e password
quelli inseriti nel form precedente.
4. Se nel punto precedente è stato selezionato almeno un record, scrivere il nome,
cognome dei record selezionati
5. Inserire un link sui record del punto 4 alla pagina ./cambio_password.php passando
l’id del record.

Tabella utenti da aggiungere nel db ifts
CREATE TABLE `utenti` (
`ute_id` int(11) NOT NULL,
`ute_nome` varchar(50) NOT NULL,
`ute_cognome` varchar(50) NOT NULL,
`ute_email` varchar(150) NOT NULL,
`ute_password` varchar(20) NOT NULL,
`ute_icona` varchar(100) DEFAULT NULL,
`ute_cv` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
*/


    /**creo la tabella con gli utenti, con id auto incrementante */
    /**query(
        "CREATE TABLE `utenti` (
        `ute_id` int(11) NOT NULL AUTO_INCREMENT,
        `ute_nome` varchar(50) NOT NULL,
        `ute_cognome` varchar(50) NOT NULL,
        `ute_email` varchar(150) NOT NULL,
        `ute_password` varchar(20) NOT NULL,
        `ute_icona` varchar(100) DEFAULT NULL,
        `ute_cv` varchar(100) DEFAULT NULL,
        PRIMARY KEY (ute_id)
        )ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=UTF8_GENERAL_CI"
    );
    */

    /* aggiungo utenti*/
    /*
    query(
    "INSERT INTO utenti (ute_nome, ute_cognome, ute_email, ute_password)
     VALUES
     ('Giacomo', 'Marini', 'gmarini@libero.it', 'abcde'),
     ('Claudia', 'Benvoglio', 'cbenvoglio@libero.it', '1234'),
     ('Marianna', 'Rametti', 'mrametti@libero.it', '12abc')"
    );
    

/*connessione al db per punto 1 */
    $dsn = "mysql:dbname=ifts;host=127.0.0.1";

    try {
        $connessione = new PDO($dsn, "root", "");
        $sql ="SELECT * FROM utenti";
        // $sql = "CREATE TABLE `utenti` (
        //     `ute_id` int(11) NOT NULL AUTO_INCREMENT,
        //     `ute_nome` varchar(50) NOT NULL,
        //     `ute_cognome` varchar(50) NOT NULL,
        //     `ute_email` varchar(150) NOT NULL,
        //     `ute_password` varchar(20) NOT NULL,
        //     `ute_icona` varchar(100) DEFAULT NULL,
        //     `ute_cv` varchar(100) DEFAULT NULL,
        //     PRIMARY KEY (ute_id)
        //     )ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=UTF8_GENERAL_CI";
       
       
        $statement = $connessione->prepare($sql);
        $statement->execute();
        $utenti = $statement->fetchAll(PDO::FETCH_ASSOC);

    } catch (PDOException $errore) {

        echo "errore di connessione ";
        echo $errore->getMessage();

    }

     echo "Array utenti: ";
     print_r($utenti);
     echo "<hr>";

    /**1. Indicare il numero di record presenti nella tabella utenti. */
    
    echo "1) Elementi trovati: " . count($utenti) . "<hr>";
    //echo "<hr>";
    ?>

    <!-- 2. Creare un form con 2 campi: email e password -->
    <form method="POST" action="./include/formData.php">2)

        <label for="email">Email:</label>
        <input type="email" name="email" id="email">
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password">
        <br>
        <button type="submit">Accedi</button>

    </form>




</body>

</html>
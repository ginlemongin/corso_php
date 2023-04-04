<?php
    include_once("./Include/con_db.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio Pre Compito del 4 Aprile 2023</title>
</head>
<body>
    <h1>Esercizio PHP - 31 marzo 2023</h1><br>
    
    <hr>
    <h2>Richieste</h2>
    <hr><br>
    <p>
        Si chiede di realizzare una sezione di un sito web che permetta di consultare l’elenco
        degli utenti, memorizzati nel database “ifts”.<br>
        In particolare, le operazioni richieste sono le seguenti:<br>
        <ol>
            <li>
                Indicare il numero di record presenti nella tabella utenti;                
            </li>
            <li>
                Creare un form con 2 campi: email e password;
            </li>
            <li>
                Selezionare dalla tabella utenti i record che hanno nei campi users e password quelli inseriti nel form precedente;
            </li>
            <li>
                Se nel punto precedente è stato selezionato almeno un record, scrivere il nome, cognome dei record selezionati;
            </li>
            <li>
                Inserire un link sui record del punto 4 alla pagina ./cambio_password.php passando l’id del record.
            </li>        
        </ol></p> 
    <hr>
    <h2>Svolgimento</h2>
    <hr><br>
    
    <hr>
    <h3>Punto 1</h3>
    <hr><br>
    
    <?php
    
    /*
    *echo("<h4> Punto 1 </h4><br>");
    */

    $sql = "
        SELECT COUNT(*) as numRecord
        FROM utenti;
    ";
    $login = "root";
    $passwd = "";
    $bindParams = [];
    $dsn = "mysql:dbname=ifts;host=127.0.0.1";
    $queryResponse = fz_sql($sql,$bindParams,$dsn,$login,$passwd);

    //var_dump($queryResponse);
    echo ("<p>Al momento ci sono ".$queryResponse[0]['numRecord']." record nella tabella 'utenti'</p><br>");




    ?>

    <hr>
    <h3>Punto 2</h3>
    <hr><br>
        <p> Seleziona i record che stai cercando inserendo email e password</p><br>
        <form action="lista_utenti.php" method="POST">
        E-mail: <input type="email" name="email" >
        Password: <input type="text" name="passwd">
        <button>Ricerca</button>
        </form>
        <p></p><br>
    

    

</body>
</html>
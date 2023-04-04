<?php
    include_once("./Include/con_db.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Utenti</title>
</head>
<body>

    <hr>
    <h2>Richieste 3,4,5</h2>
    <hr><br>
    <p>
        Si chiede di realizzare una sezione di un sito web che permetta di consultare l’elenco
        degli utenti, memorizzati nel database “ifts”.<br>
        In particolare, le operazioni richieste sono le seguenti:<br>
        <ol start="3">
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
    <h2>Svolgimento punti 3,4,5</h2>
    <hr><br>

    <hr>
    <h3>Punto 3</h3>
    <hr><br>
        
    <?php

        //var_dump($_POST);
        $postEmail=$_POST['email'];
        $postPasswd=$_POST['passwd'];
        
        
        $sql = "
        SELECT * 
        FROM `utenti` 
        WHERE ute_email = :email
        AND  ute_password = :passwd;
        ";
        $login = "root";
        $passwd = "";
        $bindParams = [['segnaposto'=>':email','var'=>$postEmail],['segnaposto'=>':passwd','var'=>$postPasswd]];
        //var_dump($bindParams);
        $dsn = "mysql:dbname=ifts;host=127.0.0.1";
        $queryResponse = fz_sql($sql,$bindParams,$dsn,$login,$passwd);
        //var_dump($queryResponse);
        if(sizeof($queryResponse)>0){
            echo("<br>Ci sono:".sizeof($queryResponse)."record che corrispondono alla ricerca:<br>");
            echo("-Email:  $postEmail<br>");
            echo("-Password:  $postPasswd<br>");
        }else{
            echo("<br><p>Non ci sono record che corrispondano alla ricerca</p><br>");

        }        
    ?>
    
    <hr>
    <h3>Punto 4</h3>
    <hr><br>
    
    
    
    
    <?php
        echo("<br><p>Elenco dei record della tabella utenti con email: <b>$postEmail</b> e password: <b>$postPasswd</b></p><br>");
    ?>
    <table style="width:80%" border="1px solid black">
        <tr>
            <th><b> ID </b></th>
            <th><b> Nome </b></th>
            <th><b> Cognome </b></th>
        </tr>
        <?php
            if(sizeof($queryResponse) > 0){
                
                foreach ($queryResponse as $record){
                    echo("<tr><td>".$record['ute_id']."</td>");
                    echo("<td>".$record['ute_nome']."</td>");
                    echo("<td>".$record['ute_cognome']."</td></tr>");
                }
            }
            
            ?>
    </table>
    <br>
    
<hr>
<h3>Punto 5</h3>
<hr><br>
    
    <?php
        echo("<br><p>Elenco dei record della tabella utenti con email: <b>$postEmail</b> e password: <b>$postPasswd</b> con link di cancellazione</p><br>");
    ?>
    <table style="width:80%" border="1px solid black">
        <tr>
            <th><b> ID </b></th>
            <th><b> Nome </b></th>
            <th><b> Cognome </b></th>
            <th><b> Link Cancellazione </b></th>
        </tr>
        <?php
            if(sizeof($queryResponse) > 0){
    
                foreach ($queryResponse as $record){
                    echo("<tr><td>".$record['ute_id']."</td>");
                    echo("<td>".$record['ute_nome']."</td>");
                    echo("<td>".$record['ute_cognome']."</td>");
                    echo("<td><a href="."./cambia_password.php?ID=".$record['ute_id'].">Cambia Password</a></td></tr>");
                }
            }
    
        ?>
    </table><br>
    <hr>
   
</body>
</html>

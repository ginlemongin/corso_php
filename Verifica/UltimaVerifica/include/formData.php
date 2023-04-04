<?php
/**3. Selezionare dalla tabella utenti i record che hanno nei campi users e password
quelli inseriti nel form precedente. */
    // echo "POST: ";
    // print_r($_POST);
    // echo "<hr>";

    /*connessione al db con bind*/
    $dsn = "mysql:dbname=ifts;host=127.0.0.1";
    try {
        $connessione = new PDO($dsn, "root", "");

        //query per cercare gli utenti corrispondenti ai dati inseriti nel form
        $sql ="SELECT ute_id, ute_nome, ute_cognome
               FROM utenti
               WHERE ute_email = :ute_email AND ute_password = :ute_password";
       
        $statement = $connessione->prepare($sql);

        //bind dei parametri della query
        $statement->bindParam("ute_email", $_POST["email"]);
        $statement->bindParam("ute_password", $_POST["password"]);

        $statement->execute();
        $accesso = $statement->fetchAll(PDO::FETCH_ASSOC);

    } catch (PDOException $errore) {

        echo "errore di connessione ";
        echo $errore->getMessage();

    }

    //print_r($accesso);

    /**4. Se nel punto precedente è stato selezionato almeno un record, scrivere il nome,
    cognome dei record selezionati */
    switch (count($accesso)) {
        case 0:
            echo "UTENTE NON TROVATO";
            echo "<hr>";
            break;
        
        default:
            foreach ($accesso as $utente) {
                foreach ($utente as $key => $value) {
                    $nome = $utente["ute_nome"];
                    $cognome = $utente["ute_cognome"];
                    $id = $utente["ute_id"];
                }
            }
            echo "Ciao " . $nome . " " . $cognome . "<br>";
            echo "<a href='./cambioPassword.php?id=$id'><button>Cambio Password</button></a>";
            break;
    }
    



















/*
function login($utenti, $datiUtente)
{
    /*for eache per scorrere l'array bidimensionale utenti e fare un controllo
      che i campi ute_mail e password siano uguali a quelli inseriti nel form con la post
     
    foreach ($utenti as $utente) {
        foreach ($utente as $k => $v) {
            if ($utenti['ute_email'] == $_POST['email'] && $utenti['ute_password'] == $_POST['password'])
            {
                echo "LOGIN OK";
            } else {
                echo "CAMPO MAIL O PASSWORD ERRATO";
            }
            
        }
    }
}
*/
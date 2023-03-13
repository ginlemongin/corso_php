<?php
/*funzione per connettersi al db */
function connessione()
{

    /**creo un variabile globale che serve per la connessione */
    global $connessione;

    /**indico i dati del mio database */
    $dsn = "mysql:dbname=ifts;host=127.0.0.1";

    /*per gestire le eccezioni */
    try {
        $connessione = new PDO($dsn, "root", "");

        /**messaggio epr verifica la connessione (facoltativo) */
        echo "connessione effettuata" . "<hr>";

        /**nei parametri prendo un oggetto della calsse pdo, $errorre memorizza i messaggi di errore del php*/
    } catch (PDOException $errore) {

        /**creo i messaggi di errore */
        echo "errore di connessione ";
        /**getmessage recupera il messaggio di errore si $errore */
        echo $errore->getMessage();
    }
}

/*
 * funzione per creare le query al  db 
 * in input accetta la query per il database
*/
function query($sql)
{
    global $connessione;

    /**controlla se la connessione è stata effettuata, altrimenti la richiama lui e la attiva*/
    if (!isset($connessione)) {
        connessione();
    }
    /**creo la domanda al database, la variabile statement memorizza  query che gli do in input*/
    $statement = $connessione->prepare($sql);

    /**esecuzione statement, e come cliccare play su heidisql
     * cosi trovi la tabella 
     */
    $statement->execute();

    /**fetch recupera i dati che hai trovato con la query */
    $records = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $records;
}

/*
 * abbiamo messo la funzione di connessione al db e la funzione che prend in input una query 
 * e fa il fetch dei dati della query che puoi manipolare
 */

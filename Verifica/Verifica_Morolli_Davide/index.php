<?php
include("include/connect_db.php");
include("include/funzioni.php");
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
/*
Utilizzare almeno una funzione a scelta e rappresentare le date nel formato dd/mm/aaaa
Si chiede di realizzare una sezione di un sito web che permetta di consultare i dati
In particolare, le operazioni richieste sono le seguenti:
//1. Collegarsi al database ifts
//2. Elencare la data di arrivo di tutte le prenotazioni e il numero totale di prenotazioni
//3. scrivere nome e cognome dell'ultimo cliente arrivato
4. Calcolare qual è il totale dei giorni di permanenza di tutte le Prenotazioni
5. Definire la classe Prenotazione con le proprietà private data di arrivo e costo giornaliero 
e i metodi necessari per assegnare e leggere il valore di queste proprietà.
6. Definire la funzione che, dati in ingresso un array di prenotazioni,
restituisce il numero di prenotazioni con la data di arrivo nell'anno corrente

oppure

Definire il metodo di Prenotazione che verifica se la prenotazione ha come data di
arrivo l'anno corrente.
Opzionale: Elencare i clienti che hanno come data di arrivo il mese successivo ad oggi degli ultimi 5 anni. 
*/

/**2 Elencare la data di arrivo di tutte le prenotazioni e il numero totale di prenotazioni.
 *  richiamo la funzione per contare le prenotazioni */
echo numeroPrenotazioni();

/**3. scrivere nome e cognome dell'ultimo cliente arrivato */
echo arrivoCliente();
    ?>
</body>
</html>
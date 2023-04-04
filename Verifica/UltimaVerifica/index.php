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
Si chiede di realizzare una sezione di un sito web che permetta di gestire i dati memorizzati nel database "ifts".

In particolare, le operazioni richieste sono le seguenti 
1. Creare un form con 1 campo di ricerca: località.

2. Selezionare dalla tabella citta i record che contengono nel nome città o nel nome provincia il valore inserito nel form precedente (non la corrispondenza esatta ma anche solo una porzione).

3. Scrivere il nome della città dei record selezionati.

4. Inserire un link sui record del punto 4 alla pagina ./citta.php passando l'id del record.

5. Creare la pagina citta.php con l'elenco di tutti i campi della città

6. Nella pagina citta.php inserire l'elenco dei clienti della città.

Opzionale: nella pagina citta.php inserire un form per aggiungere una nuova città ed effettuare l'inserimento (non considerare il campo regione).*/

    ?>

    <!--1. Creare un form con 1 campo di ricerca: località.-->
    <form method="POST" action="./include/formData.php">2)

        <label for="localita">Località:</label>
        <input type="text" name="localita" id="localita">
        <br>
        <button type="submit">Cerca</button>

    </form>





</body>

</html>
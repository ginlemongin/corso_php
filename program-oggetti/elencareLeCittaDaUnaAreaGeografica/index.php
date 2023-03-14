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

    /**facciamo la connessione nell'index, olè */
    $dsn = "mysql:dbname=ifts;host=127.0.0.1";
    try {

        /**1.invochiamo il metodo costruttore di PDO */
        $connessione = new PDO($dsn, "root", "");

        /**2. */
        $sql="SELECT distinct(area_geografica) FROM regioni";
        $st =$connessione->prepare($sql);

        /**3.il bind serve per evitare sql injection ma qui non serve */

        //4. execute
        $st->execute();

        /**5. si fa solo se c'è un select */
        $righe = $st->fetchAll();

        /**pdoexception è una classe di cui e è una istanza */
    } catch (PDOException $e) {

        /**per ogni proprietà privata ci vuole il */
        echo "Errore di connessione" . $e->getMessage();
    }
    ?>

    <!-- ESERCIZIO: selezionare le citta in base all'area geografica tramite un forma -->

    <!-- usiamo php my admin quando perchè a lavoro si usa sempre in quanto il dbms sulla stessa macchian del server permette di evitare accessi all'esterno -->

    <!-- i tag piu importanti quando c'è un form è il tag con le sue proprietà: action, method: il modo di inviare i dati-->
    Seleziona Area Geografica
    <form action="elenco_citta.php" method="POST">

        <!-- campo di input: se usassi questo il naigatore potrebbe scrivere quello che vuole, se uso la SELECT posso limitare le scelte -->
        <!-- name campo di input con cui recuperare la scelta digitata-->
        <select name="area_geografica">

        <!-- il value lo omettiamo quando è uguale al testo dell'elemento -->
        <!-- il file deve essere con estensione html o php se c'è solo codice html, se invece prevedo del codice dinamico deve essere php-->
        <!-- dobbiamo perendere il codice delle aree geografiche senza ripetizioni -->
        <!-- rendiamo dinamiche le voci delle opzioni -->
        <!-- cancello tutte le option tranne una e la renderò dinamica, ci sarà un ciclo for dentro di essa -->
        <?php
        foreach ($righe as $riga) {

            /**ogni option è un array */
            //print_r($riga)

            /**ora la select è dinamica, perchè non dobbiamo scrivere tutte le option */
            echo "<option>{$riga['area_geografica']}</option>";
        }
        
        ?>
        <!-- <option>Centro</option>
        <option>Nord-est</option>
        <option>Nord-ovest</option>
        <option>Isole</option> -->
        </select>
        
        <!--QUERY PROVATE:
        SELECT area_geografica FROM regioni WHERE 1;
        -------------------
        SELECT 
        area_geografica 
        FROM regioni 
        WHERE 1
        AND regione like "%a%"
        AND ecc
        --------------------
        SELECT DISTINCT(area_geografica) FROM regioni WHERE 1;

        si usa il where 1 per fare in modo sia sempre vero
          -->

        <!-- pulsante -->
        <button>OK</button>
    </form>
</body>
</html>
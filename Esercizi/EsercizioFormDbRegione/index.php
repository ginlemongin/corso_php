<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form </title>
</head>

<body>
    <?php
    $dsn = "mysql:dbname=ifts;host=127.0.0.1";
    try {
        //1
        $connessione = new PDO($dsn, "root", "");
        //2
        $sql = "SELECT distinct(area_geografica) FROM regioni ";
        $st = $connessione->prepare($sql);
        //3 bind non serve
        //4 execute
        $st->execute();
        //5
        $righe = $st->fetchAll();
    } catch (PDOException $e) {
        echo "Errore di connessione" . $e->getMessage();
    }
    ?>


    Seleziona l'area geografica
    <form action="elenco_citta.php" method="GET">
        <select name="area_geografica">
            <?php
            foreach ($righe as $riga) {
                //$area_geografica = $riga['area_geografica'];
                echo "<option>{$riga['area_geografica']}</option>";
            }


            ?>
        </select>
        <button>OK</button>
    </form>



</body>

</html>
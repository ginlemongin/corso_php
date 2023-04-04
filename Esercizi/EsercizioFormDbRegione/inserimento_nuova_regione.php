<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
</head>

<body>
    <?php
    $regione = $_REQUEST['regione'];
    $area_geografica = $_REQUEST['area_geografica'];
    $dsn = "mysql:dbname=ifts;host=127.0.0.1";
    try {
        //1
        $connessione = new PDO($dsn, "root", "");
        //2
        $sql = "INSERT INTO regioni (regione , area_geografica)
                VALUES (:regione,:area_geografica)";
        $st = $connessione->prepare($sql);
        //3 bind serve
        $st->bindParam('regione', $regione);
        $st->bindParam('area_geografica', $area_geografica);
        //4 execute
        $st->execute();

    } catch (PDOException $e) {
        echo "Errore di connessione" . $e->getMessage();
    }

    header("Location: index.php");
    ?>

</body>

</html>
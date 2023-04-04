<?php
include("include/con_db.php");
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


    $nome_citta = "Rimini";
    $sql = "SELECT * FROM citta WHERE citta = :nome_citta ";
    echo "sql = $sql <br>";
    $citta = fz_sql($sql,
        [
            ['segnaposto'=>"nome_citta",'var'=>$nome_citta]
        ]
    );
    elenca_records($citta, 'citta');

    $prenotazioni = fz_sql("SELECT * FROM prenotazioni LIMIT 0,10");
    elenca_records($prenotazioni, 'ID_prenotazione');


    ?>

</body>

</html>
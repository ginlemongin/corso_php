<?php
include('Citta.php');
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
    //selezionare le città di un'area geografica
    
    //print_r($_GET);
    //valore di default
    $area_geografica = ($_REQUEST) ? $_REQUEST['area_geografica'] : "Sud";

    echo "<h1>Elenco delle città dell'area geografica "
        . $area_geografica . "</h1>";

    echo "<a href='form_nuova_regione.php?area_geografica=$area_geografica'>
          Aggiungi regione di questa area geografica</a><br><br>";

    //scelta nella pag precedente
    $dsn = "mysql:dbname=ifts;host=127.0.0.1";
    try {
        //1
        $connessione = new PDO($dsn, "root", "");
        //2
        $sql = "SELECT citta FROM citta 
                INNER JOIN regioni ON ID_regione = citta.regione
                WHERE area_geografica = :area_geografica ";
        $st = $connessione->prepare($sql);
        //3 bind ORA serve
        $st->bindParam("area_geografica", $area_geografica);
        //4 execute
        $st->execute();
        //5
        $righe = $st->fetchAll();
    } catch (PDOException $e) {
        echo "Errore di connessione" . $e->getMessage();
    }

    //istanziare un nuovo oggetto di classe Citta (da definire)
    //per ogni città selezionata
    foreach ($righe as $riga) {
        $c = new Citta($riga['citta']);
        //stampare l'attributo nome dell'oggetto $c
        echo $c->getNome() . "<br>";
    }




    ?>
</body>

</html>
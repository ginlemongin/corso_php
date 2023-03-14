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
    function data_db_2_user($data)
    {
        //$data = "1990-12-31";
        $anno = substr($data, 0, 4);
        $mese = substr($data, 5, 2);
        $giorno = substr($data, 8); //fino alla fine
        return "$giorno/$mese/$anno";

    }
    //PER CASA fare la funzione opposta
    function data_user_2_db($data)
    {
        //$data = "31/12/1990";
        //altro metodo
        $a = explode("/", $data); //restituisce un array
        $giorno = $a[0];
        $mese = $a[1];
        $anno = $a[2];
        return "$anno-$mese-$giorno";
    }
    ?>

    Dati ricevuti dal form!!!<br>
    <?php
    echo "GET: ";
    print_r($_GET);

    echo "<br>POST: ";
    print_r($_POST);

    echo "<br>REQUEST: ";
    print_r($_REQUEST);

    echo "<hr>";

    foreach ($_REQUEST as $chiave => $valore) {
        if ($chiave == 'dataNascita') {
            $valore = data_db_2_user($valore);
        }
        echo "$chiave: " . $valore . "<br>";
    }

    ?>
</body>

</html>
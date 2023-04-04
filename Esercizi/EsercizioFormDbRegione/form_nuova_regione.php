<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form nuova citta</title>
</head>

<body>
    Inserimento nuova regione dell'area geografica
    <?php

    echo $_GET['area_geografica'] . "<br>";
    //print_r($_GET);
    ?>
    <form method="POST" action="inserimento_nuova_regione.php">
        Nome <input type='text' name="regione" value="<?php if (array_key_exists('regione', $_GET))
            echo $_GET['regione'] ?>">
            <br>
            Area geografica <input type='text' name="area_geografica" value="<?php echo $_GET['area_geografica'] ?>">
        <br>


        <button>Inserisci</button>
    </form>
</body>

</html>
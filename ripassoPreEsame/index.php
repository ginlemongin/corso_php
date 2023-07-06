<?php
include_once("./include/con_db.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elenco prodotti</title>
</head>

<body>
    <?php
    $prodotti = fz_sql("SELECT * FROM prodotti INNER JOIN categorie ON pro_cat_id = cat_id");
    
    //print_r($prodotti);
    foreach ($prodotti as $prodotto) {
        echo  "<a href = './dettagli_prodotto.php?id=".$prodotto['pro_id']."'>" . $prodotto['pro_nome'] . " " . $prodotto['cat_nome'] ."</a>" . "<br>";
    }
    ?>
</body>
    
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include_once("./include/con_db.php");
    ?>

    <?php
        $id=$_REQUEST["id"];
        $prodotti = fz_sql("SELECT * FROM prodotti INNER JOIN 
        categorie ON pro_cat_id = cat_id WHERE pro_id=$id");
        print_r($prodotti);
    ?>
</body>
</html>
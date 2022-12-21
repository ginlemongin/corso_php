<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <?php
        // assegnare a $m il max tra x e y
        $x = 5;
        $y = 5;
        $m = 0;
            if($x>=$y){
                if($x==$y){
                    echo "<br>x uguale a y";
                }
                echo "condizione vera!"; //quando c'è una sola istruzione puoi anche non mettere le parentesi graffe nell if, l'importante è indentare sempre bene
                $m = $x;
            } else {
                "condizione falsa";
                 $m = $y;
            }
        echo "il massimo è " . $m;
        ?>
    </body>
</html>
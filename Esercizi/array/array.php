<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <title>Array</title>
    </head>
    <body>
        
        <?php
        $a = [];

        for($i=0; $i<10; $i++){
            $a [$i] = rand(0, 100);
        }

        //stampo il contenuto dell'array
        for($i=0; $i < 10; $i++){
            echo ($i+1) . ") " . $a[$i] . "<br>";
        }
        ?>

    </body>
</html>
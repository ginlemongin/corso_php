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

    /*
    2) Scrivere una funzione che restituisce una stringa contenente un codice 
    colore in base al giorno corrente della settimana 
    (es il lunedì restituisce il colore rosso, il martedì il colore giallo, ecc).
    Utilizzare la funzione appena descritta per realizzare un div html con un colore 
    di sfondo diverso in funzione del giorno della settimana.
    */

    function colore_settimana() {

        //creo uno switch per i colori dei giorni chiamando la funzione date
        //la N numera i giorni dal lunedì alla domenica da 1 a 7.

        switch (date("N")) {
            case '1':
                $colore ="#9b5fe0";
                break;

            case '2':
                $colore ="#16a4d8";
                break;

            case '3':
                $colore ="#60dbe8";
                break;

            case '4':
                $colore ="#8bd346";
                break;

            case '5':
                $colore ="#efdf48";
                break;

            case '6':
                $colore ="#f9a52c";
                break;

            default:
                $colore = "#d64e12";
                break;
        }
        return $colore;
    }

    $colore = colore_settimana();
    echo "<p style=background-color:$colore>\</p>";
    ?>
    
    <div  style="background-color: <?php echo $colore; ?>">a</div>

</body>
</html>
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
    echo "esercizio1:";
$numero1 = 6;
$numero2 = 0;
$numero3 = 4;
$simbolo = "/";

if ($numero1 >= $numero2) {
    echo "primo";
  } else {
    echo "secondo";
  }
  echo "</br>";  
  echo "esercizio2:";
  echo $numero1 * $numero2;
  echo "</br>";  
function elabora($numero1, $numero2, $numero3){
  if ($numero1 > $numero2) {
    echo $numero1 + $numero2 * $numero3;
  } else {
      echo ($numero1 + $numero2)/$numero3;
    }
  }
echo "esercizio 3: "; 
elabora($numero1, $numero2, $numero3);
echo "</br>";
  
function esamina($numero1){
  if ($numero1 < 4) {
    echo "piccolo";
  } elseif ($numero1 >= 4 and $numero1 <= 10){
      echo "medio";
      }else {
        echo "grande";
    }
}
echo "esercizio 4: "; 
esamina($numero1);
echo "</br>";

function calcola($numero1, $numero2, $simbolo){
  if ($simbolo == "*") {
    echo $numero1 * $numero2;
  } elseif ($simbolo == "/"){
      if ($numero2 != 0) {
        echo $numero1 / $numero2;
       } else { 
          echo "impossibile dividere per 0";
        }
    } else {
        echo "operazione non riconosciuta";
    }
}
echo "esercizio 5: ";
calcola($numero1, $numero2, $simbolo);
?> 
    </body>
</html>

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

/*Esercizio con le operazioni elementari
Antonio, Bruno e Carlo sono andati a pranzo al ristorante, e hanno
ordinato:
• Antonio: tortellini in panna, €9.00, contorno di verdure,
€5.00, caffè, €1.00
• Bruno: gramigna con salsiccia, €8.00, contorno di verdure, €
5.00, caffè, €1.00
• Carlo: Hamburger, €11.00, patate fritte, €4.00, caffè, €1.00

Quanto ha speso ogni persona? Quanto in totale? E quanto in media?
Se decidessero di dividere in parti uguali, arrotondando all’euro,
quanto lascerebbero di mancia?

------------------------------------------------------------------------
Un supermercato offre una politica di sconto ai propri clienti: 
con l’acquisto di 3 prodotti applica il 10% di sconto sull’oggetto meno costoso. 
Determinare il totale (imponibile + iva, supponendo l’iva al 22%)*/

$p1=10; //costo prodotto 1
$p2=9; //costo prodotto 2
$p3=8; //costo prodotto 3


//trovare il minore dei 3 costi
echo "esercizio classroom";
if ($p1<$p2){
  if ($p1<$p3){
    //echo"$p1 minore";
    $p1=$p1-($p1*10/100);
  }
  else
    //echo"$p3 minore";
    $p3=$p3-($p3*10/100);
}else{
  if($p2<$p3){
    //echo"$p2 minore";
    $p2=$p2-($p2*10/100);
  }else {
    //echo"$p3 minore";
    $p3=$p3-($p3*10/100);
  }
}
echo '$p1 = '."$p1 <br>";
echo '$p2 = '."$p1 <br>";
echo '$p3 = '."$p1 <br>";

//totale
$totale = ($p1+$p2+$p3);
echo "il totale vale: ". $totale;
echo "<br>";

//scorporare l'iva
$iva = 10;

$imponibile=$totale/(1+($iva/100));
echo "imponibile";

/*--------------------------------------------------------
In una gara sportiva ci sono 3 giudici, ognuno dei quali esprime il proprio voto in un range da 0 a 10 
(controllare che il voto sia compreso nel range prestabilito). 
Il regolamento stabilisce che si scarti il voto più alto e che il punteggio finale sia dato dalla media dei voti rimanenti*/
?> 
    </body>
</html>




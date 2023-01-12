<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <![endif]-->
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
      /*
analizza una serie di casi valuta il contenuto di una variabile e l'interprete php analizza tutti i casi. 
Aggiungi il break così non valuta i casi rimanenti quando trova il primo caso giusto, altrimenti se trovassepiù casi validi li eseguirebbe entrambi.
caso Default è sempre vero
$m=2;
      switch($m){
        case 1:$g=31;
        case 2:$g=28;
        case default:$g=?;
      }
      echo "giorni del mese $g";*/

//quanti giorni mancano alla fine del mese
/*funzione DATE*/

/*echo date("d/m/Y");
$m= date("m");
switch($m){
    case 2:
        $giorni_del_mese = 28;
        break;
    case 4:
    case 6:
    case 9:
    case 11:
        $giorni_del_mese = 30;
        break;
    default:
        $giorni_del_mese = 31;
}*/
//contiene il giorno di oggi
//$g = date("d");
$giorni_mancanti = $giorni_del_mese - date("d");
echo "<br>giorni mancanti = $giorni_mancanti";

//esercizio
/*mostra quanti giorni mancano al tuo compleanno, prima valuto se è lo stesso mese,somma di ogni mese successivo quanti giorni mi servono*/
$my_birthday=6;
$current_month= date("m");
switch($current_month){
    case 2:
        $giorni_del_mese = 28;
    case 4:
        $giorni_del_mese = 30;
    case 6:
        $giorni_del_mese = 30;
    case 9:
        $giorni_del_mese = 30;
    case 11:
        $giorni_del_mese = 30;
        break;
    default:
        $giorni_del_mese = 31;
}
$difference = $giorni_del_mese - date("d");

      ?> 
    </body>
</html>
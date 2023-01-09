<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
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
        /*//serve per ripetere un dato numero di volte una operazione
        //se la condizione è vera lui esegue l'istruzione
        //esegue l' istruzione fino a quando l'istruzione è vera quindi fa anche un controllo
        for($i=1;$i<=5;$++){
            echo"ciao <br>";
            if($i==3)break;//puoi usare anche CONTINUE che fa uscire solo dall'iterazione corrente, il break invece fa uscire dal for
        }echo$i;//6*/

        /*for($i=1; $i<=10; $i++) {
            echo "$i) ciao <br>";//vediamo a che punto è il for
        }
        
        //vediamo se i è muultiplo di 2
        for($i=1; $i<=10; $i++) {
            echo $i;
            if(($i % 2)== 1) { //se il moduklo di due è uguale a 0 allora è multiplo
                echo " NON ";
            }
            echo "$i multiplo di 2 <br>";
        }
        echo "i=$i"*/

        /*//aggiungiamo lo stile
        for($i=1; $i<=10; $i++) {
            if(($i % 2)== 1) {//==1 significa NON MULTIPLO come VERO quindi si potrebbe omettere perchè la condizione è soddisfatta se diverSa da 0
                echo "<p style=background-color:#ccc>"; 
                echo "$i NON ";
            } else {
                echo "<p style=background-color:#fff>";
                echo "$i ";
            }
            echo " multiplo di 2";
            echo "</p>";
        }*/
        /*//contare i multipli di 3 da 1 a 10
        $multipli = 0;
        for($i=1; $i<=10; $i++) {
            if( ! ($i % 3)) {//==1 significa NON MULTIPLO come VERO quindi si potrebbe omettere perchè la condizione è soddisfatta se diverSa da 0
                             //! ($i % 3) negazione di quello sopra (è multiplo) NON NON E' = VERO QUINDI MULTIPLO 
                echo "$i: trovato multiplo di 3<br>";
                $multipli++;
            }
        }*/

        /*//contare i multipli di 3 da $inizio a $iterazioni
        $inizio = 0;
        $iterazioni = 10;
        $multipli = 0;
        for($i=$inizio; $i<= ($inizio + $iterazioni); $i++) {
            if( ! ($i % 3)) {//==1 significa NON MULTIPLO come VERO quindi si potrebbe omettere perchè la condizione è soddisfatta se diverSa da 0
                             //! ($i % 3) negazione di quello sopra (è multiplo) NON NON E' = VERO QUINDI MULTIPLO 
                echo "$i: trovato multiplo di 3<br>";
                $multipli++;
            }
        }
        echo "i multipli da $inizio per $iterazioni volte sono $multipli";
        echo "<hr>";*/

        //elencare i primi 10 numeri multipli di 3
        //da 1 a 100

        //elencare i primi $numeri  multipli di $multiplo
        //da $inizio a $fine
        $inizio = 1;
        $fine=100;
        $numeri = 11;
        $num = 0;
        $finito = false;
        for($i=$inizio; ($i <= $fine && !$finito); $i++) {
            //if( $i%3 == 0 )// è multiplo
            if(!($i % 3)){//è multiplo
                $num++;
                echo "$num) $i <br>";
                if($num == $numeri)
                    $finito = true;
            }
        }
       ?>
    </body>
</html>
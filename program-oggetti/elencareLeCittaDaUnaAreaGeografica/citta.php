<?php
/**le classi di solito vengono riutilizzate emglio l farle su un file esterno */

class Citta{
    /**il nome lo mettiamo privato per non essere acceduta dall'esterno*/
    private $nome;
    //public $nome;

    /**al costruttore voglio dare il nome della citta, perchè è la caratteristica
     *  piu importante della classe citta.
     * il $nome pasato verrà memorizzato in una proprietà della classe */
    function __construct($nome){

        $this->nome = $nome;

    }

    /**questa funzione  */
    function getNome(){

      /*
        $nome = $this->nome;
        return $nome;
      */
        return $this->nome; 

    }
}

/**la variabile $nome non è la stessa cosa della proprietà della classe citta
 * se $nome fosse public potrei settare la proprietà del nome senza passare dal costruttore
$c = new Citta("Rimini");

-non puoi fare la echo di una proprietà PRIVATE, invece public si!!
echo $c->nome;
$nome = "Rimini";
*/
//$c = new Citta("Rimini");
/**visto che la echo non funziona come faccio a stampare il nome? tramite la funzione get
 * -commento perchè servono solo come debug queste righe
 */
//echo $c->getNome();
//$nome = "Rimini";

?>
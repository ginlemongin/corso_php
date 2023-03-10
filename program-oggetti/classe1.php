<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CREIAMO UNA CLASSE</title>
</head>

<body>
    <?php

    // CREO UNA CLASSE
    class Esempio
    {
        // una classe è un contenitore di proprietà e metodi
        // è ciò che i suoi oggetti possono fare e contengono
        // ma di default non fa nulla, sta ferma come un sasso

        public $stringa = ""; 
        //inizializzo sempre le variabili che uso dentro la classe

        function stampa_qualcosa($stringa)
        {
            echo $stringa . "<br>";
        }

        function stampa_qualcosa_in_grassetto($stringa)
        {
            echo "<b>";
            echo $this->stampa_qualcosa($stringa);
            // richiama una funzione presente in QUESTA classe
            echo "</b><br>";
        }
    }
    $e = new Esempio();
    // questo oggetto funziona correttamente, 
    // anche se la classe esempio è vuota e non ha costruttore!
    // ovviamente però, una classe senza funzionalità non ci serve a niente...

    // posso scegliere se usare le due funzioni della classe di appartenenza di $e
    $e->stampa_qualcosa("L M A O");
    $e->stampa_qualcosa_in_grassetto("L M A O");

    // voglio cambiare il nome della stringa della classe (che è pubblica)
    $e->stringa = "Nuovo valore di stringa";
    // poi lo stampo in grassetto
    $e->stampa_qualcosa_in_grassetto($e->stringa);
    echo "<hr>";



    //includo il file persona.php
    include("persona.php");
    //se istanzio un nuovo oggetto lui cerca il metodo cotruttore dentro la classe persona, se c'è lui la esegue altrimenti non fa nulla
    $p1 = new Persona;
    $p2 = new Persona;
    //stai chiamando un metodo
    $p -> mioMetodo();
    //lo puoi fare solo se $nome è public
    //$p -> nome = "pippo";
    $p ->setNome("pippo");
    //
echo$p ->getNome("pippo");

    class Persona{
        private$nome;
        //con la public puoi accedere alla variabile anche dall' esterno
        public $nome
        //metodo cotruttore
        function __construct(){
            echo "istanziato nuovo oggetto"
        }
        function mioMetodo(){
        }
        function setNome($n){
            //this fa rifermento a nome, che fa riferimento solo a p1 che ottiene il valore "pippo"!!p2 avrà un valore diverso se la chiamassi potresti mettere pluto 
            $this->nome=$n;
        }
        function getNome(){
            //ti ritorna pippo
            return $this->nome;
        }
    }
//il metodo costruttore viene chiamato quando si istanzia un nuovo oggetto, non è obbligatorio ma quando enetrerà nella classe non farà nulla.
    ?>
</body>

</html>
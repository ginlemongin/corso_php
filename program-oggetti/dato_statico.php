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
//dato statico è staticamente riferito alla classe(quindi riguarda tutti gli oggetti) e non ai singoli oggetti istanziati, possono esserci metodi e proprietà statiche



    //includo il file persona.php
    include("persona.php");
    //se istanzio un nuovo oggetto lui cerca il metodo cotruttore dentro la classe persona, se c'è lui la esegue altrimenti non fa nulla
    $p1 = new Persona;
    $p2 = new Persona;
    //chiamo funzione static ma non posso usare la freccia perchè quella è del singolo oggetto
    $eta = Persona::eta('2000-01-01');
    echo Persona::SPECIE;
    //stai chiamando un metodo
    $p -> mioMetodo();
    //lo puoi fare solo se $nome è public
    //$p -> nome = "pippo";
    $p ->setNome("pippo");
    //
echo$p ->getNome("pippo");

    class Persona{
        private$nome;
        //definisci una costante all'interno della classe
        const SPECIE = "essere umano";
        //con la public puoi accedere alla variabile anche dall' esterno
        public $nome
        //metodo cotruttore
        function __construct(){
            echo "istanziato nuovo oggetto"
            $this->setNOme($s);
            echo SPECIE;
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
        //qualsiasi funzione che ha dei dati che non dipendono da this possono diventare static, la differenza è che posso richiamare la funzione static posso anche nbon chiamare nulla
        static public $numero;
        static function eta($data){

        }
    }
//il metodo costruttore viene chiamato quando si istanzia un nuovo oggetto, non è obbligatorio ma quando enetrerà nella classe non farà nulla.

//differenza funzioni classi: le classi hanno la caratteristica di raggruppare caratteristiche comuni che sono funzioni, e poi richiamando la classe hai raggrupapte una serie di unzioni 
//che poi non devi usare tutte insieme
//e se modifichi la classe modifichi la funzione e di conseguenza gli output ovuinque li hai usati
    ?>
</body>

</html>
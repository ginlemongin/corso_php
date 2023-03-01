<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1° classe</title>
</head>

<body>
    <?php
    //definizione di classe
    class Studente
    {
        public $nome = "";
        public $cognome = "";
        public $ruolo = "";
        public $dataNascita;
        private $password;
        private $voti = [];

        function __construct($nomeDaAssegnare, $cognomeDaAssegnare)
        {
            $this->nome = $nomeDaAssegnare;
            $this->cognome = $cognomeDaAssegnare;
            echo "istanziato un nuovo oggetto " . $this->nome . " " . $this->cognome . "<br>";
        }
        function setDataNascita($dataNascita)
        {
            $this->dataNascita = $dataNascita;
        }
        /**
         * metodo eta che restituisce l'età dello studente
         */
        function eta()
        {
            //se mese-giornocorrente > mese-giornoDatanNsscita -> ok 
            $annoDataNascita = substr($this->dataNascita, 0, 4);
            $eta = date("Y") - $annoDataNascita;

            //altrimenti 
            //$eta -= 1;
            return $eta;

        }


    //metodo setVoti che inizializza l'array dei voti
    //metodo set password di Classroom che comprende la validazione: lunghezza min 10, contenere almeno 1 maiuscola, almeno 1 numero
    }

    $s1 = new Studente("Mario", "Rossi");
    $s1->nome = "Giorgio";
    echo "il nome di s1 è: " . $s1->nome;
    echo "<br>";


    $s1->setDataNascita('1980-10-21'); //21 ottoble 1990
    echo "di anni " . $s1->eta();

    echo "<hr>";

    $s2 = new Studente("Bruno", "Bianchi");



    ?>

</body>

</html>
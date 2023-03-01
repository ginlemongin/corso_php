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
        function setVoti($voti)
        {
            if (!$voti) {
                return false;
            }
            //i voti devono essere in 100 compresi tra 1 e 100
            foreach ($voti as $voto) {
                if ($voto >= 1 && $voto <= 100) {
                    //voto accettabile                    
                } else {
                    //voto non accettabile
                    return false;
                }
            }
            $this->voti = $voti;
        }
        function getVoti()
        {
            return $this->voti;
        }


        //metodo set password di Classroom che comprende la validazione: lunghezza min 10, contenere almeno 1 maiuscola, almeno 1 numero
        function setPassword($p)
        {
            $condizione_1_numero = false;
            $condizione_1_maiuscola = false;
            for (
                $i = 0;
                $i < strlen($p) ||
                ($condizione_1_numero && $condizione_1_maiuscola);
                $i++
            ) {
                $c = substr($p, $i, 1);
                //controllo $c
                //$c compreso tra 0 e 9 
                //-> se vero, $condizione_1_numero = true;
                //$c compreso tra "A" e "Z"
                //-> se vero, $condizione_1_maiuscola = true;
            }

            //aggiungere anche la condizione lunghezza
            if ($condizione_1_numero && $condizione_1_maiuscola) {
                //password OK
            } else {
                //password non corretta
            }

        }
    }

    $s1 = new Studente("Mario", "Rossi");
    $s1->nome = "Giorgio";
    echo "il nome di s1 è: " . $s1->nome;
    echo "<br>";


    $s1->setDataNascita('1980-10-21'); //21 ottoble 1990
    echo "di anni " . $s1->eta();

    echo "<hr>";

    $s2 = new Studente("Bruno", "Bianchi");
    $s2->setVoti([60, 100, 50, 81]);



    ?>

</body>

</html>
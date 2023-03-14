<?php
/**2.funzione per contare le prenotazioni */
    function numeroPrenotazioni(){
        /**la query già fa il totale */
        $numero_prenotazioni = query(
            "SELECT COUNT(*) AS numero_prenotazioni 
            FROM prenotazioni"
            );
            /**scorro l'array per ricavare il valore del conteggio e lo ritorno*/
            foreach ($numero_prenotazioni as $k) {
                foreach ($k as $v) {
                    $conteggio = $v;
                }
            }
            return  "1) Numero prenotazioni: $conteggio" . "<hr>";
        }

/**3. scrivere nome e cognome dell'ultimo cliente arrivato */
function arrivoCliente(){
    /**la query già fa il totale */
    $arrivo_cliente = query(
        "SELECT arrivo, nome, cognome
        FROM clienti
        INNER JOIN prenotazioni ON id_cliente = cliente
        ORDER BY arrivo DESC
        LIMIT 0,1"
        );

        $nome = "";
        /**scorro l'array per ricavare il valore del conteggio e lo ritorno*/
        foreach ($arrivo_cliente as $v) {
            $nome =  $v["nome"] . "<br>";
                }
            }
        return  "L'ultimo cliente arrivato è $nome __ $cognome _il_ $arrivo" ;

?>
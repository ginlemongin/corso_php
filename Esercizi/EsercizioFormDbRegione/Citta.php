<?php
class Citta
{
    private $nome;

    function __construct($nome)
    {
        $this->nome = $nome;
    }
    function getNome()
    {
        return $this->nome;
    }
    function setRegione()
    {
        //connessione al db
        //select regione from regione JOIN ... 
        ///where ... citta = $this->nome
        //
    }
}
// $c = new Citta("Rimini");
// echo $c->getNome();
// $nome = "Rimini";
?>
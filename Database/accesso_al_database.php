<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*i pdo ci permettono di accedere al database indipendentemente dal dbms utilizzato, i pdo sono una classe ed un insieme di 
    sottoclassi ereditate.
    Stiamo per utilizzare una serie di classe degfinite di php per accedere al database, sceglieremo le classi ed i metodi che ci i nteressano
     e li chiameremo
    pdo=php data objects
    dal manuale php:
    PDO è la classe del pdo
    pdo::__cosntruct viene richiamto in automatico quando accedo alla classe pdo
    pdo::preprare serve a prepareare una istruzione per ritornare un oggetto di tipo statemente: 
    è una classe dall quale si possoono sistanziare nuovi oggetti (praticamnete prepariamo le query da inviare)
    
    -pdostatement class: classe che contienete tutte le caratteristiche per gestire una query gia definita ed il tisultato che porterà la query
    
    public PDO::prepare(string $query, array $options = []): PDOStatement|false
    
    per accedere al database ti serve sapere la POSIZIONE della macchina, IP(locahost è la soluzione piu prestante perche significa
    che il server è sulla stessa macchina),
    NOME DEL DATABASE, NOME UTENTE, PASSWORD*/


/*esemmpio di connessione */
//dati di accesso di default
$host = "localhost"; $user = "root"; $pass = ""; $dbname = "ifts";

$dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;
try {
$connessione = new PDO($dsn, $user, $pass);
$st = $connessione->prepare("SELECT * FROM regioni WHERE ID_regione = :id ");
$id = 2;
$st->bindParam(':id',$id,PDO::PARAM_INT);
$st->execute();
$records=$st->fetchAll(PDO::FETCH_ASSOC);
} catch(PDOException $e) {
die("Errore durante la connessione al database!: ". $e->getMessage());
}
echo "estratti n. record = ".count($records);
?>

</body>
</html>
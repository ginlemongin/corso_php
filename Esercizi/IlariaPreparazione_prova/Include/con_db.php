<?php
function fz_sql($sql, $binds = [],$dsn = "mysql:dbname=ifts;host=127.0.0.1",$login = "root",$passwd = "")
{
    global $con;
    if (!isset($con)) {
        fz_con($dsn, $login, $passwd);
    }

    $st = $con->prepare($sql);
    foreach ($binds as $bind) {
        $st->bindParam($bind['segnaposto'], $bind['var']);
    }
    $st->execute();
    
    $righe = $st->fetchAll(PDO::FETCH_ASSOC);

    return $righe;

}


function fz_con($dsn = "mysql:dbname=ifts;host=127.0.0.1",$login = "root",$passwd = "")
{
    global $con;
    try {
        $con = new PDO($dsn, $login, $passwd);
        echo "connessione effettuata<br>";
    } catch (PDOException $e) {
        echo "Errore di connessione ";
        echo $e->getMessage();
        echo "<br>";
    }
}

?>
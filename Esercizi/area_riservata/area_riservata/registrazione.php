<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrazione</title>

</head>

<body>
    Registrati
    <form method="POST" action="inserimento_registrazione.php" enctype="multipart/form-data">
        Nome: <input type="text" name=nome><br>
        Cognome: <input type="text" name=cognome><br>
        E-mail: <input type="email" name=email><br>
        Password: <input type="password" name=password><br>
        Immagine di profilo <input type="file" name="icona"><br>
        CV <input type="file" name="cv"><br>
        <button>Registrami</button>
    </form>

</body>

</html>
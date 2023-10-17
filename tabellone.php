<?php
require("alunno.php");
echo '
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>IT-Esercizio-7-PHP</title>
</head>
<body data-bs-theme="dark">';
//sessione
session_start();
if (isset($_SESSION['alunni'])) {
    echo '<h1>Tabellone scrutinio</h1>';
    //lista alunni
    foreach ($_SESSION['alunni'] as $alunno) {
        echo $alunno->get_esito();
    }
} else {
    echo '<h1>Errore sessione non inizializzata!</h1><br>';
    echo '<a href="index.php">Torna indietro</a>';
}
echo '
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
';
?>
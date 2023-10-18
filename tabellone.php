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
    <link rel="stylesheet" href="style.css">
</head>
<body data-bs-theme="dark">
    <div class="card mx-auto position-absolute top-50 start-50 translate-middle rounded p-1 sfumatura-1" style="min-width: 400px;">
        <div class="card-body bg-black rounded">
';
//sessione
session_start();
if (isset($_SESSION['alunni'])) {
    //lista alunni
    echo '<h1>Tabellone Scrutinio</h1>';
    echo '<ul class="list-group list-group-flush">';
    foreach ($_SESSION['alunni'] as $alunno) {
        echo '<div class="bg-secondary p-1 mb-1 rounded "><li class="list-group-item rounded text-center">'
            . $alunno->get_esito() . '</li></div>';
    }
    echo '</ul>';
    session_destroy();
} else {
    echo '<h1 class="text-warning text-center">Errore sessione non inizializzata!</h1>';
    echo '<a href="index.php"><button class="btn btn-primary w-50 mx-auto" type="submit">Torna indietro</button></a>';
}
echo '
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
';

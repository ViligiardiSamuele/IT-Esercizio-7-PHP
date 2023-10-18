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
if (!isset($_SESSION['alunni'])) {
    $_SESSION["alunni"] = array();
}

//controllo form
$error_msg = '';
$check_genere = false;
$check_nome = false;
if (!isset($_POST["nominativo"]) || trim($_POST["nominativo"]) == '')
    $check_nome = true;
if (!isset($_POST["genere"]))
    $check_genere = true;

if ($check_nome || $check_genere) {
    $error_msg .= '<h1 class="text-warning text-center">Errore: manca ';
    if ($check_nome)
        $error_msg .= 'il nome';
    if ($check_nome && $check_genere)
        $error_msg .= ' e ';
    if ($check_genere)
        $error_msg .= 'il genere';
    $error_msg .= '</h1>';
    echo $error_msg;
} else {
    //output
    $HTML_output = '';
    $ins = array();
    $esito = '<span>';
    if (isset($_POST['ita']))
        array_push($ins, "ita");
    if (isset($_POST['mat']))
        array_push($ins, "mat");
    if (isset($_POST['tel']))
        array_push($ins, "tel");
    if (isset($_POST['inf']))
        array_push($ins, "inf");

    $esito = $esito . 'Ritultato di ' . $_POST['nominativo'] . ': ';

    if (sizeof($ins) >= 3) $esito = $esito . 'non';

    if ($_POST['genere'] == 'm')
        $esito = $esito . 'ammesso';
    else
        $esito = $esito . 'ammessa';

    if (sizeof($ins) > 0 && sizeof($ins) < 3) {
        $esito = $esito . ' con debiti a ';
        for ($i = 0; $i < sizeof($ins); $i++) {
            if ($i != 0)
                $esito = $esito . ' e ';
            $esito = $esito . $ins[$i];
        }
    }
    $esito .= '</span>';

    //creazione dell'alunno
    $studente = new Alunno($_POST['nominativo'], $ins, $esito);

    //controllo alunno ripetuto
    $ripetuto = false;
    foreach ($_SESSION['alunni'] as $alunno)
        if ($studente->compareTo($alunno))
            $ripetuto = true;
    if ($ripetuto) {
        echo '<h1 class="text-warning text-center">Errore: Alunno ripetuto</h1>';
    } else {
        array_push($_SESSION['alunni'], new Alunno($_POST['nominativo'], $ins, $esito));

        //lista alunni
        echo '<ul class="list-group list-group-flush">';
        foreach ($_SESSION['alunni'] as $alunno) {
            echo '<div class="bg-secondary p-1 mb-1 rounded "><li class="list-group-item rounded text-center">'
                . $alunno->get_esito() . '</li></div>';
        }
        echo '</ul>';
    }
}
echo '
    <div class="btn-group w-100">
        <a href="index.php" class="btn btn-primary">Inserisci un nuovo utente</a>';
if ($error_msg == '')
    echo '<a href="tabellone.php" class="btn btn-success">Termina scrutinio</a>';
echo '</div>';

echo '
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>';

<?php
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
<body data-bs-theme="dark">';

echo '
<form action="risultati.php" method="post" class="mx-auto position-absolute top-50 start-50 translate-middle rounded p-1 sfumatura-1">
<div class="container rounded bg-black p-1">
    <div class="row mb-1">
        <div class="col-4 text-end">Nominativo:</div>
        <div class="col-8"><input class="form-control" type=text name=nominativo></div>
    </div>
    <div class="row mb-1">
        <div class="col-4 text-end">Genere:</div>
        <div class="col-8">
            <input id="m" type=radio value="m" name=genere>
            <label for="m">M</label>
            <br>
            <input id="f" type=radio value="f" name=genere>
            <label for="f">F</label>
        </div>
    </div>
    <div class="row mb-1">
        <div class="col-4 text-end">Debiti:</div>
        <div class="col-8">
            <input type="checkbox" id="ita" name="ita" value="ita">
            <label for="ita">ITA</label>
            <input type="checkbox" id="mat" name="mat" value="mat">
            <label for="mat">MAT</label>
            <input type="checkbox" id="tel" name="tel" value="tel">
            <label for="tel">TEL</label>
            <input type="checkbox" id="inf" name="inf" value="inf">
            <label for="inf">INF</label>
        </div>
    </div>
    <div class="row">
        <button class="btn btn-primary w-50 mx-auto" type="submit">Esito scrutinio</button>
    </div>
</div>
</form>
';

echo '
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
';

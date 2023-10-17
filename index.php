<?php
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

echo '
<form action="risultati.php" method="post" class="border border-2 border-success rounded mx-auto position-absolute top-50 start-50 translate-middle" style="max-width: 480px;">
<table>
    <tr>
        <td class="text-end">Nominativo:</td>
        <td><input type=text name=nominativo></td>
    </tr>
    <tr>
        <td class="text-end">Genere:</td>
        <td>
            <input id="m" type=radio value="m" name=genere>
            <label for="m">M</label>
            <br>
            <input id="f" type=radio value="f" name=genere>
            <label for="f">F</label>
        </td>
    </tr>
    <tr>
        <td class="text-end">Debiti:</td>
        <td>
            <input type="checkbox" id="ita" name="ita" value="ita">
            <label for="ita">ITA</label>
            <input type="checkbox" id="mat" name="mat" value="mat">
            <label for="mat">MAT</label>
            <input type="checkbox" id="tel" name="tel" value="tel">
            <label for="tel">TEL</label>
            <input type="checkbox" id="inf" name="inf" value="inf">
            <label for="inf">INF</label>
        </td>
    </tr>
</table>
<button type=submit>Esito scrutinio</button>
</form>
';

echo '
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
';
?>
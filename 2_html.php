<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>Lista<h4>

<?php
$city = "Jarocin";
    echo <<< LIST
    <h4>PHP<h4>
    <ul>
        <li>Poznań
        <ol>
            <li>Polna</li>
            <li>Gnieznienska</li>
        </ol>
        </li>
        <li>Gniezno</li>
        <li>Kraków</li>
        <li>$city</li>
</ul>
LIST;

?>
</body>
</html>
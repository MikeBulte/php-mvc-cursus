<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>PHP MVC 02</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
</body>
</html>
<?php
    $naam = "Mike Bulte";
    $adres = "1820 ZW, Urk";
    $email = "'professional'coder67@stackoverflow.com";
    $telefoon = "044-2918124";
    $land = "Nederland";

    echo "Mijn naam is ".$_GET['naam']." Ik woon in ".$_GET['land']." op ".$_GET['adres']." Mijn email is ".$_GET['email']." en mijn telefoon nummer is ".$_GET['telefoon'];
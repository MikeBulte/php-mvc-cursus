<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>PHP MVC 04</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
    <?php
        $geld = "$3.50";
        $guestbook = "0 Personen";
        $pizza = "Hawaiian Pizza";
        $nummers = "47";
        $rekensom = 23 + 4 / 2;

        //De interne functie strrev() draait een string om
        $omgedraait = strrev($pizza);
        echo $omgedraait;
        echo "<br>";

        //De interne functie phpversion() laat zien welke versie van php er draait op de host
        $versie = phpversion();
        echo "Deze pagina wordt gehost op php versie ".$versie;
        echo "<br>";

        //De interne functie is_int() kijkt of een getal een integer is of niet en geeft het antwoord als boolean
        $getal1 = 2;
        $getal2 = 5.5;
        $getalcombineerd1 = 5 + 2;
        $getalcombineerd2 = 65.5 + 0.5;

        echo "Het eerste getal ".$getal1." ".checkinteger($getal1). "<br>";
        echo "Het tweede getal ".$getal2." ".checkinteger($getal2). "<br>";
        echo "Het eerste gecombineerde getal ".$getalcombineerd1." ".checkinteger($getalcombineerd1). "<br>";
        echo "Het tweede gecombineerde getal ".$getalcombineerd2." ".checkinteger($getalcombineerd2). "<br>";

        function checkinteger($getal) {
            if (is_int($getal) == true) {
                return $resultaatstring = "is een integer.";
            } else {
                return $resultaatstring = "is geen integer.";
            }
        }

    /*
     * De globale functie $_GET haalt een waarde uit de URL balk. Dit zou je met een html GET form kunnen gebruiken
     * voor een simpele persoonlijke pagina.
     * echo "Hallo ".$_GET['naam']."!";
     *
     * De globale functie $_COOKIE maakt een array van eerder verstuurde cookies. Hierbij zou je een persoonlijke
     * pagina kunnen maken zonder dat iemand iedere keer zijn naam hoeft in te vullen.
     * echo "Welkom terug ".$_COOKIE['naam'].".";
     *
     * De globale functie $_SERVER print informatie in een array over de server, file locaties en meer. Het
     * resultaat van dit hangt van server per server af.
     * echo $_SERVER['SERVER_PORT'];
     */
    ?>
</body>
</html>

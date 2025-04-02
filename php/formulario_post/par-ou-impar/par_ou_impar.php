<html>
    <style>
        a {
            border: 1px solid green;
            background: greenyellow;
        }
    </style>
</html>
<?php

    $numero = $_GET["numero"];
    $numero = intval($numero);

    if (is_int($numero) && !empty($numero)) {
        echo ("$numero");
        if ($numero % 2 == 0) {
            echo ("<br>Par");
        } else {
            echo ("<br>Ímpar");
        }
    } else {
        header("location: exercicio.html");
    }

    echo ("<br><a href='exercicio.html'>voltar</a>");

?>
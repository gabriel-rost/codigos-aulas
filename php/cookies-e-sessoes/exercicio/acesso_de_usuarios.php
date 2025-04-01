<?php

    session_start();
    
    if (!isset($_SESSION["nome"])) {
        $_SESSION["nome"] = "Raissa";
        $_SESSION["acesso"] = 1;
    }

    echo ("Bem-vindo, " . $_SESSION["nome"] . 
    ", este é seu " . $_SESSION["acesso"] . "º acesso." );

    $_SESSION["acesso"] += 1;
?>
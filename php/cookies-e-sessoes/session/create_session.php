<?php
    // create_session.php

    // para usar a sessão, é necessário inicializa-la explicitamente
    session_start();

    // criando uma variavel de sessao chamada nome
    $_SESSION["nome"] = "Raissa";
    $_SESSION["idade"] = "20";
    $_SESSION["time"] = "Grêmio";

    // recuperando a variavel
    echo ("Nome: " . $_SESSION["nome"]);
    

?>
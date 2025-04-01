<?php
    // retrieve_session.php

    // recuperando o valor criado em create_session.php

    // é necessário iniciar a sesessao em cada arquivo que se deseja
    // acessar os valores da sessao
    session_start();

    echo ("Nome: " . $_SESSION["nome"] . "<br>");
    echo ("Idade: " . $_SESSION["idade"] . "<br>");
    echo ("Time do coração: " . $_SESSION["time"] . "<br>");

    // excluindo uma variavel de sessao
    //unset($_SESSION["nome"]);
    echo ("Nome: " . $_SESSION["nome"]);

?>
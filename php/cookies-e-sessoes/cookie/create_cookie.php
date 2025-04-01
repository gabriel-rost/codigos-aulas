<?php

    // create_cookie.php

    //criando um cookie
    setcookie("nome", "Raissa");

    // recuperando um cookie
    echo ("Nome: " . $_COOKIE["nome"]);

    // cookie com validade de 30 dias
    setcookie("idade", 25, time() + 60 * 60 * 24 * 30);

    setcookie("time", "Grêmio", 0); // expira ao fechar o navegadors
?>
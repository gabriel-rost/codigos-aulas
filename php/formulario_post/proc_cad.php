<?php
    // empty --> retorna true se tiver vazia
    // isset --> variavel criada
        // testa se a variavel existe

    // if (isset($_POST["cadastrar"]) == true) {
    //     echo ("Clicou em enviar");
    // } else {
    //     echo ("Não clicou em enviar");
    // }

    $erros =[]; //array para controles de erros

    $nome = $_POST["nome"];
    $nascimento = $_POST["nasc"];
    $email = $_POST["email"];
    $tipo = $_POST["tipo"];
    $senha = $_POST["senha"];
    $senha2 = $_POST["senha2"];
    // se não está definida a variável cadastrar redireciona para a pagina de cadastro
    if (!isset($_POST["cadastrar"])) {
        header("location: cadastro.html");
    }

    if (empty($nome)) {
        $erros[] = ("Preencha o nome");
    }

    if (empty($nascimento)) {
        $erros[] = ("<div class='alert'>Preencha a <b>data de nascimento</b><br></div>");
    }
    
    if (empty($email)) {
        $erros[] = ("<div class='alert'>Preencha o <b>email</b><br></div>");
    }

    if (empty($tipo)) {
        $erros[] = ("<div class='alert'>Preencha o <b>tipo</b><br></div>");
    }

    if (empty($senha) || empty($senha2)) {
        $erros[] = ("<div class='alert'>Preencha a <b>senhas</b> corretamente<br></div>");
    } else if ($senha != $senha2) {
        $erros[] = ("As senhas não são iguais<br></div>");
    }

    // logs de depuração
    // se o array estiver zerado nao houve nenhum erro no preenchimento
    if (count($erros) == 0) {
        $nome = $_POST["nome"];
        $nascimento = $_POST["nasc"];
        $email = $_POST["email"];
        $tipo = $_POST["tipo"];
        $senha = $_POST["senha"];
        $senha2 = $_POS T["senha2"];
    } else {
        // percorrendo o array para mostrar os erros de preenchimento no formulário
        for ($i = 0; $i < count($erros); $i++) {
            echo ($erros[$i]); // exibindo cada erro armazenado no array
        }
    }

    // if (empty($nome)) {
    //     echo ("Nome está vazio");
    // }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>processando cadastro</title>
</head>
<body>
    
</body>
<style>
    .alert {
        background: red;
    }

    body {
        margin: 0px;
    }
</style>
</html>
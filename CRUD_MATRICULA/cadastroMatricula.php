<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Matrícula</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container py-4">

    <div class="text-center mb-4">
        <h1 class="display-5 fw-bold text-primary">
            U.C Teste de Sistemas - U.C Testes de Sistemas - SENAI SC
        </h1>

        <h4 class="text-danger">
            Formulário de Cadastro de Matrícula
        </h4>
    </div>

    <hr class="border-primary border-3">

    <div class="card shadow-lg border-0 mx-auto" style="max-width: 800px;">
        <div class="card-body text-center">

<?php

if (isset($_POST["nivel"]) && isset($_POST["turno"]) && isset($_POST["serie"]) && isset($_POST["extraCurso"]) != ''){

    $nivel = $_POST["nivel"];
    $turno = $_POST["turno"];
    $serie = $_POST["serie"];
    $extraCurso = $_POST["extraCurso"];

    $conexao = new mysqli("127.0.0.1","root","","sistemaescola");

    if($conexao->connect_errno){
        $erro = "Ocorreu um erro na conexão com o banco de dados.";
        exit;
    }

    $stmt = $conexao->prepare("INSERT INTO matricula(nivel,turno,serie,cursoExtra) VALUES(?,?,?,?)");
    $stmt->bind_param('ssss', $nivel, $turno, $serie, $extraCurso);

    if(!$stmt->execute()){
        $erro = $stmt->error;
    } else {
        $sucesso = "Matrícula cadastrada com sucesso!";
    }

} else {
    $erro = "Campo obrigatório não preenchido";
}

if(isset($erro)){
    echo '<div class="alert alert-danger">'.$erro.'</div>';
}

if(isset($sucesso)){
    echo '<div class="alert alert-success">'.$sucesso.'</div>';
}

?>

        </div>
    </div>

    <hr class="border-primary border-3 my-4">

    <div class="d-flex justify-content-center flex-wrap gap-2">

        <form method="POST" action="listarMatricula.php">
            <input type="submit"
                   value="Listar Matrículas"
                   class="btn btn-dark">
        </form>

        <form method="POST" action="procurarMatricula.php">
            <input type="submit"
                   value="Consultar Matrícula"
                   class="btn btn-dark">
        </form>

        <form method="POST" action="atualizarMatricula.php">
            <input type="submit"
                   value="Atualizar Matrícula"
                   class="btn btn-dark">
        </form>

        <form method="POST" action="apagarMatricula.php">
            <input type="submit"
                   value="Excluir Matrícula"
                   class="btn btn-dark">
        </form>

    </div>

    <div class="text-center mt-4">

        <a href="index.php" class="btn btn">
            Home
        </a>

        <a href="formMatricula.php" class="btn btn">
            Matrícula
        </a>

    </div>

    <hr>

    <footer class="text-center text-muted">
        Prof. Sergio Luiz da Silveira
    </footer>

</div>

</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualiza Dados</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container py-4">

    <div class="text-center mb-4">
        <h1 class="display-5 fw-bold text-primary">
            U.C Testes de Sistemas - SENAI SC
        </h1>

        <h4 class="text-danger">
            Alteração de Dados do Cadastro de Matrícula
        </h4>
    </div>

    <hr class="border-primary border-3">

    <div class="card shadow-lg border-0 mx-auto" style="max-width: 900px;">
        <div class="card-body text-center">

<?php

if (isset($_POST["ID"]) && isset($_POST["nivel"]) && isset($_POST["turno"]) && isset($_POST["serie"]) && isset($_POST["cursoExtra"]) != ''){

    $ID = $_POST["ID"];
    $nivel = $_POST["nivel"];
    $turno = $_POST["turno"];
    $serie = $_POST["serie"];
    $cursoExtra = $_POST["cursoExtra"];

    $conexao = new mysqli("127.0.0.1","root","","sistemaescola");

    if($conexao->connect_errno){
        $erro = "Ocorreu um erro na conexão com o banco de dados.";
        exit;
    }

    $conexao->set_charset("utf8");

    $sql = "UPDATE matricula SET id = $ID, nivel = '$nivel', turno = '$turno', serie = '$serie', cursoExtra = '$cursoExtra' WHERE id='$ID'; ";

    echo '<div class="alert alert-secondary">';
    echo $sql;
    echo '</div>';

    if($conexao->query($sql)=== TRUE){
        $sucesso = "Dados alterados com sucesso!";
    } else {
        $erro = "Erro :".$sql."<br>".$conexao->error;
    }

    $conexao->close();

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

        <form method="POST" action="formMatricula.php">
            <input type="submit"
                   value="Registrar Nova Matrícula"
                   class="btn btn-success">
        </form>

        <form method="POST" action="listarMatricula.php">
            <input type="submit"
                   value="Listar Matrículas"
                   class="btn btn-primary">
        </form>

        <form method="POST" action="procurarMatricula.php">
            <input type="submit"
                   value="Consultar Matrícula"
                   class="btn btn-info">
        </form>

        <form method="POST" action="apagarMatricula.php">
            <input type="submit"
                   value="Excluir Dados de Matrícula"
                   class="btn btn-danger">
        </form>

    </div>

    <div class="text-center mt-4">
        <a href="index.php" class="btn btn-outline-primary">
            Home
        </a>

        <a href="formMatricula.php" class="btn btn-outline-success">
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
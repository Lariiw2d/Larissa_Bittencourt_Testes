<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apagar Dados</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container py-4">

    <div class="text-center mb-4">
                <form>
                    <p align="center">
                        <font size="7" face="Georgia" color="#0d6efd">
                            U.C Testes de Sistemas - SENAI SC
                        </font>
                    </p>
                </form>
        <h4 class="text-danger">
            Exclusão de Cadastro de Matrícula
        </h4>
    </div>

    <hr class="border-primary border-3">

    <div class="card shadow-lg border-0 mx-auto" style="max-width: 800px;">
        <div class="card-body text-center">

<?php

if (isset($_POST["ID"])){

    $ID = $_POST["ID"];

    $conexao = new mysqli("127.0.0.1","root","","sistemaescola");

    if($conexao->connect_errno){
        $erro = "Ocorreu um erro na conexão com o banco de dados.";
        exit;
    }

    $conexao->set_charset("utf8");

    $sql = "DELETE FROM matricula WHERE id='$ID';";

    echo '<div class="alert alert-secondary">';
    echo $sql;
    echo '</div>';

    if($conexao->query($sql)=== TRUE){
        $sucesso = "Matrícula deletada com sucesso!";
    } else {
        $erro = "Erro: ".$sql."<br>".$conexao->error;
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
                   class="btn btn-dark">
        </form>

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

    </div>

    <div class="text-center mt-4">
        <a href="index.php" >
            Home
        </a>

        <a href="formMatricula.php" >
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
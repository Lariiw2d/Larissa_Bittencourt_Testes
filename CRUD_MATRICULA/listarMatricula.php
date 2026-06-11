<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Matrículas</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container py-4">

    <div class="text-center mb-4">
        <h1 class="display-5 fw-bold text-primary">
            U.C Teste de Sistemas - U.C Testes de Sistemas - SENAI SC
        </h1>

        <h4 class="text-success">
            Listagem de Matrículas
        </h4>
    </div>

    <hr class="border-primary border-3">

    <div class="card shadow-lg border-0">
        <div class="card-body">

<?php
    $conexao = new mysqli("127.0.0.1","root","","sistemaescola");

    if($conexao->connect_errno){
        $erro = "Ocorreu um erro na conexão com o banco de dados.";
        exit;
    }

    $conexao->set_charset("utf8");

    $sql = "SELECT * FROM matricula;";

    echo '<div class="alert alert-secondary">';
    echo $sql;
    echo '</div>';

    $result = $conexao->query($sql);

    if($result->num_rows > 0){

        while($linha = $result->fetch_assoc()){

            echo '
            <div class="card mb-3 border-primary">
                <div class="card-body">
                    <p><strong>ID:</strong> '.$linha["id"].'</p>
                    <p><strong>Nível:</strong> '.$linha["nivel"].'</p>
                    <p><strong>Turno:</strong> '.$linha["turno"].'</p>
                    <p><strong>Série:</strong> '.$linha["serie"].'</p>
                    <p><strong>Curso Extra Curricular:</strong> '.$linha["cursoExtra"].'</p>
                </div>
            </div>';
        }

    } else {

        echo '<div class="alert alert-warning text-center">
                Sem resultado
              </div>';
    }

    $conexao->close();
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

        <form method="POST" action="procurarMatricula.php">
            <input type="submit"
                   value="Consultar Matrícula"
                   class="btn btn-dark">
        </form>

        <form method="POST" action="atualizarMatricula.php">
            <input type="submit"
                   value="Atualizar Dados de Matrícula"
                   class="btn btn-dark">
        </form>

        <form method="POST" action="apagarMatricula.php">
            <input type="submit"
                   value="Excluir Dados de Matrícula"
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
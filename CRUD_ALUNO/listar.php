<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container py-5">

        <div class="card shadow-lg border-0">

            <div class="card-body p-5">

                <h1 class="text-center text-primary">
                    <font face="Georgia">U.C Testes de Sistemas - SENAI SC</font>
                </h1>

                <h4 class="text-center text-secondary mb-4">
                    Apagar Dados do Aluno
                </h4>

                <hr class="mb-5">

<?php

    $conexao = new mysqli("127.0.0.1","root","","sistemaescola");

    if($conexao->connect_errno){
        $erro = "Ocorreu um erro na conexão com o banco de dados.";
        exit;
    }

    $conexao->set_charset("utf8");

    $sql = "SELECT * FROM aluno;";

    $result = $conexao->query($sql);

    if($result->num_rows > 0){

        echo '

        <div class="table-responsive">

            <table class="table table-bordered table-hover align-middle shadow-sm">

                <thead class="table-primary text-center">

                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Data Nascimento</th>
                        <th>Nome do Pai</th>
                        <th>Nome da Mãe</th>
                        <th>Telefone</th>
                        <th>Email</th>
                        <th>Sexo</th>
                        <th>Bairro</th>
                    </tr>

                </thead>

                <tbody>';

        while($linha = $result->fetch_assoc()){

            echo '

                    <tr>

                        <td>'.$linha["id"].'</td>

                        <td>'.$linha["nome"].'</td>

                        <td>'.$linha["dataNascimento"].'</td>

                        <td>'.$linha["nomePai"].'</td>

                        <td>'.$linha["nomeMae"].'</td>

                        <td>'.$linha["telefone"].'</td>

                        <td>'.$linha["email"].'</td>

                        <td>'.$linha["sexo"].'</td>

                        <td>'.$linha["bairro"].'</td>

                    </tr>';
        }

        echo '

                </tbody>

            </table>

        </div>';

    } else {

        echo '

        <div class="alert alert-warning text-center">
            Sem resultado
        </div>';
    }

    $conexao->close();

?>

                <hr class="my-5">

                <div class="d-flex flex-wrap justify-content-center gap-3 mb-4">

                    <form method="POST" action="formAluno.php">
                        <input type="submit"
                               value="Registrar Novo Aluno"
                               class="btn btn-dark ">
                    </form>

                    <form method="POST" action="procurar.php">
                        <input type="submit"
                               value="Consultar Aluno"
                               class="btn btn-dark text-white ">
                    </form>

                    <form method="POST" action="atualizar.php">
                        <input type="submit"
                               value="Atualizar Dados do Aluno"
                               class="btn btn-dark text-white ">
                    </form>

                    <form method="POST" action="apagar.php">
                        <input type="submit"
                               value="Excluir Dados do Aluno"
                               class="btn btn-dark ">
                    </form>

                </div>

                <nav class="text-center mb-4">

                    <a href="index.php" class="btn btn-link text-decoration-none">
                        |   Home    |
                    </a>

                    <a href="formMatricula.php" class="btn btn-link text-decoration-none">
                        |   Matrícula   |
                    </a>

                </nav>

                <hr>

                <p class="text-center text-muted mb-0">
                    Prof. Sergio Luiz da Silveira
                </p>

            </div>

        </div>

    </div>

</body>
</html>
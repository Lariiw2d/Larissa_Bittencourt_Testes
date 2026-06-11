<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container py-4">

    <div class="card shadow-lg border-0">
        <font size="7" face="Georgia" color="#0d6efd">
            <div class="card-header bg-primary text-white text-center">
                <h1 class="mb-0">U.C Testes de Sistemas - SENAI SC</h1>
            </div>
        </font>

        <div class="card-body">

            <h3 class="text-center text-secondary mb-4">
                Dados do Aluno
            </h3>

            <hr class="border-primary border-3">

<?php
    if(empty($_POST["Nome"])){
        echo "<div class='alert alert-warning'>Por favor preencher o campo do Nome</div>";
    } else {
        $nome = $_POST["Nome"];
        $conexao = new mysqli("127.0.0.1","root","","sistemaescola");
        if($conexao->connect_errno){
            $erro = "Ocorreu um erro na conexão com o banco de dados.";
            exit;
        }
        $conexao->set_charset("utf8");

        $sql = "SELECT id,nome,dataNascimento,nomePai,nomeMae,telefone,email,sexo,bairro FROM aluno WHERE nome LIKE '%$nome%'";
        echo "<div class='alert alert-secondary'>$sql</div>";

        $result = $conexao->query($sql);

        if($result->num_rows > 0){
            while($linha = $result->fetch_assoc()){

                echo "
                <div class='card mb-3 shadow-sm'>
                    <div class='card-body'>
                        <p><strong>Id:</strong> ".$linha["id"]."</p>
                        <p><strong>Nome:</strong> ".$linha["nome"]."</p>
                        <p><strong>Data de Nascimento:</strong> ".$linha["dataNascimento"]."</p>
                        <p><strong>Nome do Pai:</strong> ".$linha["nomePai"]."</p>
                        <p><strong>Nome da Mãe:</strong> ".$linha["nomeMae"]."</p>
                        <p><strong>Telefone:</strong> ".$linha["telefone"]."</p>
                        <p><strong>Email:</strong> ".$linha["email"]."</p>
                        <p><strong>Sexo:</strong> ".$linha["sexo"]."</p>
                        <p><strong>Bairro:</strong> ".$linha["bairro"]."</p>
                    </div>
                </div>";
            }
        } else {
            echo "<div class='alert alert-danger'>Sem resultado</div>";
        }

        $conexao->close();
    }
?>

            <hr class="border-primary border-3">

            <div class="row g-2 text-center">

                <div class="col-md-3">
                    <form method="POST" action="formAluno.php">
                        <input type="submit" class="btn btn-dark text-white w-100" value="Registrar Novo Aluno">
                    </form>
                </div>

                <div class="col-md-3">
                    <form method="POST" action="listar.php">
                        <input type="submit" class="btn btn-dark text-white w-100" value="Listar Alunos">
                    </form>
                </div>

                <div class="col-md-3">
                    <form method="POST" action="atualizar.php">
                        <input type="submit" class="btn btn-dark text-white w-100" value="Atualizar Dados do Aluno">
                    </form>
                </div>

                <div class="col-md-3">
                    <form method="POST" action="apagar.php">
                        <input type="submit" class="btn btn-dark text-white w-100" value="Excluir Dados do Aluno">
                    </form>
                </div>

            </div>

            <nav class="text-center mb-4">
                    <a href="index.php" class="btn btn-link">
                        Home
                    </a>

                    <a href="../CRUD_MATRICULA/formMatricula.php" class="btn btn-link">
                        Matrícula
                    </a>
            </nav>

        </div>

        <div class="card-footer text-center text-muted">
            Prof. Sergio Luiz da Silveira
        </div>

    </div>

</div>

</body>
</html>
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

    <div class="card shadow-lg border-0">
        <font size="7" face="Georgia" color="#0d6efd">
            <div class="card-header bg-primary text-dark text-center">
                <h1 class="mb-0">U.C Testes de Sistemas - SENAI SC</h1>
            </div>
        </font>
        <div class="card-body">

            <h3 class="text-center text-secondary mb-4">
                Alteração de Dados do Cadastro
            </h3>

            <hr class="border-primary border-3">

<?php
if (isset($_POST["ID"]) && isset($_POST["Nome"]) && isset($_POST["DataNasc"]) && isset($_POST["NomePai"]) && isset($_POST["NomeMae"]) && isset($_POST["Telefone"]) && isset($_POST["Email"]) && isset($_POST["Sexo"]) && $_POST["Bairro"] != ''){

    $ID = $_POST["ID"];
    $nome = $_POST["Nome"];
    $datanasc = $_POST["DataNasc"];
    $nomepai = $_POST["NomePai"];
    $nomemae = $_POST["NomeMae"];
    $telefone = $_POST["Telefone"];
    $email = $_POST["Email"];
    $sexo = $_POST["Sexo"];
    $bairro = $_POST["Bairro"];

    if(strlen($datanasc) < 10){
        $erro = "Por Favor inserir uma data válida";
    } else {

        if(strlen($telefone)<13){
            $erro = "Por favor inserir um telefone válido";
        } else {

            $conexao = new mysqli("127.0.0.1","root","","sistemaescola");

            if($conexao->connect_errno){
                $erro = "Ocorreu um erro na conexão com o banco de dados.";
                exit;
            }

            $conexao->set_charset("utf8");

            $sql = "UPDATE aluno SET id = $ID, nome = '$nome', dataNascimento = '$datanasc', nomePai = '$nomepai', nomeMae = '$nomemae', telefone = '$telefone', email = '$email', sexo = '$sexo', bairro = '$bairro' WHERE id='$ID'; ";

            echo "<div class='alert alert-secondary'>$sql</div>";

            if($conexao->query($sql)=== TRUE){
                $sucesso = "Dados alterados com sucesso!";
            } else {
                $erro = "Erro :".$sql."<br>".$conexao->error;
            }

            $conexao->close();
        }
    }

} else {
    $erro = "Campo obrigatório não preenchido";
}

if(isset($erro))
    echo "<div class='alert alert-danger text-center'>$erro</div>";

if(isset($sucesso))
    echo "<div class='alert alert-success text-center'>$sucesso</div>";
?>

            <hr class="border-primary border-3">

            <div class="row g-2">

                <div class="col-md-3">
                    <form method="POST" action="formAluno.php">
                        <input type="submit" class="btn btn-dark text-white w-100"" value="Registrar Novo Aluno">
                    </form>
                </div>

                <div class="col-md-3">
                    <form method="POST" action="listar.php">
                        <input type="submit" class="btn btn-dark text-white w-100"" value="Listar Alunos">
                    </form>
                </div>

                <div class="col-md-3">
                    <form method="POST" action="procurar.php">
                        <input type="submit" class="btn btn-dark text-white w-100" value="Consultar Aluno">
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
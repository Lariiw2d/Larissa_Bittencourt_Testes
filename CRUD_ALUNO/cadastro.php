<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CadMatricula</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container py-5">

        <div class="card shadow border-0 rounded-4">

            <div class="card-body p-5">

                <font size="7" face="Georgia" color="#0d6efd">
                <h1 class="text-center text-primary mb-2">
                    U.C Testes de Sistemas - SENAI SC
                </h1></font>

                <h4 class="text-center text-secondary mb-4">
                    Formulário de Cadastro
                </h4>

                <hr class="mb-5">

<?php

if (isset($_POST["Nome"]) && isset($_POST["DataNasc"]) && isset($_POST["NomePai"]) && isset($_POST["NomeMae"]) && isset($_POST["Telefone"]) && isset($_POST["Email"]) && isset($_POST["Sexo"]) && $_POST["Bairro"] != ''){
    
    $nome = $_POST["Nome"];
    $datanasci = $_POST["DataNasc"];
    $nomepai = $_POST["NomePai"];
    $nomemae = $_POST["NomeMae"];
    $telefone = $_POST["Telefone"];
    $email = $_POST["Email"];
    $sexo = $_POST["Sexo"];
    $bairro = $_POST["Bairro"];

    if(strlen($datanasci) < 10){
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

            $stmt = $conexao->prepare("INSERT INTO aluno(nome,dataNascimento,nomePai,nomeMae,telefone,email,sexo,bairro) VALUES(?,?,?,?,?,?,?,?)");

            $stmt->bind_param('ssssssss', $nome, $datanasci, $nomepai, $nomemae, $telefone, $email, $sexo, $bairro);

            if(!$stmt->execute()){
                $erro = $stmt->error;
            } else {
                $sucesso = "Dados cadastrados com sucesso!";
            }
        }
    }

} else {
    $erro = "Campo obrigatório não preenchido";
}

if(isset($erro))
    echo '
    <div class="alert alert-danger text-center">
        '.$erro.'
    </div>';

if(isset($sucesso))
    echo '
    <div class="alert alert-success text-center">
        '.$sucesso.'
    </div>';

?>

                <hr class="my-5">

                <div class="d-flex flex-wrap justify-content-center gap-3 mb-4">

                    <form method="POST" action="formAluno.php">
                        <input type="submit"
                               value="Registrar Novo Aluno"
                               class="btn btn-dark">
                    </form>

                    <form method="POST" action="listar.php">
                        <input type="submit"
                               value="Listar Alunos"
                               class="btn btn-dark">
                    </form>

                    <form method="POST" action="procurar.php">
                        <input type="submit"
                               value="Consultar Aluno"
                               class="btn btn-dark">
                    </form>

                    <form method="POST" action="atualizar.php">
                        <input type="submit"
                               value="Atualizar Dados do Aluno"
                               class="btn btn-dark">
                    </form>

                    <form method="POST" action="apagar.php">
                        <input type="submit"
                               value="Excluir Dados do Aluno"
                               class="btn btn-dark">
                    </form>

                </div>

                <nav class="text-center mb-4">

                    <a href="index.php" class="btn btn-link">
                        Home
                    </a>

                    <a href="formMatricula.php" class="btn btn-link">
                        Matrícula
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
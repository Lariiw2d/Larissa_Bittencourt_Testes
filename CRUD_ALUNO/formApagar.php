<!DOCTYPE html>
<html lang="en">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apagar</title>
</head>

<body style="font-family: helvetica; background-color: #f4f6f9;">

    <div class="container py-4">

        <form>
            <p align="center" class="mt-4">
                <font size="7" face="Georgia" color="#0d6efd">
                    U.C Testes de Sistemas - SENAI SC
                </font>
            </p>
        </form>

        <h4 class="text-center text-danger fw-bold mb-4">
            Apagar o Aluno
        </h4>

        <hr class="border border-primary border-2">

<?php
    if(empty($_POST["ID"])){
        echo "<div class='alert alert-warning text-center'>Por favor preencher o campo ID</div>";
    } else {
        $ID = $_POST["ID"];
        $conexao = new mysqli("127.0.0.1","root","","sistemaescola");

        if($conexao->connect_errno){
            $erro = "Ocorreu um erro na conexão com o banco de dados.";
            exit;
        }

        $conexao->set_charset("utf8");

        $sql = "SELECT * FROM aluno WHERE id='$ID'";
        echo "<div class='alert alert-secondary'>$sql</div>";

        $result = $conexao->query($sql);

        if($result){
            if($result->num_rows>0){

                while($linha = $result->fetch_assoc()){

                    $ID = $linha["id"];
                    $nome = $linha["nome"];
                    $dataNasc = $linha["dataNascimento"];
                    $nomePai = $linha["nomePai"];
                    $nomeMae =  $linha["nomeMae"];
                    $telefone = $linha["telefone"];
                    $email = $linha["email"];
                    $sexo = $linha["sexo"];
                    $bairro = $linha["bairro"];
                }

            } else {

                echo "<div class='alert alert-danger text-center'>ID não encontrado.</div>";

            }

        } else {

            echo "Erro em ".$sql."<br>".$conexao->error;

        }

        $conexao->close();
    }
?>

        <form method="POST" action="apaga.php">

            <input type="hidden" name="ID" value="<?=$ID?>">

            <div class="card shadow p-4 mt-4">

                <div class="row mb-3">
                    <div class="col-md-4">
                        <label class="form-label fw-bold">Nome do Aluno(a)</label>
                    </div>

                    <div class="col-md-8">
                        <input type="text" class="form-control" name="Nome" value="<?=$nome?>" disabled>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-4">
                        <label class="form-label fw-bold">Data de Nascimento</label>
                    </div>

                    <div class="col-md-8">
                        <input 
                            type="text" 
                            class="form-control"
                            name="DataNasc"
                            placeholder="aaaa/mm/dd"
                            maxlength="10"
                            value="<?=$dataNasc?>"
                            disabled
                            onkeydown="javascript:fMasc(this,mData)">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-4">
                        <label class="form-label fw-bold">Nome do Pai</label>
                    </div>

                    <div class="col-md-8">
                        <input type="text" class="form-control" name="NomePai" value="<?=$nomePai?>" disabled>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-4">
                        <label class="form-label fw-bold">Nome da Mãe</label>
                    </div>

                    <div class="col-md-8">
                        <input type="text" class="form-control" name="NomeMae" value="<?=$nomeMae?>" disabled>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-4">
                        <label class="form-label fw-bold">Telefone</label>
                    </div>

                    <div class="col-md-8">
                        <input 
                            type="text"
                            class="form-control"
                            name="Telefone"
                            maxlength="14"
                            value="<?=$telefone?>"
                            onkeydown="javascript:fMasc(this,mTel);"
                            disabled>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-4">
                        <label class="form-label fw-bold">E-Mail</label>
                    </div>

                    <div class="col-md-8">
                        <input type="text" class="form-control" name="Email" value="<?=$email?>" disabled>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-4">
                        <label class="form-label fw-bold">Sexo</label>
                    </div>

                    <div class="col-md-8">
                        <input type="text" class="form-control" value="<?=$sexo?>" disabled>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-md-4">
                        <label class="form-label fw-bold">Bairro</label>
                    </div>

                    <div class="col-md-8">
                        <input type="text" class="form-control" value="<?=$bairro?>" disabled>
                    </div>
                </div>

                <div class="text-center">
                    <p class="fw-bold text-danger">
                        Tem certeza que deseja deletar este aluno(a)?
                    </p>

                    <input 
                        type="reset"
                        value="Apagar"
                        class="btn btn-outline-danger">
                </div>

            </div>

        </form>

        <hr class="border border-primary border-2 mt-5">

        <div class="container mt-4">

            <div class="row g-3 justify-content-center">

                <div class="col-md-3 d-grid">
                    <form method="POST" action="formAluno.php">
                        <input 
                            type="submit"
                            value="Registrar Novo Aluno"
                            class="btn btn-dark">
                    </form>
                </div>

                <div class="col-md-3 d-grid">
                    <form method="POST" action="listar.php">
                        <input 
                            type="submit"
                            value="Listar Alunos"
                            class="btn btn-dark">
                    </form>
                </div>

                <div class="col-md-3 d-grid">
                    <form method="POST" action="procurar.php">
                        <input 
                            type="submit"
                            value="Consultar Aluno"
                            class="btn btn-dark text-white">
                    </form>
                </div>

                <div class="col-md-3 d-grid">
                    <form method="POST" action="atualizar.php">
                        <input 
                            type="submit"
                            value="Atualizar Dados do Aluno"
                            class="btn btn-dark">
                    </form>
                </div>

            </div>

        </div>

        <br>

        <nav class="text-center">
            <a href="index.php" class="text-decoration-none">| Home |</a>
            <a href="formMatricula.php" class="text-decoration-none"> Matrícula |</a>
        </nav>

        <hr>

        <p align="center">Prof. Sergio Luiz da Silveira</p>

    </div>

</body>
</html>
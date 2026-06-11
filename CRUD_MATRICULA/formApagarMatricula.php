<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apagar Matrícula</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container py-4">

    <div class="text-center mb-4">
        <h1 class="display-5 text-primary fw-bold">
            U.C Testes de Sistemas - SENAI SC
        </h1>

        <h4 class="text-danger">
            Apagar a Matrícula
        </h4>
    </div>

    <hr class="border-primary border-3">

    <div class="card shadow-lg border-0 mx-auto" style="max-width: 900px;">
        <div class="card-body">

<?php
    if(empty($_POST["ID"])){
        echo '<div class="alert alert-warning text-center">
                Por favor preencher o campo ID
              </div>';
    } else {

        $ID = $_POST["ID"];

        $conexao = new mysqli("127.0.0.1","root","","sistemaescola");

        if($conexao->connect_errno){
            $erro = "Ocorreu um erro na conexão com o banco de dados.";
            exit;
        }

        $conexao->set_charset("utf8");

        $sql = "SELECT * FROM matricula WHERE id='$ID'";

        echo '<div class="alert alert-secondary">';
        echo $sql;
        echo '</div>';

        $result = $conexao->query($sql);

        if($result){

            if($result->num_rows > 0){

                while($linha = $result->fetch_assoc()){
                    $ID = $linha["id"];
                    $nivel = $linha["nivel"];
                    $turno = $linha["turno"];
                    $serie = $linha["serie"];
                    $cursoExtra = $linha["cursoExtra"];
                }

            } else {

                echo '<div class="alert alert-danger text-center">
                        ID não encontrado.
                      </div>';
            }

        } else {

            echo '<div class="alert alert-danger">
                    Erro em '.$sql.'<br>'.$conexao->error.'
                  </div>';
        }

        $conexao->close();
    }
?>

            <form method="POST" action="apagaMatricula.php">

                <input type="hidden" name="ID" value="<?=$ID?>">

                <div class="mb-3">
                    <label class="form-label fw-bold">ID da Matrícula</label>
                    <input type="text" class="form-control"
                           name="ID"
                           value="<?=$ID?>"
                           disabled>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Nível da Matrícula</label>
                    <input type="text" class="form-control"
                           name="nivel"
                           value="<?=$nivel?>"
                           disabled>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Turno</label>
                    <input type="text" class="form-control"
                           name="turno"
                           value="<?=$turno?>"
                           disabled>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Série</label>
                    <input type="text" class="form-control"
                           name="serie"
                           value="<?=$serie?>"
                           disabled>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Curso Extra Curricular</label>
                    <input type="text" class="form-control"
                           name="cursoExtra"
                           value="<?=$cursoExtra?>"
                           disabled>
                </div>

                <div class="alert alert-danger text-center fw-bold">
                    ⚠ Tem certeza que deseja deletar esta matrícula?
                </div>

                <div class="text-center">
                    <input type="submit"
                           value="DELETAR MATRÍCULA"
                           class="btn btn-danger btn-lg">
                </div>

            </form>

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

        <form method="POST" action="atualizarMatricula.php">
            <input type="submit"
                   value="Atualizar Dados de Matrícula"
                   class="btn btn-dark">
        </form>

        <form method="POST" action="procurarMatricula.php">
            <input type="submit"
                   value="Consultar Matrícula"
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
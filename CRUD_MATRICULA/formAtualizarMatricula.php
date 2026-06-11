<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Matrícula</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container py-4">

    <div class="text-center mb-4">
        <h1 class="display-5 fw-bold text-primary">
            U.C Testes de Sistemas - SENAI SC
        </h1>

        <h4 class="text-success">
            Formulário de Alteração de Dados de Matrícula
        </h4>
    </div>

    <hr class="border-primary border-3">

    <div class="card shadow-lg border-0 mx-auto" style="max-width: 900px;">
        <div class="card-body">

<?php

if(empty($_POST["ID"])){
    echo '<div class="alert alert-warning text-center">Por favor preencher o campo ID</div>';
} else {

    $ID = $_POST["ID"];

    $conexao = new mysqli("127.0.0.1","root","","sistemaescola");

    if($conexao->connect_errno){
        $erro = "Ocorreu um erro na conexão com o banco de dados.";
        exit;
    }

    $conexao->set_charset("utf8");

    $sql = "SELECT * FROM matricula WHERE id ='$ID'";

    echo '<div class="alert alert-secondary">'.$sql.'</div>';

    $result = $conexao->query($sql);

    if($result){

        if($result->num_rows>0){

            while($linha = $result->fetch_assoc()){

                $ID = $linha["id"];
                $nivel = $linha["nivel"];
                $turno = $linha["turno"];
                $serie = $linha["serie"];
                $cursoExtra = $linha["cursoExtra"];

            }

        } else {

            echo '<div class="alert alert-danger">ID não encontrado.</div>';

        }

    } else {

        echo '<div class="alert alert-danger">Erro em '.$sql.'<br>'.$conexao->error.'</div>';

    }

    $conexao->close();
}

?>

            <form method="POST" action="atualizaMatricula.php">

                <input type="hidden" name="ID" value="<?=$ID?>">

                <div class="mb-4">
                    <label class="form-label fw-bold">
                        Nível da Matrícula
                    </label>

                    <div>
                        <input class="form-check-input" type="radio" name="nivel" value="Integrado"
                        <?php echo($nivel == 'Integrado') ? "checked" : ""; ?>>
                        Integrado

                        <input class="form-check-input ms-3" type="radio" name="nivel" value="Sub-Seq"
                        <?php echo($nivel == 'Sub-Seq') ? "checked" : ""; ?>>
                        Sub-Seq
                    </div>
                </div>

                <div class="mb-4">
                    <label class="form-label fw-bold">
                        Turno
                    </label>

                    <div>
                        <input class="form-check-input" type="radio" name="turno" value="Manha"
                        <?php echo($turno == 'Manha') ? "checked" : ""; ?>>
                        Manhã

                        <input class="form-check-input ms-3" type="radio" name="turno" value="Tarde"
                        <?php echo($turno == 'Tarde') ? "checked" : ""; ?>>
                        Tarde

                        <input class="form-check-input ms-3" type="radio" name="turno" value="Noite"
                        <?php echo($turno == 'Noite') ? "checked" : ""; ?>>
                        Noite
                    </div>
                </div>

                <div class="mb-4">
                    <label class="form-label fw-bold">
                        Série
                    </label>

                    <select name="serie" class="form-select">
                        <option></option>
                        <option <?php echo($serie == '1°') ? "selected" : ""; ?>>1°</option>
                        <option <?php echo($serie == '2°') ? "selected" : ""; ?>>2°</option>
                        <option <?php echo($serie == '3°') ? "selected" : ""; ?>>3°</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label class="form-label fw-bold">
                        Curso Extra Curricular
                    </label>

                    <div>
                        <input class="form-check-input" type="radio" name="cursoExtra" value="Musica"
                        <?php echo($cursoExtra == 'Musica') ? "checked" : ""; ?>>
                        Música

                        <input class="form-check-input ms-3" type="radio" name="cursoExtra" value="Judo"
                        <?php echo($cursoExtra == 'Judo') ? "checked" : ""; ?>>
                        Judô

                        <input class="form-check-input ms-3" type="radio" name="cursoExtra" value="Balet"
                        <?php echo($cursoExtra == 'Balet') ? "checked" : ""; ?>>
                        Balet

                        <input class="form-check-input ms-3" type="radio" name="cursoExtra" value="Pintura"
                        <?php echo($cursoExtra == 'Pintura') ? "checked" : ""; ?>>
                        Pintura
                    </div>
                </div>

                <div class="text-center">
                    <input type="submit"
                           value="Atualizar Dados"
                           class="btn btn-success me-2">

                    <input type="reset"
                           value="Limpar Dados"
                           class="btn btn-secondary">
                </div>

            </form>

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
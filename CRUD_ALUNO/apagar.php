<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apagar Aluno</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body style="font-family: helvetica; background-color: #f4f6f9;">

    <form>
        <p align="center" class="mt-4">
            <font size="7" face="Georgia" color="#0d6efd">
                U.C Testes de Sistemas - SENAI SC
            </font>
        </p>
    </form>


    <h4 class="text-center text-secondary mb-4">
                    Apagar Dados do Aluno
                </h4>

                <hr class="mb-5">
    </h4>

    <hr width="100%" align="center" size="3" color="blue">

    <font face="Georgia">
    <h1 align="center" style="color: red;">
        Apagar Aluno
    </h1>
    </font>


    <div class="container">

        <div class="card shadow p-4 mx-auto mt-4" style="max-width: 500px; border-radius: 15px;">


            <form method="POST" action="formApagar.php" align="center">


                <label class="form-label fw-bold">
                    ID do Aluno(a):
                </label>

                <input 
                    type="text" 
                    size="30" 
                    name="ID" 
                    maxlength="6"
                    class="form-control text-center"
                    placeholder="Digite o ID">

                <br>


                <input 
                    type="submit" 
                    value="Procurar"
                    class="btn btn-primary">

                <input 
                    type="reset" 
                    style="color: red;" 
                    value="Limpar Dados"
                    class="btn btn-outline-danger">

            </form>

        </div>

    </div>


    <hr width="100%" align="center" size="3" color="blue">


    <table 
        width="400" 
        border="0" 
        cellspacing="0" 
        cellspading="0" 
        align="center"
        class="mt-4">

        <tr>


            <td>
                <form method="POST" action="formAluno.php">
                    <center>
                        <input 
                            type="submit" 
                            value="Registrar Novo Aluno"
                            class="btn btn-dark">
                    </center>
                </form>
            </td>


            <td>
                <form method="POST" action="listar.php">
                    <center>
                        <input 
                            type="submit" 
                            value="Listar Alunos"
                            class="btn btn-dark">
                    </center>
                </form>
            </td>


            <td>
                <form method="POST" action="procurar.php">
                    <center>
                        <input 
                            type="submit" 
                            value="Consultar Aluno"
                            class="btn btn-dark text-white">
                    </center>
                </form>
            </td>


            <td>
                <form method="POST" action="atualizar.php">
                    <center>
                        <input 
                            type="submit" 
                            value="Atualizar Dados do Aluno"
                            class="btn btn-dark">
                    </center>
                </form>
            </td>

        </tr>

    </table>

    <br>


    <nav align="center">

        <a href="index.php" class="text-decoration-none">
            | Home |
        </a>

        <a href="../CRUD_MATRICULA/formMatricula.php" class="text-decoration-none">
            Matricula |
        </a>

    </nav>


    <hr>
    <p align="center" class="text-muted">
        Prof. Sergio Silveira
    </p>

</body>
</html>
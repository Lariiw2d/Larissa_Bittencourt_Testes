<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procurar Aluno</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body style="background-color: #f4f6f9; font-family: Helvetica;">

    <div class="container mt-5">

        <div class="card shadow-lg border-0">

            <div class="card-body p-5">

                <form>
                    <p align="center">
                        <font size="7" face="Georgia" color="#0d6efd">
                            U.C Testes de Sistemas - SENAI SC
                        </font>
                    </p>
                </form> 
            
                <h4 class="text-muted mb-4">
                    <center>Formulário de Procura de aluno</center>
                </h4>

                <hr class="border border-primary border-2">

                <h1 align="center" class="mb-4 text-dark">
                    Procurar Aluno
                </h1>

                <form method="POST" action="consulta.php" align="center">

                    <div class="mb-4">
                        <label class="form-label fw-bold">
                            Nome do Aluno(a):
                        </label>

                        <input type="text" 
                               size="30" 
                               name="Nome"
                               class="form-control w-50 mx-auto"
                               placeholder="Digite o nome do aluno">
                    </div>

                    <input type="submit" 
                           value="Procurar"
                           class="btn btn-primary">

                    <input type="reset" 
                           value="Limpar Dados"
                           class="btn btn-outline-danger">

                </form>

                <hr class="border border-primary border-2 mt-5">

                <table width="400" border="0" cellspacing="0" cellspading="0" align="center">

                    <tr>

                        <td class="p-2">
                            <form method="POST" action="formAluno.php">
                                <center>
                                    <input type="submit" 
                                           value="Registrar Novo Aluno"
                                           class="btn btn-dark w-100">
                                </center>
                            </form>
                        </td>

                        <td class="p-2">
                            <form method="POST" action="listar.php">
                                <center>
                                    <input type="submit" 
                                           value="Listar Alunos"
                                           class="btn btn-dark w-100 text-white">
                                </center>
                            </form>
                        </td>

                        <td class="p-2">
                            <form method="POST" action="atualizar.php">
                                <center>
                                    <input type="submit" 
                                           value="Atualizar Dados do Aluno"
                                           class="btn btn-dark w-100">
                                </center>
                            </form>
                        </td>

                        <td class="p-2">
                            <form method="POST" action="apagar.php">
                                <center>
                                    <input type="submit" 
                                           value="Excluir Dados do Aluno"
                                           class="btn btn-dark w-100">
                                </center>
                            </form>
                        </td>

                    </tr>

                </table>

                <br>

                <nav align="center" class="mt-4">

                    <a href="index.php" class="btn btn-link text-decoration-none">
                        |   Home    |
                    </a>

                    <a href="formMatricula.php" class="btn btn-link text-decoration-none">
                        |   Matrícula   |
                    </a>

                </nav>

            </div>

        </div>

        <hr>

        <p align="center" class="text-muted">
            Prof. Sergio Luiz da Silveira
        </p>

    </div>

</body>
</html>
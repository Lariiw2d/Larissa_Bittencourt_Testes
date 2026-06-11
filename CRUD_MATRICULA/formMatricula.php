<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Formulário Matricula</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container py-4">

    <div class="card shadow-lg border-0 mb-4">
        <div class="card-body text-center bg-primary text-white">
            <h1 class="display-6 fw-bold">
                U.C Teste de Sistemas - U.C Testes de Sistemas - SENAI SC
            </h1>
            <h4 class="mt-3">
                Formulário de Cadastro do Aluno
            </h4>
        </div>
    </div>

    <hr class="border-primary border-3">

    <h2 class="text-center text-primary mb-4">
        Dados Pessoais
    </h2>

    <div class="card shadow border-0">
        <div class="card-body">

            <form method="POST" action="cadastroMatricula.php" align="center">

                <div class="table-responsive">

                    <table class="table table-bordered table-hover align-middle">

                        <tr class="table-primary text-center">
                            <th>Nível</th>
                            <th>Turno</th>
                            <th>Série</th>
                            <th>* Cursos Extra Curriculares</th>
                        </tr>

                        <tr>

                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="nivel" value="Integrado">
                                    <label class="form-check-label">Integrado</label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="nivel" value="Sub-Seq">
                                    <label class="form-check-label">Sub-Seq</label>
                                </div>
                            </td>

                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="turno" value="Manha">
                                    <label class="form-check-label">Manhã</label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="turno" value="Tarde">
                                    <label class="form-check-label">Tarde</label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="turno" value="Noite">
                                    <label class="form-check-label">Noite</label>
                                </div>
                            </td>

                            <td>
                                <select name="serie" size="1" class="form-select">
                                    <option></option>
                                    <option>1°</option>
                                    <option>2°</option>
                                    <option>3°</option>
                                </select>
                            </td>

                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="extraCurso" value="Musica">
                                    <label class="form-check-label">Musica</label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="extraCurso" value="Judo">
                                    <label class="form-check-label">Judo</label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="extraCurso" value="Balet">
                                    <label class="form-check-label">Balet</label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="extraCurso" value="Pintura">
                                    <label class="form-check-label">Pintura</label>
                                </div>

                                <small class="text-danger fw-bold">
                                    * Escolha apenas uma opção
                                </small>
                            </td>

                        </tr>

                    </table>

                </div>

                <div class="mt-4">
                    <input type="submit"
                           value="Cadastrar Matricula"
                           class="btn btn-success btn-lg">

                    <input type="reset"
                           value="Limpar Dados"
                           class="btn btn-secondary btn-lg">
                </div>

            </form>

        </div>
    </div>

    <hr class="border-dark border-3 my-4">

    <div class="row g-2">

        <div class="col-md-3">
            <form method="POST" action="listarMatricula.php">
                <input type="submit"
                       value="Listar Matriculas"
                       class="btn btn-dark w-100">
            </form>
        </div>

        <div class="col-md-3">
            <form method="POST" action="procurarMatricula.php">
                <input type="submit"
                       value="Consultar Matricula"
                       class="btn btn-dark w-100">
            </form>
        </div>

        <div class="col-md-3">
            <form method="POST" action="atualizarMatricula.php">
                <input type="submit"
                       value="Atualizar Dados da Matricula"
                       class="btn btn-dark w-100">
            </form>
        </div>

        <div class="col-md-3">
            <form method="POST" action="apagarMatricula.php">
                <input type="submit"
                       value="Excluir Dados da Matricula"
                       class="btn btn-dark w-100">
            </form>
        </div>

    </div>

    <div class="text-center mt-4">
        <a href="index.php" class="btn btn">
            Home
        </a>

        <a href="formAluno.php" class="btn btn">
            Aluno
        </a>
    </div>

    <footer class="text-center mt-5">
        <hr>
        <p class="text-muted">
            Prof. Sergio Luiz da Silveira
        </p>
    </footer>

</div>

</body>
</html>
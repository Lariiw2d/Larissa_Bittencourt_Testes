<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Matrícula</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container py-4">

    <div class="text-center mb-4">
        <h1 class="display-5 fw-bold text-primary">
            U.C Teste de Sistemas - U.C Testes de Sistemas - SENAI SC
        </h1>

        <h4 class="text-danger">
            Alteração de Dados de Matrícula
        </h4>
    </div>

    <hr class="border-primary border-3">

    <div class="card shadow-lg border-0 mx-auto" style="max-width: 600px;">
        <div class="card-body p-4">

            <h3 class="text-center mb-4">
                Procurar Matrícula
            </h3>

            <form method="POST" action="formAtualizarMatricula.php">

                <div class="mb-3">
                    <label class="form-label fw-bold">
                        ID da Matrícula
                    </label>

                    <input type="text"
                           name="ID"
                           size="30"
                           class="form-control">
                </div>

                <div class="text-center">
                    <input type="submit"
                           value="Procurar"
                           class="btn btn-primary">

                    <input type="reset"
                           value="Limpar Dados"
                           class="btn btn-secondary">
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

        <form method="POST" action="procurarMatricula.php">
            <input type="submit"
                   value="Consultar Matrícula"
                   class="btn btn-dark">
        </form>

        <form method="POST" action="apagarMatricula.php">
            <input type="submit"
                   value="Apagar Dados de Matrícula"
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
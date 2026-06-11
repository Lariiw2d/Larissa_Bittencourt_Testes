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
        <h1 class="display-5 fw-bold text-primary">
            U.C Teste de Sistemas - U.C Testes de Sistemas - SENAI SC
        </h1>

        <h4 class="text-danger">
            Apagar Dados de Matrícula
        </h4>
    </div>

    <hr class="border-primary border-3">

    <div class="card shadow-lg border-0 mx-auto" style="max-width: 700px;">
        <div class="card-body">

            <h2 class="text-center text-danger mb-4">
                Apagar Matrícula
            </h2>

            <form method="POST" action="formApagarMatricula.php">

                <div class="mb-3">
                    <label class="form-label fw-bold">
                        ID da Matrícula
                    </label>

                    <input
                        type="text"
                        name="ID"
                        maxlength="6"
                        class="form-control"
                        placeholder="Digite o ID da matrícula">
                </div>

                <div class="text-center">
                    <input
                        type="submit"
                        value="Procurar"
                        class="btn btn-primary me-2">

                    <input
                        type="reset"
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

        <form method="POST" action="atualizarMatricula.php">
            <input type="submit"
                   value="Atualizar Matrícula"
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
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procurar Matrícula</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        body{
            font-family: Helvetica;
            background-color: #f4f6f9;
        }

        .card-custom{
            max-width: 700px;
            margin: auto;
            margin-top: 30px;
            border-radius: 15px;
        }

        .titulo{
            color: #0d6efd;
            font-weight: bold;
        }

        .subtitulo{
            color: red;
            font-weight: bold;
        }

    </style>

</head>

<body>

<div class="container py-4">

    <h1 class="text-center titulo">
        U.C Testes de Sistemas - SENAI SC
    </h1>

    <h4 class="text-center subtitulo mb-4">
        Formulário de Procura de Matrícula
    </h4>

    <hr class="border border-primary border-2 opacity-100">

    <div class="card shadow card-custom">

        <div class="card-body">

            <h3 class="text-center mb-4">
                Procurar Matrícula
            </h3>

            <form method="POST" action="consultaMatricula.php">

                <div class="mb-3">

                    <label class="form-label">
                        ID da Matrícula
                    </label>

                    <input
                        type="text"
                        name="id"
                        class="form-control"
                        placeholder="Digite o ID da matrícula">

                </div>

                <div class="text-center">

                    <input
                        type="submit"
                        value="Procurar"
                        class="btn btn-success">

                    <input
                        type="reset"
                        value="Limpar Dados"
                        class="btn btn-secondary">

                </div>

            </form>

        </div>

    </div>

    <hr class="border border-primary border-2 opacity-100 mt-5">

    <div class="d-flex justify-content-center flex-wrap gap-2">

        <form method="POST" action="formMatricula.php">
            <input
                type="submit"
                value="Registrar Nova Matrícula"
                class="btn btn-dark">
        </form>

        <form method="POST" action="listarMatricula.php">
            <input
                type="submit"
                value="Listar Matrículas"
                class="btn btn-dark text-white">
        </form>

        <form method="POST" action="atualizarMatricula.php">
            <input
                type="submit"
                value="Atualizar Matrícula"
                class="btn btn-dark">
        </form>

        <form method="POST" action="apagarMatricula.php">
            <input
                type="submit"
                value="Excluir Matrícula"
                class="btn btn-dark">
        </form>

    </div>

    <nav class="text-center mt-4">

        <a href="index.php" class="btn btn">
            Home
        </a>

        <a href="formMatricula.php" class="btn btn">
            Matrícula
        </a>

    </nav>

    <hr>

    <p class="text-center text-muted">
        Prof. Sergio Luiz da Silveira
    </p>

</div>

</body>
</html>
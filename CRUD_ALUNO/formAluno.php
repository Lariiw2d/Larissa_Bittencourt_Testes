<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Aluno</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <script>
        function fMasc(objeto,mascara){
            obj=objeto;
            masc=mascara;
            setTimeout("fMascEx()",1);
        }

        function fMascEx(){
            obj.value=masc(obj.value);
        }

        function mData(cpf){
            cpf=cpf.replace(/\D/g,"");
            cpf=cpf.replace(/(\d{6})(\d)/,"$1/$2");
            cpf=cpf.replace(/(\d{4})(\d)/,"$1/$2");
            return cpf;
        }

        function mTel(tel){
            tel=tel.replace(/\D/g,"");
            tel=tel.replace(/^(\d)/,"($1");
            tel=tel.replace(/(.{3})(\d)/,"$1)$2");

            if (tel.length == 9) {
                tel=tel.replace(/(.{1})$/,"-$1");
            }else if (tel.length == 10) {
                tel=tel.replace(/(.{2})$/,"-$1");
            }else if (tel.length == 11) {
                tel=tel.replace(/(.{3})$/,"-$1");
            }else if (tel.length >= 12) {
                tel=tel.replace(/(.{4})$/,"-$1");
            }

            return tel;
        }
    </script>
</head>

<body class="bg-light">

    <div class="container py-5">

        <div class="card shadow border-0 rounded-4">

            <div class="card-body p-5">

                <font size="7" face="Georgia" color="#0d6efd">
                <h1 class="text-center text-primary mb-2">
                    U.C Testes de Sistemas - SENAI SC
                </h1>
                </font>
                <!-- <font size="7" face="Georgia" color="#0d6efd"> -->
                <h4 class="text-center text-secondary mb-4">
                    Formulário de Cadastro do Aluno
                </h4>

                <hr class="mb-5">
                
                <font face="Georgia">
                <h3 class="text-center mb-4">
                    Dados Pessoais
                </h3>
                </font>

                <!-- COLOQUE COMENTARIO NA LINHA ABAIXO PARA REALIZAR OS TESTES-->

                <form method="POST" action="cadastro.php">

                <!-- RETIRE O COMENTARIO DA LINHA ABAIXO PARA REALIZAR OS TESTES e DEPOIS COMENTE NOVAMENTE-->

                <!--<form method="POST" action="../tests/verifica_form.php"> -->

                <!-- RETIRE O COMENTARIO DA LINHA ABAIXO PARA REALIZAR OS TESTES e DEPOIS COMENTE NOVAMENTE-->

                <!--form method="POST" action="../tests/valida_form_grava.php"-->

                    <div class="mb-3">
                        <label class="form-label">Nome do Aluno(a)</label>
                        <input type="text" class="form-control" name="Nome">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Data de Nascimento</label>
                        <input type="text"
                               class="form-control"
                               name="DataNasc"
                               placeholder="aaaa/mm/dd"
                               maxlength="10"
                               onkeydown="javascript:fMasc(this,mData)">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Nome do Pai</label>
                        <input type="text" class="form-control" name="NomePai">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Nome da Mãe</label>
                        <input type="text" class="form-control" name="NomeMae">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Telefone</label>
                        <input type="text"
                               class="form-control"
                               name="Telefone"
                               maxlength="14"
                               onkeydown="javascript:fMasc(this,mTel);">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">E-Mail</label>
                        <input type="text" class="form-control" name="Email">
                    </div>

                    <div class="mb-3">
                        <label class="form-label d-block">Sexo</label>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input"
                                   type="radio"
                                   name="Sexo"
                                   value="Masculino">

                            <label class="form-check-label">
                                Masculino
                            </label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input"
                                   type="radio"
                                   name="Sexo"
                                   value="Feminino">

                            <label class="form-check-label">
                                Feminino
                            </label>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="form-label">Bairro</label>

                        <select name="Bairro" class="form-select">
                            <option></option>
                            <option>Agua Verde</option>
                            <option>Alto da XV</option>
                            <option>Batel</option>
                            <option>Cajuru</option>
                            <option>Centro Civico</option>
                            <option>Ecoville</option>
                            <option>Hauer</option>
                            <option>Jardim Botanico</option>
                            <option>Jardim das Americas</option>
                            <option>Portão</option>
                            <option>Santa Candida</option>
                            <option>Sitio Cercado</option>
                            <option>Xaxim</option>
                            <option>Boqueirão</option>
                            <option>CIC</option>
                        </select>
                    </div>

                    <div class="d-flex justify-content-center gap-3 mb-4">
                        <input type="reset"
                               value="Limpar Dados"
                               class="btn btn-outline-danger">

                        <input type="submit"
                               value="Cadastrar Aluno"
                               class="btn btn-success">
                    </div>

                </form>

                <hr class="my-4">

                <div class="d-flex flex-wrap justify-content-center gap-3 mb-4">

                    <form method="POST" action="listar.php">
                        <input type="submit"
                               value="Listar Alunos"
                               class="btn btn-dark text-white">
                    </form>

                    <form method="POST" action="procurar.php">
                        <input type="submit"
                               value="Consultar Aluno"
                               class="btn btn-dark text-white">
                    </form>

                    <form method="POST" action="atualizar.php">
                        <input type="submit"
                               value="Atualizar Dados do Aluno"
                               class="btn btn-dark text-white">
                    </form>

                    <form method="POST" action="apagar.php">
                        <input type="submit"
                               value="Excluir Dados do Aluno"
                               class="btn btn-dark text-white">
                    </form>

                </div>

                <nav class="text-center mb-4">
                    <a href="index.php" class="btn btn-link">
                        Home
                    </a>

                    <a href="../CRUD_MATRICULA/formMatricula.php" class="btn btn-link">
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
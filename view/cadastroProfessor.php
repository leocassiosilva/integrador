<!DOCTYPE html>
<html>

<head>
    <title>Cadastro Professor</title>
    <?php include 'layout/head2.php'; ?>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card card-signin my-5">
                    <div class="card-body" id="cad">
                        <div class="panel-heading">
                            <h3 class="panel-title"></i> Cadastro Professor</h3>
                        </div>
                        <form id="cadastroForm" class="justify-content-center" style="background-color: #fff;">
                            <div class="form-group">
                                <label class="text-info">Nome</label>
                                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome">
                            </div>
                            <div class="form-group">
                                <label class="text-info">Matricula</label>
                                <input type="text" class="form-control" id="matricula" name="matricula" placeholder="1234">
                            </div>
                            <div class="form-group ">
                                <label class="text-info">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                            </div>

                            <div class="form-group">
                                <label for="password" class="text-info">Senha:</label><br>
                                <p><input type="password" class="form-control" id="senha" name="senha"></p>
                            </div>

                            <input type="button" class="btn btn-success" id="btnAdicionar" value="Adicionar">
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.min.js"></script>
        <script type="text/javascript" src="../js/cadastroProfessor.js"></script>

</body>

</html>
<!DOCTYPE html>
<html>

<head>
    <title>Cadastro Estagiario</title>
    <?php include 'layout/head2.php';
    
    session_start();
if ($_SESSION['status'] != 'LOGADO') {
    header("Location: ../index.php"); // Chamar um form de login por exemplo.
} else {
    $idUsuario = $_SESSION['idUsuario'];
}
    ?>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card card-signin my-5">
                    <div class="card-body" id="cad">
                        <div class="panel-heading">
                            <h3 class="panel-title"></i> Cadastro Estagiario</h3>
                        </div>
                        <div class="panel-body">
                            <div class="form-group col-md-12">
                                <label class="text-info">Nome</label>
                                <input type="text" class="form-control" id="nome">
                            </div>

                            <div class="form-group col-md-12">
                                <label class="text-info">Email</label>
                                <p><input type="text" class="form-control" id="email"></p>
                            </div>

                            <div class="form-group col-md-12">
                                <label class="text-info">Matricula</label>
                                <p><input type="text" class="form-control" id="matricula"></p>
                            </div>

                            <div class="form-group col-md-12">
                                <label for="password" class="text-info">Senha:</label><br>
                                <p><input type="password" class="form-control" id="senha"></p>
                            </div>

                            <div class="form-group col-md-6">
                                <input type="button" class="btn btn-success" id="btnAdicionar" value="Adicionar">
                            </div>
                        </div>
                        <p id="mensagem"></p>
                    </div>
                </div>
            </div>
        </div>
        
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="../js/cadastroProfessor.js"></script>
        </script>
</body>

</html>
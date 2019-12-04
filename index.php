<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <?php include 'view/layout/head1.php'; ?>
</head>

<body>
    <div class="container">
    
    <div>
    <div class="text-center">
		<img src="img/logo.png">
	</div>
    </div>


        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card card-signin my-5">
                    
                    <div class="card-body" id="cad" >

                        <div class="panel-heading">
                            <h3 class="panel-title"></i> Login</h3>
                        </div>
                        <div class="panel-body">
                            <form id= "loginform" action="control/controleLogin.php" method="post" id="login-form">

                                <div class="form-group col-md-12">
                                    <label class="text-info">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                                    <p id="menssagem"></p>
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="password" class="text-info">Senha:</label><br>
                                    <input type="password" name="senha" id="senha" class="form-control">
                                </div>

                                <div class="form-group col-md-12">
                                    <button type="submit" class="btn btn-success" id="btnEntrar">Login</button>
                                </div>
                                <div class="row">
							<div class="col-5">
								<p><a href="view/cadastroProfessor.php">Cadastra-se</a></p>
							</div>
							<div class="col-7">
								<p>Esqueceu <a href="view/esqueceuSenha.php">a senha ?</a></p>
							</div>

						</div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'view/layout/footer.php'; ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.min.js"></script>
    <script type="text/javascript" src="js/login.js"></script>
</body>

</html>
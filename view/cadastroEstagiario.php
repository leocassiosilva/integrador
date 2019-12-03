
    <?php include 'layout/navbar.php';?>
    <div class="container">
      <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
          <div class="card card-signin my-5">
            <div class="card-body" id="cad">
              <div class="panel-heading">
                <h3 class="panel-title"></i> Cadastro Estagiario</h3>
              </div>
              <form id="sign_up_form" method="post" action="" >
                <div class="form-group">
                  <label class="text-info">Nome</label>
                  <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome">
                </div>
                <div class="form-group">
                  <label class="text-info">Matricula</label>
                  <input type="text" class="form-control" id="matricula" name="matricula" placeholder="1234">
                </div>
                <div class="form-group">
                  <label class="text-info">Email</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="nome@escolar.ifrn.edu.br">
                </div>
                <div class="form-group">
                  <label class="text-info">Senha</label>
                  <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha">
                </div>
                <div class="form-group">
                  <label class="text-info">Confirmação de senha</label>
                  <input type="password" class="form-control" id="senha_confirmar" name="senha_confirmar"  placeholder="Confirmação de senha">
                </div>

                <button type="submit" class="btn btn-success" id="btnAdicionar">Cadastrar</button>
              </form>
            </div>
          </div>
        </div>
      </div>

      <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
      <script type="text/javascript" src="../js/cadastroEstagiario.js">  </script>

    </body>
    </html>
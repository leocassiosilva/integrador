<?php
include("../dao/Conexao.php");
$conexao = new Conexao();
session_start();

if ((!isset($_SESSION['email']) == true) && (!isset($_SESSION['senha']) == true)) {

    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('location:login.php');
}

$logado = $_SESSION['email'];
$nivel = $_SESSION['tipo']; //Usada para pedar o tipo do usario e verificar seu nivel de acesso 
$id_usuario = $_SESSION['id_usuario']; //como que faço paramandar id para a solicitação de impressão ? 


if (!isset($_SESSION['email']) or ($_SESSION['tipo']) < $nivel) {
    session_destroy();
    header('Location:login.php');
    exit();
}
?>


<!DOCTYPE html>
<html>

<head>
    <title>Cadastros de Solicitações</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="../js/bootstrap.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><strong>PROGRAMA</strong></a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <ul class="nav navbar-nav navbar-right">
                    <li><a><i class="glyphicon glyphicon-cog" title="" aria-hidden="true"></i> Sua conta</a></li>
                    <li><a><i class="glyphicon glyphicon-off" title="" aria-hidden="true"></i> Sair</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container ">
        <div class="row">
            <h1>Painel de Solicitações dos Profesores </h1>
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default panel-table">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col col-xs-6 align-self-center">
                                <h3 class="panel-title">Solicitações</h3>
                            </div>
                            <div class="col col-xs-6 text-right">
                                    
                                    <div class="pull-right">
                <button type="button" class="btn btn-xs btn-success" data-toggle="modal" data-target="#myModalcad"><i class="glyphicon glyphicon-plus"> Solicitar</i></button>

                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <?php
                        //consultar no banco de dados
                        $sql = "SELECT impressao.id_impressao, impressao.data_necessita, impressao.quantidade 
as qtd_impressao, impressao.nome as nome_impressao, usuario.nome as nome_usuario, 
lado.nome as nome_lado, tipo_atividade.nome as nome_atividade, 
curso.nome as nome_curso, ano.nome as nome_ano, turno.nome as nome_turno, status_impressao.nome as nome_status
FROM impressao 
inner join usuario
on(impressao.id_usuario = usuario.id_usuario)
inner join lado
on(impressao.id_lado = lado.id_lado)
inner join tipo_atividade
on(impressao.id_tipo = tipo_atividade.id_tipo)
inner join status_impressao
on(impressao.id_status = status_impressao.id_status)
inner join turma
on(impressao.id_turma = turma.id_turma)
inner join curso
on(turma.id_curso = curso.id_curso)
inner join ano
on(turma.id_ano = ano.id_ano)
inner join turno
on(turma.id_turno = turno.id_turno)

WHERE (impressao.id_usuario = $id_usuario) 
ORDER BY impressao.data_necessita ASC";
                        $resultado_impressao = mysqli_query($conexao->getCon(), $sql);
                        ?>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th >ID</th>
                                    <th scope="col">Nome Atividade</th>
                                    <th scope="col">Data Necessita</th>
                                    <th scope="col">Quantidade</th>
                                    <th scope="col">Lado</th>
                                    <th scope="col">Tipo</th>
                                    <th scope="col">Curso</th>
                                    <th scope="col">Ano</th>
                                     <th scope="col">Turno</th>
                                     <th scope="col">Nome</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                //Verificar se encontrou resultado na tabela "usuarios"
                                if (($resultado_impressao) and ($resultado_impressao->num_rows != 0)) {
                                    while ($row_impressao = mysqli_fetch_assoc($resultado_impressao)) {
                                        ?>
                                        <tr>
                                            <th> <?php echo $row_impressao['id_impressao'] ?></th>
                                            <td><?php echo $row_impressao['nome_impressao'] ?></td>
                                            <td><?php echo $row_impressao['data_necessita'] ?></td>
                                            <td><?php echo $row_impressao['qtd_impressao'] ?></td>
                                            <td><?php echo $row_impressao['nome_lado'] ?></td>
                                            <td><?php echo $row_impressao['nome_atividade'] ?></td>
                                            <td><?php echo $row_impressao['nome_curso'] ?></td>
                                            <td><?php echo $row_impressao['nome_ano'] ?></td>
                                            <td><?php echo $row_impressao['nome_turno'] ?></td>
                                            <td><?php echo $row_impressao['nome_usuario'] ?></td>
                                            <td><?php echo $row_impressao['nome_status'] ?></td>
                                        </tr>
                                <?php
                                    }
                                } else {
                                    echo "Nenhum impressao";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


            </div>
            <!-- Inicio Modal -->
            <div class="modal fade" id="myModalcad" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title text-center" id="myModalLabel">Cadastrar Impressao</h4>
                        </div>
                        <div class="modal-body">
                            <form id="cadastroImpressao" class="form" action="../control/controleImpressao.php" method="post" enctype="multipart/form-data">

        <div class="form-row">
            <div class="form-group col-md-4">
                <label>Nome da Atividade</label>
                <input id="nome" name="nome" type="text" placeholder="Prova" class="form-control input-md">

            </div>
            <div class="form-group col-md-4">
                <label class="col-md-4 control-label">Quantidade</label>
                <input id="quantidade" name="quantidade" type="number" placeholder="10" class="form-control input-md">
            </div>
            <div class="form-group col-md-4">
                <label>Data</label>
                <input id="data" name="data" type="date" placeholder="DD/MM/AAAA" class="form-control input-md" maxlength="10">
            </div>
        </div>


        <div class="form-row">
            <div class="form-group col-md-2">
                <label>Tipo de Atividade</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="tipo" id="tipo" value="1">
                    <label class="form-check-label">Atividade Avaliativa</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="tipo" id="tipo" value="2">
                    <label class="form-check-label">Atividade</label>
                </div>
            </div>
            <p id="tipoAtividade"></p>

            <div class="form-group col-md-4">
                <label>Lado</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="lado" id="lado" value="1">
                    <label class="form-check-label" for="inlineRadio2">Frente</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="lado" id="lado" value="2">
                    <label class="form-check-label" for="inlineRadio2">Frente e Verso</label>
                </div>
            </div>
            <p id="folha_lado"></p>
        </div>


        <div class="form-row">
            <div>
                <div class="form-group col-md-3">
                    <label>Curso</label>
                    <select name="turma" id="turma" class="form-control">
                        <option value="">Escolha o Curso</option>
                        <?php
                        $query = "SELECT turma.id_turma, curso.nome as curso, turno.nome as turno, ano.nome as ano FROM turma 
                        INNER JOIN turno on turma.id_turno = turno.id_turno 
                        INNER JOIN ano on ano.id_ano = turma.id_ano
                        INNER JOIN curso on curso.id_curso = turma.id_curso";
                        $result = mysqli_query($conexao->getCon(), $query); //Conectando ao banco

                        while ($row = mysqli_fetch_assoc($result)) { ?>
                            <option value="<?php echo $row['id_turma']; ?>"> <?php echo $row['ano'] . "°" . $row['curso'] . " " . $row['turno']; ?>
                            </option><?php
                                        }
                                        ?>
                    </select>
                </div>
            </div>


            <div class="form-group col-md-4">
                <label>Arquivo</label>
                <input type="file" name="pic" accept=".pdf">

            </div>
        </div>
                                <div class="modal-footer">
                                    <div class="form-row">
            <div class="form-group col-md-12">
                <button id="btnSolicitar" name="#btnSolicitar" class="btn btn-success">Solicitar</button>
                <button id="id_cancelar" name="id_cancelar" class="btn btn-danger">Cancelar</button>
            </div>
        </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>















    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.min.js"></script>

    <script type="text/javascript" src="cadastroImpressao.js">


    </script>

</body>

</html>
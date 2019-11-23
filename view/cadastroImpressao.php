<?php
include("../dao/Conexao.php");

session_start();
if ($_SESSION['status'] != 'LOGADO') {
    header("Location: ../index.php"); // Chamar um form de login por exemplo.
} else {
    $idUsuario = $_SESSION['idUsuario'];
}

$conexao = new Conexao();

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
    <form id="cadastroImpressao" class="form" action="../control/controleImpressao.php" method="post">
        <div class="form-row">

            <div class="form-group col-md-8">
                <label>Nome da Atividade</label>
                <input id="nome" name="nome" type="text" placeholder="Prova" class="form-control input-md">

            </div>
            <div class="form-group col-md-4">
                <label class="col-md-4 control-label">Quantidade</label>
                <input id="quantidade" name="quantidade" type="number" placeholder="10" class="form-control input-md">
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

            <div class="form-group col-md-4">
                <label>Lado</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="lado" id="lado" value="Frente">
                    <label class="form-check-label" for="inlineRadio2">Frente</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="lado" id="lado" value="Frente e Verso">
                    <label class="form-check-label" for="inlineRadio2">Frente e Verso</label>
                </div>
            </div>
        </div>

        <div class="form-row">
            <div>
                <div class="form-group col-md-3">
                    <label>Curso</label>
                    <select ame="id_curso" id="id_curso" class="form-control">
                        <option value="">Escolha o Curso</option>
                        <?php
                        $query = "SELECT id_curso, nome FROM curso";
                        $result = mysqli_query($conexao->getCon(), $query); //Conectando ao banco

                        while ($row = mysqli_fetch_assoc($result)) { ?>
                            <option value=" <?php echo $row["id_curso"]; ?>"><?php echo $row["nome"]; ?>
                            </option><?php
                                        }
                                        ?>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label>Ano(Periodo) Turno</label>
                    <select name="id_periodo_turno" id="id_periodo_turno" class="form-control">
                        <option value="">Ano(Periodo) e Turno</option>
                    </select>
                </div>
            </div>
        </div>


        <div class="form-row">
            <div class="form-group col-md-4">
                <label>Data</label>
                <input id="data" name="data" type="date" placeholder="DD/MM/AAAA" class="form-control input-md" maxlength="10">
            </div>
        </div>


        
        <div class="form-row">
            <div class="form-group col-md-12">
            <button id="#btnSolicitar" name="#btnSolicitar" class="btn btn-success">Solicitar</button>
                    <button id="id_cancelar" name="id_cancelar" class="btn btn-danger">Cancelar</button>
            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.min.js"></script>

        <script type="text/javascript" src="../js/cadastroImpressao.js"></script>

</body>

</html>
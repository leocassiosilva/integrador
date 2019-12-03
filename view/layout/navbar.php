<?php
session_start();
if ($_SESSION['status'] != 'LOGADO') {
    header("Location: ../index.php"); // Chamar um form de login por exemplo.
  } else {
    $id_usuario = $_SESSION['id_usuario'];
    $logado = $_SESSION['email'];
    $nivel = $_SESSION['tipo'];
  }
  ?>
<!DOCTYPE html>
<html>

<head>
    <title>Cadastros de Solicitações</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
        integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!--<script src="js/bootstrap.min.js"></script>-->

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
                <a class="navbar-brand" href="painel.php"><strong>PRINTIF</strong></a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <ul class="nav navbar-nav navbar-right">
                    <?php
                    if($nivel==2){
                        echo "<li><a href='cadastroEstagiario.php'><i class='glyphicon glyphicon-plus   
                        ' title='' aria-hidden='true' ></i> Adicionar Estagiário</a></li>";
                    }
                    ?>
                    <li><a><i title="" aria-hidden="true"> E-mail:</i> <?=$logado ?></a></li>
                    <li><a href="logoff.php"><i class="glyphicon glyphicon-off" title="" aria-hidden="true"></i> Sair</a></li>
                </ul>
            </div>
        </div>
    </nav>
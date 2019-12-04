<?php
session_start();
require_once("../model/Usuario.php");
require_once("../dao/UsuarioDAO.php");


//$acao = $_GET["acao"];
$usuarioDAO = new UsuarioDAO();
$tipo = $_POST["t"];
$nome = $_POST["n"];
$email = $_POST["e"];
$matricula = $_POST["m"];
$senha = $_POST["s"];



$usuario = new Usuario();
$usuario->setNome($nome);
$usuario->setEmail($email);
$usuario->setMatricula($matricula);
$usuario->setSenha($senha);
$usuario->setTipo($tipo);

/* Essa parte serve para verificar os dados do cadastro*/
$consulta = $usuarioDAO->verificar($usuario);


$verificarEmail = false;


if ($usuario->getTipo() == 1) {

    if (isset($email) && !empty($email)) {
        $array = explode('@',  $email);

        $result = explode('.', $array[1]);

        if ($result[0] == "ifrn" && $result[1] == "edu" && $result[2] == "br") {
            $verificarEmail = true;
        } else {
            $verificarEmail = false;
        }
    } else {
        $verificarEmail = false;
    }
} else if ($usuario->getTipo() == 3) {
    if (isset($email) && !empty($email)) {
        $array = explode('@',  $email);

        $result = explode('.', $array[1]);

        if ($result[0] == "escolar" && $result[1] == "ifrn" && $result[2] == "edu" && $result[3] == "br") {

            $verificarEmail = true;
        } else {
            $verificarEmail = false;
        }
    } else {
        $verificarEmail = false;
    }
}


if ($consulta == true && $verificarEmail == true) {
    $usuarioDAO->Cadastrar($usuario);
    header('Location: index.php');
} else {
    if ($usuario->getTipo()  == 1) {
       header('Location: ../view/cadastroProfessor.php');
    }else {
        header('Location: ../view/cadastroEstagiario.php');
    }
    
}

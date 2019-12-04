<?php 
session_start();
require_once("../model/Usuario.php");
require_once("../dao/UsuarioDAO.php");

$usuarioDAO = new UsuarioDAO();


$email = $_POST["email"];
$senha = $_POST["senha"];

$usuario = new Usuario(); 

$usuario->setEmail($email);
$usuario->setSenha($senha);


$recebe = $usuarioDAO->login($usuario); 


if (empty($recebe)){
    header('Location: ../index.php');
}else{
      
      // Salva os dados encontrados na sessão
      $_SESSION['email'] = $usuario->getEmail();
      $_SESSION['tipo'] = $usuario->getTipo();
      $_SESSION['id_usuario'] = $usuario->getId_usuario();
      $_SESSION['nome'] = $usuario->getNome();
      $_SESSION['status'] = 'LOGADO';
      //echo $usuario->getId_usuario();
    header('Location: ../view/painel.php');
}

?>

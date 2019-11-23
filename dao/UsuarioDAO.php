<?php

include("Conexao.php");
require_once("../model/Usuario.php");



class UsuarioDAO
{

  private $conexao;
  public function __construct()
  {
    $this->conexao = new Conexao();
  }


  public function Cadastrar(Usuario $usuario)
  {

    $nome = $usuario->getNome();
    $email = $usuario->getEmail();
    $matricula = $usuario->getMatricula();
    $senha = $usuario->getSenha();
    $tipo = $usuario->getTipo();


    /*Parte para inserir no banco de dados */
    $sql =  "INSERT INTO usuario (nome, email, matricula, senha, id_tipo, data_cadastro) VALUES ('$nome', '$email', '$matricula', '$senha','$tipo', NOW()) ";

    $inserir = mysqli_query($this->conexao->getCon(), $sql);
    if (mysqli_affected_rows($this->conexao->getCon()) > 0) {
      return true;
    } else {
      return false;
    }
  }

  public function verificar(Usuario $usuario)
  {

    $email = $usuario->getEmail();
    $sql = "SELECT * FROM usuario WHERE email = '$email'";

    $resposta = mysqli_query($this->conexao->getCon(), $sql);
    if (mysqli_num_rows($resposta) == 0) {
      return true;
    } else {
      return false;
    }
  }

  public function login(Usuario $usuario)
  {

    $senha = $usuario->getSenha();
    $email = $usuario->getEmail();


    $sql = "SELECT *  FROM usuario WHERE senha = '$senha' and email = '$email'";

    /*Consulta no banco pelo id_tipo que define qual o tipo do usuario*/
    $sql1 = "SELECT  usuario.id_tipo, usuario.id_usuario  FROM usuario 
    WHERE senha = '$senha' and email = '$email'";

    $row = 0; //Variavel usada para armazenar os dados advindo da consulta 

    $result = mysqli_query($this->conexao->getCon(), $sql1); //Conectando ao banco

    

    if(mysqli_num_rows($result) > 0){ //Verificando se existe alguem com no banco com esse id_tipo 
      while($row = mysqli_fetch_assoc($result)){ //Percorrendo
        $usuario->setTipo($row["id_tipo"]);
        $usuario->setId_usuario($row["id_usuario"]);
      }
    }
    

    

   
    $respostaSql = mysqli_query($this->conexao->getCon(), $sql);
    if (mysqli_num_rows($respostaSql) == 0) {
      
      return 0;
    } else {
      return $usuario;
    }
  }
}

?>

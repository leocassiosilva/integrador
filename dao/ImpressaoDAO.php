<?php

include("Conexao.php");
require_once("../model/Usuario.php");



class ImpressaoDAO
{

  private $conexao;
  public function __construct()
  {
    $this->conexao = new Conexao();
  }


public function inserirImpressao(Impressao $impressao){
    
    
    $nome = $impressao->getNome();
    $quantidade = $impressao->getQuantidade();
    $tipo = $impressao->getTipo();
    $turma = $impressao->getTurma();
    $status = $impressao->getStatus();
    $lado = $impressao->getLado();
    $id_usuario = $impressao->getId_usuario();
    $data_necessita = $impressao->getData_necessita();
    $data_solicitacao = $impressao->getData_solicitacao();
    $caminho = $impressao->getCaminho(); 
        
    /*Parte para inserir no banco de dados */
    $sql = "INSERT INTO impressao(nome, quantidade, id_lado, id_usuario, id_tipo, id_status, id_turma, data_necessita,caminho, data_solicitacao) VALUES('$nome', '$quantidade', '$lado', '$id_usuario','$tipo','$status', '$turma', '$data_necessita', '$caminho', NOW())";
    


    /*$sql =  "INSERT INTO usuario (nome, email, matricula, senha, id_tipo, data_cadastro) VALUES ('$nome', '$email', '$matricula', '$senha','$tipo', NOW()) ";*/

    $inserir = mysqli_query($this->conexao->getCon(), $sql);
    if (mysqli_affected_rows($this->conexao->getCon()) > 0) {
      return true;
    } else {
      return false;
    }

}

}
?>

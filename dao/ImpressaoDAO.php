<?php
include("Conexao.php");
require_once("../model/Impressao.php");
class ImpressaoDAO{
    private $conexao;
    public function __construct()
    {
      $this->conexao = new Conexao();
    }
}


function inserirImpressao(Impressao $impressao){
    
    
    $nome = $impressao->getNome();
    $quantidade = $impressao->getQuantidade();
    $tipo = $impressao->getTipo();
    $turno = $impressao->getAno();
    $ano = $impressao->getStatus();
    $data_necessita = $impressao->getData_necessita();
    $lado = $impressao->getLado();
    $data_solicitacao = $impressao->getData_solicitacao();
    $id_usuario = $impressao->getId_usuario();

   
}

?>

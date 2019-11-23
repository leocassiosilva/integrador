<?php

session_start();
require_once("../model/Impressao.php");
require_once("../dao/ImpressaoDAO.php");


$impressaoDAO = new ImpressaoDAO();
$nome = $_POST['nome'];
$quatidade = $_POST['quantidade']; 
$tipo = $_POST['tipo'];
$curso = $_POST['curso'];
$ano = $_POST['ano'];
$turno = $_POST['turno'];
$data_necessita = $_POST['data']; 
$lado = $_POST['lado']; 
$id_usuario = $_GET["id_usuario"];
$status = $_POST["status"];
$dataSolicitacao = date('d/m/Y'); 

$impressao = new Impressao();

$impressao->setNome($nome); 
$impressao->setQuantidade($quatidade); 
$impressao->setTipo($tipo);
$impressao->setCurso($curso);
$impressao->setAno($ano);
$impressao->setTurno($turno); 
$impressao->setData_necessita($data_necessita);
$impressao->setLado($lado);
$impressao->setStatus($status);
$impressao->setId_usuario($id_usuario);
$impressao->setData_solicitacao($dataSolicitacao);




echo $impressao->getId_usuario();



?>
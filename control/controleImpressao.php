<?php

session_start();
require_once("../model/Impressao.php");
require_once("../dao/ImpressaoDAO.php");
$id_usuario = $_SESSION['id_usuario'];

$impressaoDAO = new ImpressaoDAO();
$nome;
$quatidade;
$tipo;
$data_necessita;
$lado;
$turma;
$id_usuario = $id_usuario;
$status = 1;
$dataSolicitacao = date('d/m/Y');
$impressao = new Impressao();

if (isset($_POST['nome']) && isset($_FILES['pic']) && isset($_POST['quantidade']) && isset($_POST['tipo']) && isset($_POST['data']) && isset($_POST['lado']) && isset($_POST['turma'])) {
    if (!empty($_POST['nome']) && !empty($_FILES['pic']) && !empty($_POST['quantidade']) && !empty($_POST['tipo']) && !empty($_POST['data']) && !empty($_POST['lado']) && !empty($_POST['turma'])) {

        $nome = $_POST['nome'];
        $quatidade = $_POST['quantidade'];
        $tipo = $_POST['tipo'];
        $data_necessita = $_POST['data'];
        $lado = $_POST['lado'];
        $turma = $_POST['turma'];

        $ext = strtolower(substr($_FILES['pic']['name'], -4)); //Pegando extensão do arquivo
        $nomeArquivo = date("Y.m.d-H.i.s") . $ext; //Definindo um novo nome para o arquivo
        $diretorio = '../imagens/'; //Diretório para uploads 
        move_uploaded_file($_FILES['pic']['tmp_name'], $diretorio . $nomeArquivo); //Fazer upload do arquivo
        $caminho = $diretorio . $nomeArquivo;


        $impressao = new Impressao();
        $impressao->setNome($nome);
        $impressao->setQuantidade($quatidade);
        $impressao->setTipo($tipo);
        $impressao->setTurma($turma);
        $impressao->setData_necessita($data_necessita);
        $impressao->setLado($lado);
        $impressao->setStatus($status);
        $impressao->setId_usuario($id_usuario);
        $impressao->setData_solicitacao($dataSolicitacao);
        $impressao->setCaminho($caminho);
        $impressaoDAO->inserirImpressao($impressao);
        header("Location: ../view/painel.php");
    }
}


?>
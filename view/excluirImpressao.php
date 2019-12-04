<?php 
include("../dao/Conexao.php");
$conexao = new Conexao();

$id_impressao = $_GET['id']; 

$sql = "DELETE from impressao where id_impressao =  $id_impressao";
$resultado_impressao = mysqli_query($conexao->getCon(), $sql);
header('Location: ../view/painel.php');
?>
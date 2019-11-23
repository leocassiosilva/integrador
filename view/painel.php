<?php
session_start();
if ((!isset($_SESSION['email']) == true) && (!isset($_SESSION['senha']) == true)) {

    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('location:login.php');
}

$logado = $_SESSION['email']; 
$nivel = $_SESSION['tipo']; //Usada para pedar o tipo do usario e verificar seu nivel de acesso 
$id_usuario = $_SESSION['id_usuario']; //como que faço paramandar id para a solicitação de impressão ? 


if (!isset($_SESSION['email']) OR ($_SESSION['tipo']) < $nivel) {
    session_destroy();
    header('Location:login.php');
    exit();
}

if ($nivel == 1) {
    echo "Boa meu Boa Professor!";

    echo $id_usuario; 
    header("Location:../control/controleImpressao.php?id_usuario={$_SESSION['id_usuario']}");

}else if ($nivel == 2) {
    echo "Boa meu Funcionario";
} else  if ($nivel == 3) {
    echo "Boa meu Estagiario";
}else {
    echo "Ta querendo o que aqui malandro!";
}
    
 
?>

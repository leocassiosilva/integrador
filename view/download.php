<?php
include("../dao/Conexao.php");
$conexao = new Conexao();
$id = $_GET["id"];





$sql = "SELECT * FROM impressao WHERE id_impressao =   ".$id;

if ($result =  mysqli_query($conexao->getCon(), $sql)) {
    while ($row = $result->fetch_assoc()) {
        echo '<a href="', $row['caminho'],
        '"> ', basename($row['caminho']),
        '</a>';
    }

    $result->close();
}
?>
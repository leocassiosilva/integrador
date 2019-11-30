<?php
include("../dao/Conexao.php");
$conexao = new Conexao();
session_start();


    //consultar no banco de dados
$sql = "SELECT * FROM impressao ORDER BY id_impressao ASC";
$resultado_impressao = mysqli_query($conexao->getCon(), $sql);
?> 
<table class="table">
<thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Data Solicitação</th>
    </tr>
  </thead>
  <tbody>
<?php 
//Verificar se encontrou resultado na tabela "usuarios"
if(($resultado_impressao) AND ($resultado_impressao->num_rows != 0)){
	while($row_impressao = mysqli_fetch_assoc($resultado_impressao)){
		?> 
		<tr>
      <th > <?php echo $row_impressao['id_impressao'] ?></th>
      <td><?php echo $row_impressao['nome'] ?></td>
      <td><?php echo $row_impressao['data_solicitacao'] ?></td>
    </tr>
    <?php 
	}
}else{
	echo "Nenhum impressao";
}
?>
</tbody>
</table>
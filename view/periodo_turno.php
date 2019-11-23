<?php include("../dao/Conexao.php");


	$id_curso = $_REQUEST['id_curso'];
   
    $queryTurma = "SELECT id_turma, ano, turno FROM turma WHERE id_curso=".$id_curso;

	$conexao = new Conexao();

	$resultado_sub_cat = mysqli_query($conexao->getCon(), $queryTurma); //Conectando ao banco

    if (mysqli_num_rows($resultado_sub_cat) == 0) {
		$sub_categorias_post = [];
	} 
	else {
		while ($row_sub_cat = mysqli_fetch_array($resultado_sub_cat) ) {
			$sub_categorias_post[] = array(
				'id'	=> $row_sub_cat['id_turma'],
				'turno' => utf8_encode($row_sub_cat['turno']),
				'ano' => utf8_encode($row_sub_cat['ano']),
			);
		}
    }
	
	echo(json_encode($sub_categorias_post));

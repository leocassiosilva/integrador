<?php include("../dao/Conexao.php");


	$id_curso = $_REQUEST['id_curso'];
   
    // $queryTurma = "SELECT id_turma, id_turno, id_ano FROM turma
	// -- WHERE id_curso = ".$id_curso;
	$queryTurma = "SELECT turma.id_turma, curso.nome, turno.nome, ano.nome FROM turma 
	INNER JOIN turno on turma.id_turno = turno.id_turno 
	INNER JOIN ano on ano.id_ano = turma.id_ano
	INNER JOIN curso on curso.id_curso = turma.id_curso;  
	// -- WHERE id_curso = ".$id_curso;

	$conexao = new Conexao();

	$resultado_sub_cat = mysqli_query($conexao->getCon(), $queryTurma); //Conectando ao banco
	echo(json_encode($resultado_sub_cat));
    // if (mysqli_num_rows($resultado_sub_cat) == 0) {
	// 	$sub_categorias_post = [];
	// } 
	// else {
	// 	while ($row_sub_cat = mysqli_fetch_array($resultado_sub_cat) ) {
	// 		$sub_categorias_post[] = array(
	// 			'id'	=> $row_sub_cat['id_turma'],
	// 			//'turno' => $row_sub_cat['id_turno'],
	// 			//'ano' => $row_sub_cat['id_ano'],
	// 		);
	// 	}
    // }
	
	// echo(json_encode($sub_categorias_post));

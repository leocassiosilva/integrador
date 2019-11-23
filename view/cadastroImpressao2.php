<?php 
include("../dao/Conexao.php");


$conexao = new Conexao();

?>

<!DOCTYPE html>
<html>

<head>
    <title>Cadastros de Solicitações</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    
</head>

<body>
    <form name="produto" method="post" action="">
        <label for="">Curso</label>
        <select name="id_curso" id="id_curso">
        <option value="">Escolha o Curso</option>
        <?php 
            $query = "SELECT id_curso, nome FROM curso";
            $result = mysqli_query($conexao->getCon(), $query); //Conectando ao banco

            while($row = mysqli_fetch_assoc($result)){?>
                <option value=" <?php echo $row["id_curso"];?>"><?php echo $row["nome"];?>
                </option><?php
            }
        ?>
        </select> <br><br>

        <label>Subcategoria:</label>
        <select name="id_periodo_turno" id="id_periodo_turno">
            <option value="">Escolha a Subcategoria</option>
        </select><br><br>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script type="text/javascript">
		  google.load("jquery", "1.4.2");
		</script>
       
       <script type="text/javascript">
		$(function(){
			$('#id_curso').change(function(){
				if( $(this).val() ) {

					$.getJSON('periodo_turno.php?search=',{id_curso: $(this).val(), ajax: 'true'}, function(j){
						var options = '<option value="">Escolha Subcategoria</option>';	
						for (var i = 0; i < j.length; i++) {
							options += '<option value="' + j[i].id + '">' + j[i].ano +'º '+ j[i].turno + '</option>';
						}	
						$('#id_periodo_turno').html(options).show();
					});
				} else {
					$('#id_periodo_turno').html('<option value="">– Escolha Subcategoria –</option>');
				}
			});
		});
		</script>       
        
       

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.min.js"></script>
    


</body>

</html>
<?php 

$email = $_POST['email']; 


verificarExistenciaVariavel($email);
/*Verificando se a variavel existe e se ela contem algum conteudo*/

function verificarExistenciaVariavel($email)
{
    if(isset($email) && !empty($email)){
        verificarEmail($email);//Chamando a função para verificar se o e-mail está corrreto
    }else {
        echo "Você esqueceu de preencher o email!";
    }
}

/*Função para verificar se parte final do email 
condiz com o email dos docentes*/
function verificarEmail($email){
    $array = explode('@',  $email);
    
    $result = explode('.', $array[1]); 
    
    if($result[0] == "ifrn" && $result[1] == "edu" && $result[2] == "br"){
        echo "Cadastrado!"; //Chama a função cadastrar usuario ? 
    }else {
        echo "Não!"; 
    }
}





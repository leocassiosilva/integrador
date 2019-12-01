 $(document).ready( function() {
 
  $(function () {
  $("#btnAdicionar").on("click", function() {
          var nome = $("#nome").val();
          var email = $("#email").val();
          var matricula = $("#matricula").val();
          var senha = $("#senha").val();
          var tipo = 1; 

          $.ajax({
            method: "POST",
            url:"../control/controle.php",
            data:{
              n: nome,
              e: email,
              m:matricula,
              s:senha,
              t:tipo
            }
          })
          .done(function(resposta){
            $("#mensagem").html("Adicionado com sucesso").fadeIn( 300 ).delay( 1900 ).fadeOut( 400 );;
            //window.location.replace("../index.php");
          });
          .fail(function (jqXHR, textStatus, errorThrown) { serrorFunction(); });
        });
      });
});



 /*
$(function () {
    $('#btnCadastro').on("click", function () {
        var usuario = $('#email').val();
        resultado = usuario.split("@");

        var result = resultado [1].split(".");  

        if(result[0] == "ifrn" && result[1] == "edu" && result[2] == "br"){
           alert("Deu Certo!");
        }else {
            $("#menssagem").html("Email invalido para o cadastro!"); 
        } 
    });
});
 $("#btnAdicionar").on("click", function() {
          var nome = $("#nome").val();
          var email = $("#email").val();
          var matricula = $("#matricula").val();
          var senha = $("#senha").val();
          var tipo = 1; 

          $.ajax({
            method: "POST",
            url:"../control/controle.php",
            data:{
              n: nome,
              e: email,
              m:matricula,
              s:senha,
              t:tipo
            }
          })
          .done(function(resposta){
            $("#mensagem").html("Adicionado com sucesso").fadeIn( 300 ).delay( 1900 ).fadeOut( 400 );;
            //window.location.replace("../index.php");
          });
        });
      });
 */
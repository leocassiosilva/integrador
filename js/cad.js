 $(document).ready( function() {
  $('#sign_up_form').validate({
   rules:{ 
    nome:{ 
      required: true,
      minlength: 3
    },
    email: {
      required: true,
      email: true
    },
    matricula: {
      required: true,
      minlength: 6
    },
    senha: {
      required: true
    },
    senha_confirmar:{
      required: true,
      equalTo: "#senha"
    },
  },
  messages:{
    nome:{ 
      required: "O campo nome é obrigatório.",
      minlength: "O campo nome deve conter no mínimo 3 caracteres."
    },
    email: {
      required: "O campo email é obrigatório.",
      email: "O campo email deve conter um email válido."
    },
    matricula:{ 
      required: "O campo matricula é obrigatório.",
      minlength: "O campo matricula deve conter no mínimo 6 caracteres."
    },
    senha: {
      required: "O campo senha é obrigatório."
    },
    senha_confirmar:{
      required: "O campo confirmação de senha é obrigatório.",
      equalTo: "O campo confirmação de senha deve ser identico ao campo senha."
    },
  }
});
  
});
 
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
      alert("1");//Não ta entrando 
      $("#mensagem").html("Adicionado com sucesso").fadeIn( 300 ).delay( 1900 ).fadeOut( 400 );
      setTimeout(function(){
        alert("2");
        window.location.replace("../index.php");
      }, 3000);
    });
  });
});


/**
 * Função que tem como proposito a validação do formulario de cadastro do professor na parte do cliente
 */

/*Fução para verificar se o usuario colocou o email correto!*/
$(function () {
    $('#btnCadastro').on("click", function () {
        var usuario = $('#inputemail').val();
        resultado = usuario.split("@");

        var result = resultado [1].split(".");  

        if(result[0] == "ifrn" && result[1] == "edu" && result[2] == "br"){
           alert("Deu Certo!");
        }else {
            $("#menssagem").html("Email invalido para o cadastro!"); 
        } 
    });
});

 
$(document).ready(function () {
    $('#cadastroForm').validate({
        rules: {
            nome: {
                required: true,
                minlength: 3
            },
            email: {
                required: true,
                email: true
            },
            matricula: {
                required: true,
                minlength: 7
            },
            senha: {
                required: true
            },
            confirmarSenha: {
                required: true,
                equalTo: "#senha"
            }
        },
        messages: {
            nome: {
                required: "Este campo é obrigatorio",
                minlength: "O campo deve conter no minimo 3 caracterer "
            },
            matricula: {
                required: "Este campo é obrigatorio",
                minlength: 7
            },
            email: {
                required: "O campo email é obrigatório.",
                email: "O campo email deve conter um email válido."
            }, 
            senha: {
                required: "O campo senha é obrigatorio!"
            }, 
            confirmarSenha:{
                required:"O campo confirmação é obrigatorio!", 
                equalTo: "O campo confirmação de senha deve ser igual ao senha!"
            }
        }
    });
});


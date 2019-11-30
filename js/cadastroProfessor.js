/*Função para validação dos dados do usuario*/
$(document).ready(function(){
    $('#cadastroForm').validate({
        rules:{
            nome:{
                required: true,
                minlength: 5
            },
            matricula:{
                required: true,
                minlength: 7
            }, 
            email:{
                required:true,
                email:true
            },
            senha:{
                required:true,
                senha:true
            }
        }, 
        messages:{
            nome:{
                required: "Este campo é obrigatorio",
                minlength: 5
            },
            matricula:{
                required: "Este campo é obrigatorio",
                minlength: 7
            },
            email:{
                required: "Este campo é obrigatorio",
                email: true
            },
            senha:{
                required: "Este campo é obrigatorio",
                senha: true
            }
        }
    });
});


/** Função para mandar os dados para a parte do control*/
$(function() {
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
            window.location.replace("../index.php");
        });
    });
});

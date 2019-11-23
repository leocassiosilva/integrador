$(function() {
    $("#btnCadastrar").on("click", function() {
        var nome = $("#nome").val();
        var email = $("#email").val();
        var matricula = $("#matricula").val();
        var senha = $("#senha").val();
        
        $.ajax({
            method: "POST",
            url:"../control/controle.php?tipo=1",
            data:{
                n: nome,
                e: email,
                m:matricula,
                s:senha
            }
        })
        .done(function(resposta){
            $("#mensagem").html("ACadastrado com sucesso!");
        })

        .fail(function(resposta){
            $("#mensagem").html("Erro!");
        });

    });
});
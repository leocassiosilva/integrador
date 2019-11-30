 $(function() {
            $("#btnAdicionar").on("click", function() {
                var nome = $("#nome").val();
                var quantidade = $("#quantidade").val();
                var tipo = $("#tipo").val();
                var turma = $("#turma").val();
                var data = $("#data").val();
                
                $.ajax({
                    method: "POST",
                    url:"../control/controleImpressao.php",
                    data:{
                        n: nome,
                        q:quantidade, 
                        t: tipo,
                        l:lado, 
                        m:turma, 
                        d:data
                    }
                })
                .done(function(resposta){
                    $("#mensagem").html("Adicionado com sucesso");
                });

            });

            $("#btnEnviar").on("click", function() {
                $.post("finalizar.php")
                .done(function(resposta){
                    $("#mensagem").html(resposta);
                });
            });
        });







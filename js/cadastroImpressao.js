$(function() {
    $('#id_curso').change(function() {
        if ($(this).val()) {

            $.getJSON('periodo_turno.php?search=', {
                id_curso: $(this).val(),
                ajax: 'true'
            }, function(j) {
                var options = '<option value="">Ano(Periodo) e Turno</option>';
                for (var i = 0; i < j.length; i++) {
                    options += '<option value="' + j[i].id + '">' + j[i].ano + 'º ' + j[i].turno + '</option>';
                }
                $('#id_periodo_turno').html(options).show();
            });
        } else {
            $('#id_periodo_turno').html('<option value="">– Escolha Subcategoria –</option>');
        }
    });
});





$(function(){
    $("#btnSolicitar").on("click", function(){
        var nome = $("#nome").val(); 
        var quantidade = $("#quantidade").val();
        var tipo = $("#tipo").val(); 
        var curso = $("#ano").val();
        var $data =$("#data").val(); 
        var $lado = $("#lado").val(); 
        var $id_usuario = $("#id_usario").val(); 

        $.ajax({
            method: "POST", 
            url:"../control/controleImpressao.php?id_usuario=1&status=solicitado", 
            data:{
                n: nome, 
                q:quantidade, 
                t: tipo, 
                c:curso, 
                d:data, 
                l:$lado, 
               // i:id_usuario
            }
        })
        .done(function(resposta){
            $("#mensagem").html("Cadastrado!");
        })
        .fail(function(resposta){
            $("#mensagem").html("Erro!");
        });
    }); 
});



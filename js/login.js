$(document).ready(function(){
    $('#loginform').validate({
        rules:{
            email:{
                required:true,
                email:true
            }, 
            senha:{
                required:true
            }
        }, 
        messages:{
            email:{
                required: "Este campo é obrigatorio"
            }, 
            senha:{
                required:"Digite a senha"
            }
        }
    });
});

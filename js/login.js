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
                email: "O campo email deve conter um email válido."
            }, 
            senha:{
                required:"Digite a senha"
            }
        }
    });
});

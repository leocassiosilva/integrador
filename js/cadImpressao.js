$(document).ready( function() {
      $('#cadastroImpressao').validate({
       rules:{ 
        nome:{ 
          required: true,
          minlength: 3
      },  
      quantidade:{ 
          required: true,
          minlength: 1
      }, 
      data:{ 
          required: true
      },
      tipo:{ 
          required: true
      },
      lado:{ 
          required: true
      }, 
      turma:{ 
          required: true
      }, 
      pic:{
        required: true
    }


},
messages:{
    nome:{ 
      required: "O campo nome é obrigatório.",
      minlength: "Deve conter no mínimo 3 caracteres."
  },
  quantidade:{ 
      required: "O campo nome é obrigatório.",
      minlength: "Deve conter no mínimo 1 caracteres."
  },
  data:{ 
      required: "O campo nome é obrigatório.",
      minlength: "dd/mm/aa"
  }, 
  tipo:{ 
      required: "O campo nome é obrigatório.",
  }, 
  lado:{ 
      required: "O campo nome é obrigatório.",
  },
  turma:{ 
      required: "O campo nome é obrigatório.",
  },
  pic:{ 
      required: "O campo nome é obrigatório.",
  }
}
});
      $('.botaoEditar').on("click", function () {
        alert("Estamos em construção desse requisito. Aguarde!!")
    });
  });
$(document).ready(function() {

    $("#telefone").mask('(00) 00000-0000');
    $("#cpf").mask('000.000.000-00');
    $("#cep").mask('00000-000');

    $('form').validate({
        rules: {
            nome: {
                required: true
            },
            email: {
                required: true,
                email: true
            },
            telefone: {
                required: true
            },
            cpf: {
                required: true
            },
            endereco: {
                required: true
            },
            cep: {
                required: true
            },
            tempo_parcial:{
                required: true
            },
            tempo_integral:{
                required: true
            },
            link_linkedin:{
                required: true
            }, 
            sobre:{
                required: true
            },
            termo_comunicacao:{
                required:true
            },
            curriculo:{
                required:true
            }
        },
        messages: {
            nome: "Por favor, insira seu nome",
            email: "Por favor, insira um email válido",
            telefone: "Por favor, insira um número para contato",
            cpf: "Por favor, insira seu CPF",
            endereco: "Por favor, insira seu endereço",
            cep: "Por favor, informe seu CEP",
            tempo_parcial: 'Por favor, preencha o campo',
            tempo_integral: 'Por favor, preencha o campo',
            link_linkedin: 'Por favor, informe seu Linkedln',
            sobre:'Por favor, preencha o campo!',
            termo_comunicacao:'Por favor, preencha o campo!',
            curriculo:'Por favor, informe o seu curriculo'

        },
        errorPlacement: function(error, element) 
        {
            if ( element.is(":radio") || element.is(':file') ) 
            {
                // error.appendTo( element.parents('.radio') );
                error.appendTo( element.parents('.radio') );
                error.appendTo( element.parents('.radio1') );
                error.appendTo( element.parents('.radio2') );
                error.appendTo( element.parents('.curriculo') );
            }
            else 
            { // This is the default behavior 
                error.insertAfter( element );
            }
         }
      });
    
    })


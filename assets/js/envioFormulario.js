$(document).ready(()=>{
    $("#perguntas").submit((e)=>{

      e.preventDefault();

      if($('input[name="confirmacaoDados"]:checked').val() && $("[class='input-form']").val() != "" && $("input[type='radio'][name='preCadastro'],[name='opcaoCurso'],[name='segueFatec']").is(':checked')){
        $.ajax({
          url: 'assets/php/cadastroFormulario.php',
          method: 'POST',
          data: $("#perguntas").serialize(),
          success: function(data){
              if(data == "sucesso"){
                  swal({
                      title: "Obrigado!",
                      text: "Formulário enviado com sucesso.",
                      icon: "success",
                      button: "Fechar",
                    }).then(function(result) {
                      if (result) {
                        document.location.reload(true);
                      }
                    });
              }//Fim if
              if(data == "erro"){
                  swal({
                      title: "Desculpe!",
                      text: "Algo deu errado, entre em contato com o administrador",
                      icon: "warning",
                      button: "Fechar",
                    }).then(function(result) {
                      if (result) {
                        document.location.reload(true);
                      }
                    });
              }//Fim if
          }//Fim success
      });//Fim ajax
      }
    });//Fim click
});

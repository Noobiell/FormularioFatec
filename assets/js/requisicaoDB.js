$(document).ready(()=>{
    $("#enviarFormulario").click((e)=>{
        e.preventDefault();
        $.ajax({
            url: 'assets/php/cadastroFormulario.php',
            method: 'POST',
            data: $("#perguntas").serialize(),
            success: function(data){
                console.log(data);
            }
        });//Fim ajax
    });//Fim click
});
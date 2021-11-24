$(document).ready(()=>{

    $.ajax({
        url: "assets/php/resultadoFormulario.php",
        success: function(data){
            $("#bodyTabela").html(data);
        }
    });

});
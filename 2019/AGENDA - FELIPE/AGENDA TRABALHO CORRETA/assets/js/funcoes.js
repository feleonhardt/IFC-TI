$(document).ready(function(){
  $("#campo_pesquisa").change(function() {
   var campo_pesquisa = ($('#campo_pesquisa option:selected').val());
   if ((campo_pesquisa) == "domi"){
      $("#input_pesquisa").css("display", "none");
      $("#input_hidden").css("display", "none");
      $("#input_mes").css("display", "none");
      $("#input_dominios").css("display", "block");
      $("#input_travado").attr('disabled', true);
    }else if ((campo_pesquisa) == "mes"){
      $("#input_pesquisa").css("display", "none");
      $("#input_dominios").css("display", "none");
      $("#input_hidden").css("display", "none");
      $("#input_mes").css("display", "block");
      $("#input_travado").attr('disabled', true);
    }else if ((campo_pesquisa) == "nome" || (campo_pesquisa) == "fone" || (campo_pesquisa) == "data" || (campo_pesquisa) == "email") {
      $("#pesquisa").val("");
      $("#meses").val("ok");
      $("#dominios").val("ok");
      $("#input_dominios").css("display", "none");
      $("#input_mes").css("display", "none");
      $("#input_hidden").css("display", "none");
      $("#input_pesquisa").css("display", "block");
      $("#input_travado").attr('disabled', false);
    }else{
      $("#input_mes").css("display", "none");
      $("#input_dominios").css("display", "none");
      $("#input_pesquisa").css("display", "none");
    }
  });
});

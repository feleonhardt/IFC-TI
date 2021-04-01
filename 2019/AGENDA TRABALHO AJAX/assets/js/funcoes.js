$(document).ready(function(){
  $("#campo_pesquisa").change(function() {
   var campo_pesquisa = ($('#campo_pesquisa option:selected').val());
   if ((campo_pesquisa) == "domi"){
      $("#input_nome").css("display", "none");
      $("#input_fone").css("display", "none");
      $("#input_data").css("display", "none");
      $("#input_email").css("display", "none");
      $("#input_hidden").css("display", "none");
      $("#input_mes").css("display", "none");
      $("#input_dominios").css("display", "block");
      $("#input_travado").attr('disabled', true);
    }else if ((campo_pesquisa) == "mes"){
      $("#input_nome").css("display", "none");
      $("#input_fone").css("display", "none");
      $("#input_data").css("display", "none");
      $("#input_email").css("display", "none");
      $("#input_dominios").css("display", "none");
      $("#input_hidden").css("display", "none");
      $("#input_mes").css("display", "block");
      $("#input_travado").attr('disabled', true);
    }else if ((campo_pesquisa) == "nome") {
      $("#meses").val("ok");
      $("#dominios").val("ok");
      $("#input_fone").css("display", "none");
      $("#input_data").css("display", "none");
      $("#input_email").css("display", "none");
      $("#input_dominios").css("display", "none");
      $("#input_mes").css("display", "none");
      $("#input_hidden").css("display", "none");
      $("#input_nome").css("display", "block");
      $("#input_travado").attr('disabled', false);
    }else if ((campo_pesquisa) == "fone") {
      $("#meses").val("ok");
      $("#dominios").val("ok");
      $("#input_fone").css("display", "block");
      $("#input_data").css("display", "none");
      $("#input_email").css("display", "none");
      $("#input_dominios").css("display", "none");
      $("#input_mes").css("display", "none");
      $("#input_hidden").css("display", "none");
      $("#input_nome").css("display", "none");
      $("#input_travado").attr('disabled', false);
    }else if ((campo_pesquisa) == "data") {
      $("#meses").val("ok");
      $("#dominios").val("ok");
      $("#input_fone").css("display", "none");
      $("#input_data").css("display", "block");
      $("#input_email").css("display", "none");
      $("#input_dominios").css("display", "none");
      $("#input_mes").css("display", "none");
      $("#input_hidden").css("display", "none");
      $("#input_nome").css("display", "none");
      $("#input_travado").attr('disabled', false);
    }else if ((campo_pesquisa) == "email") {
      $("#meses").val("ok");
      $("#dominios").val("ok");
      $("#input_fone").css("display", "none");
      $("#input_data").css("display", "none");
      $("#input_email").css("display", "block");
      $("#input_dominios").css("display", "none");
      $("#input_mes").css("display", "none");
      $("#input_hidden").css("display", "none");
      $("#input_nome").css("display", "none");
      $("#input_travado").attr('disabled', false);
    }else{
      $("#input_mes").css("display", "none");
      $("#input_dominios").css("display", "none");
      $("#input_nome").css("display", "none");
      $("#input_fone").css("display", "none");
      $("#input_data").css("display", "none");
      $("#input_email").css("display", "none");
    }
  });
//   $(function () {
//     $("td").dblclick(function () {
//         var conteudoOriginal = $(this).text();
//
//         $(this).addClass("celulaEmEdicao");
//         $(this).html("<input type='text' value='" + conteudoOriginal + "' />");
//         $(this).children().first().focus();
//
//         $(this).children().first().keypress(function (e) {
//             if (e.which == 13) {
//                 var novoConteudo = $(this).val();
//                 $(this).parent().text(novoConteudo);
//                 $(this).parent().removeClass("celulaEmEdicao");
//             }
//         });
//
//     $(this).children().first().blur(function(){
//         $(this).parent().text(conteudoOriginal);
//         $(this).parent().removeClass("celulaEmEdicao");
//     });
//     });
// });
});

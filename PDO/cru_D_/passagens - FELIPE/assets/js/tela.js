$(document).ready(function(){
  $("#esc").change(function() {
   var campo_pesquisa = ($('#esc option:selected').val());
   if ((campo_pesquisa) == "LOCAL"){
      $("#campos").css("display", "block");
      $("#select").css("display", "none");
    }else if ((campo_pesquisa) == "VALOR"){
       $("#campos").css("display", "block");
       $("#select").css("display", "none");
     }else if ((campo_pesquisa) == "DATA"){
        $("#campos").css("display", "block");
        $("#select").css("display", "none");
      }else if ((campo_pesquisa) == "CHECK"){
         $("#campos").css("display", "none");
         $("#select").css("display", "block");
       }else {
      $("#campos").css("display", "none");
      $("#select").css("display", "none");
    }
  });
});

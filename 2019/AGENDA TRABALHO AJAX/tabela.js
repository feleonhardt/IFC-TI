$(document).ready(function(){
  $('#tabela tbody tr td.editavel').dblclick(function(){
    if ($('td > input').length > 0) {
      return;
    }
    var conteudoOriginal = $(this).text();
    var novoElemento = $('<input/>',{type:'text', value:conteudoOriginal});
    $(this).html(novoElemento.bind('blur keydown', function(e){
      var keyCode = e.which;
      var conteudoNovo = $(this).val();
      if (keyCode == 13 && conteudoNovo != '' && conteudoNovo != conteudoOriginal) {
        var objeto = $(this);
        $.ajax({
          type:"POST",
          url:"alterar.php",
          data:{
            id:$(this).parents('tr').children().first().text(),
            campo:$(this).parent().attr('title'),
            valor:conteudoNovo
          },
          success:function(result){
            objeto.parent().html(conteudoNovo);
            $('body').append(result);
          }
        });
      }
      else if (keyCode == 27 || e.type == 'blur') {
        $(this).parent().html(conteudoOriginal);
      }
    }));
    $(this).children().select();
  })
});

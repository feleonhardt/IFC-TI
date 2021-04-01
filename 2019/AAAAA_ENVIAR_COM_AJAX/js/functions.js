$(function(){
  var formulario = $('form[name=formulario]');
  $('input[type=submit]').click(function(evento){
    var array = formulario.serializeArray();
    if (array[0].value == '' || array[1].value == '' || array[2].value == '' || array[3].value == '') {

      $('.resposta').html('<div class="erros"><p>Informe tudo corretamente!</p></div>');
    }else {
      $.ajax({
        method: 'post',
        url: 'enviar.php',
        data: {cadastrar: 'sim', campos: array},
        dataType: 'json'
      });
    }
    evento.preventDefault();
  });
});

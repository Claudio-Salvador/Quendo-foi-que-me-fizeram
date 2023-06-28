var dataNascimentoInput = $('.form-field[type="date"]');
var tempoGestacaoInput = $('.form-field[type="number"]');
var calcularButton = $('.animation.a6');

calcularButton.on('click', function(event) {
  event.preventDefault();

  var dataNascimento = dataNascimentoInput.val();
  var tempoGestacao = tempoGestacaoInput.val();

  var data = {
    date_input: dataNascimento,
    month_input: tempoGestacao
  };

  $.ajax({
    url: 'config/process.php',
    method: 'POST',
    data:data,
    success: function(response) {
      console.log(JSON.parse(response));
    },
    error: function(jqXHR, textStatus, errorThrown) {
      console.log('Erro na requisição: ' + textStatus);
    }

  });
});

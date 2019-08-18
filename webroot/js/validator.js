$('input[name=name]').attr('maxlength','50');
$('input[name=name]').focusout(function() {
    if (this.length > 50) {
        alert('Nome maior que o permitido');
    }
});
$( 'input[name=dt_valid]' ).datepicker();
$( 'input[name=dt_frab]' ).datepicker();
$('input[name=dt_valid]').mask("00r00r0000", {
    translation: {
      'r': {
        pattern: /[\/]/,
        fallback: '/'
      },
      placeholder: "__/__/____"
    }
  });
$('input[name=dt_frab]').mask("00r00r0000", {
    translation: {
      'r': {
        pattern: /[\/]/,
        fallback: '/'
      },
      placeholder: "__/__/____"
    }
  });

  $('input[name=quantidade]').attr('maxlength','3');
  $('input[name=name]').focusout(function() {
    if (this.length > 3) {
        alert('Quantidade maior que o permitido');
    }
});
 $('input[name=quantidade]').siblings('.control-label').insertBefore($('input[name=quantidade]').parent());
 $('input[name=quantidade]').parent().addClass('input-group');
 $('<span class="input-group-addon">'+$('select[name=unidade_medicao] option:selected').val().toUpperCase()+'</span>').insertAfter('input[name=quantidade]');
 $( 'select[name=unidade_medicao]' ).change(function() {
     $('input[name=quantidade]').siblings('.input-group-addon').text($('select[name=unidade_medicao] option:selected').val().toUpperCase());
 });

 $('input[name=price]').siblings('.control-label').insertBefore($('input[name=price]').parent());
 $('input[name=price]').parent().addClass('input-group');
 $('<span class="input-group-addon">$</span>').insertBefore('input[name=price]');
 $('input[name=price]').mask('000.000.000.000.000,00', {reverse: true});

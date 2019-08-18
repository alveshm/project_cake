$('input[name=name]').attr('maxlength','50');
$('input[name=name]').focusout(function() {
    if (this.length > 50) {
        alert('Nome maior que o permitido');
    }
});
$( 'input[name=dt_valid]' ).datepicker({
    dateFormat: 'dd/mm/yy',
    dayNames: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado', 'Domingo'],
    dayNamesMin: ['D', 'S', 'T', 'Q', 'Q', 'S', 'S', 'D'],
    dayNamesShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb', 'Dom'],
    monthNames: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
    monthNamesShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez']
});
$( 'input[name=dt_frab]' ).datepicker({
    dateFormat: 'dd/mm/yy',
    dayNames: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado', 'Domingo'],
    dayNamesMin: ['D', 'S', 'T', 'Q', 'Q', 'S', 'S', 'D'],
    dayNamesShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb', 'Dom'],
    monthNames: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
});
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
  $( 'input[name=dt_valid]' ).change(function() {
      if ($(this).val() < new Date().toLocaleDateString('pt-BR')) {
          alert('Produto Vencido!');
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
 $('<span class="input-group-addon">'+$('select[name=unidade_medida] option:selected').val()+'</span>').insertAfter('input[name=quantidade]');
 $( 'select[name=unidade_medida]' ).change(function() {
     $('input[name=quantidade]').siblings('.input-group-addon').text($('select[name=unidade_medida] option:selected').val());
 });

 $('input[name=price]').siblings('.control-label').insertBefore($('input[name=price]').parent());
 $('input[name=price]').parent().addClass('input-group');
 $('input[name=price]').parent().css('width', '100%')
 $('<span class="input-group-addon" style="width: 11%;">$</span>').insertBefore('input[name=price]');
 $('input[name=price]').mask('000.000.000.000.000,00', {reverse: true});
 $('input[name=peresivel]').change(function() {
     console.log($(this).val());
    if ($(this).val() == 1) {
        $( 'input[name=dt_valid]' ).datepicker('disable');
        $('input[name=dt_valid]').attr('readonly', true);
    } else {
        $( 'input[name=dt_valid]' ).datepicker('enable');
        $('input[name=dt_valid]').attr('readonly', false);
    }
});
$('input[name=price]').siblings().text('');
$('input[name=peresivel]').parent('label').css('padding','10px 27px');
$('input[name=price]').siblings().append($('select[name=unidade_monetaria]'));

$(document).ready(function () {

    $("#jclickform01").submit(function () {



        //Variaveis locais
        var _dados = $(this).serializeArray();
        var _urlphp = $(this).attr("action");
        var _seletorFls = $(".jfls");
        var _seletorBtn = $(".jfls-btn");
        var _seletorEnviando = $(".jfls-enviando");
        var _seletorErro = $(".jfls-erro");
        var _seletorSucesso = $(".jfls-sucesso");

        //Requisição AJAX
        $.ajax({
            url: _urlphp,
            data: { dados: _dados },
            type: 'POST',
            dataType: 'json',
            beforeSend: function () {
                _seletorEnviando.fadeIn(100);
                _seletorBtn.attr('disabled', 'disabled');
            },
            success: function (data) {

                //Variáveis locais
                var _error = data.error;


                //Controla os Tickets
                setTimeout(function () {
                    _seletorEnviando.fadeOut(0, function () {

                        // Verifica se houve erro
                        if (!_error) {

                            _seletorSucesso.fadeIn(100);
                        } else {
                            _seletorErro.fadeIn(100);
                           
                        }

                        //Esconde os Tickets - Independente de qual seja
                        setTimeout(function () {
                            _seletorFls.fadeOut(0);
                            _seletorBtn.removeAttr('disabled');
                        }, 3500);

                    });
                }, 3500);
            }
        });
        return false;
    });
});
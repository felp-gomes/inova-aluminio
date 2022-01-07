function Trim(str) {
    return str.replace(/^\s+|\s+$/g, "");
}

//
function alerta(tipo, texto) {
    $("#alerta").attr("class", "alerta_" + tipo);
    $("#alerta").html(texto);
    $("#alerta").show("slow");
}

function Validacao(act) {
    var R = true;

    $(act).find("input[alt=true], textarea[rows=5]").each(function() {
        var atual = $(this).val();
        if (atual == '' || atual == $(this).attr("title")) {
            $(this).addClass("form_erro");
            R = false;
        } else {
            $(this).addClass("form_ok");
        }
    });

    if (R == false) {
        alerta('erro', 'ATEN&Ccedil;&Atilde;O: &Eacute; necess&aacute;rio o preenchimento de todos os campos.');
    } else {
        $("#alerta").hide("slow");
    }

    return R;
}

$(document).ready(function() {
    $('form').submit(function() {
        return Validacao(this);
    });
});
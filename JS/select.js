$(document).ready(function () {
    getProvince();
    getComuni();
})

function getProvince() {
    $("#regione").change(
        function () {
            var scelta = $("#regione").val();
            $('#provincia').empty();
            $.ajax({
                url: "library/operationController/getProvince.php",
                dataType: "json",
                data: {"regione": scelta},
                success: function (json) {
                    $.each(json, function (i, riga) {
                        $('#provincia').append("<option value='" + riga.nome + "'>" + riga.nome + "</option>");
                    });
                },
                error: function (richiesta, stato) {
                    errore = "<b>AJAX fallita:</b><br>" + richiesta.status + " " + stato;
                    $("#errprovincia").html(errore);
                }

            });//chiudi $.ajax
        });
}

function getComuni() {
    $("#provincia").change(
        function () {
            var scelta = $("#provincia").val();
            $('#comune').empty();
            $.ajax({
                url: "library/operationController/getComuni.php",
                dataType: "json",
                data: {"provincia": scelta},
                success: function (json) {
                    $.each(json, function (i, riga) {
                        $('#comune').append("<option value='" + riga.nome + "'>" + riga.nome + "</option>");
                    });
                },
                error: function (richiesta, stato) {
                    errore = "<b>AJAX fallita:</b><br>" + richiesta.status + " " + stato;
                    $("#errcomune").html(errore);
                }

            });//chiudi $.ajax
        });
}

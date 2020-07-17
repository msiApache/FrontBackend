$(document).ready(function () {
    /*riempiSelect();*/
    getProvince();
})

function riempiSelect() {
    var $select = $('#sub_category');
    $select.find('option').remove();
    if ($('#root_category').val() != '#') {
        var $url = 'library/operationController/select.php';
        $.getJSON($url, {
                root_category: $('#root_category').val()
            }
        )
            .done(function (data) {
                $.each(data, function (key, value) {
                    $('<option>').val(key).text(value).appendTo($select);
                });
            });
    }
}

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
                        $('#provincia').append("<option value=''>" + riga.nome + "</option>");
                    });
                },
                error: function (richiesta, stato) {
                    errore = "<b>AJAX fallita:</b><br>" + richiesta.status + " " + stato;
                    $("#errprovincia").html(errore);
                }

            });//chiudi $.ajax
        });
}

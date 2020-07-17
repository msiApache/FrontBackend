$(document).ready(function () {
    riempiSelect();
})

function riempiSelect() {
    var $select = $('#sub_category');
    $select.find('option').remove();
    if ($('#root_category').val() != '#') {
        //var $url = '/common/select.php';
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

require('../js/app.css');
require('../js/jquery.mask.js');

$(document).ready(function () {

    $('.js-datepicker').datepicker({
        format: 'dd/mm/yyyy'
    });

    $('.datatables').DataTable({
        lengthMenu: [[5, 10, 15, -1], [5, 10, 15, "Tudo"]],
        stateSave: true,
        language: {
            "url": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Portuguese-Brasil.json"
        }
    });

    $('[data-toggle="tooltip"]').tooltip();

    $("#employee_form_duracao").change(function () {
        var x = $(this).val();
        var dateString = $("#employee_form_dataposse").val();
        var dateParts = dateString.split("/");
        var datebegin = new Date(dateParts[2], dateParts[1] - 1, dateParts[0]);

        x = parseInt(x) + parseInt(datebegin.getMonth());

        datebegin.setMonth(x);

        var dateEnd = datebegin.getDate().toString()+"/"+pad(datebegin.getMonth()+1)+"/"+datebegin.getFullYear().toString();
        if(isNaN(x)){
            $("#employee_form_datatermino").val(null);
        }else{
            $("#employee_form_datatermino").val(dateEnd);
        }

    });
});

function pad(s) { return (s < 10) ? '0' + s : s; }

$("#esp_form_filter").on("submit", function (e) {

    e.preventDefault();

    $.ajax({
        type: "POST",
        url: $(this).attr("action"),
        dataType: "json",
        data: $(this).serialize(),
        success: function (response) {
            $("#div_partial").html(response);
        }
    });

});


$("#esp_type_filter").change(function () {
    var filtertype = $(this).val();
    var urlpath = $(this).attr('base-url');
    if(filtertype != 0){
        $.ajax({
            url: urlpath,
            type: "GET",
            data: {_filterType:filtertype},
            success: function (result) {
                var formValues = $("#esp_value_filter");
                formValues.empty().html(' ');
                formValues.append('<option value="0">Todos</option>');
                $.each(result, function (i, item) {
                    formValues.append('<option value="'+item.id+'">'+item.descricao+'</option>');
                });
            }
        });
    }else{
        var formValues = $("#esp_value_filter");
        formValues.empty().html(' ');
        formValues.append('<option value="0">Todos</option>');
    }
});

$("#employee_form_uf").change(function () {
    var ufSelector = $(this).val();
    var urlpath = routeCidadesPorEstado;
    $.ajax({
        url: urlpath,
        type: "GET",
        dataType: "JSON",
        data: {uf:ufSelector},
        success: function (cidades) {
            var cidadeSelector = $("#employee_form_cidade");
            cidadeSelector.html('');
            cidadeSelector.append('<option value>Selecione uma cidade...</option>');
            $.each(cidades, function (i, item) {
                cidadeSelector.append('<option value="'+item.codigo+'">'+item.nome+'</option>');
            });
        }
    });
});

$("#employee_form_ufnatu").change(function () {
    var ufSelector = $(this).val();
    var urlpath = routeCidadesPorEstado;
    $.ajax({
        url: urlpath,
        type: "GET",
        dataType: "JSON",
        data: {uf:ufSelector},
        success: function (cidades) {
            var cidadeSelector = $("#employee_form_naturalidade");
            cidadeSelector.html('');
            cidadeSelector.append('<option value>Selecione uma cidade...</option>');
            $.each(cidades, function (i, item) {
                cidadeSelector.append('<option value="'+item.codigo+'">'+item.nome+'</option>');
            });
        }
    });
});


/*

var $estado = $('#employee_form_uf');
// When sport gets selected ...
$estado.change(function() {
    // ... retrieve the corresponding form.
    var $form = $(this).closest('form');
    // Simulate form data, but only include the selected sport value.
    var data = {};
    data[$estado.attr('name')] = $estado.val();
    console.log($estado.val());
    console.log($form.attr('action'));
    // Submit data via AJAX to the form's action path.
    $.ajax({
        url : $form.attr('action'),
        type: $form.attr('method'),
        data : data,
        success: function(html) {
            // Replace current position field ...
            $('#employee_form_cidade').replaceWith(
                // ... with the returned one from the AJAX response.
                $(html).find('#employee_form_cidade')
            );
            // Position field now displays the appropriate positions.
        }
    });
});

*/
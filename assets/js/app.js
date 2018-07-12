require('../js/app.css');
require('../js/jquery.mask.js');

$(document).ready(function () {

    $('.js-datepicker').datepicker({
        format: 'dd/mm/yyyy'
    });

    $('[data-toggle="tooltip"]').tooltip();

});


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
    var urlpath = "/omnia/dai/rh/get-cidades-por-estado";
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
    var urlpath = "/omnia/dai/rh/get-cidades-por-estado";
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
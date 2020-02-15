$(document).ready(function () {
    obtemTurmas()
});

function obtemTurmas() {
    var formURL = '/turmas';
    $.ajax({
        url: formURL,
        type: 'POST',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        dataType: 'json',
        beforeSend: function () {
            $("#loadingContainer").show();
        },
        success: function (data) {
            $("#loadingContainer").hide();
            var trHTML = "";
            $.each(data['turmas'], function (i, item) {               
                // url = "turma/'"+item['id']+"'/alunos";
                url = "turma/editar/"+item['id'];
                trHTML += "<tr class=\"mouse-pointer pad\" onclick=window.location='"+url+"'><td>" + item["nome"] + "</td></tr>";
            });


            console.log("trHTML");
            console.log(trHTML);

            $("#tabelaTurma tbody").html(trHTML);
            turmaDatatable();
        },
        done: function () {
            $("#loadingContainer").hide();
        },
        error: function (jqXHR) {
            $("#loadingContainer").hide();
            console.log("Error: "+JSON.stringify(jqXHR));
        }
    });
}

function turmaDatatable() {
    $('#tabelaTurma').DataTable({
        "initComplete": function (settings, json) {
            $("#loadingContainer").hide();
            $('.table-container').css('display', 'block').css('block', 'padding-top', '10');
        },
        "language": {
            "url": "/js/dataTables/Portuguese-Brasil.json"
        },
        "order": [],
        "fnDrawCallback": function (oSettings) {
            $('#tabelaTurma_filter input').addClass('form-control').attr("placeholder", "Pesquisar");
        },
        "bLengthChange": true,
        "pageLength": 10,
    });
}
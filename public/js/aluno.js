$(document).ready(function () {
    obtemAlunos()

});

function obtemAlunos() {
    console.log("obytemalunos")
    var formURL = '/alunos';
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
            var trHTML = "", url = "";
            $.each(data["alunos"], function (i, item) {
                url = "aluno/editar/"+item['id'];
                trHTML += "<tr class=\"mouse-pointer pad\" onclick=window.location='"+url+"'><td>" + item["nome"] + "</td><td>"+ item["turmas"]["nome"] +"</td></tr>";
            });
            console.log("data-> " + JSON.stringify(data));
            // console.log(trHTML);

            $("#tabelaAluno tbody").html(trHTML);
            alunoDatatable();
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

function alunoDatatable() {
    $('#tabelaAluno').DataTable({
        "initComplete": function (settings, json) {
            $("#loadingContainer").hide();
            $('.table-container').css('display', 'block').css('block', 'padding-top', '10');
        },
        "language": {
            "url": "/js/dataTables/Portuguese-Brasil.json"
        },
        "order": [],
        "fnDrawCallback": function (oSettings) {
            $('#tabelaAluno_filter input').addClass('form-control').attr("placeholder", "Pesquisar");
        },
        "bLengthChange": true,
        "pageLength": 10,
    });
}
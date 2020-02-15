
@include('modules._modules')
<div id="loadingContainer" style="display:none;z-index:5000000;background-color:rgba(255,255,255,0.6);position: fixed;height:100%;width:100%;margin:0;top:0;left:0;">
    <div style="position:absolute;top:50%;left:50%;margin-top:-155px;margin-left:-155px;"><img src="{{ asset('images/loading.gif') }}"/></div>
    <!--<div style="position:absolute;top:50%;margin-top:-64px;left:50%;margin-left:-64px"><img src="resources/img/loading.gif"/></div>-->
</div>

<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.3 -->
<script src="{{ asset("/bower_components/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js") }}"></script>

<!-- AdminLTE App -->
<script src="{{ asset("/bower_components/AdminLTE/dist/js/app.min.js") }}"></script>
<script src="{{asset("/bower_components/AdminLTE/plugins/select2/select2.full.min.js")}}"></script>
<script src="{{asset("/bower_components/AdminLTE/plugins/datepicker/bootstrap-datepicker.js")}}"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{ asset("/bower_components/AdminLTE/bootstrap/js/bootstrap.min.js") }}"></script>

<script type="text/javascript" src="{{ asset("/bower_components/AdminLTE/plugins/momentjs/moment-with-locales.min.js") }}"></script>
<script type="text/javascript" src="{{asset("/bower_components/AdminLTE/plugins/bootstrap-material-datetimepicker/bootstrap-material-datetimepicker.js")}}"></script>
<script src="{{asset("/bower_components/AdminLTE/plugins/jQuery-Mask-Plugin/jquery.mask.js")}}"></script>
<script type="text/javascript" src="{{ asset('/bower_components/AdminLTE/plugins/datatables/jquery.dataTables.js') }}"></script>
<script type="text/javascript" src="{{ asset('/bower_components/AdminLTE/plugins/datatables/dataTables.bootstrap.js') }}"></script>



<script type="text/javascript">


    $('#datatables').DataTable({
        "initComplete": function (settings, json) {
            $("#loadingContainer").hide();
            $('.table-container').css('display', 'block');
        },
        'language': {
            'url' : '//cdn.datatables.net/plug-ins/1.10.16/i18n/Portuguese-Brasil.json',
            'processing': "Carregando..."
        },
        "pageLength": 10,

    });

    $('select[name=estado]').change(function () {
        var idEstado = $(this).val();
        console.log(idEstado);
        $.get('/get-cidades/' + idEstado, function (cidades) {
            $('select[name=cidade]').empty();
            $.each(cidades, function (key, value) {
                $('select[name=cidade]').append('<option value=' + value.id + '>' + value.cidade + '</option>');
            });
        });
    });

    $("#accordion .box-primary").on('click', function () {
        $(this).children('.box-body').toggle("slow");
    });


    $('.select2').select2();

    $('#date').bootstrapMaterialDatePicker
    ({
        format: "DD/MM/YYYY",
        time: false,
        clearButton: true,
        lang: 'pt-BR',
    });

    $('#time').bootstrapMaterialDatePicker
    ({
        date: false,
        shortTime: false,
        format: 'HH:mm'
    });

    $(".excluirRegistro").on("click", function(){
        return confirm("Você tem certeza que deseja excluir este registro?");
    });

</script>

</body>
</html>

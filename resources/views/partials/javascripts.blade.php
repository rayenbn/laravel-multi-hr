<script>
    window.deleteButtonTrans = '{{ trans("quickadmin.qa_delete_selected") }}';
    window.copyButtonTrans = '{{ trans("quickadmin.qa_copy") }}';
    window.csvButtonTrans = '{{ trans("quickadmin.qa_csv") }}';
    window.excelButtonTrans = '{{ trans("quickadmin.qa_excel") }}';
    window.pdfButtonTrans = '{{ trans("quickadmin.qa_pdf") }}';
    window.printButtonTrans = '{{ trans("quickadmin.qa_print") }}';
    window.colvisButtonTrans = '{{ trans("quickadmin.qa_colvis") }}';
</script>
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="//cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>
<script src="//cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>
<script src="//cdn.datatables.net/buttons/1.2.4/js/buttons.flash.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.colVis.min.js"></script>
<script src="https://cdn.datatables.net/select/1.2.0/js/dataTables.select.min.js"></script>
<script src="https://code.jquery.com/ui/1.11.3/jquery-ui.min.js"></script>
<script src="{{ url('adminlte/js') }}/bootstrap.min.js"></script>
<script src="{{ url('adminlte/js') }}/select2.full.min.js"></script>
<script src="{{ url('adminlte/js') }}/main.js"></script>

<script src="{{ url('adminlte/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ url('adminlte/plugins/fastclick/fastclick.js') }}"></script>
<script src="{{ url('adminlte/js/app.min.js') }}"></script>


<script src="{{ asset('theme/dist/js/jquery.cookie.js')}}"></script>
<script type="text/javascript">
    if ('ontouchstart' in document.documentElement) document.write("<script src='{{ asset('theme/dist//lib/jquery.mobile.custom.min.js')}}'>" + "<" + "/script>");
</script>
<script src="{{ asset('theme/dist/bootstrap/bootstrap.min.js')}}"></script>
<!-- Validator form-->
<script src="{{ asset('theme/dist/js/validator.min.js')}}"></script>

<!--textarea che si allunga in base a inserimento-->
<script src="{{ asset('theme/dist/js/autosize.min.js')}}"></script>

<!-- bootstrap-datepicker -->
<script src="{{ asset('theme/dist/js/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{ asset('theme//dist/js/bootstrap-datepicker/js/bootstrap-datepicker.it.min.js')}}"></script>

<!--select picker-->
<script src="{{ asset('theme/dist/js/selectpicker/bootstrap-select.js')}}"></script>

<!--copia e incolla-->
<script src="{{ asset('theme/dist/js/clipboard.min.js')}}"></script>

<!-- bootstrap-datatable -->
<script src="{{ asset('theme/dist/js/datatable/dataTables.bootstrap.min.js')}}"></script>


<!--notifiche-->
<script src="{{ asset('theme/dist/js/bootstrap-notify.min.js')}}"></script>


<!-- ace scripts -->
<script src="{{ asset('theme/dist/js/ace-elements.min.js')}}"></script>
<script src="{{ asset('theme/dist/js/ace.min.js')}}"></script>

<script src="{{ asset('theme/dist/sortable/Sortable.js')}}"></script>
<script type="text/javascript" src="{{ asset('theme/dist/sortable/st/prettify/prettify.js')}}"></script>
<script type="text/javascript" src="{{ asset('theme/dist/sortable/st/prettify/run_prettify.js')}}"></script>

<script src="{{ asset('theme/dist/sortable/st/app.js')}}"></script>




<script>
    window._token = '{{ csrf_token() }}';
</script>
<script>
    $.extend(true, $.fn.dataTable.defaults, {
        "language": {
            "url": "https://cdn.datatables.net/plug-ins/1.10.16/i18n/English.json"
        }
    });

     

</script>

<script>
    $(function(){
        /** add active class and stay opened when selected */
        var url = window.location;

        // for sidebar menu entirely but not cover treeview
        $('ul.sidebar-menu a').filter(function() {
            return this.href == url;
        }).parent().addClass('active');

        $('ul.treeview-menu a').filter(function() {
            return this.href == url;
        }).parent().addClass('active');

        // for treeview
        $('ul.treeview-menu a').filter(function() {
             return this.href == url;
        }).parentsUntil('.sidebar-menu > .treeview-menu').addClass('menu-open').css('display', 'block');
    });

    @can('team_select')
        $('#navbar__select-team').change(function(event) {
            $('#navbar__select-team-form').submit();
        });
    @endif
</script>


<script>
    $(document).ready(function() {
        //tooltip
        $('[data-tooltip="tooltip"]').tooltip();
        //textarea ch si allunga in base inserimento
        autosize($('textarea'));
        //clipboard.js x copia e incolla




        //end ready
    });


    //clipboard copia
    var clipboard = new ClipboardJS('.clipboard_copy_from');
    clipboard.on('success', function(e) {
        console.info('Action:', e.action);
        console.info('Text:', e.text);
        console.info('Trigger:', e.trigger);

        e.clearSelection();
    });
    clipboard.on('error', function(e) {
        console.error('Action:', e.action);
        console.error('Trigger:', e.trigger);
    });


    //data table
    $('#datatable').DataTable({
        scrollY: 400,
        scrollCollapse: true,
        paging: false,
        "language": {
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Italian.json"
        }
    });

    //se seleziono azienda al volo
    $("#idazn").change(function() {
        var idazn = $("#idazn").val();
        if (idazn == "00") {
            $("#mese_mm,#anno_yy").hide();
        } else {
            $("#anno").load("navbar_files/ajax/header_change_yyyy.php?idazn=" + idazn);
        }



    });






    $(".input-selectpicker").selectpicker({
        style: "btn-inverse",
        noneSelectedText: 'Seleziona un valore' // by this default 'Nothing selected' -->will change to Please Select
    });


    //datepicker
    $('.input-datepicker').datepicker({
        format: "dd/mm/yyyy",
        todayBtn: "linked",
        clearBtn: true,
        language: "it",
        multidateSeparator: "-",
        calendarWeeks: true,
        autoclose: true,
        todayHighlight: true
    });

    //mi permette di contare i checkbox selezionati e avvisare utente di selezionare almeno 1
    $("#checkbox_box").click(function() {
        var contaselezionati = $('#checkbox_box :input[type="checkbox"]:checked').length;

        if (contaselezionati > 0) {
            $("#checkbox_box_label").html("Selezionati <span class='badge badge-primary'> " + contaselezionati + " </span>");
            $("#checkbox_box_btn").show();
        } else {
            $("#checkbox_box_label").html("<div class='alert alert-danger'>Seleziona almeno 1</div>");
            $("#checkbox_box_btn").hide();

        }

    });


    //creo il cookie x il menu
    $(".menu_sidebar").click(function() {
        var mnu = $(this).attr("data-mnu");
        var lbl = $(this).attr("data-mnu-lbl");
        $.cookie('mnu', mnu, {
            expires: 1
        });
        $.cookie('lbl', lbl, {
            expires: 1
        });
    });


    $('.check_del').change(function() {
        if ($(this).prop('checked')) {
            $("button").removeClass("btn-success").addClass("btn-danger").html("<i class='fa fa-trash'></i> Cancella | operazione irreversibile");
        } else {
            $("button").removeClass("btn-danger").addClass("btn-success").html("<i class='fa fa-save'></i> Salva");
        }
    });


    $("input[name=check_del]").change(function() {
        if ($(this).prop('checked')) {
            $("button").removeClass("btn-success").addClass("btn-danger").html("<i class='fa fa-trash'></i> Cancella | operazione irreversibile");
        } else {
            $("button").removeClass("btn-danger").addClass("btn-success").html("<i class='fa fa-save'></i> Salva");
        }
    });


    //quando premo sul menu seleziona da elenco
    $(".btn-link").click(function() {
        $("#modal_seleziona_da_elenco").modal('show');
        var fld_nme = $(this).attr("data-fld-nme");
        var fld_id = $(this).attr("data-fld-id");
        $(".modal-body-elenco").html("<h4><i class='fas fa-spinner fa-spin'></i> Caricamento dati in corso...</h4>");
        $(".modal-body-elenco").load("HrRum_files/prp_files/ajax/sql_seleziona_da_elenco.php?fld_nme=" + fld_nme + "&fld_id=" + fld_id);
    });
</script>
<script>
    $("#btn_chart_main_change_v").click(function() {
        $("#btn_chart_main_change_v").hide();
        $("#btn_chart_main_change_o").show();
        $('#chart_main_1,#chart_main_2,#chart_main_3').removeClass('col-xs-4').addClass('col-xs-12');
    });
    $("#btn_chart_main_change_o").click(function() {
        $("#btn_chart_main_change_o").hide();
        $("#btn_chart_main_change_v").show();
        $('#chart_main_1,#chart_main_2,#chart_main_3').removeClass('col-xs-12').addClass('col-xs-4');
    });
</script>



@yield('javascript')

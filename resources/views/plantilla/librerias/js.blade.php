<script>
    $( ".select2-single, .select2-multiple" ).select2( {
        theme: "bootstrap",
        placeholder: "Seleccione una opcion",
        maximumSelectionSize: 6,
        containerCssClass: ':all:'
    } );

    $( ":checkbox" ).on( "click", function() {
        $( this ).parent().nextAll( "select" ).prop( "disabled", !this.checked );
    });
</script>

<!-- REQUIRED JS SCRIPTS -->
<script src="{{ asset('js/bootstrap-colorpicker.js') }}"></script>
<!-- DataTables -->
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}" type="text/javascript"></script>
<!-- BootstrapDataTables  3.3.2 JS -->
<script src="{{ asset('plugins/datatables/dataTables.bootstrap.min.js') }}" type="text/javascript"></script>
<!-- SweetAlert -->
<script src="{{ asset('js/sweetalert.min.js') }}" type="text/javascript"></script>
<!-- FormValidate -->
<!--<script src="{{ asset('js/require_form.js') }}" type="text/javascript"></script>-->
<!-- Validate.js-->
<!--<script src="{{ asset('js/jquery.validate.js') }}" type="text/javascript"></script>-->
<!-- Bootstrap 3.3.2 JS -->
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
<!-- FastClick -->
<script src="{{ asset('plugins/fastclick/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('js/app.min.js')}}" type="text/javascript"></script>
<!-- Sparkline -->
<script src="{{ asset('plugins/sparkline/jquery.sparkline.min.js') }}"></script>
<!-- jvectormap -->
<script src="{{ asset('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ asset('plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<!-- SlimScroll 1.3.0 -->
<script src="{{ asset('plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
<!-- ChartJS 1.0.1 -->
<script src="{{ asset('plugins/chartjs/Chart.min.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('js/pages/dashboard2.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<!-- Select2 4.0.3-->
<script src="{{ asset('plugins/select2/select2.min.js') }}"></script>
<!--Bootstrap Validator js -->
<script src="{{ asset('js/bootstrapValidator.min.js') }}"></script>

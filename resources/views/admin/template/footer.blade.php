    <!-- jQuery -->
    <script src="{{ URL::to('/') }}/admin/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ URL::to('/') }}/admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{ URL::to('/') }}/admin/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- jquery.mask -->
    <script src="{{ URL::to('/') }}/admin/js/jquery.mask.js"></script>

    <!-- Alertify -->
    <script src="{{ URL::to('/') }}/admin/js/alertify.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="{{ URL::to('/') }}/admin/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="{{ URL::to('/') }}/admin/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
    <script src="{{ URL::to('/') }}/admin/bower_components/datatables-responsive/js/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{ URL::to('/') }}/admin/dist/js/sb-admin-2.js"></script>
    
    <!-- TinyMCE -->
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>tinymce.init({ plugins: [
    'advlist autolink lists link image charmap print preview anchor',
    'searchreplace visualblocks code fullscreen',
    'insertdatetime media table contextmenu paste code'
  ],
  toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
   selector:'.editorTexto',
   content_css : '/css/bootstrap.css'   });</script>
    
    <!-- croppic http://www.croppic.net/ -->
    <script src="{{ URL::to('/') }}/admin/js/croppic/croppic.min.js"></script>

    <!-- Custom Carlos -->
    <script src="{{ URL::to('/') }}/admin/js/custom.js"></script>

</body>

</html>

<!-- <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.5
    </div>
  </foot -->








<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{url ('plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{url ('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{url ('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{url ('plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{url ('plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{url ('plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{url ('plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{url ('plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{url ('plugins/moment/moment.min.js') }}"></script>
<script src="{{url ('plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{url ('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{url ('plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{url ('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- sweetalert2 -->
<!-- <script src="{{ url('plugins/sweetalert2/sweetalert2.all.min.js') }}"></script> -->
<!-- AdminLTE App -->
<script src="{{url ('admin_js/adminlte.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{url ('admin_js/pages/dashboard.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{url ('admin_js/demo.js') }}"></script>


<script src="//cdn.ckeditor.com/4.5.6/standard/ckeditor.js"></script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js" integrity="sha512-BkpSL20WETFylMrcirBahHfSnY++H2O1W+UnEEO4yNIl+jI2+zowyoGJpbtk6bx97fBXf++WJHSSK2MV4ghPcg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>




<script src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>
<!-- <script type="text/javascript" src="{{asset('design/js/sweetalert.min.js')}}"></script> -->
<!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->

<script type="text/javascript">
  $(document).ready(function() {
    $('.ckeditor').ckeditor();

    $('.nav-link').on('click', function() {
      $(this).addClass('active');
    });

  });

  $(document).ready(function() {
    $('#example4').DataTable({

    });
  });
</script>
</body>

</html>
<!-- Modal Logout -->
<div class="modal fade" id="modal-logout">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Konfirmasi logout</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Apa anda yakin akan keluar dari sistem?</p>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                <form method="POST" action="logout.php">
                    <input type="submit" class="btn btn-primary" name="logout_btn" value="Keluar" />
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Edit Tahun Ajaran -->
<script type="text/javascript">
    function confirm_edit_modal(edit_url)
    {
        $('#modal_edit').modal('show', {backdrop: 'static'});
        document.getElementById('edit_link').setAttribute('href' , edit_url);
    }
</script> 

<!-- Modal Hapus Tahun Ajaran -->
<script type="text/javascript">
    function confirm_hapus_modal(hapus_url)
    {
        $('#modal_hapus').modal('show', {backdrop: 'static'});
        document.getElementById('hapus_link').setAttribute('href' , hapus_url);
    }
</script> 

<!-- Modal Delete -->
<script type="text/javascript">
    function confirm_modal(delete_url)
    {
        $('#modal_delete').modal('show', {backdrop: 'static'});
        document.getElementById('delete_link').setAttribute('href' , delete_url);
    }
</script> 

<!-- Modal View -->
<script>
    $(document).ready(function(){
        $('.view_data').click(function(){
            var data_id = $(this).data("id")
            $.ajax({
                url: "proses.php",
                method: "POST",
                data: {data_id: data_id},
                success: function(data){
                    $("#detail_user").html(data)
                    $("#dataModal").modal('show')
                }
            })
        })
    })
</script>

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<script>$.widget.bridge('uibutton', $.ui.button)</script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="plugins/chart.js/Chart.min.js"></script>
<script src="plugins/sparklines/sparkline.js"></script>
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<script src="plugins/inputmask/jquery.inputmask.min.js"></script>
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="dist/js/adminlte.js"></script>
<script src="dist/js/demo.js"></script>
<script src="dist/js/pages/dashboard.js"></script>
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="plugins/chart.js/Chart.min.js"></script>
<script src="plugins/swal/sweetalert2.min.js"></script>

<!-- Page specific script -->
<script>
      $(function () {
        $("#example1").DataTable({
          "responsive": true, "lengthChange": false, "autoWidth": true,
          "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": true,
          "ordering": true,
          "info": true,
          "autoWidth": true,
          "responsive": true,
      });
    });
</script>

<!-- Script Datetime -->
<script>
  $(function () {

    //Date picker
    $('#reservationdate').datetimepicker({
        format: 'DD-MM-YYYY',
            autoclose: true,
            todayHighlight: true,
            language: 'id'
    });
    //Date picker
    $('#reservationdatetahun').datetimepicker({
        format: 'YYYY',
          autoclose:true,
          todayHighlight: true
    });
  })
</script>

<?php include_once 'koding_grafik.php'; ?>
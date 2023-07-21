<?php 
$baca = 'index.php?page=';
$bgp = isset($_GET['page']) ? $_GET['page'] : '';
if(empty($bgp)){
  header("Location:../../login.php"); 
}elseif($bgp == 'index.php?page='){
  header("Location:../../login.php"); 
}else{
  if ($level != 'admin') {
    echo "<script type='text/javascript'>
    Swal.fire({
      position: 'center',
      icon: 'error',
      title: 'Halaman tidak dapat diakses, <br> login sebagai administrator untuk mengakses halaman ini!',
      type: 'error',
      showConfirmButton: false,
      timer: 3200
      });
      window.setTimeout(function(){ 
        window.location.replace('index.php');
        } ,3000); 
        </script>";
  }else{


  ?>

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Master Data</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">Data Jenis Prasarana</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <!-- /.card -->
          <div class="card">
            <div class="card-header">
              <div class="col-md-2">
                <a data-toggle="modal" data-target="#modal-tambah" type="button" class="btn btn-block btn-outline-primary">Tambah Data</a>
              </div>
              <div class="modal fade" id="modal-tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Tambah Jenis Prasarana</h4>
                    </div>

                    <form method="POST" class="form-horizontal" action="index.php?page=jenis_prasarana&act=proses&data=tambah" id="form1" name="tambah">
                      <div class="modal-body">
                        <div class="card-body">
                          <div class="form-group">
                            <label for="exampleInputBorder">Jenis Prasarana</label>
                            <input type="text" name="jenis_prasarana" class="form-control form-control-border" required>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <input type="submit" class="btn btn-primary btn-sm float-md-right" name="simpan" value="Simpan">
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th style="width: 10px">No</th>
                    <th>Jenis Prasarana</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  $no = 1;
                  $query = "SELECT * FROM lib_prasarana";
                  $result = mysqli_query($connection,$query);
                  $data = mysqli_num_rows($result);
                  if ($data > 0) { while($row = mysqli_fetch_assoc($result)){

                  ?>
                  <tr>
                    <td><?php echo $no;?></td>
                    <td><?php echo $row['jenis_prasarana']; ?></td>
                    <td>
                      <a class="btn btn-xs btn-warning" data-toggle="modal" data-target="#modal-edit-<?php echo $row['id_jenis_prasarana']; ?>">
                        <i class="fas fa-edit" ></i></a>
                      <a class="btn btn-xs bg-danger" href="#" onClick="confirm_modal('index.php?page=jenis_prasarana&act=proses&data=hapus&id=<?php echo $row['id_jenis_prasarana']; ?>');"><i class='fas fa-trash' title="Hapus" ></i></i></a>
                    </td> 
                  </tr>
                  <div class="modal fade" id="modal_delete">
                    <div class="modal-dialog">
                      <div class="modal-content" style="margin-top:100px;">
                        <div class="modal-header">
                          <h4 class="modal-title">Konfirmasi hapus data</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <p>Apa anda akan menghapus data ini ?</p>
                        </div>

                        <div class="modal-footer justify-content-between">
                          <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Cancel</button>
                          <a href="#" class="btn btn-danger btn-sm" id="delete_link">Hapus</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="modal fade" id="modal-edit-<?php echo $row['id_jenis_prasarana']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">Edit Jenis Prasarana</h4>
                        </div>
                        <form method="POST" class="form-horizontal" action="index.php?page=jenis_prasarana&act=proses&data=ubah" id="form1" method="post" name="ubah">
                          <input type="hidden" class="form-control" name="id_jenis" value="<?php echo $row['id_jenis_prasarana']; ?>" required>
                          <div class="modal-body">
                            <div class="card-body">
                              <div class="form-group">
                                <label for="exampleInputBorder">Jenis Prasarana</label>
                                <input type="text" class="form-control form-control-border" name="jenis_prasarana" value="<?php echo $row['jenis_prasarana']; ?>" required>
                              </div>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <input type="submit" class="btn btn-primary btn-sm float-md-right" name="simpan" value="Simpan">
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>


                  <?php
                  $no++;
                  } } ?>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
<?php } }?>

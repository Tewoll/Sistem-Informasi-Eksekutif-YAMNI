<?php 
$baca = 'index.php?page=';
$bgp = isset($_GET['page']) ? $_GET['page'] : '';
if(empty($bgp)){
    header("Location:../../login.php"); 
}elseif($bgp == 'index.php?page='){
    header("Location:../../login.php"); 
}else{
            
?>
<!-- Content Header (Page header) -->
<div class="content-header">
  <!-- container-fluid -->
  <div class="container-fluid">
    <!-- row -->
    <div class="row">
      <!-- col -->
      <div class="col-sm-6">
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Grafik Data Guru</li>
        </ol>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
  <!-- container-fluid -->
  <div class="container-fluid">
    <!-- row -->
    <div class="row">
      <!-- col -->
      <div class="col-12">
        <!-- /.card -->
        <div class="card">
          <div class="card-header">
              <h1 class="m-0 justify">Grafik Data Guru</h1>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <ul class="nav nav-tabs" id="custom-content-above-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="custom-content-above-home-tab" data-toggle="pill" href="#custom-content-above-home" role="tab" aria-controls="custom-content-above-home" aria-selected="true">Keseluruhan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="custom-content-above-profile-tab" data-toggle="pill" href="#custom-content-above-profile" role="tab" aria-controls="custom-content-above-profile" aria-selected="false">Menurut Jenis Kelamin</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="custom-content-above-tingkat-tab" data-toggle="pill" href="#custom-content-above-tingkat" role="tab" aria-controls="custom-content-above-tingkat" aria-selected="false">Menurut Pendidikan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="custom-content-above-umur-tab" data-toggle="pill" href="#custom-content-above-umur" role="tab" aria-controls="custom-content-above-umur" aria-selected="false">Menurut Umur</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="custom-content-above-bekerja-tab" data-toggle="pill" href="#custom-content-above-bekerja" role="tab" aria-controls="custom-content-above-bekerja" aria-selected="false">Menurut Lama Bekerja</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="custom-content-above-pns-tab" data-toggle="pill" href="#custom-content-above-pns" role="tab" aria-controls="custom-content-above-pns" aria-selected="false">Menurut Status PNS</a>
              </li>
            </ul>
            <div class="tab-content" id="custom-content-above-tabContent">
              <div class="tab-pane fade show active" id="custom-content-above-home" role="tabpanel" aria-labelledby="custom-content-above-home-tab">
                <br>
                <figure class="highcharts-figure">
                  <div id="grafik_guru"></div>
                </figure>
                
              </div>
              <div class="tab-pane fade" id="custom-content-above-profile" role="tabpanel" aria-labelledby="custom-content-above-profile-tab">
                <br>
                <figure class="highcharts-figure">
                  <div id="grafik_guru_jenkel"></div>
                  <p class="highcharts-description"></p>
                </figure>
              </div>
              <div class="tab-pane fade" id="custom-content-above-tingkat" role="tabpanel" aria-labelledby="custom-content-above-tingkat-tab">
                <br>
                <figure class="highcharts-figure">
                  <div id="grafik_pendidikan"></div>
                </figure>
              </div>
              <div class="tab-pane fade" id="custom-content-above-umur" role="tabpanel" aria-labelledby="custom-content-above-umur-tab">
                <br>
                <figure class="highcharts-figure">
                  <div id="grafik_umur"></div>
                </figure>
              </div>
              <div class="tab-pane fade" id="custom-content-above-bekerja" role="tabpanel" aria-labelledby="custom-content-above-bekerja-tab">
                <br>
                <figure class="highcharts-figure">
                  <div id="grafik_bekerja"></div>
                </figure>
              </div>
              <div class="tab-pane fade" id="custom-content-above-pns" role="tabpanel" aria-labelledby="custom-content-above-pns-tab">
                <br>
                <figure class="highcharts-figure">
                  <div id="grafik_pns"></div>
                </figure>
              </div>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <div class="card">
          <div class="card-header">
            <div class="row mb-2">
              <div class="col-sm-12">
                <h1>Tabel Data Guru Tahun Ajaran <?php echo "$tahun_ajaran";?></h1>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-12">
                  <div class="card">
                    <div class="card-header p-2">
                      <ul class="nav nav-pills">
                        <li class="nav-item"><a class="nav-link active" href="#ibtidaiyah" data-toggle="tab">Data Guru Madrasah Ibtidaiyah</a></li>
                        <li class="nav-item"><a class="nav-link" href="#tsanawiyah" data-toggle="tab">Data Guru Madrasah Tsanawiyah</a></li>
                        <li class="nav-item"><a class="nav-link" href="#aliyah" data-toggle="tab">Data Guru Madrasah Aliyah</a></li>
                      </ul>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                      <div class="tab-content">
                        <div class="tab-pane active" id="ibtidaiyah">
                          <div class="col-md-12">
                            <div class="card">
                              <div class="card-header">
                                <?php
                                $rows = mysqli_query($connection, "SELECT COUNT(id) AS jumlah FROM Guru WHERE id_tingkat = '3'"); while($row = mysqli_fetch_array($rows)){ $pd = $row['jumlah']; ?>
                                <h3 class="card-title">Jumlah Data Seluruh : <b><?php echo $pd;}?> Guru</b></h3>
                              </div>
                              <!-- /.card-header -->
                              <div class="card-body">
                                <div class="table-responsive">
                                  <table class="table table-bordered">
                                    <thead>
                                      <tr>
                                        <th style="width: 10px">No</th>
                                        <th>Nama</th>
                                        <th>Jenis Kelamin</th>
                                        <th style="width: 40px">Action</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <?php 
                                      $no = 1;
                                      $kueri = "SELECT id, nama_guru, jenkel_guru, pendidikan, guru.id_pendidikan,tmpt_lahir, tgl_lahir, jabatan, guru.id_jabatan, tgl_mulai, tingkat, guru.id_tingkat, pns_nonpns, alamat, foto FROM guru, lib_pendidikan_terakhir, lib_jabatan, lib_tingkat WHERE lib_pendidikan_terakhir.id_pendidikan = guru.id_pendidikan AND lib_jabatan.id_jabatan = guru.id_jabatan AND lib_tingkat.id_tingkat = guru.id_tingkat AND guru.id_tingkat = '3' ORDER BY guru.id_tingkat ASC";
                                      $temu = mysqli_query($connection,$kueri);
                                      $gana = mysqli_num_rows($temu);
                                      if ($gana > 0) { while($kotak = mysqli_fetch_assoc($temu)){
                                        ?>
                                        <tr>
                                          <td><?php echo $no++;?></td>
                                          <td><?php echo $kotak['nama_guru']; ?></td>
                                          <td><?php echo $kotak['jenkel_guru']; ?></td>
                                          <td>
                                            <a class="btn btn-xs btn-info" data-toggle="modal" data-target="#modal<?php echo $kotak['id']; ?>"><i class="fas fa-eye" ></i> Lihat</a>
                                          </td> 
                                        </tr>
                                        <div class="modal fade" id="modal<?php echo $kotak['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
                                          aria-hidden="true">
                                          <div class="modal-dialog">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <h4 class="modal-title">Info Lengkap Guru</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">×</span>
                                                </button>
                                              </div>
                                              <div class="modal-body">
                                                <form>
                                                  <div class="card-body">
                                                    <div class="form-group">
                                                      <label for="exampleInputBorder">Nama Guru</label>
                                                      <input type="text" class="form-control form-control-border" value="<?php echo $kotak['nama_guru']; ?>" disabled>
                                                    </div>
                                                    <div class="form-group">
                                                      <label for="exampleInputBorder">Jenis Kelamin</label>
                                                      <input type="text" class="form-control form-control-border" value="<?php echo $kotak['jenkel_guru']; ?>" disabled>
                                                    </div>
                                                    <div class="form-group">
                                                      <label for="exampleInputBorder">Pendidikan Terakhir</label>
                                                      <input type="text" class="form-control form-control-border" value="<?php echo $kotak['pendidikan']; ?>" disabled>
                                                    </div>
                                                    <div class="form-group">
                                                      <label for="exampleInputBorder">Tempat & Tanggal lahir</label>
                                                      <input type="text" class="form-control form-control-border" value="<?php echo $kotak['tmpt_lahir']; ?>, <?php echo tgl_indo($kotak['tgl_lahir']); ?>" disabled>
                                                    </div>
                                                    <div class="form-group">
                                                      <?php 
                                                      $idj = $kotak['id_jabatan'];
                                                      $qjab = mysqli_query($connection, "select jabatan from lib_jabatan where id_jabatan = '{$idj}'"); 
                                                      $cjab = mysqli_num_rows($qjab);
                                                      if($cjab > 0){
                                                        while($jab = mysqli_fetch_assoc($qjab)){
                                                          ?>
                                                          <label for="exampleInputBorder">Jabatan</label>
                                                          <input type="text" class="form-control form-control-border" value="<?php echo $jab['jabatan'];?>" disabled>
                                                        <?php } ?>
                                                      <?php } ?>
                                                    </div>
                                                    <div class="form-group">
                                                      <label for="exampleInputBorder">Tempat Tugas</label>
                                                      <input type="text" class="form-control form-control-border" value="<?php echo $kotak['tingkat'];?>" disabled>
                                                    </div>
                                                    <div class="form-group">
                                                      <label for="exampleInputBorder">Mulai Bekerja</label>
                                                      <input type="text" class="form-control form-control-border" value="<?php echo $kotak['tgl_mulai']; ?>" disabled>
                                                    </div>
                                                    <div class="form-group">
                                                      <label for="exampleInputBorder">PNS / NON PNS</label>
                                                      <input type="text" class="form-control form-control-border" value="<?php echo $kotak['pns_nonpns']; ?>" disabled>
                                                    </div>
                                                    <div class="form-group">
                                                      <label for="exampleInputBorder">Alamat</label>
                                                      <textarea style="height:100px" class="form-control" disabled><?php echo $kotak['alamat'] ?></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                      <label for="exampleInputBorder">Foto</label><br>
                                                      <img class="img-fluid mb-2" src="dist/img/foto_guru/<?php echo $kotak['foto']; ?>" width="100px"/>
                                                    </div>
                                                  </div>
                                                </form>
                                              </div>
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-default float-right" data-dismiss="modal">Tutup</button>
                                              </div>
                                            </div>
                                          </div>
                                        </div> 
                                      <?php }} ?>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                              <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                          </div>
                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="tsanawiyah">
                          <div class="col-md-12">
                            <div class="card">
                              <div class="card-header">
                                <?php
                                $rows = mysqli_query($connection, "SELECT COUNT(id) AS jumlah FROM Guru WHERE id_tingkat = '2'"); while($row = mysqli_fetch_array($rows)){ $pd = $row['jumlah']; ?>
                                <h3 class="card-title">Jumlah Data Seluruh : <b><?php echo $pd;}?> Guru</b></h3>
                              </div>
                              <!-- /.card-header -->
                              <div class="card-body">
                                <div class="table-responsive">
                                  <table class="table table-bordered">
                                    <thead>
                                      <tr>
                                        <th style="width: 10px">No</th>
                                        <th>Nama</th>
                                        <th>Jenis Kelamin</th>
                                        <th style="width: 40px">Action</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <?php 
                                      $no = 1;
                                      $kueri = "SELECT id, nama_guru, jenkel_guru, pendidikan, guru.id_pendidikan,tmpt_lahir, tgl_lahir, jabatan, guru.id_jabatan, tgl_mulai, tingkat, guru.id_tingkat, pns_nonpns, alamat, foto FROM guru, lib_pendidikan_terakhir, lib_jabatan, lib_tingkat WHERE lib_pendidikan_terakhir.id_pendidikan = guru.id_pendidikan AND lib_jabatan.id_jabatan = guru.id_jabatan AND lib_tingkat.id_tingkat = guru.id_tingkat AND guru.id_tingkat = '2' ORDER BY guru.id_tingkat ASC";
                                      $temu = mysqli_query($connection,$kueri);
                                      $gana = mysqli_num_rows($temu);
                                      if ($gana > 0) { while($kotak = mysqli_fetch_assoc($temu)){
                                        ?>
                                        <tr>
                                          <td><?php echo $no++;?></td>
                                          <td><?php echo $kotak['nama_guru']; ?></td>
                                          <td><?php echo $kotak['jenkel_guru']; ?></td>
                                          <td>
                                            <a class="btn btn-xs btn-info" data-toggle="modal" data-target="#modal<?php echo $kotak['id']; ?>"><i class="fas fa-eye" ></i> Lihat</a>
                                          </td> 
                                        </tr>
                                        <div class="modal fade" id="modal<?php echo $kotak['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
                                          aria-hidden="true">
                                          <div class="modal-dialog">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <h4 class="modal-title">Info Lengkap Guru</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">×</span>
                                                </button>
                                              </div>
                                              <div class="modal-body">
                                                <form>
                                                  <div class="card-body">
                                                    <div class="form-group">
                                                      <label for="exampleInputBorder">Nama Guru</label>
                                                      <input type="text" class="form-control form-control-border" value="<?php echo $kotak['nama_guru']; ?>" disabled>
                                                    </div>
                                                    <div class="form-group">
                                                      <label for="exampleInputBorder">Jenis Kelamin</label>
                                                      <input type="text" class="form-control form-control-border" value="<?php echo $kotak['jenkel_guru']; ?>" disabled>
                                                    </div>
                                                    <div class="form-group">
                                                      <label for="exampleInputBorder">Pendidikan Terakhir</label>
                                                      <input type="text" class="form-control form-control-border" value="<?php echo $kotak['pendidikan']; ?>" disabled>
                                                    </div>
                                                    <div class="form-group">
                                                      <label for="exampleInputBorder">Tempat & Tanggal lahir</label>
                                                      <input type="text" class="form-control form-control-border" value="<?php echo $kotak['tmpt_lahir']; ?>, <?php echo tgl_indo($kotak['tgl_lahir']); ?>" disabled>
                                                    </div>
                                                    <div class="form-group">
                                                      <?php 
                                                      $idj = $kotak['id_jabatan'];
                                                      $qjab = mysqli_query($connection, "select jabatan from lib_jabatan where id_jabatan = '{$idj}'"); 
                                                      $cjab = mysqli_num_rows($qjab);
                                                      if($cjab > 0){
                                                        while($jab = mysqli_fetch_assoc($qjab)){
                                                          ?>
                                                          <label for="exampleInputBorder">Jabatan</label>
                                                          <input type="text" class="form-control form-control-border" value="<?php echo $jab['jabatan'];?>" disabled>
                                                        <?php } ?>
                                                      <?php } ?>
                                                    </div>
                                                    <div class="form-group">
                                                      <label for="exampleInputBorder">Tempat Tugas</label>
                                                      <input type="text" class="form-control form-control-border" value="<?php echo $kotak['tingkat'];?>" disabled>
                                                    </div>
                                                    <div class="form-group">
                                                      <label for="exampleInputBorder">Mulai Bekerja</label>
                                                      <input type="text" class="form-control form-control-border" value="<?php echo $kotak['tgl_mulai']; ?>" disabled>
                                                    </div>
                                                    <div class="form-group">
                                                      <label for="exampleInputBorder">PNS / NON PNS</label>
                                                      <input type="text" class="form-control form-control-border" value="<?php echo $kotak['pns_nonpns']; ?>" disabled>
                                                    </div>
                                                    <div class="form-group">
                                                      <label for="exampleInputBorder">Alamat</label>
                                                      <textarea style="height:100px" class="form-control" disabled><?php echo $kotak['alamat'] ?></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                      <label for="exampleInputBorder">Foto</label><br>
                                                      <img class="img-fluid mb-2" src="dist/img/foto_guru/<?php echo $kotak['foto']; ?>" width="100px"/>
                                                    </div>
                                                  </div>
                                                </form>
                                              </div>
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-default float-right" data-dismiss="modal">Tutup</button>
                                              </div>
                                            </div>
                                          </div>
                                        </div> 
                                      <?php }} ?>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                              <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                          </div>
                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="aliyah">
                          <div class="col-md-12">
                            <div class="card">
                              <div class="card-header">
                                <?php
                                $rows = mysqli_query($connection, "SELECT COUNT(id) AS jumlah FROM Guru WHERE id_tingkat = '1'"); while($row = mysqli_fetch_array($rows)){ $pd = $row['jumlah']; ?>
                                <h3 class="card-title">Jumlah Data Seluruh : <b><?php echo $pd;}?> Guru</b></h3>
                              </div>
                              <!-- /.card-header -->
                              <div class="card-body">
                                <div class="table-responsive">
                                  <table class="table table-bordered">
                                    <thead>
                                      <tr>
                                        <th style="width: 10px">No</th>
                                        <th>Nama</th>
                                        <th>Jenis Kelamin</th>
                                        <th style="width: 40px">Action</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <?php 
                                      $no = 1;
                                      $kueri = "SELECT id, nama_guru, jenkel_guru, pendidikan, guru.id_pendidikan,tmpt_lahir, tgl_lahir, jabatan, guru.id_jabatan, tgl_mulai, tingkat, guru.id_tingkat, pns_nonpns, alamat, foto FROM guru, lib_pendidikan_terakhir, lib_jabatan, lib_tingkat WHERE lib_pendidikan_terakhir.id_pendidikan = guru.id_pendidikan AND lib_jabatan.id_jabatan = guru.id_jabatan AND lib_tingkat.id_tingkat = guru.id_tingkat AND guru.id_tingkat = '1' ORDER BY guru.id_tingkat ASC";
                                      $temu = mysqli_query($connection,$kueri);
                                      $gana = mysqli_num_rows($temu);
                                      if ($gana > 0) { while($kotak = mysqli_fetch_assoc($temu)){
                                        ?>
                                        <tr>
                                          <td><?php echo $no++;?></td>
                                          <td><?php echo $kotak['nama_guru']; ?></td>
                                          <td><?php echo $kotak['jenkel_guru']; ?></td>
                                          <td>
                                            <a class="btn btn-xs btn-info" data-toggle="modal" data-target="#modal<?php echo $kotak['id']; ?>"><i class="fas fa-eye" ></i> Lihat</a>
                                          </td> 
                                        </tr>
                                        <div class="modal fade" id="modal<?php echo $kotak['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
                                          aria-hidden="true">
                                          <div class="modal-dialog">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <h4 class="modal-title">Info Lengkap Guru</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">×</span>
                                                </button>
                                              </div>
                                              <div class="modal-body">
                                                <form>
                                                  <div class="card-body">
                                                    <div class="form-group">
                                                      <label for="exampleInputBorder">Nama Guru</label>
                                                      <input type="text" class="form-control form-control-border" value="<?php echo $kotak['nama_guru']; ?>" disabled>
                                                    </div>
                                                    <div class="form-group">
                                                      <label for="exampleInputBorder">Jenis Kelamin</label>
                                                      <input type="text" class="form-control form-control-border" value="<?php echo $kotak['jenkel_guru']; ?>" disabled>
                                                    </div>
                                                    <div class="form-group">
                                                      <label for="exampleInputBorder">Pendidikan Terakhir</label>
                                                      <input type="text" class="form-control form-control-border" value="<?php echo $kotak['pendidikan']; ?>" disabled>
                                                    </div>
                                                    <div class="form-group">
                                                      <label for="exampleInputBorder">Tempat & Tanggal lahir</label>
                                                      <input type="text" class="form-control form-control-border" value="<?php echo $kotak['tmpt_lahir']; ?>, <?php echo tgl_indo($kotak['tgl_lahir']); ?>" disabled>
                                                    </div>
                                                    <div class="form-group">
                                                      <?php 
                                                      $idj = $kotak['id_jabatan'];
                                                      $qjab = mysqli_query($connection, "select jabatan from lib_jabatan where id_jabatan = '{$idj}'"); 
                                                      $cjab = mysqli_num_rows($qjab);
                                                      if($cjab > 0){
                                                        while($jab = mysqli_fetch_assoc($qjab)){
                                                          ?>
                                                          <label for="exampleInputBorder">Jabatan</label>
                                                          <input type="text" class="form-control form-control-border" value="<?php echo $jab['jabatan'];?>" disabled>
                                                        <?php } ?>
                                                      <?php } ?>
                                                    </div>
                                                    <div class="form-group">
                                                      <label for="exampleInputBorder">Tempat Tugas</label>
                                                      <input type="text" class="form-control form-control-border" value="<?php echo $kotak['tingkat'];?>" disabled>
                                                    </div>
                                                    <div class="form-group">
                                                      <label for="exampleInputBorder">Mulai Bekerja</label>
                                                      <input type="text" class="form-control form-control-border" value="<?php echo $kotak['tgl_mulai']; ?>" disabled>
                                                    </div>
                                                    <div class="form-group">
                                                      <label for="exampleInputBorder">PNS / NON PNS</label>
                                                      <input type="text" class="form-control form-control-border" value="<?php echo $kotak['pns_nonpns']; ?>" disabled>
                                                    </div>
                                                    <div class="form-group">
                                                      <label for="exampleInputBorder">Alamat</label>
                                                      <textarea style="height:100px" class="form-control" disabled><?php echo $kotak['alamat'] ?></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                      <label for="exampleInputBorder">Foto</label><br>
                                                      <img class="img-fluid mb-2" src="dist/img/foto_guru/<?php echo $kotak['foto']; ?>" width="100px"/>
                                                    </div>
                                                  </div>
                                                </form>
                                              </div>
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-default float-right" data-dismiss="modal">Tutup</button>
                                              </div>
                                            </div>
                                          </div>
                                        </div> 
                                      <?php }} ?>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                              <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                          </div>
                        </div>
                        <!-- /.tab-pane -->
                      </div>
                      <!-- /.tab-content -->
                    </div><!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
              </div>
              <!-- /.row -->
            </div><!-- /.container-fluid -->
          </div>
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>
<!-- /.content -->
<?php } ?>

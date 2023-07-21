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
          <li class="breadcrumb-item active">Grafik Data Siswa</li>
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
        <!-- card -->
        <div class="card">
          <div class="card-header">
              <h1 class="m-0 justify">Grafik Data Siswa Tahun Ajaran <?php echo "$tahun_ajaran";?></h1>
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
                <a class="nav-link" id="custom-content-above-tingkat-tab" data-toggle="pill" href="#custom-content-above-tingkat" role="tab" aria-controls="custom-content-above-tingkat" aria-selected="false">Menurut Kelas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="custom-content-above-asal-tab" data-toggle="pill" href="#custom-content-above-asal" role="tab" aria-controls="custom-content-above-asal" aria-selected="false">Menurut Asal Sekolah</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="custom-content-above-kota-tab" data-toggle="pill" href="#custom-content-above-kota" role="tab" aria-controls="custom-content-above-kota" aria-selected="false">Menurut Kota Asal</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="custom-content-above-ekonomi-tab" data-toggle="pill" href="#custom-content-above-ekonomi" role="tab" aria-controls="custom-content-above-ekonomi" aria-selected="false">Menurut Status Ekonomi</a>
              </li>
            </ul>
            <div class="tab-content" id="custom-content-above-tabContent">
              <div class="tab-pane fade show active" id="custom-content-above-home" role="tabpanel" aria-labelledby="custom-content-above-home-tab">
                <br>
                <figure class="highcharts-figure">
                  <div id="grafik_siswa"></div>
                </figure>
              </div>
              <div class="tab-pane fade" id="custom-content-above-profile" role="tabpanel" aria-labelledby="custom-content-above-profile-tab">
                <br>
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#jenkelmi" data-toggle="tab">Data Siswa Madrasah Ibtidaiyah</a></li>
                  <li class="nav-item"><a class="nav-link" href="#jenkelmts" data-toggle="tab">Data Siswa Madrasah Tsanawiyah</a></li>
                  <li class="nav-item"><a class="nav-link" href="#jenkelma" data-toggle="tab">Data Siswa Madrasah Aliyah</a></li>
                </ul>
                <div class="card-body">
                  <div class="tab-content">
                    <div class="tab-pane active" id="jenkelmi">
                      <div class="col-md-12">
                        <div class="card">
                          <div class="card-header">
                            <br>
                            <figure class="highcharts-figure">
                              <div id="grafik_jenkel_mi"></div>
                            </figure>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane" id="jenkelmts">
                      <div class="col-md-12">
                        <div class="card">
                          <div class="card-header">
                            <br>
                            <figure class="highcharts-figure">
                              <div id="grafik_jenkel_mts"></div>
                            </figure>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane" id="jenkelma">
                      <div class="col-md-12">
                        <div class="card">
                          <div class="card-header">
                            <br>
                            <figure class="highcharts-figure">
                              <div id="grafik_jenkel_ma"></div>
                            </figure>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="custom-content-above-tingkat" role="tabpanel" aria-labelledby="custom-content-above-tingkat-tab">
                <br>
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#tingkatibtidaiyah" data-toggle="tab">Data Siswa Madrasah Ibtidaiyah</a></li>
                  <li class="nav-item"><a class="nav-link" href="#tingkattsanawiyah" data-toggle="tab">Data Siswa Madrasah Tsanawiyah</a></li>
                  <li class="nav-item"><a class="nav-link" href="#tingkataliyah" data-toggle="tab">Data Siswa Madrasah Aliyah</a></li>
                </ul>
                <div class="card-body">
                  <div class="tab-content">
                    <div class="tab-pane active" id="tingkatibtidaiyah">
                      <div class="col-md-12">
                        <div class="card">
                          <div class="card-header">
                            <br>
                            <figure class="highcharts-figure">
                              <div id="grafik_kelas_mi"></div>
                            </figure>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane" id="tingkattsanawiyah">
                      <div class="col-md-12">
                        <div class="card">
                          <div class="card-header">
                            <br>
                            <figure class="highcharts-figure">
                              <div id="grafik_kelas_mts"></div>
                            </figure>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane" id="tingkataliyah">
                      <div class="col-md-12">
                        <div class="card">
                          <div class="card-header">
                            <br>
                            <figure class="highcharts-figure">
                              <div id="grafik_kelas_ma"></div>
                            </figure>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="custom-content-above-asal" role="tabpanel" aria-labelledby="custom-content-above-asal-tab">
                <br>
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#asalmi" data-toggle="tab">Data Siswa Madrasah Ibtidaiyah</a></li>
                  <li class="nav-item"><a class="nav-link" href="#asalmts" data-toggle="tab">Data Siswa Madrasah Tsanawiyah</a></li>
                  <li class="nav-item"><a class="nav-link" href="#asalma" data-toggle="tab">Data Siswa Madrasah Aliyah</a></li>
                </ul>
                <div class="card-body">
                  <div class="tab-content">
                    <div class="tab-pane active" id="asalmi">
                      <div class="col-md-12">
                        <div class="card">
                          <div class="card-header">
                            <br>
                            <figure class="highcharts-figure">
                              <div id="grafik_asal_mi"></div>
                            </figure>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane" id="asalmts">
                      <div class="col-md-12">
                        <div class="card">
                          <div class="card-header">
                            <br>
                            <figure class="highcharts-figure">
                              <div id="grafik_asal_mts"></div>
                            </figure>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane" id="asalma">
                      <div class="col-md-12">
                        <div class="card">
                          <div class="card-header">
                            <br>
                            <figure class="highcharts-figure">
                              <div id="grafik_asal_ma"></div>
                            </figure>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="custom-content-above-kota" role="tabpanel" aria-labelledby="custom-content-above-kota-tab">
                <br>
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#kotami" data-toggle="tab">Data Siswa Madrasah Ibtidaiyah</a></li>
                  <li class="nav-item"><a class="nav-link" href="#kotamts" data-toggle="tab">Data Siswa Madrasah Tsanawiyah</a></li>
                  <li class="nav-item"><a class="nav-link" href="#kotama" data-toggle="tab">Data Siswa Madrasah Aliyah</a></li>
                </ul>
                <div class="card-body">
                  <div class="tab-content">
                    <div class="tab-pane active" id="kotami">
                      <div class="col-md-12">
                        <div class="card">
                          <div class="card-header">
                            <br>
                            <figure class="highcharts-figure">
                              <div id="grafik_kota_mi"></div>
                            </figure>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane" id="kotamts">
                      <div class="col-md-12">
                        <div class="card">
                          <div class="card-header">
                            <br>
                            <figure class="highcharts-figure">
                              <div id="grafik_kota_mts"></div>
                            </figure>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane" id="kotama">
                      <div class="col-md-12">
                        <div class="card">
                          <div class="card-header">
                            <br>
                            <figure class="highcharts-figure">
                              <div id="grafik_kota_ma"></div>
                            </figure>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="custom-content-above-ekonomi" role="tabpanel" aria-labelledby="custom-content-above-ekonomi-tab">
                <br>
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#ekonomimi" data-toggle="tab">Data Siswa Madrasah Ibtidaiyah</a></li>
                  <li class="nav-item"><a class="nav-link" href="#ekonomimts" data-toggle="tab">Data Siswa Madrasah Tsanawiyah</a></li>
                  <li class="nav-item"><a class="nav-link" href="#ekonomima" data-toggle="tab">Data Siswa Madrasah Aliyah</a></li>
                </ul>
                <div class="card-body">
                  <div class="tab-content">
                    <div class="tab-pane active" id="ekonomimi">
                      <div class="col-md-12">
                        <div class="card">
                          <div class="card-header">
                            <br>
                            <figure class="highcharts-figure">
                              <div id="grafik_ekonomi_mi"></div>
                            </figure>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane" id="ekonomimts">
                      <div class="col-md-12">
                        <div class="card">
                          <div class="card-header">
                            <br>
                            <figure class="highcharts-figure">
                              <div id="grafik_ekonomi_mts"></div>
                            </figure>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane" id="ekonomima">
                      <div class="col-md-12">
                        <div class="card">
                          <div class="card-header">
                            <br>
                            <figure class="highcharts-figure">
                              <div id="grafik_ekonomi_ma"></div>
                            </figure>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header">
            <div class="row mb-2">
              <div class="col-sm-12">
                <h1>Tabel Data Siswa Tahun Ajaran <?php echo "$tahun_ajaran";?></h1>
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
                        <li class="nav-item"><a class="nav-link active" href="#ibtidaiyah" data-toggle="tab">Data Siswa Madrasah Ibtidaiyah</a></li>
                        <li class="nav-item"><a class="nav-link" href="#tsanawiyah" data-toggle="tab">Data Siswa Madrasah Tsanawiyah</a></li>
                        <li class="nav-item"><a class="nav-link" href="#aliyah" data-toggle="tab">Data Siswa Madrasah Aliyah</a></li>
                      </ul>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                      <div class="tab-content">
                        <div class="tab-pane active" id="ibtidaiyah">
                          <div class="col-md-12">
                            <div class="card">
                              <div class="card-header">
                                <?php
                                $rows = mysqli_query($connection, "SELECT COUNT(id) AS jumlah FROM siswa WHERE id_tingkat = '3' AND id_tajaran = '$id_sem'"); while($row = mysqli_fetch_array($rows)){ $pd = $row['jumlah']; ?>
                                <h3 class="card-title">Jumlah Data Seluruh : <b><?php echo $pd;}?> Siswa</b></h3>
                              </div>
                              <!-- /.card-header -->
                              <div class="card-body">
                                <div class="table-responsive">
                                  <table class="table table-bordered">
                                    <thead>
                                      <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Kelas</th>
                                        <th >Action</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <?php 
                                      $no = 1;
                                      $kueri = "SELECT * FROM siswa WHERE id_tingkat = '3'  AND id_tajaran = '$id_sem' ORDER BY kelas ASC";
                                      $temu = mysqli_query($connection,$kueri);
                                      $gana = mysqli_num_rows($temu);
                                      if ($gana > 0) { while($kotak = mysqli_fetch_assoc($temu)){
                                        ?>
                                        <tr>
                                          <td><?php echo $no++;?></td>
                                          <td><?php echo $kotak['nama_siswa']; ?></td>
                                          <td><?php echo $kotak['jenkel']; ?></td>
                                          <td><?php echo $kotak['kelas']; ?></td>
                                          <td>
                                            <a class="btn btn-xs btn-info" data-toggle="modal" data-target="#modal<?php echo $kotak['id']; ?>"><i class="fas fa-eye" ></i> Lihat</a>
                                          </td> 
                                        </tr>
                                        <div class="modal fade" id="modal<?php echo $kotak['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
                                          aria-hidden="true">
                                          <div class="modal-dialog">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <h4 class="modal-title">Info Lengkap Siswa</h4>
                                              </div>
                                              <div class="modal-body">
                                                <form>
                                                  <div class="card-body">
                                                    <div class="form-group">
                                                      <label for="exampleInputBorder">Nama Siswa</label>
                                                      <input type="text" class="form-control form-control-border" value="<?php echo $kotak['nama_siswa']; ?>" disabled>
                                                    </div>
                                                    <div class="form-group">
                                                      <label for="exampleInputBorder">Jenis Kelamin</label>
                                                      <input type="text" class="form-control form-control-border" value="<?php echo $kotak['jenkel']; ?>" disabled>
                                                    </div>
                                                    <div class="form-group">
                                                      <label for="exampleInputBorder">Tempat & Tanggal lahir</label>
                                                      <input type="text" class="form-control form-control-border" value="<?php echo $kotak['tmpt_lahir']; ?>, <?php echo tgl_indo($kotak['tgl_lahir']); ?>" disabled>
                                                    </div>
                                                    <div class="form-group">
                                                      <label for="exampleInputBorder">Nama Orang Tua</label>
                                                      <input type="text" class="form-control form-control-border" value="<?php echo $kotak['nama_ortu'];?>" disabled>
                                                    </div>
                                                    <div class="form-group">
                                                      <label for="exampleInputBorder">Tingkatan Sekolah</label>

                                                      <?php
                                                      $idt = $kotak['id_tingkat'];
                                                      $qedit = "SELECT * FROM lib_tingkat WHERE id_tingkat = '{$idt}'";
                                                      $red = mysqli_query($connection,$qedit);
                                                      $ed = mysqli_num_rows($red);
                                                      if ($ed > 0) {
                                                        $tkta = mysqli_fetch_assoc($red);
                                                        $tkto = $tkta['tingkat'];
                                                        ?>

                                                        <input type="text" class="form-control form-control-border" value="<?php echo $tkto ;?>" disabled>
                                                      <?php }?>
                                                    </div>
                                                    <div class="form-group">
                                                      <label for="exampleInputBorder">Kelas</label>
                                                      <input type="text" class="form-control form-control-border" value="<?php echo $kotak['kelas'];?>" disabled>
                                                    </div>
                                                    <div class="form-group">
                                                      <label for="exampleInputBorder">Jenis Asal Tingkatan Sekolah</label>

                                                      <?php
                                                      $idt = $kotak['id_asal_tingkat_sekolah'];
                                                      $qedit = "SELECT * FROM lib_tingkat WHERE id_tingkat = '{$idt}'";
                                                      $red = mysqli_query($connection,$qedit);
                                                      $ed = mysqli_num_rows($red);
                                                      if ($ed > 0) {
                                                        $tkta = mysqli_fetch_assoc($red);
                                                        $tkto = $tkta['tingkat'];
                                                        ?>

                                                        <input type="text" class="form-control form-control-border" value="<?php echo $tkto ;?>" disabled>
                                                      <?php }?>
                                                    </div>
                                                    <div class="form-group">
                                                      <label for="exampleInputBorder">Nama Asal Sekolah</label>
                                                      <input type="text" class="form-control form-control-border" value="<?php echo $kotak['nama_asal_sekolah'];?>" disabled>
                                                    </div>
                                                    <div class="form-group">
                                                      <label for="exampleInputBorder">Alamat</label>
                                                      <input type="text" class="form-control form-control-border" rows="3" value="<?php echo $kotak['alamat'];?>" disabled>
                                                    </div>
                                                    <div class="form-group">
                                                      <label for="exampleInputBorder">Kota Asal</label>
                                                      <input type="text" class="form-control form-control-border" value="<?php echo $kotak['kota'];?>" disabled>
                                                    </div>
                                                    <div class="form-group">
                                                      <label for="exampleInputBorder">Status Ekonomi keluarga</label>
                                                      <input type="text" class="form-control form-control-border" value="<?php echo $kotak['status_ekonomi'];?>" disabled>
                                                    </div>
                                                    <div class="form-group">
                                                      <label for="exampleInputBorder">Tahun Angkatan</label>
                                                      <?php
                                                      $idt = $kotak['id_tajaran'];
                                                      $qedit = "SELECT * FROM lib_tajaran WHERE id_tajaran = '{$idt}'";
                                                      $red = mysqli_query($connection,$qedit);
                                                      $ed = mysqli_num_rows($red);
                                                      if ($ed > 0) {
                                                        $tkta = mysqli_fetch_assoc($red);
                                                        $angkatan = $tkta['tahun_ajaran'];
                                                        ?>
                                                        <input type="text" class="form-control form-control-border" value=" Tahun Angkatan <?php echo $angkatan ;?>" disabled>
                                                      <?php }?>
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
                                $rows = mysqli_query($connection, "SELECT COUNT(id) AS jumlah FROM siswa WHERE id_tingkat = '2' AND id_tajaran = '$id_sem'"); while($row = mysqli_fetch_array($rows)){ $pd = $row['jumlah']; ?>
                                <h3 class="card-title">Jumlah Data Seluruh : <b><?php echo $pd;}?> Siswa</b></h3>
                              </div>
                              <!-- /.card-header -->
                              <div class="card-body">
                                <div class="table-responsive">
                                  <table class="table table-bordered">
                                    <thead>
                                      <tr>
                                        <th >No</th>
                                        <th>Nama</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Kelas</th>
                                        <th >Action</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <?php 
                                      $no = 1;
                                      $kueri = "SELECT * FROM siswa WHERE id_tingkat = '2'  AND id_tajaran = '$id_sem' ORDER BY kelas ASC";
                                      $temu = mysqli_query($connection,$kueri);
                                      $gana = mysqli_num_rows($temu);
                                      if ($gana > 0) { while($kotak = mysqli_fetch_assoc($temu)){
                                        ?>
                                        <tr>
                                          <td><?php echo $no++;?></td>
                                          <td><?php echo $kotak['nama_siswa']; ?></td>
                                          <td><?php echo $kotak['jenkel']; ?></td>
                                          <td><?php echo $kotak['kelas']; ?></td>
                                          <td>
                                            <a class="btn btn-xs btn-info" data-toggle="modal" data-target="#modal<?php echo $kotak['id']; ?>"><i class="fas fa-eye" ></i> Lihat</a>
                                          </td> 
                                        </tr>
                                        <div class="modal fade" id="modal<?php echo $kotak['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
                                          aria-hidden="true">
                                          <div class="modal-dialog">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <h4 class="modal-title">Info Lengkap Siswa</h4>
                                              </div>
                                              <div class="modal-body">
                                                <form>
                                                  <div class="card-body">
                                                    <div class="form-group">
                                                      <label for="exampleInputBorder">Nama Siswa</label>
                                                      <input type="text" class="form-control form-control-border" value="<?php echo $kotak['nama_siswa']; ?>" disabled>
                                                    </div>
                                                    <div class="form-group">
                                                      <label for="exampleInputBorder">Jenis Kelamin</label>
                                                      <input type="text" class="form-control form-control-border" value="<?php echo $kotak['jenkel']; ?>" disabled>
                                                    </div>
                                                    <div class="form-group">
                                                      <label for="exampleInputBorder">Tempat & Tanggal lahir</label>
                                                      <input type="text" class="form-control form-control-border" value="<?php echo $kotak['tmpt_lahir']; ?>, <?php echo tgl_indo($kotak['tgl_lahir']); ?>" disabled>
                                                    </div>
                                                    <div class="form-group">
                                                      <label for="exampleInputBorder">Nama Orang Tua</label>
                                                      <input type="text" class="form-control form-control-border" value="<?php echo $kotak['nama_ortu'];?>" disabled>
                                                    </div>
                                                    <div class="form-group">
                                                      <label for="exampleInputBorder">Tingkatan Sekolah</label>

                                                      <?php
                                                      $idt = $kotak['id_tingkat'];
                                                      $qedit = "SELECT * FROM lib_tingkat WHERE id_tingkat = '{$idt}'";
                                                      $red = mysqli_query($connection,$qedit);
                                                      $ed = mysqli_num_rows($red);
                                                      if ($ed > 0) {
                                                        $tkta = mysqli_fetch_assoc($red);
                                                        $tkto = $tkta['tingkat'];
                                                        ?>
                                                        <input type="text" class="form-control form-control-border" value="<?php echo $tkto ;?>" disabled>
                                                      <?php }?>
                                                    </div>
                                                    <div class="form-group">
                                                      <label for="exampleInputBorder">Kelas</label>
                                                      <input type="text" class="form-control form-control-border" value="<?php echo $kotak['kelas'];?>" disabled>
                                                    </div>
                                                    <div class="form-group">
                                                      <label for="exampleInputBorder">Jenis Asal Tingkatan Sekolah</label>

                                                      <?php
                                                      $idt = $kotak['id_asal_tingkat_sekolah'];
                                                      $qedit = "SELECT * FROM lib_tingkat WHERE id_tingkat = '{$idt}'";
                                                      $red = mysqli_query($connection,$qedit);
                                                      $ed = mysqli_num_rows($red);
                                                      if ($ed > 0) {
                                                        $tkta = mysqli_fetch_assoc($red);
                                                        $tkto = $tkta['tingkat'];
                                                        ?>
                                                        <input type="text" class="form-control form-control-border" value="<?php echo $tkto ;?>" disabled>
                                                      <?php }?>
                                                    </div>
                                                    <div class="form-group">
                                                      <label for="exampleInputBorder">Nama Asal Sekolah</label>
                                                      <input type="text" class="form-control form-control-border" value="<?php echo $kotak['nama_asal_sekolah'];?>" disabled>
                                                    </div>
                                                    <div class="form-group">
                                                      <label for="exampleInputBorder">Alamat</label>
                                                      <input type="text" class="form-control form-control-border" rows="3" value="<?php echo $kotak['alamat'];?>" disabled>
                                                    </div>
                                                    <div class="form-group">
                                                      <label for="exampleInputBorder">Kota Asal</label>
                                                      <input type="text" class="form-control form-control-border" value="<?php echo $kotak['kota'];?>" disabled>
                                                    </div>
                                                    <div class="form-group">
                                                      <label for="exampleInputBorder">Status Ekonomi keluarga</label>
                                                      <input type="text" class="form-control form-control-border" value="<?php echo $kotak['status_ekonomi'];?>" disabled>
                                                    </div>
                                                    <div class="form-group">
                                                      <label for="exampleInputBorder">Tahun Angkatan</label>
                                                      <?php
                                                      $idt = $kotak['id_tajaran'];
                                                      $qedit = "SELECT * FROM lib_tajaran WHERE id_tajaran = '{$idt}'";
                                                      $red = mysqli_query($connection,$qedit);
                                                      $ed = mysqli_num_rows($red);
                                                      if ($ed > 0) {
                                                        $tkta = mysqli_fetch_assoc($red);
                                                        $angkatan = $tkta['tahun_ajaran'];
                                                        ?>
                                                        <input type="text" class="form-control form-control-border" value=" Tahun Angkatan <?php echo $angkatan ;?>" disabled>
                                                      <?php }?>
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
                                $rows = mysqli_query($connection, "SELECT COUNT(id) AS jumlah FROM siswa WHERE id_tingkat = '1' AND id_tajaran = '$id_sem'"); while($row = mysqli_fetch_array($rows)){ $pd = $row['jumlah']; ?>
                                <h3 class="card-title">Jumlah Data Seluruh : <b><?php echo $pd;}?> Siswa</b></h3>
                              </div>
                              <!-- /.card-header -->
                              <div class="card-body">
                                <div class="table-responsive">
                                  <table class="table table-bordered">
                                    <thead>
                                      <tr>
                                        <th >No</th>
                                        <th>Nama</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Kelas</th>
                                        <th >Action</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <?php 
                                      $no = 1;
                                      $kueri = "SELECT * FROM siswa WHERE id_tingkat = '1' AND id_tajaran = '$id_sem' ORDER BY kelas ASC";
                                      $temu = mysqli_query($connection,$kueri);
                                      $gana = mysqli_num_rows($temu);
                                      if ($gana > 0) { while($kotak = mysqli_fetch_assoc($temu)){
                                        ?>
                                        <tr>
                                          <td><?php echo $no++;?></td>
                                          <td><?php echo $kotak['nama_siswa']; ?></td>
                                          <td><?php echo $kotak['jenkel']; ?></td>
                                          <td><?php echo $kotak['kelas']; ?></td>
                                          <td>
                                            <a class="btn btn-xs btn-info" data-toggle="modal" data-target="#modal<?php echo $kotak['id']; ?>"><i class="fas fa-eye" ></i> Lihat</a>
                                          </td> 
                                        </tr>
                                        <div class="modal fade" id="modal<?php echo $kotak['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
                                          aria-hidden="true">
                                          <div class="modal-dialog">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <h4 class="modal-title">Info Lengkap Siswa</h4>
                                              </div>
                                              <div class="modal-body">
                                                <form>
                                                  <div class="card-body">
                                                    <div class="form-group">
                                                      <label for="exampleInputBorder">Nama Siswa</label>
                                                      <input type="text" class="form-control form-control-border" value="<?php echo $kotak['nama_siswa']; ?>" disabled>
                                                    </div>
                                                    <div class="form-group">
                                                      <label for="exampleInputBorder">Jenis Kelamin</label>
                                                      <input type="text" class="form-control form-control-border" value="<?php echo $kotak['jenkel']; ?>" disabled>
                                                    </div>
                                                    <div class="form-group">
                                                      <label for="exampleInputBorder">Tempat & Tanggal lahir</label>
                                                      <input type="text" class="form-control form-control-border" value="<?php echo $kotak['tmpt_lahir']; ?>, <?php echo tgl_indo($kotak['tgl_lahir']); ?>" disabled>
                                                    </div>
                                                    <div class="form-group">
                                                      <label for="exampleInputBorder">Nama Orang Tua</label>
                                                      <input type="text" class="form-control form-control-border" value="<?php echo $kotak['nama_ortu'];?>" disabled>
                                                    </div>
                                                    <div class="form-group">
                                                      <label for="exampleInputBorder">Tingkatan Sekolah</label>

                                                      <?php
                                                      $idt = $kotak['id_tingkat'];
                                                      $qedit = "SELECT * FROM lib_tingkat WHERE id_tingkat = '{$idt}'";
                                                      $red = mysqli_query($connection,$qedit);
                                                      $ed = mysqli_num_rows($red);
                                                      if ($ed > 0) {
                                                        $tkta = mysqli_fetch_assoc($red);
                                                        $tkto = $tkta['tingkat'];
                                                        ?>
                                                        <input type="text" class="form-control form-control-border" value="<?php echo $tkto ;?>" disabled>
                                                      <?php }?>
                                                    </div>
                                                    <div class="form-group">
                                                      <label for="exampleInputBorder">Kelas</label>
                                                      <input type="text" class="form-control form-control-border" value="<?php echo $kotak['kelas'];?>" disabled>
                                                    </div>
                                                    <div class="form-group">
                                                      <label for="exampleInputBorder">Jenis Asal Tingkatan Sekolah</label>
                                                      <?php
                                                      $idt = $kotak['id_asal_tingkat_sekolah'];
                                                      $qedit = "SELECT * FROM lib_tingkat WHERE id_tingkat = '{$idt}'";
                                                      $red = mysqli_query($connection,$qedit);
                                                      $ed = mysqli_num_rows($red);
                                                      if ($ed > 0) {
                                                        $tkta = mysqli_fetch_assoc($red);
                                                        $tkto = $tkta['tingkat'];
                                                        ?>
                                                        <input type="text" class="form-control form-control-border" value="<?php echo $tkto ;?>" disabled>
                                                      <?php }?>
                                                    </div>
                                                    <div class="form-group">
                                                      <label for="exampleInputBorder">Nama Asal Sekolah</label>
                                                      <input type="text" class="form-control form-control-border" value="<?php echo $kotak['nama_asal_sekolah'];?>" disabled>
                                                    </div>
                                                    <div class="form-group">
                                                      <label for="exampleInputBorder">Alamat</label>
                                                      <input type="text" class="form-control form-control-border" rows="3" value="<?php echo $kotak['alamat'];?>" disabled>
                                                    </div>
                                                    <div class="form-group">
                                                      <label for="exampleInputBorder">Kota Asal</label>
                                                      <input type="text" class="form-control form-control-border" value="<?php echo $kotak['kota'];?>" disabled>
                                                    </div>
                                                    <div class="form-group">
                                                      <label for="exampleInputBorder">Status Ekonomi keluarga</label>
                                                      <input type="text" class="form-control form-control-border" value="<?php echo $kotak['status_ekonomi'];?>" disabled>
                                                    </div>
                                                    <div class="form-group">
                                                      <label for="exampleInputBorder">Tahun Angkatan</label>
                                                      <?php
                                                      $idt = $kotak['id_tajaran'];
                                                      $qedit = "SELECT * FROM lib_tajaran WHERE id_tajaran = '{$idt}'";
                                                      $red = mysqli_query($connection,$qedit);
                                                      $ed = mysqli_num_rows($red);
                                                      if ($ed > 0) {
                                                        $tkta = mysqli_fetch_assoc($red);
                                                        $angkatan = $tkta['tahun_ajaran'];
                                                        ?>

                                                        <input type="text" class="form-control form-control-border" value=" Tahun Angkatan <?php echo $angkatan ;?>" disabled>
                                                      <?php }?>
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
<?php } ?>

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
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<!-- <h1 class="m-0">Master Data</h1> -->
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="index.php">Home</a></li>
					<li class="breadcrumb-item active">Grafik Data Sarana dan Prasarana</li>
				</ol>
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<section class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6">
				<div class="card">
					<div class="card-header border-0">
						<div class="d-flex justify-content-between">
							<h3 class="card-title">DATA SARANA YAMNI</h3>
						</div>
					</div>
					<hr>
					<div class="card-body">
						<figure class="highcharts-figure">
							<div id="saranachart"></div>
						</figure>
					</div>
				</div>
				<!-- /.card -->
				<div class="card">
					<div class="card-header">
						<?php
						$rows = mysqli_query($connection, "SELECT COUNT(id_sarana) AS jumlah FROM sarana"); while($row = mysqli_fetch_array($rows)){ $pd = $row['jumlah']; ?>
						<h3 class="card-title">Jumlah Data Sarana : <b><?php echo $pd;}?> Unit</b></h3>
					</div>
					<!-- /.card-header -->
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th style="width: 10px">No</th>
										<th>Nama Sarana</th>
										<th>Jenis Sarana</th>
										<th>Lokasi</th>
										<th style="width: 40px">Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php 
									$no = 1;
									$kueri = "SELECT id_sarana, lib_sarana.jenis_sarana, nama_sarana, keperluan, kondisi, lib_tingkat.tingkat, jumlah, foto, ket FROM sarana, lib_sarana, lib_tingkat WHERE lib_sarana.id_jenis_sarana = sarana.id_jenis_sarana AND lib_tingkat.id_tingkat = sarana.id_tingkat ORDER BY sarana.id_sarana ASC";
									$temu = mysqli_query($connection,$kueri);
									$gana = mysqli_num_rows($temu);
									if ($gana > 0) { while($kotak = mysqli_fetch_assoc($temu)){
										?>
										<tr>
											<td><?php echo $no;?></td>
											<td><?php echo $kotak['nama_sarana']; ?></td>
											<td><?php echo $kotak['jenis_sarana']; ?></td>
											<td><?php echo $kotak['tingkat']; ?></td>
											<td>
												<a class="btn btn-xs btn-info" data-toggle="modal" data-target="#modal<?php echo $kotak['id_sarana']; ?>"><i class="fas fa-eye" ></i> Lihat</a>
											</td> 
										</tr>
										<div class="modal fade" id="modal<?php echo $kotak['id_sarana']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
											aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h4 class="modal-title">Detail Sarana</h4>
														<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">&times;</span>
														</button>
													</div>
													<div class="modal-body">
														<form>
															<div class="card-body">
																<div class="form-group">
																	<label for="exampleInputBorder">Nama Sarana</label>
																	<input type="text" class="form-control form-control-border" value="<?php echo $kotak['nama_sarana']; ?>" disabled>
																</div>
																<div class="form-group">
																	<label for="exampleInputBorder">Jenis Sarana</label>
																	<input type="text" class="form-control form-control-border" value="<?php echo $kotak['jenis_sarana']; ?>" disabled>
																</div>
																<div class="form-group">
																	<label for="exampleInputBorder">Keperluan</label>
																	<input type="text" class="form-control form-control-border" value="<?php echo $kotak['keperluan']; ?>" disabled>
																</div>
																<div class="form-group">
																	<label for="exampleInputBorder">Lokasi</label>
																	<input type="text" class="form-control form-control-border" value="<?php echo $kotak['tingkat'];?>" disabled>
																</div>
																<div class="form-group">
																	<label for="exampleInputBorder">Jumlah</label>
																	<input class="form-control form-control-border" disabled value="<?php echo $kotak['jumlah'] ?>">
																</div>
																<div class="form-group">
																	<label for="exampleInputBorder">Kondisi</label>
																	<input class="form-control form-control-border" disabled value="<?php echo $kotak['kondisi'] ?>">
																</div>
																<div class="form-group">
																	<label for="exampleInputBorder">Foto Sarana</label><br>
																	<img class="img-fluid mb-2" src="dist/img/foto_sapras/<?php echo $kotak['foto']; ?>" width="200px"/>
																</div>
																<div class="form-group">
																	<label for="exampleInputBorder">Ket</label>
																	<textarea style="height:50px" class="form-control form-control-border" disabled><?php echo $kotak['ket'] ?></textarea>
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
			<div class="col-lg-6">
				<div class="card">
					<div class="card-header border-0">
						<div class="d-flex justify-content-between">
							<h3 class="card-title">DATA PRASARANA YAMNI</h3>
						</div>
					</div>
					<hr>
					<div class="card-body">
						<figure class="highcharts-figure">
							<div id="prasaranachart"></div>
						</figure>
					</div>
				</div>
				<!-- /.card -->
				<div class="card">
					<div class="card-header">
						<?php
						$rows = mysqli_query($connection, "SELECT COUNT(id_prasarana) AS jumlah FROM prasarana"); while($row = mysqli_fetch_array($rows)){ $pd = $row['jumlah']; ?>
						<h3 class="card-title">Jumlah Data Prasarana : <b><?php echo $pd;}?> Unit</b></h3>
					</div>
					<!-- /.card-header -->
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th style="width: 10px">No</th>
										<th>Nama Prasarana</th>
										<th>Jenis Prasarana</th>
										<th>Lokasi</th>
										<th style="width: 40px">Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php 
									$no = 1;
									$kueri = "SELECT id_prasarana, nama_prasarana, prasarana.id_jenis_prasarana, lib_prasarana.jenis_prasarana, lebar, panjang, luas, lib_tingkat.tingkat, foto, ket FROM prasarana, lib_prasarana, lib_tingkat WHERE lib_prasarana.id_jenis_prasarana = prasarana.id_jenis_prasarana AND lib_tingkat.id_tingkat = prasarana.id_tingkat ORDER BY prasarana.id_prasarana ASC";
									$temu = mysqli_query($connection,$kueri);
									$gana = mysqli_num_rows($temu);
									if ($gana > 0) { while($kotak = mysqli_fetch_assoc($temu)){
										?>
										<tr>
											<td><?php echo $no;?></td>
											<td><?php echo $kotak['nama_prasarana']; ?></td>
											<td><?php echo $kotak['jenis_prasarana']; ?></td>
											<td><?php echo $kotak['tingkat']; ?></td>
											<td>
												<a class="btn btn-xs btn-info" data-toggle="modal" data-target="#modal_prasarana_<?php echo $kotak['id_prasarana']; ?>"><i class="fas fa-eye" ></i> Lihat</a>
											</td> 
										</tr>
										<div class="modal fade" id="modal_prasarana_<?php echo $kotak['id_prasarana']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
											aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h4 class="modal-title">Detail Prasarana</h4>
														<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">&times;</span>
														</button>
													</div>
													<div class="modal-body">
														<form>
															<div class="card-body">
																<div class="form-group">
																	<label for="exampleInputBorder">Nama Sarana</label>
																	<input type="text" class="form-control form-control-border" value="<?php echo $kotak['nama_prasarana']; ?>" disabled>
																</div>
																<div class="form-group">
																	<label for="exampleInputBorder">jenis prasarana</label>
																	<input type="text" class="form-control form-control-border" value="<?php echo $kotak['jenis_prasarana']; ?>" disabled>
																</div>
																<div class="form-group">
																	<label for="exampleInputBorder">Luas (M²)</label>
																	<input type="text" class="form-control form-control-border" value="<?php echo $kotak['luas']; ?>" disabled>
																</div>
																<div class="form-group">
																	<label for="exampleInputBorder">Lokasi</label>
																	<input type="text" class="form-control form-control-border" value="<?php echo $kotak['tingkat'];?>" disabled>
																</div>
																<div class="form-group">
																	<label for="exampleInputBorder">Foto Sarana</label><br>
																	<img class="img-fluid mb-2" src="dist/img/foto_sapras/<?php echo $kotak['foto']; ?>" width="200px"/>
																</div>
																<div class="form-group">
																	<label for="exampleInputBorder">Ket</label>
																	<textarea style="height:50px" class="form-control form-control-border" disabled><?php echo $kotak['ket'] ?></textarea>
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
			<!-- /.col -->
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container-fluid -->
</section>
<!-- /.content -->
<?php } ?>

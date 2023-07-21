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

<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0">Master Data</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="index.php">Home</a></li>
					<li class="breadcrumb-item active">Data Sarana</li>
				</ol>
			</div>
		</div>
	</div>
</div>

<!-- Main content -->
<section class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<div class="col-md-2">
							<a data-toggle="modal" data-target="#modal-tambah" type="button" class="btn btn-block btn-outline-primary">Tambah Data</a>
						</div>
						<div class="modal fade" id="modal-tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<h4 class="modal-title">Tambah Sarana</h4>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
										</button>
									</div>

									<form method="POST" class="form-horizontal" action="index.php?page=sarana&act=proses&data=tambah" id="form1" name="tambah" enctype="multipart/form-data">
										<div class="modal-body">
											<div class="card-body">
												<div class="form-group">
													<label for="helperText">Jenis Sarana<span class="text-danger">&nbsp;*</span></label>
													<div class="input-group">
														<select class="form-control form-control-border" name="jenis_sarana" tabindex="-1">
															<option disabled selected> Pilih </option>
															<?php
															$qjen = $db->get_results("SELECT * FROM lib_sarana ORDER BY id_jenis_sarana ASC");
															foreach($qjen as $jenis_s):?>
																<option value="<?php echo $jenis_s->id_jenis_sarana;?>"><?php echo $jenis_s->jenis_sarana;?></option>
															<?php endforeach;?>
														</select>
													</div>
													<p><small class="text-muted"><i>Masukkan jenis sarana yang akan ditambahkan.</i></small></p>
												</div>
												<div class="form-group">
													<label for="helperText">Nama Sarana<span class="text-danger">&nbsp;*</span></label>
													<input type="text" class="form-control form-control-border" name="sarana">
													<p><small class="text-muted"><i>Masukkan nama sarana yang akan ditambahkan.</i></small></p>
												</div>
												<div class="form-group">
													<label for="helperText">Keperluan<span class="text-danger">&nbsp;*</span></label>
													<input type="text" class="form-control form-control-border" name="keperluan">
													<p><small class="text-muted"><i>Masukkan keperluan sarana yang akan ditambahkan.</i></small></p>
												</div>
												<div class="form-group">
													<label for="helperText">Lokasi<span class="text-danger">&nbsp;*</span></label>
													<div class="input-group">
														<select class="form-control form-control-border" name="lokasi" tabindex="-1">
															<option disabled selected> Pilih </option>
															<?php
															$qting = $db->get_results("SELECT * FROM lib_tingkat ORDER BY id_tingkat ASC");
															foreach($qting as $lokasi):?>
																<option value="<?php echo $lokasi->id_tingkat;?>"><?php echo $lokasi->tingkat;?></option>
															<?php endforeach;?>
														</select>
													</div>
													<p><small class="text-muted"><i>Masukkan lokasi sarana yang akan ditambahkan.</i></small></p>
												</div>
												<div class="form-group">
													<label for="helperText">Jumlah<span class="text-danger">&nbsp;*</span></label>
													<input type="number" class="form-control form-control-border"  name="jumlah">
													<p><small class="text-muted"><i>Masukkan jumlah sarana yang akan ditambahkan.</i></small></p>
												</div>
												<div class="form-group">
													<label for="helperText">Kondisi<span class="text-danger">&nbsp;*</span></label>
													<select class="form-control form-control-border" name="kondisi" tabindex="-1">
														<option value="Baik">Baik</option>
														<option value="Kurang Baik">Kurang Baik</option>
													</select>
													<p><small class="text-muted"><i>Masukkan kondisi sarana yang akan ditambahkan.</i></small></p>
												</div>
												<div class="form-group">
													<label for="helperText">Foto Sarana<span class="text-danger">&nbsp;*</span></label>
													<input type="file" class="form-control form-control-border" name="foto" required>
													<p><small class="text-muted"><i>Masukkan foto sarana yang akan ditambahkan dengan format jpeg/jpg.</i></small></p>
												</div>
												<div class="form-group">
													<label for="helperText">Keterangan<span class="text-danger">&nbsp;*</span></label>
													<textarea style="height:50px" class="form-control form-control-border" name="ket"></textarea>
													<p><small class="text-muted"><i>Masukkan keterangan sarana yang akan ditambahkan.</i></small></p>
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
					<div class="card-body">
						<div class="table-responsive">
							<table id="example1" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th style="width:5%">No</th>
										<th>Nama Sarana</th>
										<th>Jenis Sarana</th>
										<th>Lokasi</th>
										<th>Jumlah</th>
										<th style="width:15%;">Aksi</th>
									</tr>
								</thead>
								<tbody>
									<!-- Query Sarana -->
									<?php 
			                        $no = 1;
			                        $query = "SELECT id_sarana, sarana.nama_sarana, sarana.id_jenis_sarana, lib_sarana.jenis_sarana, keperluan, lib_tingkat.tingkat, jumlah, kondisi, foto, ket FROM sarana, lib_sarana, lib_tingkat WHERE lib_sarana.id_jenis_sarana = sarana.id_jenis_sarana AND lib_tingkat.id_tingkat = sarana.id_tingkat";
			                        $result = mysqli_query($connection,$query);
			                        $data = mysqli_num_rows($result);
			                        if ($data > 0) { while($row = mysqli_fetch_assoc($result)){

			                        ?>
			                        <tr>
			                        	<td><?php echo $no;?></td>
			                        	<td><?php echo $row['nama_sarana']; ?></td>
			                        	<td><?php echo $row['jenis_sarana']; ?></td>
			                        	<td><?php echo $row['tingkat']; ?></td>
			                        	<td><?php echo $row['jumlah']; ?></td>
			                        	<td>
			                        		<a class="btn btn-xs btn-info" data-toggle="modal" data-target="#modal-detail-<?php echo $row['id_sarana']; ?>" title="Detail data">
			                        			<i class="fas fa-eye" ></i></a>
			                        		<a class="btn btn-xs bg-warning" href="index.php?page=sarana&act=edit&id=<?php echo $row['id_sarana'];?>" title="Edit data">
			                        			<i class="fas fa-edit" ></i></a>
			                        		<a class="btn btn-xs bg-danger" href="#" onClick="confirm_modal('index.php?page=sarana&act=proses&data=hapus&id=<?php echo $row['id_sarana']; ?>');"><i class='fas fa-trash' title="Hapus data" ></i></i></a>
			                        	</td> 
									</tr>

									<!-- Modal Popup untuk delete-->
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
													<p>Apa anda akan menghapus data sarana ini ?</p>
												</div>

												<div class="modal-footer justify-content-between">
													<button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Cancel</button>
													<a href="#" class="btn btn-danger btn-sm" id="delete_link">Hapus</a>
												</div>
											</div>
										</div>
									</div>
									<!-- Modal Popup untuk detail-->
									<div class="modal fade" id="modal-detail-<?php echo $row['id_sarana']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
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
																<input type="text" class="form-control form-control-border" value="<?php echo $row['nama_sarana']; ?>" disabled>
															</div>
															<div class="form-group">
																<label for="exampleInputBorder">Jenis Sarana</label>
																<input type="text" class="form-control form-control-border" value="<?php echo $row['jenis_sarana']; ?>" disabled>
															</div>
															<div class="form-group">
																<label for="exampleInputBorder">Keperluan</label>
																<input type="text" class="form-control form-control-border" value="<?php echo $row['keperluan']; ?>" disabled>
															</div>
															<div class="form-group">
																<label for="exampleInputBorder">Lokasi</label>
																<input type="text" class="form-control form-control-border" value="<?php echo $row['tingkat'];?>" disabled>
															</div>
															<div class="form-group">
																<label for="exampleInputBorder">Jumlah</label>
																<input class="form-control form-control-border" disabled value="<?php echo $row['jumlah'] ?>">
															</div>
															<div class="form-group">
																<label for="exampleInputBorder">Kondisi</label>
																<input class="form-control form-control-border" disabled value="<?php echo $row['kondisi'] ?>">
															</div>
															<div class="form-group">
																<label for="exampleInputBorder">Foto Sarana</label><br>
																<img class="img-fluid mb-2" src="dist/img/foto_sapras/<?php echo $row['foto']; ?>" width="200px"/>
															</div>
															<div class="form-group">
																<label for="exampleInputBorder">Ket</label>
																<textarea style="height:50px" class="form-control form-control-border" disabled><?php echo $row['ket'] ?></textarea>
															</div>
														</div>
													</form>
												</div>
												<div class="modal-footer justify-content-between">
													<a class="btn btn-default bg-warning" href="index.php?page=sarana&act=edit&id=<?php echo $row['id_sarana']; ?>" title="Edit Data Guru">
														<i class="fas fa-edit" ></i> Edit</a>
													<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
												</div>
											</div>
										</div>
						            </div> 
									<?php $no++; } } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php } }?>

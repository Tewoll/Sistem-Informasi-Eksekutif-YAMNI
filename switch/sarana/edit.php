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

	$sid 			= isset($_GET['id']) ? $_GET['id'] : '';
	$cid 			= inject_checker($connection,$sid);
	$qedit 			= "SELECT * FROM sarana WHERE id_sarana = '{$cid}'";
	$red 			= mysqli_query($connection,$qedit);
	$ed 			= mysqli_num_rows($red);
	if ($ed > 0) {
		$e 			= mysqli_fetch_assoc($red);
		$idu 		= $e['id_sarana'];
		$idt 		= $e['id_tingkat'];
		$idjs 		= $e['id_jenis_sarana'];
		$kondisi 	= $e['kondisi'];
		$foto_lama 	= $e['foto'];
		
		/* query alamat */

	?>

	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Edit Data Sarana</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="index.php?page=index.php">Home</a></li>
						<li class="breadcrumb-item"><a href="index.php?page=sarana">Data Sarana</a></li>
						<li class="breadcrumb-item active">Edit Sarana</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->
	<br>

	<form method="POST" class="form-horizontal" action="index.php?page=sarana&act=proses&data=ubah" id="form1" method="post" name="ubah" enctype="multipart/form-data">
		<input type="hidden" class="form-control" name="id_sarana" value="<?php echo $idu; ?>" required>
		<input type="hidden" class="form-control" name="foto_lama" value="<?php echo $foto_lama; ?>">
		<section class="content">
			<div class="container-fluid">
				<div class="col-12">
					<div class="row">

						<div class="col-xl-9 col-lg-12">
							<!-- Data Pribadi -->
							<div class="card mb-4">
								<div class="card-header py-12">
									<h6 class="m-0 font-weight-bold text-primary">Isi Form</h6>
								</div>
								<div class="card-body">                 
									<div class="form-group">
										<label for="helperText">Jenis Sarana<span class="text-danger">&nbsp;*</span></label>
										<div class="input-group">
											<select class="form-control form-control-border" name="jenis_sarana" tabindex="-1">
												<option disabled selected> Pilih </option>
												<?php 
												$qs = mysqli_query($connection,"SELECT * from lib_sarana");
												$sar = mysqli_num_rows($qs);
												if($sar > 0){  while($s = mysqli_fetch_assoc($qs)){ 

													if($idjs == $s['id_jenis_sarana']){ ?>
														<option value="<?php echo $s['id_jenis_sarana']; ?>" selected><?php echo $s['jenis_sarana']; ?> </option>
													<?php }else{ ?>
														<option value="<?php echo $s['id_jenis_sarana']; ?>"><?php echo $s['jenis_sarana']; ?> </option>
													<?php } } 
												} ?>
											</select>
										</div>
										<p><small class="text-muted"><i>Masukkan jenis sarana yang akan ditambahkan.</i></small></p>
									</div>
									<div class="form-group">
										<label for="helperText">Nama Sarana<span class="text-danger">&nbsp;*</span></label>
										<input type="text" class="form-control form-control-border" name="sarana" value="<?php echo $e['nama_sarana']; ?>">
										<p><small class="text-muted"><i>Masukkan nama sarana yang akan ditambahkan.</i></small></p>
									</div>
									<div class="form-group">
										<label for="helperText">Keperluan<span class="text-danger">&nbsp;*</span></label>
										<input type="text" class="form-control form-control-border" name="keperluan" value="<?php echo $e['keperluan']; ?>">
										<p><small class="text-muted"><i>Masukkan keperluan sarana yang akan ditambahkan.</i></small></p>
									</div>
									<div class="form-group">
										<label for="helperText">Lokasi<span class="text-danger">&nbsp;*</span></label>
										<div class="input-group">
											<select class="form-control form-control-border" name="lokasi" tabindex="-1">
												<option disabled selected> Pilih </option>
												<?php 
												$qtk = mysqli_query($connection,"SELECT * from lib_tingkat");
												$ptk = mysqli_num_rows($qtk);
												if($ptk > 0){  while($tkt = mysqli_fetch_assoc($qtk)){ 

													if($idt == $tkt['id_tingkat']){ ?>
														<option value="<?php echo $tkt['id_tingkat']; ?>" selected><?php echo $tkt['tingkat']; ?> </option>
													<?php }else{ ?>
														<option value="<?php echo $tkt['id_tingkat']; ?>"><?php echo $tkt['tingkat']; ?> </option>
													<?php } } 
												} ?>
											</select>
										</div>
										<p><small class="text-muted"><i>Masukkan lokasi sarana yang akan ditambahkan.</i></small></p>
									</div>
									<div class="form-group">
										<label for="helperText">Jumlah<span class="text-danger">&nbsp;*</span></label>
										<input type="number" class="form-control form-control-border"  name="jumlah" value="<?php echo $e['jumlah']; ?>">
										<p><small class="text-muted"><i>Masukkan jumlah sarana yang akan ditambahkan.</i></small></p>
									</div>
									<div class="form-group">
										<label for="helperText">Kondisi<span class="text-danger">&nbsp;*</span></label>
										<select class="form-control form-control-border" name="kondisi" tabindex="-1">
								
										<?php
										if ($e['kondisi'] =='Baik'){
											echo "<option value='Baik' selected>Baik</option>
											<option value='Kurang Baik'>Kurang Baik</option>";
										}elseif ($e['kondisi'] =='Kurang Baik'){
											echo "<option value='Baik'>Baik</option>
											<option value='Kurang Baik' selected>Kurang Baik</option>";
										}else{
											echo "<option value='0' selected disabled>Pilih</option>
											<option value='Baik'>Baik</option>
											<option value='Kurang Baik'>Kurang Baik</option>";
										}
										echo "</select>";?>
										<p><small class="text-muted"><i>Masukkan kondisi sarana yang akan ditambahkan.</i></small></p>
									</div>
									<div class="form-group">
										<label for="helperText">Foto<span class="text-danger">&nbsp;*</span></label>
										<input type="file" class="form-control" name="foto">
										<br>
										<img class="img-fluid mb-2" src="dist/img/foto_sapras/<?php echo $foto_lama; ?>" width="200px"/>
										<p><small class="text-muted"><i>Masukkan foto sarana yang akan diedit dengan format jpeg/jpg. Jika tidak diedit abaikan saja.</i></small></p>
									</div>
									<div class="form-group">
										<label for="helperText">Keterangan<span class="text-danger">&nbsp;*</span></label>
										<textarea style="height:50px" class="form-control form-control-border" name="ket"><?php echo $e['ket']; ?></textarea>
										<p><small class="text-muted"><i>Masukkan keterangan sarana yang akan ditambahkan.</i></small></p>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-3 col-lg-12 fixed">
							<div class="card mb-3">
								<div class="card-header py-12">
									<h2 class="h6 m-0 font-weight-bold text-primary">Pengaturan</h2>
								</div>
								<div class="card-body">
									<div class="form-group">                        
										<a class="btn btn-danger btn-submit" data-toggle="modal" data-target="#modal-kembali">Kembali</a>
										<a class="btn btn-primary btn-submit float-md-right" data-toggle="modal" data-target="#modal-simpan"> Simpan</a>
									</div>
								</div>
							</div>
							<div class="modal fade" id="modal-simpan">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<h4 class="modal-title">Konfirmasi simpan data</h4>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<p>Apa anda akan menyimpan perubahan data sarana ini?</p>
										</div>
										<div class="modal-footer justify-content-between">
											<button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Batal</button>
											<input type="submit" class="btn btn-primary btn-sm float-md-right" name="simpan" value="Simpan">
										</div>
									</div>
									<!-- /.modal-content -->
								</div>
								<!-- /.modal-dialog -->
							</div>
							<!-- /.modal -->
							<div class="modal fade" id="modal-kembali">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<h4 class="modal-title">Konfirmasi simpan data</h4>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<p>Apa anda tidak akan menyimpan perubahan data sarana ini ?</p>
										</div>
										<div class="modal-footer justify-content-between">
											<button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Batal</button>
											<a href="index.php?page=sarana" class="btn btn-primary btn-sm float-md-right">Ya, Jangan simpan</a>
										</div>
									</div>
									<!-- /.modal-content -->
								</div>
								<!-- /.modal-dialog -->
							</div>
							<!-- /.modal -->
						</div>
					</div>
				</div>
			</div>
		</section>
	</form> 
<?php }else{ echo '<meta http-equiv="refresh" content="0;url=index.php?page=sarana">'; } ?>
<?php } }?>
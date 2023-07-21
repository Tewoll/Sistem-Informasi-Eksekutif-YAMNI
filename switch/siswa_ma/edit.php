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

	$sid = isset($_GET['id']) ? $_GET['id'] : '';
	$cid = inject_checker($connection,$sid);
	$qedit = "SELECT * FROM siswa WHERE id = '{$cid}'";
	$red = mysqli_query($connection,$qedit);
	$ed = mysqli_num_rows($red);
	if ($ed > 0) {
		$e = mysqli_fetch_assoc($red);
		$idu = $e['id'];
		$idt = $e['id_tingkat'];
		$ida = $e['id_tajaran'];
		/* query alamat */

	?>

	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Edit Data Siswa</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="index.php?page=index.php">Home</a></li>
						<li class="breadcrumb-item"><a href="index.php?page=siswa_ma">Data Siswa MA</a></li>
						<li class="breadcrumb-item active">Edit Data Siswa MA</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->
	<br>

	<form method="POST" class="form-horizontal" action="index.php?page=siswa_ma&act=proses&data=ubah" id="form1" method="post" name="ubah">
		<input type="hidden" class="form-control" name="id_siswa" value="<?php echo $idu; ?>" required>
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
										<label for="helperText">Nama Siswa<span class="text-danger">&nbsp;*</span></label>
										<input type="text" id="helperText" class="form-control" name="nama_siswa" value="<?php echo $e['nama_siswa']; ?>" required > 
										<p><small class="text-muted"><i>Masukkan nama Siswa yang akan ditambahkan.</i></small></p>
									</div>
									<div class="form-group">
										<label for="helperText">Jenis Kelamin<span class="text-danger">&nbsp;*</span></label>
										<div class="input-group">
											<div class="input-group-prepend">
												<span class="input-group-text"><i class="fas fa-venus-mars"></i></span>
											</div>
											<select name="jenkel" class="form-control select2bs4 select2-hidden-accessible" tabindex="-1">
												<?php
												if ($e['jenkel']=="Laki-Laki"){
													echo "<option value='Laki-Laki' size='20' selected>Laki-Laki</option>
													<option value='Perempuan'>Perempuan</option>";
												}else{
													echo "<option value='Laki-Laki' size='20' >Laki-Laki</option>
													<option value='Perempuan' selected>Perempuan</option>";
												}
											echo "</select>";?>
										</div>
										<p><small class="text-muted"><i>Masukkan jenis kelamin siswa yang akan ditambahkan.</i></small></p>
									</div>
									<div class="form-group">
										<label for="helperText">Tempat lahir<span class="text-danger">&nbsp;*</span></label>
										<input type="text" id="helperText" class="form-control" name="tmpt_lahir" value="<?php echo $e['tmpt_lahir']; ?>" required > 
										<p><small class="text-muted"><i>Masukkan tempat lahir siswa yang akan ditambahkan.</i></small></p>
									</div>
									<div class="form-group">
										<label>Tanggal Lahir<span class="text-danger">&nbsp;*</span></label>
	                                	<div class="input-group date" id="reservationdate" data-target-input="nearest">
	                                		<span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
	                                		<input type="text" name="tgl_lahir" class="form-control datetimepicker-input" data-target="#reservationdate" data-toggle="datetimepicker" value="<?php echo date('d-m-Y', strtotime($e['tgl_lahir'])); ?>" required>
	                                	</div>
										<p><small class="text-muted"><i>Masukkan tanggal lahir siswa yang akan diedit dengan format Tanggal - Bulan - Tahun.</i></small></p>
									</div>
									<div class="form-group">
										<label for="helperText">Nama Orang Tua<span class="text-danger">&nbsp;*</span></label>
										<input type="text" id="helperText" class="form-control" name="nama_ortu" value="<?php echo $e['nama_ortu']; ?>" required > 

										<p><small class="text-muted"><i>Masukkan nama orang tua siswa yang akan ditambahkan.</i></small></p>
									</div>
									<div class="form-group">
										<label for="helperText">Tingkatan Sekolah<span class="text-danger">&nbsp;*</span></label>
										<select name="tingkat" class="form-control select2bs4 select2-hidden-accessible" tabindex="-1">
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
										<p><small class="text-muted"><i>Tingkatan sekolah siswa yang akan ditambahkan.</i></small></p>
									</div>
									<div class="form-group">
										<label for="helperText">Kelas<span class="text-danger">&nbsp;*</span></label>
										<select class="form-control select2bs4 select2-hidden-accessible" name="kelas" tabindex="-1">
										<?php
											if ($e['kelas']=='X'){
												echo " <option value='0' disabled>Pilih</option>
												<option value='X' selected>Sepuluh (X)</option>
												<option value='XI'>Sebelas (XI)</option>
												<option value='XII'>Dua belas (XII)</option>";
											}elseif ($e['kelas']=='XI'){
												echo " <option value='0' disabled>Pilih</option>
												<option value='X'>Sepuluh (X)</option>
												<option value='XI' selected>Sebelas (XI)</option>
												<option value='XII'>Dua belas (XII)</option>";
											}elseif ($e['kelas']=='XII'){
												echo " <option value='0' disabled>Pilih</option>
												<option value='X'>Sepuluh (X)</option>
												<option value='XI'>Sebelas (XI)</option>
												<option value='XII' selected>Dua belas (XII)</option>";
											}else{
												echo "<option value='0' disabled selected>Pilih</option>
												<option value='X'>Sepuluh (X)</option>
												<option value='XI'>Sebelas (XI)</option>
												<option value='XII'>Dua belas (XII)</option>";
											}
											echo "</select>";?>
										<p><small class="text-muted"><i>Masukkan kelas siswa yang akan ditambahkan.</i></small></p>
									</div>
									<div class="form-group">
										<label for="helperText">Asal Jenis Tingkat Sekolah<span class="text-danger">&nbsp;*</span></label>
										<select class="form-control select2bs4 select2-hidden-accessible" name="asal_tingkat" tabindex="-1">
										<?php
											if ($e['id_asal_tingkat_sekolah']=='2'){
												echo " <option disabled>--Pilih--</option>
												<option value='2' selected>Madrasah Tsanawiyah (MTs)</option>
												<option value='7' >Sekolah Menengah Pertama (SMP)</option>";
											}elseif ($e['id_asal_tingkat_sekolah']=='7'){
												echo " <option value='0' disabled>--Pilih--</option>
												<option value='2' >Madrasah Tsanawiyah (MTs)</option>
												<option value='7' selected>Sekolah Menengah Pertama (SMP)</option>";
											}
											echo "</select>";?>
										<p><small class="text-muted"><i>Pilih jenis tingkatan sekolah siswa yang akan ditambahkan.</i></small></p>
									</div>
									<div class="form-group">
										<label for="helperText">Nama Asal Sekolah<span class="text-danger">&nbsp;*</span></label>
										<input type="text" id="helperText" class="form-control" name="asal_sekolah" value="<?php echo $e['nama_asal_sekolah']; ?>" required > 

										<p><small class="text-muted"><i>Masukkan asal sekolah siswa yang akan ditambahkan.</i></small></p>
									</div>
									<div class="form-group">
										<label for="helperText">Alamat<span class="text-danger">&nbsp;*</span></label>
										<textarea style="height:100px" class="form-control" name="alamat"><?php echo $e['alamat'] ?></textarea>

										<p><small class="text-muted"><i>Masukkan alamat siswa yang akan ditambahkan.</i></small></p>
									</div>
									<div class="form-group">
										<label for="helperText">Kota / Kabupaten<span class="text-danger">&nbsp;*</span></label>
										<input type="text" id="helperText" class="form-control" name="kota" value="<?php echo $e['kota']; ?>" required > 

										<p><small class="text-muted"><i>Masukkan kota/kab asal siswa yang akan ditambahkan.</i></small></p>
									</div>
									<div class="form-group">
										<label for="helperText">Status Ekonomi Keluarga<span class="text-danger">&nbsp;*</span></label>
										<select class="form-control select2bs4 select2-hidden-accessible" name="status_ekonomi" tabindex="-1">
										<?php
											if ($e['status_ekonomi']=='Mampu'){
												echo " <option value='0' disabled>--Pilih--</option>
												<option value='Mampu' selected>Mampu</option>
												<option value='Kurang Mampu'>Kurang Mampu</option>";
											}elseif ($e['status_ekonomi']=='Kurang Mampu'){
												echo " <option value='0' disabled>--Pilih--</option>
												<option value='Mampu' >Mampu</option>
												<option value='Kurang Mampu' selected>Kurang Mampu</option>";
											}
											echo "</select>";?>
										<p><small class="text-muted"><i>Pilih statius ekonomi keluarga siswa yang akan ditambahkan.</i></small></p>
									</div>
									<div class="form-group">
										<label for="helperText">Tahun Angkatan<span class="text-danger">&nbsp;*</span></label>
										<select name="angkatan" class="form-control select2bs4 select2-hidden-accessible" tabindex="-1">
											<?php 
	                                		$qtk = mysqli_query($connection,"SELECT * from lib_tajaran ORDER BY tahun_ajaran ASC");
	                                		$ptk = mysqli_num_rows($qtk);
	                                		if($ptk > 0){  while($tkt = mysqli_fetch_assoc($qtk)){ 

	                                			if($ida == $tkt['id_tajaran']){ ?>
	                                				<option value="<?php echo $tkt['id_tajaran']; ?>" selected><?php echo $tkt['tahun_ajaran']; ?> </option>
	                                			<?php }else{ ?>
	                                				<option value="<?php echo $tkt['id_tajaran']; ?>"><?php echo $tkt['tahun_ajaran']; ?> </option>
	                                			<?php } } 
	                                		} ?>
	                                    </select>
										<p><small class="text-muted"><i>Pilih tahun angkatan siswa yang akan diedit.</i></small></p>
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
											<p>Apa anda akan menyimpan perubahan data siswa ?</p>
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
											<p>Apa anda tidak akan menyimpan perubahan data ?</p>
										</div>
										<div class="modal-footer justify-content-between">
											<button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Batal</button>
											<a href="index.php?page=siswa_ma" class="btn btn-primary btn-sm float-md-right">Ya, Jangan simpan</a>
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
<?php }else{ echo '<meta http-equiv="refresh" content="0;url=index.php?page=siswa_ma">'; } ?>
<?php } } ?>
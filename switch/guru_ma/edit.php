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
	$qedit = "SELECT * FROM guru WHERE id = '{$cid}'";
	$red = mysqli_query($connection,$qedit);
	$ed = mysqli_num_rows($red);
	if ($ed > 0) {
		$e = mysqli_fetch_assoc($red);
		$idu = $e['id'];
		$idp = $e['id_pendidikan'];
		$idj = $e['id_jabatan']; 
		$idt = $e['id_tingkat'];
		$pns = $e['pns_nonpns'];
		$foto_lama = $e['foto'];
		
		/* query alamat */

	?>

	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Edit Data Guru</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="index.php?page=index.php">Home</a></li>
						<li class="breadcrumb-item"><a href="index.php?page=guru_ma">Data Guru MA</a></li>
						<li class="breadcrumb-item active">Edit Data Guru MA</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->
	<br>

	<form method="POST" class="form-horizontal" action="index.php?page=guru_ma&act=proses&data=ubah" id="form1" method="post" name="ubah" enctype="multipart/form-data">
		<input type="hidden" class="form-control" name="id_guru" value="<?php echo $idu; ?>" required>
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
										<label for="helperText">Nama Guru<span class="text-danger">&nbsp;*</span></label>
										<input type="text" id="helperText" class="form-control" name="nama" value="<?php echo $e['nama_guru']; ?>" required > 
										<p><small class="text-muted"><i>Masukkan nama guru yang akan diedit.</i></small></p>
									</div>
									<div class="form-group">
										<label for="helperText">Jenis Kelamin<span class="text-danger">&nbsp;*</span></label>
										<div class="input-group">
											<div class="input-group-prepend">
												<span class="input-group-text"><i class="fas fa-venus-mars"></i></span>
											</div>
											<select name="jenkel" class="form-control select2bs4 select2-hidden-accessible" tabindex="-1">
												<?php
												if ($e['jenkel_guru']=="Laki-Laki"){
													echo "<option value='Laki-Laki' size='20' selected>Laki-Laki</option>
													<option value='Perempuan'>Perempuan</option>";
												}else{
													echo "<option value='Laki-Laki'  size='20' >Laki-Laki</option>
													<option value='Perempuan' selected>Perempuan</option>";
												}
												echo "</select>";?>
											</div>
										<p><small class="text-muted"><i>Masukkan jenis kelamin guru yang akan diedit.</i></small></p>
									</div>
									<div class="form-group">
										<label for="helperText">Pendidikan Terakhir<span class="text-danger">&nbsp;*</span></label>
	                                	<div class="input-group">
	                                		<select class="form-control select2bs4" name="pendidikan" tabindex="-1">
	                                		<?php 
	                                		$qpen = mysqli_query($connection,"SELECT * from lib_pendidikan_terakhir");
	                                		$pen = mysqli_num_rows($qpen);
	                                		if($pen > 0){  while($pd = mysqli_fetch_assoc($qpen)){ 

	                                			if($idp == $pd['id_pendidikan']){ ?>
	                                				<option value="<?php echo $pd['id_pendidikan']; ?>" selected><?php echo $pd['pendidikan']; ?> </option>
	                                			<?php }else{ ?>
	                                				<option value="<?php echo $pd['id_pendidikan']; ?>"><?php echo $pd['pendidikan']; ?> </option>
	                                			<?php } } 
	                                		} ?>
	                                    	</select>
	                                    </div>
	                                    <p><small class="text-muted"><i>Masukkan pendidikan terakhir guru yang akan diedit.</i></small></p>
	                                </div>
									<div class="form-group">
										<label for="helperText">Tempat lahir<span class="text-danger">&nbsp;*</span></label>
										<input type="text" id="helperText" class="form-control" name="tmpt_lahir" value="<?php echo $e['tmpt_lahir']; ?>" required > 
										<p><small class="text-muted"><i>Masukkan tempat lahir guru yang akan diedit.</i></small></p>
									</div>
									<div class="form-group">
										<label>Tanggal Lahir<span class="text-danger">&nbsp;*</span></label>
	                                	<div class="input-group date" id="reservationdate" data-target-input="nearest">
	                                		<span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
	                                		<input type="text" name="tgl_lahir" class="form-control datetimepicker-input" data-target="#reservationdate" data-toggle="datetimepicker" value="<?php echo date('d-m-Y', strtotime($e['tgl_lahir'])); ?>" required>
	                                	</div>
										<p><small class="text-muted"><i>Masukkan tanggal lahir guru yang akan diedit dengan format Tanggal - Bulan - Tahun.</i></small></p>
									</div>
									<div class="form-group">
										<label for="helperText">Jabatan<span class="text-danger">&nbsp;*</span></label>
										<select class="form-control select2bs4" name="jabatan" tabindex="-1">
	                                		<?php 
	                                		$qjp = mysqli_query($connection,"SELECT * from lib_jabatan");
	                                		$penj = mysqli_num_rows($qjp);
	                                		if($penj > 0){  while($pj = mysqli_fetch_assoc($qjp)){ 

	                                			if($idj == $pj['id_jabatan']){ ?>
	                                				<option value="<?php echo $pj['id_jabatan']; ?>" selected><?php echo $pj['jabatan']; ?> </option>
	                                			<?php }else{ ?>
	                                				<option value="<?php echo $pj['id_jabatan']; ?>"><?php echo $pj['jabatan']; ?> </option>
	                                			<?php } } 
	                                		} ?>
	                                    	</select>

										<p><small class="text-muted"><i>Masukkan jabatan guru yang akan diedit.</i></small></p>
									</div>
									<div class="form-group">
										<label>Mulai Bekerja<span class="text-danger">&nbsp;*</span></label>
										<div class="input-group date" id="reservationdatetahun" data-target-input="nearest">
											<span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
											<input type="text" name="mulai" class="form-control datetimepicker-input" data-target="#reservationdatetahun" data-target="#reservationdatetahun" data-toggle="datetimepicker" value="<?php echo $e['tgl_mulai']; ?>" required>
										</div>
										<p><small class="text-muted"><i>Masukkan tahun mulai bekerja guru yang akan ditambahkan</i></small></p>
									</div>
									<div class="form-group">
										<label>Date masks:</label>

										<div class="input-group">
											<div class="input-group-prepend">
												<span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
											</div>
											<input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy" data-mask="" value="<?php echo date('Y', strtotime($e['tgl_mulai'])); ?>" required/>
										</div>
										<!-- /.input group -->
									</div>
									<div class="form-group">
										<label for="helperText">Tempat Tugas<span class="text-danger">&nbsp;*</span></label>
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
										<p><small class="text-muted"><i>Masukkan tempat tugas guru yang akan diedit.</i></small></p>
									</div>
									<div class="form-group">
										<label for="helperText">Kelas<span class="text-danger">&nbsp;*</span></label>
										<select class="form-control select2bs4 select2-hidden-accessible" name="pns" tabindex="-1">
										<?php
											if ($pns =='PNS'){
												echo "<option value='PNS' selected>PNS</option>
												<option value='NON PNS'>NON PNS</option>";
											}elseif ($pns =='NON PNS'){
												echo "<option value='PNS'>PNS</option>
												<option value='NON PNS' selected>NON PNS</option>";
											}else{
												echo "<option value='0' selected disabled>Pilih</option>
												<option value='PNS'>PNS</option>
												<option value='NON PNS'>NON PNS</option>";
											}
											echo "</select>";?>
										<p><small class="text-muted"><i>Masukkan kelas guru yang akan diedit.</i></small></p>
									</div>
									<div class="form-group">
										<label for="helperText">Alamat<span class="text-danger">&nbsp;*</span></label>
										<textarea style="height:100px" class="form-control" name="alamat"><?php echo $e['alamat'] ?></textarea>

										<p><small class="text-muted"><i>Masukkan alamat siswa yang akan diedit.</i></small></p>
									</div>
									<div class="form-group">
										<label for="helperText">Foto<span class="text-danger">&nbsp;*</span></label>
										<input type="file" class="form-control" name="foto">
										<br>
										<img class="img-fluid mb-2" src="dist/img/foto_guru/<?php echo $e['foto']; ?>" width="100px"/>
										<p><small class="text-muted"><i>Masukkan foto guru yang akan diedit dengan format jpeg/jpg. Jika tidak diedit abaikan saja.</i></small></p>
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
											<p>Apa anda akan menyimpan perubahan data guru ini?</p>
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
											<p>Apa anda tidak akan menyimpan perubahan data guru ini ?</p>
										</div>
										<div class="modal-footer justify-content-between">
											<button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Batal</button>
											<a href="index.php?page=guru_ma" class="btn btn-primary btn-sm float-md-right">Ya, Jangan simpan</a>
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
<?php }else{ echo '<meta http-equiv="refresh" content="0;url=index.php?page=guru_ma">'; } ?>
<?php } }?>
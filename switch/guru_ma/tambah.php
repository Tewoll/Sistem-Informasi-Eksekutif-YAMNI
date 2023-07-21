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
				<h1 class="m-0">Tambah Data Guru</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="index.php">Home</a></li>
					<li class="breadcrumb-item"><a href="index.php?page=guru_ma">Data Guru MA</a></li>
					<li class="breadcrumb-item active">Tambah Data Guru MA</li>
				</ol>
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<br>
<form method="POST" class="form-horizontal" action="index.php?page=guru_ma&act=proses&data=tambah" id="form1" name="tambah" enctype="multipart/form-data">
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
									<input type="text" id="helperText" class="form-control" name="nama_guru" required > 
									<p><small class="text-muted"><i>Masukkan nama guru yang akan ditambahkan.</i></small></p>
								</div>
								<div class="form-group">
                                    <label for="helperText">Jenis Kelamin<span class="text-danger">&nbsp;*</span></label>
                                    <div class="input-group">
                                    	<div class="input-group-prepend">
                                    		<span class="input-group-text"><i class="fas fa-venus-mars"></i></span>
                                    	</div>
                                    	<select class="form-control select2bs4" name="jenkel_guru" tabindex="-1" required>
                                    		<option disabled selected> Pilih </option>
                                    		<option value="Laki-Laki">Laki-Laki</option>
                                    		<option value="Perempuan">Perempuan</option>
                                    	</select>
                                    </div>
                                    <p><small class="text-muted"><i>Pilih jenis kelamin guru yang akan ditambahkan.</i></small></p>
                                </div>
                                <div class="form-group">
                                	<label for="helperText">Pendidikan Terakhir<span class="text-danger">&nbsp;*</span></label>
                                	<div class="input-group">
                                    	<select class="form-control select2bs4" name="pendidikan" tabindex="-1">
                                    		<option disabled selected> Pilih </option>
                                    		<?php
                                			$rows = $db->get_results("SELECT * FROM lib_pendidikan_terakhir ORDER BY id_pendidikan ASC");
                                			foreach($rows as $row):?>
                                				<option value="<?php echo $row->id_pendidikan;?>"><?php echo $row->pendidikan;?></option>
                                			<?php endforeach;?>
                                    	</select>
                                    </div>
                                	<p><small class="text-muted"><i>Pilih pendidikan terakhir guru yang akan ditambahkan.</i></small></p>
                                </div>
                                <div class="form-group">
                                	<label for="helperText">Tempat lahir<span class="text-danger">&nbsp;*</span></label>
                                	<input type="text" id="helperText" class="form-control" name="tmpt_lahir" required > 
                                	<p><small class="text-muted"><i>Masukkan tempat lahir guru yang akan ditambahkan.</i></small></p>
                                </div>
                                <div class="form-group">
                                	<label>Tanggal Lahir<span class="text-danger">&nbsp;*</span></label>
                                	<div class="input-group date" id="reservationdate" data-target-input="nearest">
                                		<span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                		<input type="text" name="tgl_lahir" class="form-control datetimepicker-input" data-target="#reservationdate" data-toggle="datetimepicker" required>
                                	</div>
                                	<p><small class="text-muted"><i>Masukkan tanggal lahir guru yang akan ditambahkan dengan format Tanggal - Bulan - Tahun.</i></small></p>
                                </div>
                                <div class="form-group">
                                	<label for="helperText">Jabatan<span class="text-danger">&nbsp;*</span></label>
                                	<div class="input-group">
                                		<select class="form-control select2bs4" name="jabatan" tabindex="-1" required>
                                			<option disabled selected> Pilih </option>
                                			<?php
                                			$rows = $db->get_results("SELECT * FROM lib_jabatan ORDER BY id_jabatan ASC");
                                			foreach($rows as $row):?>
                                				<option value="<?php echo $row->id_jabatan;?>"><?php echo $row->jabatan;?></option>
                                			<?php endforeach;?>
                                		</select>
                                	</div>
                                	<p><small class="text-muted"><i>Pilih jabatan guru data yang akan ditambahkan.</i></small></p>
                                </div>
                                 <div class="form-group">
                                	<label>Mulai Bekerja<span class="text-danger">&nbsp;*</span></label>
                                	<div class="input-group date" id="reservationdatetahun" data-target-input="nearest">
                                		<span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                		<input type="text" name="mulai" class="form-control datetimepicker-input" data-target="#reservationdatetahun" data-target="#reservationdatetahun" data-toggle="datetimepicker" required>
                                	</div>
                                	<p><small class="text-muted"><i>Pilih tahun mulai bekerja guru yang akan ditambahkan</i></small></p>
                                </div>
                                <div class="form-group">
                                    <label for="helperText">Tempat Tugas<span class="text-danger">&nbsp;*</span></label>
                                    <select class="form-control select2bs4 select2-hidden-accessible" name="tingkat" tabindex="-1" required>
                                        <option value="1" selected="selected"> Madrasah Aliyah (MA) </option>
                                    </select>
                                    <p><small class="text-muted"><i>Tempat tugas guru yang akan ditambahkan.</i></small></p>
                                </div>
                                <div class="form-group">
                                    <label for="helperText">PNS / NON PNS<span class="text-danger">&nbsp;*</span></label>
                                    <select class="form-control select2bs4 select2-hidden-accessible" name="pns" tabindex="-1" required>
                                    	<option disabled selected> Pilih </option>
                                        <option value="PNS">PNS</option>
                                        <option value="NON PNS">NON PNS</option>
                                    </select>
                                    <p><small class="text-muted"><i>Pilih Tingkatan sekolah guru yang akan ditambahkan.</i></small></p>
                                </div>
                                <div class="form-group">
                                	<label for="helperText">Alamat<span class="text-danger">&nbsp;*</span></label>
                                	<textarea style="height:100px" class="form-control" name="alamat" required></textarea>

                                	<p><small class="text-muted"><i>Masukkan alamat guru yang akan ditambahkan.</i></small></p>
                                </div>
                                <div class="form-group">
                                	<label for="helperText">Foto<span class="text-danger">&nbsp;*</span></label>
                                	<input type="file" class="form-control" name="foto" required>
                                	<p><small class="text-muted"><i>Masukkan foto guru yang akan ditambahkan dengan format jpeg/jpg.</i></small></p>
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
					</div>
				<!-- Modal  -->
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
									<p>Apa anda akan menyimpan perubahan data guru ?</p>
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
									<p>Apa anda tidak akan menyimpan data ini ?</p>
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
	</section>
</form> 
<?php } }?>
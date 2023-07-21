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
					<li class="breadcrumb-item active">Data Siswa MI</li>
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
						<a href="index.php?page=siswa_mi&act=tambah" type="button" class="btn btn-primary">Tambah Data</a>
						<a data-toggle="modal" data-target="#modal-export" type="button" class="btn btn-secondary float-right">Import Data Excel</a>	
						<div class="modal fade" id="modal-export" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<h4 class="modal-title">Import Data Excel</h4>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>

									<form method="POST" class="form-horizontal" action="index.php?page=siswa_mi&act=proses&data=import" id="form1" enctype="multipart/form-data" name="import">
										<div class="modal-body">
											<div class="card-body">
												<div class="form-group">
													<label for="helperText">Data Excel<span class="text-danger">&nbsp;*</span></label>
													<input type="file" class="form-control" name="filesiswa_mi" required>
													<p><small class="text-muted"><i>Masukkan file excel yang akan diimport dengan format xls/xlsx.</i></small></p>
												</div>
												<a href="../sie/dist/file/Data Siswa MI.xls"  download><u>Download Format Excel</u></a>
											</div>
										</div>
										<div class="modal-footer justify-content-between">
											<button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Tutup</button>
											<input type="submit" class="btn btn-primary btn-sm float-md-right" name="upload" value="Import">
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					<!-- /.card-header -->
					<div class="card-body">
						<div class="table-responsive">
							<table id="example1" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th style="width:5%">No</th>
										<th>Nama</th>
										<th>Jenis Kelamin</th>
										<th>Umur</th>
										<th>Kelas</th>
										<th style="width:20%;">Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php 
			                        $no = 1;
			                        $query = "SELECT id, nama_siswa, jenkel,tmpt_lahir, tgl_lahir, nama_ortu, id_tingkat, kelas, id_asal_tingkat_sekolah, nama_asal_sekolah, alamat, kota, status_ekonomi, id_tajaran FROM siswa WHERE id_tingkat = '3' ORDER BY kelas ASC";
			                        $result = mysqli_query($connection,$query);
			                        $data = mysqli_num_rows($result);
			                        if ($data > 0) { while($row = mysqli_fetch_assoc($result)){

			                        ?>
			                        <tr>
			                        	<td><?php echo $no;?></td>
			                        	<td><?php echo $row['nama_siswa']; ?></td>
			                        	<td><?php echo $row['jenkel']; ?></td>
			                        	<!-- <td><?php echo $row['tmpt_lahir']; ?>, <?php echo tgl_indo($row['tgl_lahir']); ?></td>
			                        	<td><?php echo $row['nama_ortu']; ?></td> -->
			                        	<td><?php
			                        	$lahir    =new DateTime($row['tgl_lahir']);
			                        	$today    =new DateTime();
			                        	$umur = $today->diff($lahir);
			                        	echo $umur->y; echo ' Tahun ';?></td>
			                        	<td><?php echo $row['kelas']; ?></td>
			                        	<!-- <td><?php echo $row['alamat']; ?></td> -->
			                        	<td>
			                        		<a class="btn btn-xs btn-info" data-toggle="modal" data-target="#modal<?php echo $row['id']; ?>">
			                        			<i class="fas fa-eye" ></i> Lihat</a>
			                        		<a class="btn btn-xs bg-warning" href="index.php?page=siswa_mi&act=edit&id=<?php echo $row['id']; ?>">
			                        			<i class="fas fa-edit" ></i> Edit</a>
			                        		<a class="btn btn-xs bg-danger" href="#" onClick="confirm_modal('index.php?page=siswa_mi&act=proses&data=hapus&id=<?php echo $row['id']; ?>');"><i class='fas fa-trash' title="Hapus" ></i> Hapus</i></a>
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
													<p>Apa anda akan menghapus data siswa ini ?</p>
												</div>

												<div class="modal-footer justify-content-between ">
													<button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Cancel</button>
													<a href="#" class="btn btn-danger btn-sm" id="delete_link">Hapus</a>
												</div>
											</div>
										</div>
									</div>
									<div class="modal fade" id="modal<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
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
																<input type="text" class="form-control form-control-border" value="<?php echo $row['nama_siswa']; ?>" disabled>
															</div>
															<div class="form-group">
																<label for="exampleInputBorder">Jenis Kelamin</label>
																<input type="text" class="form-control form-control-border" value="<?php echo $row['jenkel']; ?>" disabled>
															</div>
															<div class="form-group">
																<label for="exampleInputBorder">Tempat & Tanggal lahir</label>
																<input type="text" class="form-control form-control-border" value="<?php echo $row['tmpt_lahir']; ?>, <?php echo tgl_indo($row['tgl_lahir']); ?>" disabled>
															</div>
															<div class="form-group">
																<label for="exampleInputBorder">Nama Orang Tua</label>
																<input type="text" class="form-control form-control-border" value="<?php echo $row['nama_ortu'];?>" disabled>
															</div>
															<div class="form-group">
																<label for="exampleInputBorder">Tingkatan Sekolah</label>

																<?php
																$idt = $row['id_tingkat'];
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
																<input type="text" class="form-control form-control-border" value="<?php echo $row['kelas'];?>" disabled>
															</div>
															<div class="form-group">
																<label for="exampleInputBorder">Jenis Asal Tingkatan Sekolah</label>

																<?php
																$idt = $row['id_asal_tingkat_sekolah'];
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
																<input type="text" class="form-control form-control-border" value="<?php echo $row['nama_asal_sekolah'];?>" disabled>
															</div>
															<div class="form-group">
																<label for="exampleInputBorder">Alamat</label>
																<input type="text" class="form-control form-control-border" rows="3" value="<?php echo $row['alamat'];?>" disabled>
															</div>
															<div class="form-group">
																<label for="exampleInputBorder">Kota Asal</label>
																<input type="text" class="form-control form-control-border" value="<?php echo $row['kota'];?>" disabled>
															</div>
															<div class="form-group">
																<label for="exampleInputBorder">Status Ekonomi Keluarga</label>
																<input type="text" class="form-control form-control-border" value="<?php echo $row['status_ekonomi'];?>" disabled>
															</div>
															<div class="form-group">
																<label for="exampleInputBorder">Tahun Angkatan</label>

																<?php
																$idt = $row['id_tajaran'];
																$qedit = "SELECT * FROM lib_tajaran WHERE id_tajaran = '{$idt}'";
																$red = mysqli_query($connection,$qedit);
																$ed = mysqli_num_rows($red);
																if ($ed > 0) {
																	$tkta = mysqli_fetch_assoc($red);
																	$angkatan = $tkta['tahun_ajaran'];
																	?>

																<input type="text" class="form-control form-control-border" value="<?php echo $angkatan ;?>" disabled>
															<?php }?>
															</div>
														</div>
													</form>
												</div>
												<div class="modal-footer justify-content-between">
													<button type="button" class="btn btn-default float-right" data-dismiss="modal">Tutup</button>
												</div>
											</div>
										</div>
						            </div> 

									<?php
			                        $no++;
			                        }
			                        }       
			                        ?>
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
<?php } }?>
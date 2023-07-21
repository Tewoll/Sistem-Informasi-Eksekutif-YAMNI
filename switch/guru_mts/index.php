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
					<li class="breadcrumb-item active">Data Guru MTs</li>
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
						<a href="index.php?page=guru_mts&act=tambah" type="button" class="btn btn-primary">Tambah Data</a>
						<a data-toggle="modal" data-target="#modal-export" type="button" class="btn btn-secondary float-right">Import Data Excel</a>	
						<div class="modal fade" id="modal-export" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<h4 class="modal-title">Import Data Guru</h4>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>

									<form method="POST" class="form-horizontal" action="index.php?page=guru_mts&act=proses&data=import" id="form1" enctype="multipart/form-data" name="import">
										<div class="modal-body">
											<div class="card-body">
												<div class="form-group">
													<label for="helperText">Data Excel<span class="text-danger">&nbsp;*</span></label>
													<input type="file" class="form-control" name="fileguru_mts" required>
													<p><small class="text-muted"><i>Masukkan file excel yang akan diimport dengan format xls/xlsx.</i></small></p>
												</div>
												<a href="../sie/dist/file/Data Guru MTs.xls"  download><u>Download Format Excel</u></a>
											</div>
										</div>
										<div class="modal-footer justify-content-between">
											<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
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
										<th>Jabatan</th>
										<th style="width:20%;">Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php 
			                        $no = 1;
			                        $query = "SELECT id, nama_guru, jenkel_guru, pendidikan, guru.id_pendidikan,tmpt_lahir, tgl_lahir, jabatan, guru.id_jabatan, tgl_mulai, tingkat, guru.id_tingkat, pns_nonpns, alamat, foto FROM guru, lib_pendidikan_terakhir, lib_jabatan, lib_tingkat WHERE lib_pendidikan_terakhir.id_pendidikan = guru.id_pendidikan AND lib_jabatan.id_jabatan = guru.id_jabatan AND lib_tingkat.id_tingkat = guru.id_tingkat AND guru.id_tingkat = '2' ORDER BY id_jabatan ASC";
			                        $result = mysqli_query($connection,$query);
			                        $data = mysqli_num_rows($result);
			                        if ($data > 0) { while($row = mysqli_fetch_assoc($result)){

			                        ?>
			                        <tr>
			                        	<td><?php echo $no;?></td>
			                        	<td><?php echo $row['nama_guru']; ?></td>
			                        	<td><?php echo $row['jenkel_guru']; ?></td>
			                        	<td><?php echo $row['jabatan']; ?></td>
			                        	<td>
			                        		<a class="btn btn-xs btn-info" data-toggle="modal" data-target="#modal<?php echo $row['id']; ?>" title="Detail Guru">
			                        			<i class="fas fa-eye" ></i> Detail</a>
			                        		<a class="btn btn-xs bg-warning" href="index.php?page=guru_mts&act=edit&id=<?php echo $row['id']; ?>" title="Edit Data Guru">
			                        			<i class="fas fa-edit" ></i> Edit</a>
			                        		<a class="btn btn-xs bg-danger" href="#" onClick="confirm_modal('index.php?page=guru_mts&act=proses&data=hapus&id=<?php echo $row['id']; ?>');"><i class='fas fa-trash' title="Hapus Data Guru" ></i> Hapus</i></a>
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
													<p>Apa anda akan menghapus data guru ini ?</p>
												</div>

												<div class="modal-footer justify-content-between">
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
													<h4 class="modal-title">Info Lengkap Guru</h4>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<form>
														<div class="card-body">
															<div class="form-group">
																<label for="exampleInputBorder">Nama Guru</label>
																<input type="text" class="form-control form-control-border" value="<?php echo $row['nama_guru']; ?>" disabled>
															</div>
															<div class="form-group">
																<label for="exampleInputBorder">Jenis Kelamin</label>
																<input type="text" class="form-control form-control-border" value="<?php echo $row['jenkel_guru']; ?>" disabled>
															</div>
															<div class="form-group">
																<label for="exampleInputBorder">Pendidikan Terakhir</label>
																<input type="text" class="form-control form-control-border" value="<?php echo $row['pendidikan']; ?>" disabled>
															</div>
															<div class="form-group">
																<label for="exampleInputBorder">Tempat & Tanggal lahir</label>
																<input type="text" class="form-control form-control-border" value="<?php echo $row['tmpt_lahir']; ?>, <?php echo tgl_indo($row['tgl_lahir']); ?>" disabled>
															</div>
															<div class="form-group">
																<?php 
																$idj = $row['id_jabatan'];
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
																<input type="text" class="form-control form-control-border" value="<?php echo $row['tingkat'];?>" disabled>
															</div>
															<div class="form-group">
																<label for="exampleInputBorder">Mulai Bekerja</label>
																<input type="text" class="form-control form-control-border" value="<?php echo $row['tgl_mulai']; ?>" disabled>
															</div>
															<div class="form-group">
																<label for="exampleInputBorder">PNS / NON PNS</label>
																<input type="text" class="form-control form-control-border" value="<?php echo $row['pns_nonpns']; ?>" disabled>
															</div>
															<div class="form-group">
																<label for="exampleInputBorder">Alamat</label>
																<textarea style="height:100px" class="form-control" disabled><?php echo $row['alamat'] ?></textarea>
															</div>
															<div class="form-group">
																<label for="exampleInputBorder">Foto</label><br>
																<img class="img-fluid mb-2" src="dist/img/foto_guru/<?php echo $row['foto']; ?>" width="100px"/>
															</div>
														</div>
													</form>
												</div>
												<div class="modal-footer justify-content-between">
													<a class="btn btn-default bg-warning" href="index.php?page=guru_mts&act=edit&id=<?php echo $row['id']; ?>" title="Edit Data Guru">
														<i class="fas fa-edit" ></i> Edit</a>
													<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
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
<?php }} ?>
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
<?php
$dct = isset($_GET['data']) ? $_GET['data'] : '';
$dct = inject_checker($connection,$dct);
switch($dct) 
{
	case 'tambah':
			
			$nama 			= inject_checker($connection,$_POST['nama_guru']);
			$jenkel 		= inject_checker($connection,$_POST['jenkel_guru']);
			$id_pendidikan 	= inject_checker($connection,$_POST['pendidikan']);
			$tmpt_lahir 	= inject_checker($connection,$_POST['tmpt_lahir']);
			$tgl 			= inject_checker($connection,$_POST['tgl_lahir']);
			$tgl_lahir 		= date('Y-m-d', strtotime($tgl));

			$id_jabatan 	= inject_checker($connection,$_POST['jabatan']);
			$tgl_mulai 		= inject_checker($connection,$_POST['mulai']);
			$id_tingkat 	= inject_checker($connection,$_POST['tingkat']);
			$pns 			= inject_checker($connection,$_POST['pns']);
			$alamat 		= inject_checker($connection,$_POST['alamat']);

			$lokasi_file 	= $_FILES['foto']['tmp_name'];
			$ekstensi 		=  array('png','jpg','jpeg', 'gif');
			$nama_file   	= $_FILES['foto']['name'];
			$acak        	= rand(1,99);
			$ukuran 		= $_FILES['foto']['size'];
			$n_gambar 		= $acak.$nama_file;
			$nm_gambar 		= md5($n_gambar);
			$nama_gambar 	= $nm_gambar.'.jpg';
			$ext 			= pathinfo($nama_file, PATHINFO_EXTENSION);

			if (empty($lokasi_file)) {
				$qguru = mysqli_query($connection, "INSERT INTO guru(nama_guru, jenkel_guru, tmpt_lahir, tgl_lahir, id_pendidikan, id_jabatan, tgl_mulai,  pns_nonpns, id_tingkat, alamat) VALUES ('{$nama}','{$jenkel}','{$tmpt_lahir}','{$tgl_lahir}','{$id_pendidikan}','{$id_jabatan}','{$tgl_mulai}','{$pns}','{$id_tingkat}','{$alamat}')") OR die('Ada kesalahan pada query '.mysqli_error($connection));
				echo "<script type='text/javascript'>
						Swal.fire({
							position: 'center',
							icon: 'success',
							title: 'Data berhasil disimpan',
							text:  'Mohon bersabar, halaman akan otomatis teralihkan ke index data.',
							type: 'success',
							showConfirmButton: false,
							timer: 3200
							});
							window.setTimeout(function(){ 
								window.location.replace('index.php?page=guru_ma');
								} ,3000); 
					</script>";
			}else{
				if (!in_array($ext,$ekstensi) ) {
					echo "<script type='text/javascript'>
						Swal.fire({
							position: 'center',
							icon: 'error',
							title: 'Upload Gagal!',
							text:  'Pastikan file yang di upload bertipe *.jpg/ *.jpeg/ *.png/ *.gif !!.',
							type: 'error',
							showConfirmButton: false,
							timer: 3200
							});
							window.setTimeout(function(){ 
								window.location.replace('index.php?page=guru_ma&act=tambah);
								} ,3000); 
								</script>";
				}else{
					$folder = 'dist/img/foto_guru/'; // folder untuk foto 
					// $ubah_ukuran = 240;                   // foto diperkecil jadi 200px (thumb)
					$qguru = mysqli_query($connection,"INSERT INTO guru(nama_guru, jenkel_guru, tmpt_lahir, tgl_lahir, id_pendidikan, id_jabatan, tgl_mulai,  pns_nonpns, id_tingkat, alamat, foto) VALUES ('{$nama}','{$jenkel}','{$tmpt_lahir}','{$tgl_lahir}','{$id_pendidikan}','{$id_jabatan}','{$tgl_mulai}','{$pns}','{$id_tingkat}','{$alamat}','{$nama_gambar}')") OR die('Ada kesalahan pada query '.mysqli_error($connection));
					if ($qguru == true) {
						move_uploaded_file($lokasi_file, $folder.$nama_gambar);

						echo "<script type='text/javascript'>
						Swal.fire({
							position: 'center',
							icon: 'success',
							title: 'Data berhasil disimpan',
							text:  'Mohon bersabar, halaman akan otomatis teralihkan ke index data.',
							type: 'success',
							showConfirmButton: false,
							timer: 3200
							});
							window.setTimeout(function(){ 
								window.location.replace('index.php?page=guru_ma');
								} ,3000); 
								</script>";
					}else{
						echo "<script type='text/javascript'>
						Swal.fire({
							position: 'center',
							icon: 'error',
							title: 'Upload Gagal!',
							text:  'Pastikan file yang di upload bertipe *.jpg/ *.jpeg/ *.png/ *.gif !!.',
							type: 'error',
							showConfirmButton: false,
							timer: 3200
							});
							window.setTimeout(function(){ 
								window.location.replace('index.php?page=guru_ma&act=tambah);
								} ,3000); 
								</script>";
					}
				}
			}

	break;
	
	case 'ubah':
		if (isset($_POST['simpan'])) {
			$id 			= inject_checker($connection,$_POST['id_guru']);

			$nama 			= inject_checker($connection,$_POST['nama']);
			$jenkel 		= inject_checker($connection,$_POST['jenkel']);
			$id_pendidikan 	= inject_checker($connection,$_POST['pendidikan']);
			$tmpt_lahir 	= inject_checker($connection,$_POST['tmpt_lahir']);
			$tgl 			= inject_checker($connection,$_POST['tgl_lahir']);
			$tgl_lahir 		= date('Y-m-d', strtotime($tgl));
			$id_jabatan 	= inject_checker($connection,$_POST['jabatan']);
			$tgl_mulai 		= inject_checker($connection,$_POST['mulai']);
			$id_tingkat	 	= inject_checker($connection,$_POST['tingkat']);
			$pns 			= inject_checker($connection,$_POST['pns']);
			$alamat 		= inject_checker($connection,$_POST['alamat']);

			$lokasi_file 	= $_FILES['foto']['tmp_name'];
			$ekstensi 		=  array('png','jpg','jpeg', 'gif');
			$nama_file   	= $_FILES['foto']['name'];
			$acak        	= rand(1,99);
			$ukuran 		= $_FILES['foto']['size'];
			$n_gambar 		= $acak.$nama_file;
			$nm_gambar 		= md5($n_gambar);
			$nama_gambar 	= $nm_gambar.'.jpg';
			$ext 			= pathinfo($nama_file, PATHINFO_EXTENSION);
			
			$qdata = mysqli_query($connection, "SELECT id FROM guru WHERE id = '{$id}'");
			$cekdata = mysqli_num_rows($qdata);

			if($cekdata > 0){
				if (empty($lokasi_file)){
					$qguru = mysqli_query($connection,"UPDATE guru SET nama_guru = '{$nama}', jenkel_guru = '{$jenkel}', tmpt_lahir = '{$tmpt_lahir}', tgl_lahir = '{$tgl_lahir}', id_pendidikan = '{$id_pendidikan}', id_jabatan = '{$id_jabatan}', tgl_mulai = '{$tgl_mulai}', pns_nonpns = '{$pns}', id_tingkat= '{$id_tingkat}', alamat = '{$alamat}' WHERE id = '{$id}'") OR die('Ada kesalahan pada query '.mysqli_error($connection));

					if ($qguru == true) {
						/* untuk alamat */
						echo "<script type='text/javascript'>
						Swal.fire({
							position: 'center',
							icon: 'success',
							title: 'Data berhasil disimpan',
							text:  'Mohon bersabar, halaman akan otomatis teralihkan ke index data.',
							type: 'success',
							showConfirmButton: false,
							timer: 3200
							});
							window.setTimeout(function(){ 
								window.location.replace('index.php?page=guru_ma');
								} ,3000); 
								</script>";
					}else{
						echo "<script type='text/javascript'>
						Swal.fire({
							position: 'center',
							icon: 'error',
							title: 'Data gagal disimpan',
							text:  'periksa kembali inputan data!!.',
							type: 'error',
							showConfirmButton: false,
							timer: 3200
							});
							window.setTimeout(function(){ 
								window.location.replace('index.php?page=guru_ma&act=edit&id=$id');
								} ,3000); 
								</script>";
					}
				}else { 
					$foto_lama = inject_checker($connection,$_POST['foto_lama']);
					$qguru = mysqli_query($connection,"UPDATE guru SET nama_guru = '{$nama}', jenkel_guru = '{$jenkel}', tmpt_lahir = '{$tmpt_lahir}', tgl_lahir = '{$tgl_lahir}', id_pendidikan = '{$id_pendidikan}', id_jabatan = '{$id_jabatan}', tgl_mulai = '{$tgl_mulai}', pns_nonpns = '{$pns}', id_tingkat= '{$id_tingkat}', alamat = '{$alamat}', foto = '{$nama_gambar}' WHERE id = '{$id}'") OR die('Ada kesalahan pada query '.mysqli_error($connection));
					if ($qguru == true) {
						$folder = 'dist/img/foto_guru/';
						if ($foto_lama == "") {
							
						} else {
							unlink("dist/img/foto_guru/$foto_lama");
						}
						
						move_uploaded_file($lokasi_file, $folder.$nama_gambar);

						echo "<script type='text/javascript'>
						Swal.fire({
							position: 'center',
							icon: 'success',
							title: 'Data berhasil disimpan',
							text:  'Mohon bersabar, halaman akan otomatis teralihkan ke index data.',
							type: 'success',
							showConfirmButton: false,
							timer: 3200
							});
							window.setTimeout(function(){ 
								window.location.replace('index.php?page=guru_ma');
								} ,3000); 
								</script>";
					}else{
						echo "<script type='text/javascript'>
						Swal.fire({
							position: 'center',
							icon: 'error',
							title: 'Data gagal disimpan',
							text:  'periksa kembali inputan data!!.',
							type: 'error',
							showConfirmButton: false,
							timer: 3200
							});
							window.setTimeout(function(){ 
								window.location.replace('index.php?page=guru_ma&act=edit&id=$id');
								} ,3000); 
								</script>";
					}
				}
			}else{
				echo "<script type='text/javascript'>
				Swal.fire({
					position: 'center',
					icon: 'error',
					title: 'Data gagal disimpan',
					text:  'periksa kembali inputan data!!.',
					type: 'error',
					showConfirmButton: false,
					timer: 3200
					});
					window.setTimeout(function(){ 
						window.location.replace('index.php?page=guru_ma&act=edit&id=$id');
						} ,3000); 
						</script>";
			}
		}else{
			echo "<script type='text/javascript'>
			Swal.fire({
				position: 'center',
				icon: 'error',
				title: 'Data gagal disimpan',
				text:  'periksa kembali inputan data!!.',
				type: 'error',
				showConfirmButton: false,
				timer: 3200
				});
				window.setTimeout(function(){ 
					window.location.replace('index.php?page=guru_ma&act=edit&id=$id');
					} ,3000); 
					</script>";
		}

	break;

	case 'hapus':
		if (isset($_GET['id'])) {
			$ids = $_GET['id'];

			$qlokasi = mysqli_query($connection, "SELECT foto FROM guru WHERE id='$ids'");
			$clok = mysqli_num_rows($qlokasi);
			if($clok > 0){
				$lok = mysqli_fetch_assoc($qlokasi);
				$qdel = mysqli_query($connection, "DELETE FROM guru WHERE id='$ids'") or die('Ada kesalahan pada query delete : '.mysqli_error($connection));
				// cek hasil query
				if ($qdel == true) {
					$foto_lama = $lok['foto'];
					unlink("dist/img/foto_guru/$foto_lama");  
					echo "<script type='text/javascript'>
					Swal.fire({
						position: 'center',
						icon: 'success',
						title: 'Data berhasil dihapus',
						text:  'Mohon bersabar, halaman akan otomatis teralihkan ke index data.',
						type: 'success',
						showConfirmButton: false,
						timer: 3200
						});
						window.setTimeout(function(){ 
							window.location.replace('index.php?page=guru_ma');
							} ,3000); 
							</script>";
				}else {  
					echo "<script type='text/javascript'>
					Swal.fire({
						position: 'center',
						icon: 'error',
						title: 'Data gagal dihapus',
						type: 'error',
						showConfirmButton: false,
						timer: 3200
						});
						window.setTimeout(function(){ 
							window.location.replace('index.php?page=guru_ma');
							} ,3000); 
						</script>";
				}
			}else {  
				// include_once 'switch/gagal-kelurahan.php';
				echo "<script type='text/javascript'>
					Swal.fire({
						position: 'center',
						icon: 'error',
						title: 'Data gagal dihapus',
						type: 'error',
						showConfirmButton: false,
						timer: 3200
						});
						window.setTimeout(function(){ 
							window.location.replace('index.php?page=guru_ma');
							} ,3000); 
						</script>";
			}
		}else {  
				// include_once 'switch/gagal-kelurahan.php';
				echo "<script type='text/javascript'>
					Swal.fire({
						position: 'center',
						icon: 'error',
						title: 'Data gagal dihapus',
						type: 'error',
						showConfirmButton: false,
						timer: 3200
						});
						window.setTimeout(function(){ 
							window.location.replace('index.php?page=guru_ma');
							} ,3000); 
						</script>";
		}
	break;
	
	case 'import':

		$target = basename($_FILES['fileguru_ma']['name']) ;
		move_uploaded_file($_FILES['fileguru_ma']['tmp_name'], $target);

		// beri permisi agar file xls dapat di baca
		chmod($_FILES['fileguru_ma']['name'],0777);

		// mengambil isi file xls
		$data = new Spreadsheet_Excel_Reader($_FILES['fileguru_ma']['name'],false);
		// menghitung jumlah baris data yang ada
		$jumlah_baris = $data->rowcount($sheet_index=0);

		// jumlah default data yang berhasil di import
		$berhasil = 0;
		for ($i=2; $i<=$jumlah_baris; $i++){

		// menangkap data dan memasukkan ke variabel sesuai dengan kolumnya masing-masing
		$nama     = $data->val($i, 1);
		$jenkel   = $data->val($i, 2);
		$tempat_lahir = $data->val($i, 3);
		$tgl = $data->val($i, 4);
		$tgl_lahir = date('Y-m-d', strtotime($tgl));
		$id_pendidikan = $data->val($i, 5);
		if ($id_pendidikan == 'SLTA / SEDERAJAT') {
			$id_pend = "1";
		}elseif ($id_pendidikan == 'DIPLOMA I / II') {
			$id_pend = "2";
		}elseif ($id_pendidikan == 'DIPLOMA IV / STRATA I') {
			$id_pend = "3";
		}elseif ($id_pendidikan == 'STRATA II') {
			$id_pend = "4";
		}elseif ($id_pendidikan == 'STRATA III') {
			$id_pend = "5";
		}else {
			$id_pend = " ";
		}

		$id_jabatan = $data->val($i, 6);
		if ($id_jabatan == 'Kepala Madrasah') {
			$id_jab = "1";
		}elseif ($id_jabatan == 'Wakil Kepala Madrasah'){
			$id_jab = "2";
		}elseif ($id_jabatan == 'Wakil Kepala Bagian Kurikulum'){
			$id_jab = "3";
		}elseif ($id_jabatan == 'Wakil Kepala Bagian Humas'){
			$id_jab = "4";
		}elseif ($id_jabatan == 'Wakil Kepala Bagian Kesiswaan'){
			$id_jab = "5";
		}elseif ($id_jabatan == 'Wakil Kepala Bagian Sarana dan Prasarana'){
			$id_jab = "6";
		}elseif ($id_jabatan == 'Bendahara'){
			$id_jab = "7";
		}elseif ($id_jabatan == 'Kepala Tata Usaha (TU)'){
			$id_jab = "8";
		}elseif ($id_jabatan == 'Kepala Perpustakaan'){
			$id_jab = "9";
		}elseif ($id_jabatan == 'Al-Quran Hadits'){
			$id_jab = "10";
		}elseif ($id_jabatan == 'Guru Mapel'){
			$id_jab = "11";
		}elseif ($id_jabatan == 'Operator / TU'){
			$id_jab = "12";
		}else {
			$id_pend = " ";
		}

		$thn_mulai = $data->val($i, 7);
		$pns = $data->val($i, 8);
		$alamat = $data->val($i, 9);
		$id_tingkat = '1';

		if($nama != "" && $jenkel != "" && $tempat_lahir != "" && $tgl_lahir != "" && $alamat != ""){
			// input data ke database (table data_pegawai)
			mysqli_query($connection,"INSERT INTO guru(nama_guru, jenkel_guru, tmpt_lahir, tgl_lahir, id_pendidikan, id_jabatan, tgl_mulai,  pns_nonpns, id_tingkat, alamat) VALUES ('{$nama}','{$jenkel}','{$tempat_lahir}','{$tgl_lahir}','{$id_pend}','{$id_jab}','{$thn_mulai}','{$pns}','{$id_tingkat}','{$alamat}')") OR die('Ada kesalahan pada query '.mysqli_error($connection));
			$berhasil++;
			}
		}

		// hapus kembali file .xls yang di upload tadi
		unlink($_FILES['fileguru_ma']['name']);
		echo "<script type='text/javascript'>
		Swal.fire({
			position: 'center',
			icon: 'success',
			title: 'Data berhasil disimpan',
			text:  'Mohon bersabar, halaman akan otomatis teralihkan ke index data.',
			type: 'success',
			showConfirmButton: false,
			timer: 3200
			});
			window.setTimeout(function(){ 
				window.location.replace('index.php?page=guru_ma');
				} ,3000); 
				</script>";

	break;

	default:
		echo '<meta http-equiv="refresh" content="0;url=index.php?page=guru_ma">';
	break;
}
?>
<?php } }?>
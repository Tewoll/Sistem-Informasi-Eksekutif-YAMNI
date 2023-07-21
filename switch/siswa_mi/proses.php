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
			
			$nama = inject_checker($connection,$_POST['nama_siswa']);
			$jenkel = inject_checker($connection,$_POST['jenkel']);
			$tmpt_lahir = inject_checker($connection,$_POST['tmpt_lahir']);
			$tgl = inject_checker($connection,$_POST['tgl_lahir']);
			$tgl_lahir = date('Y-m-d', strtotime($tgl));
			$nama_ortu = inject_checker($connection,$_POST['nama_ortu']);
			$tingkat = inject_checker($connection,$_POST['tingkat']);
			$kelas = inject_checker($connection,$_POST['kelas']);
			$alamat = inject_checker($connection,$_POST['alamat']);
			$asal_tingkat = inject_checker($connection,$_POST['asal_tingkat']);
			$asal_sekolah = inject_checker($connection,$_POST['asal_sekolah']);
			$kota = inject_checker($connection,$_POST['kota']);
			$status_ekonomi = inject_checker($connection,$_POST['status_ekonomi']);
			$angkatan = inject_checker($connection,$_POST['angkatan']);

			if($nama == NULL){
				// include_once 'switch/pesan-gagal.php';
				echo '<meta http-equiv="refresh" content="2;url=index.php?page=siswa_mi">';
			}else{
				$qsiswa = mysqli_query($connection, "INSERT INTO siswa (nama_siswa, jenkel, tmpt_lahir, tgl_lahir, nama_ortu, id_tingkat, kelas, alamat, kota, id_asal_tingkat_sekolah, nama_asal_sekolah, status_ekonomi, id_tajaran) VALUES ('{$nama}', '{$jenkel}', '{$tmpt_lahir}', '{$tgl_lahir}', '{$nama_ortu}', '{$tingkat}', '{$kelas}', '{$alamat}', '{$kota}', '{$asal_tingkat}', '{$asal_sekolah}', '{$status_ekonomi}', '{$angkatan}')")OR die('Ada kesalahan pada query '.mysqli_error($connection));
				if ($qsiswa == true) {
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
							window.location.replace('index.php?page=siswa_mi');
							} ,3000); 
							</script>";
				}else{
					// include_once 'switch/pesan-gagal.php';
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
							window.location.replace('index.php?page=siswa_mi&act=edit&id=$id');
							} ,3000); 
							</script>";
				}
			}
				
	break;
	
	case 'ubah':
		if (isset($_POST['simpan'])) {

			$id = inject_checker($connection,$_POST['id_siswa']);
			$nama = inject_checker($connection,$_POST['nama_siswa']);
			$jenkel = inject_checker($connection,$_POST['jenkel']);
			$tmpt_lahir = inject_checker($connection,$_POST['tmpt_lahir']);
			$tgl = inject_checker($connection,$_POST['tgl_lahir']);
			$tgl_lahir = date('Y-m-d', strtotime($tgl));
			$nama_ortu = inject_checker($connection,$_POST['nama_ortu']);
			$tingkat = inject_checker($connection,$_POST['tingkat']);
			$kelas = inject_checker($connection,$_POST['kelas']);
			$alamat = inject_checker($connection,$_POST['alamat']);
			$asal_tingkat = inject_checker($connection,$_POST['asal_tingkat']);
			$asal_sekolah = inject_checker($connection,$_POST['asal_sekolah']);
			$kota = inject_checker($connection,$_POST['kota']);
			$status_ekonomi = inject_checker($connection,$_POST['status_ekonomi']);
			$angkatan = inject_checker($connection,$_POST['angkatan']);
			
			$qsiswa = mysqli_query($connection,"UPDATE siswa SET nama_siswa = '{$nama}', jenkel = '{$jenkel}', tmpt_lahir = '{$tmpt_lahir}', tgl_lahir = '{$tgl_lahir}', nama_ortu = '{$nama_ortu}', id_tingkat = '{$tingkat}', kelas = '{$kelas}', alamat = '{$alamat}' , kota = '{$kota}', id_asal_tingkat_sekolah = '{$asal_tingkat}', nama_asal_sekolah = '{$asal_sekolah}', status_ekonomi = '{$status_ekonomi}', id_tajaran = '{$angkatan}' WHERE id = '{$id}'") OR die('Ada kesalahan pada query '.mysqli_error($connection));
			if ($qsiswa == true) {
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
						window.location.replace('index.php?page=siswa_mi');
						} ,3000); 
					</script>";
			}else{
				// include_once 'switch/pesan-gagal.php';
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
						window.location.replace('index.php?page=siswa_mi&act=edit&id=$id');
						} ,3000); 
					</script>";
			}
		
		}else { 
			// include_once 'switch/pesan-gagal.php';
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
						window.location.replace('index.php?page=siswa_mi&act=edit&id=$id');
						} ,3000); 
					</script>";
		}
	break;

	case 'hapus':
		if (isset($_GET['id'])) {
			$ids = $_GET['id'];

			$query = mysqli_query($connection, "DELETE FROM siswa WHERE id='$ids'") or die('Ada kesalahan pada query delete : '.mysqli_error($connection));

			// cek hasil query
			if ($query == true) {
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
						window.location.replace('index.php?page=siswa_mi');
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
						window.location.replace('index.php?page=siswa_mi');
						} ,3000); 
					</script>";
		}
	break;
	
	case 'import':

		$target = basename($_FILES['filesiswa_mi']['name']) ;
		move_uploaded_file($_FILES['filesiswa_mi']['tmp_name'], $target);

		// beri permisi agar file xls dapat di baca
		chmod($_FILES['filesiswa_mi']['name'],0777);

		// mengambil isi file xls
		$data = new Spreadsheet_Excel_Reader($_FILES['filesiswa_mi']['name'],false);
		// menghitung jumlah baris data yang ada
		$jumlah_baris = $data->rowcount($sheet_index=0);

		// jumlah default data yang berhasil di import
		$berhasil = 0;
		for ($i=2; $i<=$jumlah_baris; $i++){

		// menangkap data dan memasukkan ke variabel sesuai dengan kolumnya masing-masing
		$nama     			= $data->val($i, 1);
		$jenkel   			= $data->val($i, 2);
		$tempat_lahir 		= $data->val($i, 3);
		$tgl 				= $data->val($i, 4);
		$tgl_lahir 			= date('Y-m-d', strtotime($tgl));
		$nama_ortu 			= $data->val($i, 5);
		$id_tingkat 		= '3';
		$kelas 				= $data->val($i, 6);
		$alamat 			= $data->val($i, 7);
		$kota 				= $data->val($i, 8);
		$jenis_tingkat 		= $data->val($i, 9);
		if ($jenis_tingkat == 'Taman Kanak-Kanak (TK)') {
			$id_jt 			= "4";
		} elseif($jenis_tingkat == 'Raudhatul Athfal (RA)'){
			$id_jt 			= "9";
		} elseif($jenis_tingkat == 'Tidak Ada'){
			$id_jt 			= "5";
		} else {
			$id_jt 			= "5";
		}
		$nama_asal_sekolah 	= $data->val($i, 10);
		$thn_ajaran 		= $id_sem;
		$status_ekonomi 	= $data->val($i, 11);

		if($nama != "" && $jenkel != "" && $id_tingkat != "" && $kelas != "" && $jenis_tingkat != ""){
			// input data ke database (table data_pegawai)
			mysqli_query($connection,"INSERT INTO siswa (id,nama_siswa, jenkel, tmpt_lahir, tgl_lahir, nama_ortu, id_tingkat, kelas, alamat, kota, id_asal_tingkat_sekolah, nama_asal_sekolah, status_ekonomi, id_tajaran) VALUES ('','{$nama}', '{$jenkel}', '{$tempat_lahir}', '{$tgl_lahir}', '{$nama_ortu}', '{$id_tingkat}', '{$kelas}', '{$alamat}', '{$kota}', '{$id_jt}', '{$nama_asal_sekolah}', '{$status_ekonomi}', '{$thn_ajaran}')") OR die('Ada kesalahan pada query'.mysqli_error($connection));
			$berhasil++;
			}
		}

		// hapus kembali file .xls yang di upload tadi
		unlink($_FILES['filesiswa_mi']['name']);
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
				window.location.replace('index.php?page=siswa_mi');
				} ,3000); 
				</script>";
	break;

	default:
		echo '<meta http-equiv="refresh" content="0;url=index.php?page=siswa_mi">';
	break;
}
?>
<?php }} ?>
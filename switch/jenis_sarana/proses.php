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
			
			$nama = inject_checker($connection,$_POST['jenis_sarana']);

			if($nama == NULL){
				// include_once 'switch/pesan-gagal.php';
				echo '<meta http-equiv="refresh" content="2;url=index.php?page=jenis_sarana">';
			}else{
				$qjsarana = mysqli_query($connection, "INSERT INTO lib_sarana(jenis_sarana)  VALUES('{$nama}')")OR die('Ada kesalahan pada query '.mysqli_error($connection));
				if ($qjsarana == true) {
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
							window.location.replace('index.php?page=jenis_sarana');
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
							window.location.replace('index.php?page=jenis_sarana&act=tambah');
							} ,3000); 
							</script>";
				}
			}
				
	break;
	
	case 'ubah':
		if (isset($_POST['simpan'])) {

			$id = inject_checker($connection,$_POST['id_jenis']);
			$nama = inject_checker($connection,$_POST['jenis_sarana']);
			
			
			$qjsarana = mysqli_query($connection,"UPDATE lib_sarana SET jenis_sarana = '{$nama}' WHERE id_jenis_sarana = '{$id}'") OR die('Ada kesalahan pada query '.mysqli_error($connection));
			if ($qjsarana == true) {
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
						window.location.replace('index.php?page=jenis_sarana');
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
						window.location.replace('index.php?page=jenis_sarana&act=edit&id=$id');
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
						window.location.replace('index.php?page=jenis_sarana&act=edit&id=$id');
						} ,3000); 
					</script>";
		}
	break;

	case 'hapus':
		if (isset($_GET['id'])) {
			$ids = $_GET['id'];

			$query = mysqli_query($connection, "DELETE FROM lib_sarana WHERE id_jenis_sarana='$ids'") or die('Ada kesalahan pada query delete : '.mysqli_error($connection));

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
						window.location.replace('index.php?page=jenis_sarana');
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
						window.location.replace('index.php?page=jenis_sarana');
						} ,3000); 
					</script>";
		}
	break;
	
	default:
		echo '<meta http-equiv="refresh" content="0;url=index.php?page=jenis_sarana">';
	break;
}
?>
<?php }} ?>
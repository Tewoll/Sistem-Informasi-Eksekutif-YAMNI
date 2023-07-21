<div class="content-wrapper" style="min-height: 307px;">
	<section class="content">
		<?php
		$baca = 'index.php?page=';
		$bgp = isset($_GET['page']) ? $_GET['page'] : '';
		$page = inject_checker($connection,$bgp);
		if(empty($page)){
			require_once 'switch/home.php';
		}else{
			
			switch ($page) 
			{
				case 'home':
				require_once 'switch/home.php';
				break;
		// Data siswa
				case 'siswa_mi':
				$bct = isset($_GET['act']) ? $_GET['act'] : '';
				$act = inject_checker($connection,$bct);
				switch ($act) {
					case 'tambah':
					include 'switch/siswa_mi/tambah.php';
					break;
					case 'edit':
					include 'switch/siswa_mi/edit.php';
					break;  
					case 'proses':
					include 'switch/siswa_mi/proses.php';
					break;
					default:
					include 'switch/siswa_mi/index.php';
					break;
				}
				
				break;

				case 'siswa_mts':
				$bct = isset($_GET['act']) ? $_GET['act'] : '';
				$act = inject_checker($connection,$bct);
				switch ($act) {
					case 'tambah':
					include 'switch/siswa_mts/tambah.php';
					break;
					case 'edit':
					include 'switch/siswa_mts/edit.php';
					break;  
					case 'proses':
					include 'switch/siswa_mts/proses.php';
					break;
					default:
					include 'switch/siswa_mts/index.php';
					break;
				}
				
				break;

				case 'siswa_ma':
				$bct = isset($_GET['act']) ? $_GET['act'] : '';
				$act = inject_checker($connection,$bct);
				switch ($act) {
					case 'tambah':
					include 'switch/siswa_ma/tambah.php';
					break;
					case 'edit':
					include 'switch/siswa_ma/edit.php';
					break;  
					case 'proses':
					include 'switch/siswa_ma/proses.php';
					break;
					default:
					include 'switch/siswa_ma/index.php';
					break;
				}
				
				break;
		// siswa
		// Data guru
				case 'guru_mi':
				$bct = isset($_GET['act']) ? $_GET['act'] : '';
				$act = inject_checker($connection,$bct);
				switch ($act) {
					case 'tambah':
					include 'switch/guru_mi/tambah.php';
					break;
					case 'edit':
					include 'switch/guru_mi/edit.php';
					break;  
					case 'proses':
					include 'switch/guru_mi/proses.php';
					break;
					default:
					include 'switch/guru_mi/index.php';
					break;
				}
				
				break;

				case 'guru_mts':
				$bct = isset($_GET['act']) ? $_GET['act'] : '';
				$act = inject_checker($connection,$bct);
				switch ($act) {
					case 'tambah':
					include 'switch/guru_mts/tambah.php';
					break;
					case 'edit':
					include 'switch/guru_mts/edit.php';
					break;  
					case 'proses':
					include 'switch/guru_mts/proses.php';
					break;
					default:
					include 'switch/guru_mts/index.php';
					break;
				}
				
				break;

				case 'guru_ma':
				$bct = isset($_GET['act']) ? $_GET['act'] : '';
				$act = inject_checker($connection,$bct);
				switch ($act) {
					case 'tambah':
					include 'switch/guru_ma/tambah.php';
					break;
					case 'edit':
					include 'switch/guru_ma/edit.php';
					break;  
					case 'proses':
					include 'switch/guru_ma/proses.php';
					break;
					default:
					include 'switch/guru_ma/index.php';
					break;
				}
				
				break;
		// guru
				case 'jenis_sarana':
				$bct = isset($_GET['act']) ? $_GET['act'] : '';
				$act = inject_checker($connection,$bct);
				switch ($act) { 
					case 'proses':
					include 'switch/jenis_sarana/proses.php';
					break;
					default:
					include 'switch/jenis_sarana/index.php';
					break;
				}
				
				break;
		// Data sarana
				case 'sarana':
				$bct = isset($_GET['act']) ? $_GET['act'] : '';
				$act = inject_checker($connection,$bct);
				switch ($act) {
					case 'tambah':
					include 'switch/sarana/tambah.php';
					break;
					case 'edit':
					include 'switch/sarana/edit.php';
					break;  
					case 'proses':
					include 'switch/sarana/proses.php';
					break;
					default:
					include 'switch/sarana/index.php';
					break;
				}
				
				break;
		// sarana
				case 'jenis_prasarana':
				$bct = isset($_GET['act']) ? $_GET['act'] : '';
				$act = inject_checker($connection,$bct);
				switch ($act) { 
					case 'proses':
					include 'switch/jenis_prasarana/proses.php';
					break;
					default:
					include 'switch/jenis_prasarana/index.php';
					break;
				}
				
				break;
		// Data prasarana
				case 'prasarana':
				$bct = isset($_GET['act']) ? $_GET['act'] : '';
				$act = inject_checker($connection,$bct);
				switch ($act) {
					case 'tambah':
					include 'switch/prasarana/tambah.php';
					break;
					case 'edit':
					include 'switch/prasarana/edit.php';
					break;  
					case 'proses':
					include 'switch/prasarana/proses.php';
					break;
					default:
					include 'switch/prasarana/index.php';
					break;
				}
				
				break;
		// prasarana

		// grafik
				case 'grafik_siswa':
				$bct = isset($_GET['act']) ? $_GET['act'] : '';
				$act = inject_checker($connection,$bct);
				switch ($act) {
					default:
					include 'switch/grafik_siswa/index.php';
					break;
				}
				
				break;

				case 'grafik_guru':
				$bct = isset($_GET['act']) ? $_GET['act'] : '';
				$act = inject_checker($connection,$bct);
				switch ($act) {
					default:
					include 'switch/grafik_guru/index.php';
					break;
				}
				
				break;

				case 'grafik_sapras':
				$bct = isset($_GET['act']) ? $_GET['act'] : '';
				$act = inject_checker($connection,$bct);
				switch ($act) {
					default:
					include 'switch/grafik_sapras/index.php';
					break;
				}
				
				break;

		// grafik

		// Data pengaturan
				case 'pengaturan':
				$bct = isset($_GET['act']) ? $_GET['act'] : '';
				$act = inject_checker($connection,$bct);
				switch ($act) {
					case 'edit':
					include 'switch/pengaturan/edit.php';
					break;
					case 'proses':
					include 'switch/pengaturan/proses.php';
					break;
					case 'tambah':
					include 'switch/pengaturan/tambah.php';
					break; 
					default:
					include 'switch/pengaturan/index.php';
					break;
				}
				
				break;
		// pengaturan

		// logout

				case 'logout':
				$bct = isset($_GET['act']) ? $_GET['act'] : '';
				$act = inject_checker($connection,$bct);
				switch ($act) {
					default:
					include 'logout.php';
					break;
				}
				
				break;		
			}
		}
		?>
	</section>
</div>


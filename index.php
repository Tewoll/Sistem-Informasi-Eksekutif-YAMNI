<?php  
ob_start(); 
session_start();
require_once("config/database.php");
require_once("config/functions.php");
require_once("plugins/importexcel/excel_reader.php");
$sesi = '';
if(empty($_SESSION['iduser'])){
  echo '<meta http-equiv="refresh" content="0;url=login.php">';
}else{
  $sesi = $_SESSION['iduser'];
}
$qus                = "SELECT id_user, sessions, level FROM user WHERE id_user = '{$sesi}'";
$run_qus            = mysqli_query($connection, $qus);
if(mysqli_num_rows($run_qus) == 1){
  $vus              = mysqli_fetch_assoc($run_qus);    
  $level            = $vus['level'];
  $idus            = $vus['id_user'];


  $qsem             = "SELECT * FROM lib_tajaran WHERE status = 'Aktif'";
  $rsem             = mysqli_query($connection,$qsem);
  $data_sem         = mysqli_num_rows($rsem);
  if ($data_sem > 0) { while($sem = mysqli_fetch_assoc($rsem)){
    $id_sem         = $sem['id_tajaran'];
    $tahun_ajaran   = $sem['tahun_ajaran'];

?>
<!DOCTYPE html>
<html style="height: auto;" class="" lang="id">

<?php include_once 'include/header.php'; ?>

<body class="control-sidebar-slide-open sidebar-mini layout-fixed layout-navbar-fixed" style="height: auto;">
  <div class="wrapper">

    <?php include_once 'include/navbar.php'; ?>

    <?php include_once 'include/sidebar.php'; ?>
    
    <?php require_once 'include/modul.php'; ?>

    <?php include_once 'include/footer.php'; ?>
    
  </div>
  <!-- ./wrapper -->
  <?php include_once 'include/javascript.php'; ?>

</body>
</html>
<?php }}
}else{ echo '<meta http-equiv="refresh" content="3;url=login.php">'; } ?>
<?php ob_end_flush(); ?>
<?php
ob_start();
session_start();
require_once("config/database.php");
require_once("config/functions.php");

$uid = isset($_SESSION['iduser']) ? trim($_SESSION['iduser']) : '';
if (!empty($uid == True)) {
   header("Location:index.php?page=home"); 
}else{

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistem Informasi Eksekutif YAMNI</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <style>
  body {
            background: #778899;
            background: url(dist/img/background.jpg);
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
        }
  </style>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="index.php" class="h4"><b>Sistem Informasi Eksekutif</b><br>YAMNI</a>
    </div>
    <div class="card-body">
      <div class="ribbon-wrapper ribbon-lg">
        <div class="ribbon bg-info">TewollArt</div>
      </div>
      <p class="login-box-msg">
          <?php
          if(isset($_POST['user_login_btn'])){
              $login_username = inject_checker($connection, $_POST['user']);
              $lg_password = inject_checker($connection, $_POST['pass']);
              $login_password = sha1($lg_password);
              
              if(empty($login_username)){
                  $error_msg = "Username masih kosong";
                  echo $error_msg;
                  header('Refresh:2;');
                  header('Url:login.php;');
              }elseif(empty($login_password)){
                  $error_msg = "Password masih kosong";
                  echo $error_msg;
                  header('Refresh:2;');
                  header('Url:login.php;');
              }else{
                  $query = " SELECT id_user FROM user WHERE username = '{$login_username}'";
                  $run_query = mysqli_query($connection, $query);
                  
                  if(mysqli_num_rows($run_query) == 1){
                      
                      
                      while($result = mysqli_fetch_assoc($run_query)){
                          $user_id = $result['id_user'];
                          $queryx = "SELECT id_user, sessions FROM user WHERE id_user = '{$user_id}' and pass = '{$login_password}'";
                          $run_queryx = mysqli_query($connection, $queryx);
                          if(mysqli_num_rows($run_queryx) == 1){
                              $_SESSION['iduser'] = $user_id;
                              $sid_lama = session_id();
                              session_regenerate_id();
                              $sid_baru = session_id();
                              mysqli_query($connection,"UPDATE user SET sessions = '{$sid_baru}' where id_user = '{$user_id}'") OR die('Ada kesalahan pada query insert update : '.mysqli_error($connection));
                              $_SESSION['idsesi'] = $sid_baru;
                              $sukses_msg = "Berhasil login, silakan tunggu beberapa saat anda akan diarahkan ke halaman dashboard";
                              echo $sukses_msg;
                              echo '<meta http-equiv="refresh" content="3;url=index.php">';
                          }else{
                              $error_msg = "Password salah";
                              echo $error_msg;
                              header('Refresh:2;');
                              header('Url:login.php;');
                          }
                      }
                  }else{
                      $error_msg = "Username salah";
                      echo $error_msg;
                      header('Refresh:2;');
                      header('Url:login.php;');
                  }
              }
          }
          
          ?>
      </p>

       <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" name="login">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Username" name="user">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="pass" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <input onclick="return(submitlogin());" type="submit" name="user_login_btn" class="btn btn-primary btn-block" value="Login" />
          </div>
          <!-- /.col -->
        </div>
      </form>

    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>



<?php ob_end_flush(); } ?>
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Halaman Awal</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                    <li class="breadcrumb-item active">Home</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">

        <!-- Default box -->
        <div class="card card-outline card-success">
            <div class="card-header">
                <h3 class="card-title">Selamat datang <?php echo $level; ?> di Sistem Informasi Eksekutif YAMNI.</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>

</section>
<!-- /.content -->

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="callout callout-info bg-info">
                  <h5><i class="fas fa-info"></i> Catatan:</h5>
                  Tahun ajaran akademik pada saat ini yaitu <b>Tahun Ajaran <?php echo $tahun_ajaran; ?></b>. <?php if ($level == 'admin') {
                      // code...
                  ?> Anda dapat mengubah tahun ajaran di menu <a href="index.php?page=pengaturan">Pengaturan</a>
                  <?php }else{} ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- <section class="content">
    <div class="container-fluid">
        <div class="row">
            <?php 
            $query = "SELECT count(*) AS total from siswa";
            $result = mysqli_query($connection,$query);
            $data = mysqli_num_rows($result);
            if ($data > 0) { while($row = mysqli_fetch_assoc($result)){
            
            ?>
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box">
                    <span class="info-box-icon"><i class="fas fa-users"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Seluruh Siswa YAMNI</span>
                        <span class="info-box-number"><?php echo $row['total'];?></span>
                        <div class="progress">
                            <div class="progress-bar" style="width: 0%"></div>
                        </div>
                        <span class="progress-description">
                        <a href="index.php?page=grafik_siswa" class="small-box-footer">Lihat grafik <i class="fas fa-arrow-circle-right"></i></a></span>
                    </div>
                </div>
            </div>
            <?php } } 

            $query = "SELECT count(*) AS total from guru";
            $result = mysqli_query($connection,$query);
            $data = mysqli_num_rows($result);
            if ($data > 0) { while($row = mysqli_fetch_assoc($result)){
            
            ?>
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box">
                    <span class="info-box-icon"><i class="fas fa-chalkboard-teacher"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Seluruh Guru YAMNI</span>
                        <span class="info-box-number"><?php echo $row['total'];?></span>
                        <div class="progress">
                            <div class="progress-bar" style="width: 0%"></div>
                        </div>
                        <span class="progress-description">
                        <a href="index.php?page=grafik_guru" class="small-box-footer">Lihat grafik <i class="fas fa-arrow-circle-right"></i></a></span>
                    </div>
                </div>
            </div>

            <?php } } 

            $query = "SELECT count(*) AS total from sarana";
            $result = mysqli_query($connection,$query);
            $data = mysqli_num_rows($result);
            if ($data > 0) { while($row = mysqli_fetch_assoc($result)){
            
            ?>
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box">
                    <span class="info-box-icon"><i class="fas fa-laptop-house"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Seluruh Sarana YAMNI</span>
                        <span class="info-box-number"><?php echo $row['total'];?></span>
                        <div class="progress">
                            <div class="progress-bar" style="width: 0%"></div>
                        </div>
                        <span class="progress-description">
                        <a href="index.php?page=grafik_sapras" class="small-box-footer">Lihat grafik <i class="fas fa-arrow-circle-right"></i></a></span>
                    </div>
                </div>
            </div>
            <?php } } 

            $query = "SELECT count(*) AS total from prasarana";
            $result = mysqli_query($connection,$query);
            $data = mysqli_num_rows($result);
            if ($data > 0) { while($row = mysqli_fetch_assoc($result)){
            
            ?>

            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box">
                    <span class="info-box-icon"><i class="fas fa-building"></i></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Seluruh Prasarana YAMNI</span>
                        <span class="info-box-number"><?php echo $row['total'];?></span>
                        <div class="progress">
                            <div class="progress-bar" style="width: 0%"></div>
                        </div>
                        <span class="progress-description">
                        <a href="index.php?page=grafik_sapras" class="small-box-footer">Lihat grafik <i class="fas fa-arrow-circle-right"></i></a></span>
                    </div>
                </div>
            </div>
            <?php } } ?>
        </div>
    </div>
</section> -->
<!-- <section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title"><i class="far fa-chart-bar"></i>
                            Data Grafik YAMNI
                        </h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="card-body">
                        <figure class="highcharts-figure">
                            <div id="data-grafik"></div>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

<section class="content">
    <div class="container-fluid">
        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <div class="col-md-4">
                <!-- Info Boxes Style 2 -->
                <?php 
                $query = "SELECT count(*) AS total from siswa";
                $result = mysqli_query($connection,$query);
                $data = mysqli_num_rows($result);
                if ($data > 0) { while($row = mysqli_fetch_assoc($result)){
                ?>
                <div class="info-box mb-4">
                    <span class="info-box-icon"><i class="fas fa-users"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Seluruh Siswa YAMNI adalah <b><?php echo $row['total'];?></b></span>
                        <div class="progress">
                            <div class="progress-bar" style="width: 0%"></div>
                        </div>
                        <span class="progress-description"><a href="index.php?page=grafik_siswa" class="small-box-footer">Lihat grafik <i class="fas fa-arrow-circle-right"></i></a></span>
                    </div>
                </div>  
                <?php } } 
                $query = "SELECT count(*) AS total from guru";
                $result = mysqli_query($connection,$query);
                $data = mysqli_num_rows($result);
                if ($data > 0) { while($row = mysqli_fetch_assoc($result)){
                ?>

                <div class="info-box mb-4">
                    <span class="info-box-icon"><i class="fas fa-chalkboard-teacher"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Seluruh Guru YAMNI adalah <b><?php echo $row['total'];?></b></span>
                        <div class="progress">
                            <div class="progress-bar" style="width: 0%"></div>
                        </div>
                        <span class="progress-description"><a href="index.php?page=grafik_guru" class="small-box-footer">Lihat grafik <i class="fas fa-arrow-circle-right"></i></a></span>
                    </div>
                </div>
                <?php } } 

                $query = "SELECT count(*) AS total from sarana";
                $result = mysqli_query($connection,$query);
                $data = mysqli_num_rows($result);
                if ($data > 0) { while($row = mysqli_fetch_assoc($result)){
                ?>

                <div class="info-box mb-4">
                    <span class="info-box-icon"><i class="fas fa-laptop-house"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Seluruh Sarana YAMNI adalah <b><?php echo $row['total'];?></b></span>
                        <div class="progress">
                            <div class="progress-bar" style="width: 0%"></div>
                        </div>
                        <span class="progress-description"><a href="index.php?page=grafik_sapras" class="small-box-footer">Lihat grafik <i class="fas fa-arrow-circle-right"></i></a></span>
                    </div>
                </div>
                <?php } } 

                $query = "SELECT count(*) AS total from prasarana";
                $result = mysqli_query($connection,$query);
                $data = mysqli_num_rows($result);
                if ($data > 0) { while($row = mysqli_fetch_assoc($result)){

                ?>

                <div class="info-box mb-4">
                    <span class="info-box-icon"><i class="fas fa-building"></i></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Seluruh Prasarana YAMNI adalah <b><?php echo $row['total'];?></b></span>
                        <div class="progress">
                            <div class="progress-bar" style="width: 0%"></div>
                        </div>
                        <span class="progress-description"><a href="index.php?page=grafik_sapras" class="small-box-footer">Lihat grafik <i class="fas fa-arrow-circle-right"></i></a></span>
                    </div>
                </div>
                <?php } } ?>
                <!-- /.info-box -->

            </div>
            <!-- /.col -->

            <div class="col-md-8">
                <!-- MAP & BOX PANE -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Grafik YAMNI</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <div class="d-md-flex">
                            <div class="p-1 flex-fill" style="overflow: hidden">
                                <!-- Map will be created here -->
                                <figure class="highcharts-figure">
                                    <div id="data-grafik"></div>
                                </figure>
                            </div>
                        </div><!-- /.d-md-flex -->
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.col -->

            
        </div>
        <!-- /.row -->
    </div>
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title"><i class="far fa-chart-bar"></i>
                            Data Grafik Siswa MI
                        </h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5>Grafik Siswa Madrasah Ibtidaiyah</h5>
                        <div id="grafik_angkatan_siswa_mi" style="height: 270px"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title"><i class="far fa-chart-bar"></i>
                            Data Grafik Siswa MTs
                        </h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5>Grafik Siswa Madrasah Tsanawiyah</h5>
                        <div id="grafik_angkatan_siswa_mts" style="height: 270px"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title"><i class="far fa-chart-bar"></i>
                            Data Grafik Siswa MA
                        </h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5>Grafik Siswa Madrasah Aliyah</h5>
                        <div id="grafik_angkatan_siswa_ma" style="height: 270px"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
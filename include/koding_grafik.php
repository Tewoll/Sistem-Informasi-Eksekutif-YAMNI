<!-- Grafik Siswa -->
<script type="text/javascript">
    // Radialize the colors
    Highcharts.setOptions({
        colors: Highcharts.map(Highcharts.getOptions().colors, function (color) {
            return {
                radialGradient: {
                    cx: 0.5,
                    cy: 0.3,
                    r: 0.7
                },
                stops: [
                [0, color],
                [1, Highcharts.color(color).brighten(-0.3).get('rgb')] // darken
                ]
            };
        })
    });

    Highcharts.chart('grafik_siswa', {
        chart: {
            type: 'column'
        },
        title: {
            text: '<b>Data Grafik Siswa Keseluruhan.</b>'
        },
        subtitle: {
            <?php
            $rows = mysqli_query($connection, "SELECT COUNT(id) AS tot FROM siswa WHERE id_tajaran = '$id_sem'");
            while($row = mysqli_fetch_array($rows)){
                $total = $row['tot'];
                ?>
            text: 'Total Jumlah Seluruh Siswa :<b><?php echo $total ;?> Siswa</b>'
            <?php } ?>
        },
        accessibility: {
            announceNewData: {
                enabled: true
            }
        },
        xAxis: {
            type: 'category'
        },
        yAxis: {
            title: {
                text: 'Jumlah'
            }

        },
        legend: {
            enabled: false
        },
        plotOptions: {
            series: {
                borderWidth: 0,
                dataLabels: {
                    enabled: true,
                    format: '{point.y:3f} Siswa'
                }
            }
        },

        tooltip: {
            headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
            pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:3f} Siswa</b><br/>'
        },

        series: [
        {
            name: "Jumlah Data Siswa",
            colorByPoint: true,
            data: [
            {
                <?php
                $rows = mysqli_query($connection, "SELECT COUNT(id) AS jumlah FROM siswa WHERE id_tingkat = '3' AND id_tajaran = '$id_sem'");
                while($row = mysqli_fetch_array($rows)){
                    $pd = $row['jumlah'];
                ?>
                name: "Madrasah Ibtidaiyah",
                y: <?php echo $pd ;?>
                <?php
                }
                ?>
            },
            {
                <?php
                $rows = mysqli_query($connection, "SELECT COUNT(id) AS jumlah FROM siswa WHERE id_tingkat = '2' AND id_tajaran = '$id_sem'");
                while($row = mysqli_fetch_array($rows)){
                    $pd = $row['jumlah'];

                ?>
                name: "Madrasah Tsanawiyah",
                y: <?php echo $pd ;?>
                <?php
                }
                ?>
            },
            {
                <?php
                $rows = mysqli_query($connection, "SELECT COUNT(id) AS jumlah FROM siswa WHERE id_tingkat = '1' AND id_tajaran = '$id_sem'");
                while($row = mysqli_fetch_array($rows)){
                    $pd = $row['jumlah'];

                ?>
                name: "Madrasah Aliyah",
                y: <?php echo $pd ;?>
                <?php
                }
                ?>
            }
            ]
        }
        ]
    });
</script>

<!-- Grafik Jenkel Siswa -->
<script type="text/javascript">
    // Build the chart
    Highcharts.chart('grafik_jenkel_mi', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Data Siswa MI Menurut Jenis Kelamin'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.y:3f} Siswa</b>'
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.2f}%',
                    connectorColor: 'silver'
                }
            }
        },
        series: [{
            name: 'Jumlah',
            data: [
            { name: 'Laki-laki', <?php
                $rows = mysqli_query($connection, "SELECT COUNT(id) AS jumlah FROM siswa WHERE jenkel = 'Laki-Laki'AND id_tingkat='3' AND id_tajaran = '$id_sem'");
                while($row = mysqli_fetch_array($rows)){
                    $pd = $row['jumlah'];
                ?>
                y: <?php echo $pd ;?>
                <?php } ?> },
            { name: 'Perempuan', <?php
                $rows = mysqli_query($connection, "SELECT COUNT(id) AS jumlah FROM siswa WHERE jenkel = 'Perempuan'AND id_tingkat='3' AND id_tajaran = '$id_sem'");
                while($row = mysqli_fetch_array($rows)){
                    $pd = $row['jumlah'];
                ?>
                y: <?php echo $pd ;?>
                <?php } ?> }
            ]
        }]
    });
</script>
<script type="text/javascript">
    // Build the chart
    Highcharts.chart('grafik_jenkel_mts', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Data Siswa MTs Menurut Jenis Kelamin'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.y:3f} Siswa</b>'
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.2f}%',
                    connectorColor: 'silver'
                }
            }
        },
        series: [{
            name: 'Jumlah',
            data: [
            { name: 'Laki-laki', <?php
                $rows = mysqli_query($connection, "SELECT COUNT(id) AS jumlah FROM siswa WHERE jenkel = 'Laki-Laki' AND id_tingkat='2' AND id_tajaran = '$id_sem'");
                while($row = mysqli_fetch_array($rows)){
                    $pd = $row['jumlah'];
                ?>
                y: <?php echo $pd ;?>
                <?php } ?> },
            { name: 'Perempuan', <?php
                $rows = mysqli_query($connection, "SELECT COUNT(id) AS jumlah FROM siswa WHERE jenkel = 'Perempuan'AND id_tingkat='2' AND id_tajaran = '$id_sem'");
                while($row = mysqli_fetch_array($rows)){
                    $pd = $row['jumlah'];
                ?>
                y: <?php echo $pd ;?>
                <?php } ?> }
            ]
        }]
    });
</script>
<script type="text/javascript">
    // Build the chart
    Highcharts.chart('grafik_jenkel_ma', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Data Siswa MA Menurut Jenis Kelamin'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.y:3f} Siswa</b>'
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.2f}%',
                    connectorColor: 'silver'
                }
            }
        },
        series: [{
            name: 'Jumlah',
            data: [
            { name: 'Laki-laki', <?php
                $rows = mysqli_query($connection, "SELECT COUNT(id) AS jumlah FROM siswa WHERE jenkel = 'Laki-Laki' AND id_tingkat='1' AND id_tajaran = '$id_sem'");
                while($row = mysqli_fetch_array($rows)){
                    $pd = $row['jumlah'];
                ?>
                y: <?php echo $pd ;?>
                <?php } ?> },
            { name: 'Perempuan', <?php
                $rows = mysqli_query($connection, "SELECT COUNT(id) AS jumlah FROM siswa WHERE jenkel = 'Perempuan'AND id_tingkat='1' AND id_tajaran = '$id_sem'");
                while($row = mysqli_fetch_array($rows)){
                    $pd = $row['jumlah'];
                ?>
                y: <?php echo $pd ;?>
                <?php } ?> }
            ]
        }]
    });
</script>

<!-- Grafik Kelas -->
<script type="text/javascript">
    // Build the chart
    Highcharts.chart('grafik_kelas_mi', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Data Siswa MI Menurut Tingkatan Kelas'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.y:3f} Siswa</b>'
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.2f}%',
                    connectorColor: 'silver'
                }
            }
        },
        series: [{
            name: 'Jumlah',
            data: [
            { name: 'Kelas I', <?php
                $rows = mysqli_query($connection, "SELECT COUNT(id) AS jumlah FROM siswa WHERE kelas = 'I' AND id_tingkat = '3' AND id_tajaran = '$id_sem'");
                while($row = mysqli_fetch_array($rows)){
                    $pd = $row['jumlah'];
                ?>
                y: <?php echo $pd ;?>
                <?php } ?> },
            { name: 'Kelas II', <?php
                $rows = mysqli_query($connection, "SELECT COUNT(id) AS jumlah FROM siswa WHERE kelas = 'II' AND id_tingkat = '3' AND id_tajaran = '$id_sem'");
                while($row = mysqli_fetch_array($rows)){
                    $pd = $row['jumlah'];
                ?>
                y: <?php echo $pd ;?>
                <?php } ?> },
            { name: 'Kelas III', <?php
                $rows = mysqli_query($connection, "SELECT COUNT(id) AS jumlah FROM siswa WHERE kelas = 'III' AND id_tingkat = '3' AND id_tajaran = '$id_sem'");
                while($row = mysqli_fetch_array($rows)){
                    $pd = $row['jumlah'];
                ?>
                y: <?php echo $pd ;?>
                <?php } ?> },
            { name: 'Kelas IV', <?php
                $rows = mysqli_query($connection, "SELECT COUNT(id) AS jumlah FROM siswa WHERE kelas = 'IV' AND id_tingkat = '3' AND id_tajaran = '$id_sem'");
                while($row = mysqli_fetch_array($rows)){
                    $pd = $row['jumlah'];
                ?>
                y: <?php echo $pd ;?>
                <?php } ?> },
            { name: 'Kelas V', <?php
                $rows = mysqli_query($connection, "SELECT COUNT(id) AS jumlah FROM siswa WHERE kelas = 'V' AND id_tingkat = '3' AND id_tajaran = '$id_sem'");
                while($row = mysqli_fetch_array($rows)){
                    $pd = $row['jumlah'];
                ?>
                y: <?php echo $pd ;?>
                <?php } ?> },
            { name: 'Kelas VI', <?php
                $rows = mysqli_query($connection, "SELECT COUNT(id) AS jumlah FROM siswa WHERE kelas = 'VI' AND id_tingkat = '3' AND id_tajaran = '$id_sem'");
                while($row = mysqli_fetch_array($rows)){
                    $pd = $row['jumlah'];
                ?>
                y: <?php echo $pd ;?>
                <?php } ?> }
            ]
        }]
    });
</script>
<script type="text/javascript">
    // Build the chart
    Highcharts.chart('grafik_kelas_mts', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Data Siswa MTs Menurut Tingkatan Kelas'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.y:3f} Siswa</b>'
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.2f}%',
                    connectorColor: 'silver'
                }
            }
        },
        series: [{
            name: 'Jumlah',
            data: [
            { name: 'Kelas VII', <?php
                $rows = mysqli_query($connection, "SELECT COUNT(id) AS jumlah FROM siswa WHERE kelas = 'VII' AND id_tingkat = '2' AND id_tajaran = '$id_sem'");
                while($row = mysqli_fetch_array($rows)){
                    $pd = $row['jumlah'];
                ?>
                y: <?php echo $pd ;?>
                <?php } ?> },
            { name: 'Kelas VIII', <?php
                $rows = mysqli_query($connection, "SELECT COUNT(id) AS jumlah FROM siswa WHERE kelas = 'VIII' AND id_tingkat = '2' AND id_tajaran = '$id_sem'");
                while($row = mysqli_fetch_array($rows)){
                    $pd = $row['jumlah'];
                ?>
                y: <?php echo $pd ;?>
                <?php } ?> },
            { name: 'Kelas IV', <?php
                $rows = mysqli_query($connection, "SELECT COUNT(id) AS jumlah FROM siswa WHERE kelas = 'IX' AND id_tingkat = '2' AND id_tajaran = '$id_sem'");
                while($row = mysqli_fetch_array($rows)){
                    $pd = $row['jumlah'];
                ?>
                y: <?php echo $pd ;?>
                <?php } ?> }
            ]
        }]
    });
</script>
<script type="text/javascript">
    // Build the chart
    Highcharts.chart('grafik_kelas_ma', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Data Siswa MA Menurut Tingkatan Kelas'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.y:3f} Siswa</b>'
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.2f}%',
                    connectorColor: 'silver'
                }
            }
        },
        series: [{
            name: 'Jumlah',
            data: [
            { name: 'Kelas X', <?php
                $rows = mysqli_query($connection, "SELECT COUNT(id) AS jumlah FROM siswa WHERE kelas = 'X' AND id_tingkat = '1' AND id_tajaran = '$id_sem'");
                while($row = mysqli_fetch_array($rows)){
                    $pd = $row['jumlah'];
                ?>
                y: <?php echo $pd ;?>
                <?php } ?> },
            { name: 'Kelas XI', <?php
                $rows = mysqli_query($connection, "SELECT COUNT(id) AS jumlah FROM siswa WHERE kelas = 'XI' AND id_tingkat = '1' AND id_tajaran = '$id_sem'");
                while($row = mysqli_fetch_array($rows)){
                    $pd = $row['jumlah'];
                ?>
                y: <?php echo $pd ;?>
                <?php } ?> },
            { name: 'Kelas XII', <?php
                $rows = mysqli_query($connection, "SELECT COUNT(id) AS jumlah FROM siswa WHERE kelas = 'XII' AND id_tingkat = '1' AND id_tajaran = '$id_sem'");
                while($row = mysqli_fetch_array($rows)){
                    $pd = $row['jumlah'];
                ?>
                y: <?php echo $pd ;?>
                <?php } ?> }
            ]
        }]
    });
</script>

<!-- Grafik Jenis Asal Sekolah Siswa -->
<script type="text/javascript">
    // Build the chart
    Highcharts.chart('grafik_asal_mi', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Data Siswa MI Menurut Jenis Asal Sekolah'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.y:3f} Siswa</b>'
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.2f}%',
                    connectorColor: 'silver'
                }
            }
        },
        series: [{
            name: 'Jumlah',
            data: [
            { name: 'Taman Kanak-Kanak (TK)', <?php
                $rows = mysqli_query($connection, "SELECT COUNT(id) AS jumlah FROM siswa WHERE id_asal_tingkat_sekolah = '4' AND id_tingkat = '3' AND id_tajaran = '$id_sem'");
                while($row = mysqli_fetch_array($rows)){
                    $pd = $row['jumlah'];
                ?>
                y: <?php echo $pd ;?>
                <?php } ?> },
            { name: 'Tidak Ada', <?php
                $rows = mysqli_query($connection, "SELECT COUNT(id) AS jumlah FROM siswa WHERE id_asal_tingkat_sekolah = '5' AND id_tingkat = '3' AND id_tajaran = '$id_sem'");
                while($row = mysqli_fetch_array($rows)){
                    $pd = $row['jumlah'];
                ?>
                y: <?php echo $pd ;?>
                <?php } ?> }
            ]
        }]
    });
</script>
<script type="text/javascript">
    // Build the chart
    Highcharts.chart('grafik_asal_mts', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Data Siswa MTs Menurut Jenis Asal Sekolah'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.y:3f} Siswa</b>'
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.2f}%',
                    connectorColor: 'silver'
                }
            }
        },
        series: [{
            name: 'Jumlah',
            data: [
            { name: 'Sekolah Dasar (SD)', <?php
                $rows = mysqli_query($connection, "SELECT COUNT(id) AS jumlah FROM siswa WHERE id_asal_tingkat_sekolah = '6' AND id_tingkat = '2' AND id_tajaran = '$id_sem'");
                while($row = mysqli_fetch_array($rows)){
                    $pd = $row['jumlah'];
                ?>
                y: <?php echo $pd ;?>
                <?php } ?> },
            { name: 'Madrasah Ibtidaiah', <?php
                $rows = mysqli_query($connection, "SELECT COUNT(id) AS jumlah FROM siswa WHERE id_asal_tingkat_sekolah = '3' AND id_tingkat = '2' AND id_tajaran = '$id_sem'");
                while($row = mysqli_fetch_array($rows)){
                    $pd = $row['jumlah'];
                ?>
                y: <?php echo $pd ;?>
                <?php } ?> }
            ]
        }]
    });
</script>
<script type="text/javascript">
    // Build the chart
    Highcharts.chart('grafik_asal_ma', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Data Siswa MA Menurut Jenis Asal Sekolah'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.y:3f} Siswa</b>'
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.2f}%',
                    connectorColor: 'silver'
                }
            }
        },
        series: [{
            name: 'Jumlah',
            data: [
            { name: 'Sekolah Menengah Pertama (SMP)', <?php
                $rows = mysqli_query($connection, "SELECT COUNT(id) AS jumlah FROM siswa WHERE id_asal_tingkat_sekolah = '7' AND id_tingkat = '1' AND id_tajaran = '$id_sem'");
                while($row = mysqli_fetch_array($rows)){
                    $pd = $row['jumlah'];
                ?>
                y: <?php echo $pd ;?>
                <?php } ?> },
            { name: 'Madrasah Tsanawiyah', <?php
                $rows = mysqli_query($connection, "SELECT COUNT(id) AS jumlah FROM siswa WHERE id_asal_tingkat_sekolah = '2' AND id_tingkat = '1' AND id_tajaran = '$id_sem'");
                while($row = mysqli_fetch_array($rows)){
                    $pd = $row['jumlah'];
                ?>
                y: <?php echo $pd ;?>
                <?php } ?> }
            ]
        }]
    });
</script>

<!-- Grafik Kota Siswa -->
<script type="text/javascript">
    // Build the chart
    Highcharts.chart('grafik_kota_mi', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Data Siswa MI Menurut Kota Asal'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.y:3f} Siswa</b>'
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.2f}%',
                    connectorColor: 'silver'
                }
            }
        },
        series: [{
            name: 'Jumlah',
            data: [
            { name: 'Palembang', <?php
                $rows = mysqli_query($connection, "SELECT COUNT(id) AS jumlah FROM siswa WHERE kota = 'Palembang' AND id_tingkat = '3' AND id_tajaran = '$id_sem'");
                while($row = mysqli_fetch_array($rows)){
                    $pd = $row['jumlah'];
                ?>
                y: <?php echo $pd ;?>
                <?php } ?> },
            { name: 'Luar Palembang', <?php
                $rows = mysqli_query($connection, "SELECT COUNT(id) AS jumlah FROM siswa WHERE kota != 'Palembang' AND id_tingkat = '3' AND id_tajaran = '$id_sem'");
                while($row = mysqli_fetch_array($rows)){
                    $pd = $row['jumlah'];
                ?>
                y: <?php echo $pd ;?>
                <?php } ?> } 
            ]
        }]
    });
</script>
<script type="text/javascript">
    // Build the chart
    Highcharts.chart('grafik_kota_mts', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Data Siswa MTs Menurut Kota Asal'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.y:3f} Siswa</b>'
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.2f}%',
                    connectorColor: 'silver'
                }
            }
        },
        series: [{
            name: 'Jumlah',
            data: [
            { name: 'Palembang', <?php
                $rows = mysqli_query($connection, "SELECT COUNT(id) AS jumlah FROM siswa WHERE kota = 'Palembang' AND id_tingkat = '2' AND id_tajaran = '$id_sem'");
                while($row = mysqli_fetch_array($rows)){
                    $pd = $row['jumlah'];
                ?>
                y: <?php echo $pd ;?>
                <?php } ?> },
            { name: 'Luar Palembang', <?php
                $rows = mysqli_query($connection, "SELECT COUNT(id) AS jumlah FROM siswa WHERE kota != 'Palembang' AND id_tingkat = '2' AND id_tajaran = '$id_sem'");
                while($row = mysqli_fetch_array($rows)){
                    $pd = $row['jumlah'];
                ?>
                y: <?php echo $pd ;?>
                <?php } ?> }
            ]
        }]
    });
</script>
<script type="text/javascript">
    // Build the chart
    Highcharts.chart('grafik_kota_ma', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Data Siswa MA Menurut Kota Asal'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.y:3f} Siswa</b>'
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.2f}%',
                    connectorColor: 'silver'
                }
            }
        },
        series: [{
            name: 'Jumlah',
            data: [
            { name: 'Palembang', <?php
                $rows = mysqli_query($connection, "SELECT COUNT(id) AS jumlah FROM siswa WHERE kota = 'Palembang' AND id_tingkat = '1' AND id_tajaran = '$id_sem'");
                while($row = mysqli_fetch_array($rows)){
                    $pd = $row['jumlah'];
                ?>
                y: <?php echo $pd ;?>
                <?php } ?> },
            { name: 'Luar Palembang', <?php
                $rows = mysqli_query($connection, "SELECT COUNT(id) AS jumlah FROM siswa WHERE kota != 'Palembang' AND id_tingkat = '1' AND id_tajaran = '$id_sem'");
                while($row = mysqli_fetch_array($rows)){
                    $pd = $row['jumlah'];
                ?>
                y: <?php echo $pd ;?>
                <?php } ?> }
            ]
        }]
    });
</script>

<!-- Grafik Status Ekonomi Keluarga Siswa -->
<script type="text/javascript">
    // Build the chart
    Highcharts.chart('grafik_ekonomi_mi', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Data Siswa MI Menurut Status Ekonomi Keluarga'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.y:3f} Siswa</b>'
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.2f}%',
                    connectorColor: 'silver'
                }
            }
        },
        series: [{
            name: 'Jumlah',
            data: [
            { name: 'Mampu', <?php
                $rows = mysqli_query($connection, "SELECT COUNT(id) AS jumlah FROM siswa WHERE status_ekonomi = 'Mampu' AND id_tingkat = '3' AND id_tajaran = '$id_sem'");
                while($row = mysqli_fetch_array($rows)){
                    $pd = $row['jumlah'];
                ?>
                y: <?php echo $pd ;?>
                <?php } ?> },
            { name: 'Kurang Mampu', <?php
                $rows = mysqli_query($connection, "SELECT COUNT(id) AS jumlah FROM siswa WHERE status_ekonomi = 'Kurang Mampu' AND id_tingkat = '3' AND id_tajaran = '$id_sem'");
                while($row = mysqli_fetch_array($rows)){
                    $pd = $row['jumlah'];
                ?>
                y: <?php echo $pd ;?>
                <?php } ?> }
            ]
        }]
    });
</script>
<script type="text/javascript">
    // Build the chart
    Highcharts.chart('grafik_ekonomi_mts', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Data Siswa MTs Menurut Status Ekonomi Keluarga'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.y:3f} Siswa</b>'
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.2f}%',
                    connectorColor: 'silver'
                }
            }
        },
        series: [{
            name: 'Jumlah',
            data: [
            { name: 'Mampu', <?php
                $rows = mysqli_query($connection, "SELECT COUNT(id) AS jumlah FROM siswa WHERE status_ekonomi = 'Mampu' AND id_tingkat = '2' AND id_tajaran = '$id_sem'");
                while($row = mysqli_fetch_array($rows)){
                    $pd = $row['jumlah'];
                ?>
                y: <?php echo $pd ;?>
                <?php } ?> },
            { name: 'Kurang Mampu', <?php
                $rows = mysqli_query($connection, "SELECT COUNT(id) AS jumlah FROM siswa WHERE status_ekonomi = 'Kurang Mampu' AND id_tingkat = '2' AND id_tajaran = '$id_sem'");
                while($row = mysqli_fetch_array($rows)){
                    $pd = $row['jumlah'];
                ?>
                y: <?php echo $pd ;?>
                <?php } ?> }
            ]
        }]
    });
</script>
<script type="text/javascript">
    // Build the chart
    Highcharts.chart('grafik_ekonomi_ma', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Data Siswa MA Menurut Status Ekonomi Keluarga'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.y:3f} Siswa</b>'
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.2f}%',
                    connectorColor: 'silver'
                }
            }
        },
        series: [{
            name: 'Jumlah',
            data: [
            { name: 'Mampu', <?php
                $rows = mysqli_query($connection, "SELECT COUNT(id) AS jumlah FROM siswa WHERE status_ekonomi = 'Mampu' AND id_tingkat = '1' AND id_tajaran = '$id_sem'");
                while($row = mysqli_fetch_array($rows)){
                    $pd = $row['jumlah'];
                ?>
                y: <?php echo $pd ;?>
                <?php } ?> },
            { name: 'Kurang Mampu', <?php
                $rows = mysqli_query($connection, "SELECT COUNT(id) AS jumlah FROM siswa WHERE status_ekonomi = 'Kurang Mampu' AND id_tingkat = '1' AND id_tajaran = '$id_sem'");
                while($row = mysqli_fetch_array($rows)){
                    $pd = $row['jumlah'];
                ?>
                y: <?php echo $pd ;?>
                <?php } ?> }
            ]
        }]
    });
</script>

<!-- Grafik Guru -->
<script type="text/javascript">

    Highcharts.chart('grafik_guru', {
        chart: {
            type: 'column'
        },
        title: {
            text: '<b>Data Guru YAMNI Tahun Ajaran <?php echo $tahun_ajaran; ?>.</b>'
        },
        subtitle: {
            <?php
            $rows = mysqli_query($connection, "SELECT COUNT(id) AS tot FROM guru");
            while($row = mysqli_fetch_array($rows)){
                $total = $row['tot'];
                ?>
            text: 'Total Jumlah Seluruh Guru :<b><?php echo $total ;?> Guru</b>'
            <?php } ?>
        },
        accessibility: {
            announceNewData: {
                enabled: true
            }
        },
        xAxis: {
            type: 'category'
        },
        yAxis: {
            title: {
                text: 'Jumlah'
            }

        },
        legend: {
            enabled: false
        },
        plotOptions: {
            series: {
                borderWidth: 0,
                dataLabels: {
                    enabled: true,
                    format: '{point.y:3f} Guru'
                }
            }
        },

        tooltip: {
            headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
            pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:3f} Siswa</b><br/>'
        },

        series: [
        {
            name: "Jumlah Data Guru",
            colorByPoint: true,
            data: [
            {
                <?php
                $rows = mysqli_query($connection, "SELECT COUNT(id) AS jumlah FROM guru WHERE id_tingkat = '3'");
                while($row = mysqli_fetch_array($rows)){
                    $pd = $row['jumlah'];
                ?>
                name: "Madrasah Ibtidaiyah",
                y: <?php echo $pd ;?>
                <?php
                }
                ?>
            },
            {
                <?php
                $rows = mysqli_query($connection, "SELECT COUNT(id) AS jumlah FROM guru WHERE id_tingkat = '2'");
                while($row = mysqli_fetch_array($rows)){
                    $pd = $row['jumlah'];

                ?>
                name: "Madrasah Tsanawiyah",
                y: <?php echo $pd ;?>
                <?php
                }
                ?>
            },
            {
                <?php
                $rows = mysqli_query($connection, "SELECT COUNT(id) AS jumlah FROM guru WHERE id_tingkat = '1'");
                while($row = mysqli_fetch_array($rows)){
                    $pd = $row['jumlah'];

                ?>
                name: "Madrasah Aliyah",
                y: <?php echo $pd ;?>
                <?php
                }
                ?>
            }
            ]
        }
        ]
    });
</script>
<script type="text/javascript">
    // Build the chart
    Highcharts.chart('grafik_guru_jenkel', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Data Guru YAMNI Menurut Jenis Kelamin'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.y:3f} Guru</b>'
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.2f}%',
                    connectorColor: 'silver'
                }
            }
        },
        series: [{
            name: 'Jumlah',
            data: [
            { name: 'Laki-laki', <?php
                $rows = mysqli_query($connection, "SELECT COUNT(id) AS jumlah FROM guru WHERE jenkel_guru = 'Laki-Laki'");
                while($row = mysqli_fetch_array($rows)){
                    $pd = $row['jumlah'];
                ?>
                y: <?php echo $pd ;?>
                <?php } ?> },
            { name: 'Perempuan', <?php
                $rows = mysqli_query($connection, "SELECT COUNT(id) AS jumlah FROM guru WHERE jenkel_guru = 'Perempuan'");
                while($row = mysqli_fetch_array($rows)){
                    $pd = $row['jumlah'];
                ?>
                y: <?php echo $pd ;?>
                <?php } ?> }
            ]
        }]
    });
</script>
<script type="text/javascript">
    // Build the chart
    Highcharts.chart('grafik_pendidikan', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Data Guru YAMNI Menurut Tingkatan Kelas'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.y:3f} Guru</b>'
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.2f}%',
                    connectorColor: 'silver'
                }
            }
        },
        series: [{
            name: 'Jumlah',
            data: [
            { name: 'SLTA / SEDERAJAT', <?php
                $rows = mysqli_query($connection, "SELECT COUNT(id) AS jumlah FROM guru WHERE id_pendidikan = '1'");
                while($row = mysqli_fetch_array($rows)){
                    $pd = $row['jumlah'];
                ?>
                y: <?php echo $pd ;?>
                <?php } ?> },
            { name: 'DIPLOMA I / II', <?php
                $rows = mysqli_query($connection, "SELECT COUNT(id) AS jumlah FROM guru WHERE id_pendidikan = '2'");
                while($row = mysqli_fetch_array($rows)){
                    $pd = $row['jumlah'];
                ?>
                y: <?php echo $pd ;?>
                <?php } ?> },
            { name: 'DIPLOMA IV / STRATA I', <?php
                $rows = mysqli_query($connection, "SELECT COUNT(id) AS jumlah FROM guru WHERE id_pendidikan = '3'");
                while($row = mysqli_fetch_array($rows)){
                    $pd = $row['jumlah'];
                ?>
                y: <?php echo $pd ;?>
                <?php } ?> },
            { name: 'STRATA II', <?php
                $rows = mysqli_query($connection, "SELECT COUNT(id) AS jumlah FROM guru WHERE id_pendidikan = '4'");
                while($row = mysqli_fetch_array($rows)){
                    $pd = $row['jumlah'];
                ?>
                y: <?php echo $pd ;?>
                <?php } ?> },
            { name: 'STRATA III', <?php
                $rows = mysqli_query($connection, "SELECT COUNT(id) AS jumlah FROM guru WHERE id_pendidikan = '5'");
                while($row = mysqli_fetch_array($rows)){
                    $pd = $row['jumlah'];
                ?>
                y: <?php echo $pd ;?>
                <?php } ?> }
            ]
        }]
    });
</script>
<script type="text/javascript">
    // Build the chart
    Highcharts.chart('grafik_umur', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Data Guru YAMNI Menurut Umur'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.y:3f} Guru</b>'
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.2f}%',
                    connectorColor: 'silver'
                }
            }
        },
        series: [{
            name: 'Jumlah',
            data: [
            { name: '20-25 Tahun', <?php
                $rows = mysqli_query($connection, "SELECT COUNT(YEAR(CURDATE())-YEAR(tgl_lahir)) AS jumlah FROM guru WHERE YEAR(CURDATE())-YEAR(tgl_lahir) BETWEEN 20 AND 25 ORDER BY jumlah ASC");
                while($row = mysqli_fetch_array($rows)){
                    $pd = $row['jumlah'];
                ?>
                y: <?php echo $pd ;?>
                <?php } ?> },
            { name: '26-30 Tahun', <?php
                $rows = mysqli_query($connection, "SELECT COUNT(YEAR(CURDATE())-YEAR(tgl_lahir)) AS jumlah FROM guru WHERE YEAR(CURDATE())-YEAR(tgl_lahir) BETWEEN 26 AND 30 ORDER BY jumlah ASC");
                while($row = mysqli_fetch_array($rows)){
                    $pd = $row['jumlah'];
                ?>
                y: <?php echo $pd ;?>
                <?php } ?> },
            { name: '31-35 Tahun', <?php
                $rows = mysqli_query($connection, "SELECT COUNT(YEAR(CURDATE())-YEAR(tgl_lahir)) AS jumlah FROM guru WHERE YEAR(CURDATE())-YEAR(tgl_lahir) BETWEEN 31 AND 35 ORDER BY jumlah ASC");
                while($row = mysqli_fetch_array($rows)){
                    $pd = $row['jumlah'];
                ?>
                y: <?php echo $pd ;?>
                <?php } ?> },
            { name: '36-40 Tahun', <?php
                $rows = mysqli_query($connection, "SELECT COUNT(YEAR(CURDATE())-YEAR(tgl_lahir)) AS jumlah FROM guru WHERE YEAR(CURDATE())-YEAR(tgl_lahir) BETWEEN 36 AND 40 ORDER BY jumlah ASC");
                while($row = mysqli_fetch_array($rows)){
                    $pd = $row['jumlah'];
                ?>
                y: <?php echo $pd ;?>
                <?php } ?> },
            { name: '41-45 Tahun', <?php
                $rows = mysqli_query($connection, "SELECT COUNT(YEAR(CURDATE())-YEAR(tgl_lahir)) AS jumlah FROM guru WHERE YEAR(CURDATE())-YEAR(tgl_lahir) BETWEEN 41 AND 45 ORDER BY jumlah ASC");
                while($row = mysqli_fetch_array($rows)){
                    $pd = $row['jumlah'];
                ?>
                y: <?php echo $pd ;?>
                <?php } ?> },
            { name: '46-50 Tahun', <?php
                $rows = mysqli_query($connection, "SELECT COUNT(YEAR(CURDATE())-YEAR(tgl_lahir)) AS jumlah FROM guru WHERE YEAR(CURDATE())-YEAR(tgl_lahir) BETWEEN 46 AND 50 ORDER BY jumlah ASC");
                while($row = mysqli_fetch_array($rows)){
                    $pd = $row['jumlah'];
                ?>
                y: <?php echo $pd ;?>
                <?php } ?> },
            { name: '51-60 Tahun', <?php
                $rows = mysqli_query($connection, "SELECT COUNT(YEAR(CURDATE())-YEAR(tgl_lahir)) AS jumlah FROM guru WHERE YEAR(CURDATE())-YEAR(tgl_lahir) BETWEEN 51 AND 55 ORDER BY jumlah ASC");
                while($row = mysqli_fetch_array($rows)){
                    $pd = $row['jumlah'];
                ?>
                y: <?php echo $pd ;?>
                <?php } ?> },
            { name: '56-60 Tahun', <?php
                $rows = mysqli_query($connection, "SELECT COUNT(YEAR(CURDATE())-YEAR(tgl_lahir)) AS jumlah FROM guru WHERE YEAR(CURDATE())-YEAR(tgl_lahir) BETWEEN 56 AND 60 ORDER BY jumlah ASC");
                while($row = mysqli_fetch_array($rows)){
                    $pd = $row['jumlah'];
                ?>
                y: <?php echo $pd ;?>
                <?php } ?> }
            ]
        }]
    });
</script>
<script type="text/javascript">
    // Build the chart
    Highcharts.chart('grafik_bekerja', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Data Guru YAMNI Menurut Lama Bekerja'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.y:3f} Guru</b>'
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.2f}%',
                    connectorColor: 'silver'
                }
            }
        },
        series: [{
            name: 'Jumlah',
            data: [
            { name: '1 - 2 Tahun', <?php
                $rows = mysqli_query($connection, "SELECT COUNT(YEAR(CURDATE())-YEAR(tgl_mulai)) AS jumlah FROM guru WHERE YEAR(CURDATE())-YEAR(tgl_mulai) BETWEEN 1 AND 2 ORDER BY jumlah ASC");
                while($row = mysqli_fetch_array($rows)){
                    $pd = $row['jumlah'];
                ?>
                y: <?php echo $pd ;?>
                <?php } ?> },
            { name: '2 - 3 Tahun', <?php
                $rows = mysqli_query($connection, "SELECT COUNT(YEAR(CURDATE())-YEAR(tgl_mulai)) AS jumlah FROM guru WHERE YEAR(CURDATE())-YEAR(tgl_mulai) BETWEEN 2 AND 3 ORDER BY jumlah ASC");
                while($row = mysqli_fetch_array($rows)){
                    $pd = $row['jumlah'];
                ?>
                y: <?php echo $pd ;?>
                <?php } ?> },
            { name: '3 - 4 Tahun', <?php
                $rows = mysqli_query($connection, "SELECT COUNT(YEAR(CURDATE())-YEAR(tgl_mulai)) AS jumlah FROM guru WHERE YEAR(CURDATE())-YEAR(tgl_mulai) BETWEEN 3 AND 4 ORDER BY jumlah ASC");
                while($row = mysqli_fetch_array($rows)){
                    $pd = $row['jumlah'];
                ?>
                y: <?php echo $pd ;?>
                <?php } ?> },
            { name: '4 - 5 Tahun', <?php
                $rows = mysqli_query($connection, "SELECT COUNT(YEAR(CURDATE())-YEAR(tgl_mulai)) AS jumlah FROM guru WHERE YEAR(CURDATE())-YEAR(tgl_mulai) BETWEEN 4 AND 5 ORDER BY jumlah ASC");
                while($row = mysqli_fetch_array($rows)){
                    $pd = $row['jumlah'];
                ?>
                y: <?php echo $pd ;?>
                <?php } ?> },
            { name: 'Lebih Dari 5 Tahun', <?php
                $rows = mysqli_query($connection, "SELECT COUNT(YEAR(CURDATE())-YEAR(tgl_mulai)) AS jumlah FROM guru WHERE YEAR(CURDATE())-YEAR(tgl_mulai) >= 5 ORDER BY jumlah ASC");
                while($row = mysqli_fetch_array($rows)){
                    $pd = $row['jumlah'];
                ?>
                y: <?php echo $pd ;?>
                <?php } ?> }
            ]
        }]
    });
</script>
<script type="text/javascript">
    // Build the chart
    Highcharts.chart('grafik_pns', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Data Guru YAMNI Menurut Status PNS'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.y:3f} Guru</b>'
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.2f}%',
                    connectorColor: 'silver'
                }
            }
        },
        series: [{
            name: 'Jumlah',
            data: [
            { name: 'PNS', <?php
                $rows = mysqli_query($connection, "SELECT COUNT(id) AS jumlah FROM guru WHERE pns_nonpns = 'PNS'");
                while($row = mysqli_fetch_array($rows)){
                    $pd = $row['jumlah'];
                ?>
                y: <?php echo $pd ;?>
                <?php } ?> },
            { name: 'Non PNS', <?php
                $rows = mysqli_query($connection, "SELECT COUNT(id) AS jumlah FROM guru WHERE pns_nonpns = 'Non PNS'");
                while($row = mysqli_fetch_array($rows)){
                    $pd = $row['jumlah'];
                ?>
                y: <?php echo $pd ;?>
                <?php } ?> }
            ]
        }]
    });
</script>

<!-- Grafik Index Beranda -->
<script type="text/javascript">
    Highcharts.chart('data-grafik', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: ''
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: false
                },
                showInLegend: true
            }
        },
        series: [{
            name: 'Data',
            colorByPoint: true,
            data: [{
                name: 'Siswa',<?php
                $rows = mysqli_query($connection, "SELECT COUNT(id) AS jumlah FROM siswa");
                while($row = mysqli_fetch_array($rows)){
                    $pd = $row['jumlah'];
                ?>
                y: <?php echo $pd ;?>
                <?php } ?>,
                sliced: true,
                selected: true
            }, {
                name: 'Guru',<?php
                $rows = mysqli_query($connection, "SELECT COUNT(id) AS jumlah FROM guru");
                while($row = mysqli_fetch_array($rows)){
                    $pd = $row['jumlah'];
                ?>
                y: <?php echo $pd ;?>
                <?php } ?>
            }, {
                name: 'Sarana',<?php
                $rows = mysqli_query($connection, "SELECT COUNT(id_sarana) AS jumlah FROM sarana");
                while($row = mysqli_fetch_array($rows)){
                    $pd = $row['jumlah'];
                ?>
                y: <?php echo $pd ;?>
                <?php } ?>
            }, {
                name: 'Prasarana',<?php
                $rows = mysqli_query($connection, "SELECT COUNT(id_prasarana) AS jumlah FROM prasarana");
                while($row = mysqli_fetch_array($rows)){
                    $pd = $row['jumlah'];
                ?>
                y: <?php echo $pd ;?>
                <?php } ?>
            }]
        }]
    });
</script>

<!-- Grafik Sarana dan Prasarana -->
<script type="text/javascript">
     // Create the chart
    Highcharts.chart('saranachart', {
        chart: {
            renderTo: 'container',
            type: 'column'
        },
        title: {
            text: 'Grafik Sarana Menurut Jenisnya'
        },
        xAxis: {
            categories:['Jenis Sarana']
        },
        yAxis: {
            title: {
                text: 'Jumlah Sarana'
            }

        },

        series: [
        <?php
        $queryj = mysqli_query($connection, "SELECT * FROM lib_sarana");
        while($ambek = mysqli_fetch_array($queryj)){
            $id_jenis = $ambek['id_jenis_sarana'];
            $jenis = $ambek['jenis_sarana'] ;

            $qdt = mysqli_query($connection, "SELECT COUNT(id_sarana) AS jumlah FROM sarana WHERE id_jenis_sarana = '$id_jenis'");
            while($dt = mysqli_fetch_array($qdt)){
                $pdx = $dt['jumlah'];

            }
            ?>
            {
                name : '<?php echo $jenis; ?>',
                data : [<?php echo $pdx; ?>]
            },
            <?php } ?>
        ]
    });
</script>
<script type="text/javascript">
     // Create the chart
    Highcharts.chart('prasaranachart', {
        chart: {
            renderTo: 'container',
            type: 'column'
        },
        title: {
            text: 'Grafik Prasarana Menurut Jenisnya'
        },
        xAxis: {
            categories:['Jenis Prasarana']
        },
        yAxis: {
            title: {
                text: 'Jumlah Prasarana'
            }

        },

        series: [
        <?php
        $queryj = mysqli_query($connection, "SELECT * FROM lib_prasarana");
        while($ambek = mysqli_fetch_array($queryj)){
            $id_jenis = $ambek['id_jenis_prasarana'];
            $jenis = $ambek['jenis_prasarana'] ;

            $qdt = mysqli_query($connection, "SELECT COUNT(id_prasarana) AS jumlah FROM prasarana WHERE id_jenis_prasarana = '$id_jenis'");
            while($dt = mysqli_fetch_array($qdt)){
                $pdx = $dt['jumlah'];

            }
            ?>
            {
                name : '<?php echo $jenis; ?>',
                data : [<?php echo $pdx; ?>]
            },
            <?php } ?>
        ]
    });
</script>

<script type="text/javascript">
     // Create the chart
    Highcharts.chart('prasaranachart', {
        chart: {
            renderTo: 'container',
            type: 'column'
        },
        title: {
            text: 'Grafik Prasarana Menurut Jenisnya'
        },
        xAxis: {
            categories:['Jenis Prasarana']
        },
        yAxis: {
            title: {
                text: 'Jumlah Prasarana'
            }

        },

        series: [
        <?php
        $queryj = mysqli_query($connection, "SELECT * FROM lib_prasarana");
        while($ambek = mysqli_fetch_array($queryj)){
            $id_jenis = $ambek['id_jenis_prasarana'];
            $jenis = $ambek['jenis_prasarana'] ;

            $qdt = mysqli_query($connection, "SELECT COUNT(id_prasarana) AS jumlah FROM prasarana WHERE id_jenis_prasarana = '$id_jenis'");
            while($dt = mysqli_fetch_array($qdt)){
                $pdx = $dt['jumlah'];

            }
            ?>
            {
                name : '<?php echo $jenis; ?>',
                data : [<?php echo $pdx; ?>]
            },
            <?php } ?>
        ]
    });
</script>

<!-- Grafik Angkatan Siswa -->
<!-- <script type="text/javascript">
        Highcharts.chart('grafik_siswa_angkatan_mi', {
            title: {
                text: 'Combination chart'
            },
            xAxis: {
                <?php
                $queryj = mysqli_query($connection, "SELECT * FROM lib_tajaran");
                while($ambek = mysqli_fetch_array($queryj)){
                    $id_tajaran = $ambek['id_tajaran'];
                    $tajaran = $ambek['tahun_ajaran'] ;

                    ?>

                    categories: ['<?php echo $tajaran; ?>',]
                <?php } ?>
            },
            labels: {
                items: [{
                    html: 'Total fruit consumption',
                    style: {
                        left: '50px',
                        top: '18px',
                    color: ( // theme
                        Highcharts.defaultOptions.title.style &&
                        Highcharts.defaultOptions.title.style.color
                        ) || 'black'
                }
            }]
        },
        series: [{
            type: 'column',
            name: 'Kelas I',
            data: [3, 2]
        }, {
            type: 'column',
            name: 'Kelas II',
            data: [2, 3]
        }, {
            type: 'column',
            name: 'Kelas III',
            data: [4, 3]
        }, {
            type: 'column',
            name: 'Kelas IV',
            data: [4, 3]
        },{
            type: 'column',
            name: 'Kelas V',
            data: [4, 3]
        },{
            type: 'column',
            name: 'Kelas VI',
            data: [4, 3]
        }]
    });
</script> -->

<!-- grafik angkatan siswa MI -->
<script type="text/javascript">
    google.charts.load('current', {'packages':['bar']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Tahun Angkatan', 'Kelas I', 'Kelas II', 'Kelas III', 'Kelas IV', 'Kelas V', 'Kelas VI'],
            <?php

            $qtahun = mysqli_query($connection, "SELECT * FROM lib_tajaran");
            while($thn = mysqli_fetch_array($qtahun)) {
                $id_tajaran = $thn['id_tajaran'];
                $tajaran    = $thn['tahun_ajaran'] ;

            // Kelas 1
            $qsisw1 = mysqli_query($connection, "SELECT COUNT(id) AS kelas1 FROM siswa WHERE id_tingkat = '3' AND kelas = 'I' AND id_tajaran = '$id_tajaran'");
            while ($k1 = mysqli_fetch_array($qsisw1)) {
                $kelas1     = $k1['kelas1'];

            // Kelas 2
            $qsisw2 = mysqli_query($connection, "SELECT COUNT(id) AS kelas2 FROM siswa WHERE id_tingkat = '3' AND kelas = 'II' AND id_tajaran = '$id_tajaran'");
            while ($k2 = mysqli_fetch_array($qsisw2)) {
                $kelas2     = $k2['kelas2'];

            // Kelas 3
            $qsisw3 = mysqli_query($connection, "SELECT COUNT(id) AS kelas3 FROM siswa WHERE id_tingkat = '3' AND kelas = 'III' AND id_tajaran = '$id_tajaran'");
            while ($k3 = mysqli_fetch_array($qsisw3)) {
                $kelas3     = $k3['kelas3'];

            // Kelas 4
            $qsisw4 = mysqli_query($connection, "SELECT COUNT(id) AS kelas4 FROM siswa WHERE id_tingkat = '3' AND kelas = 'IV' AND id_tajaran = '$id_tajaran'");
            while ($k4 = mysqli_fetch_array($qsisw4)) {
                $kelas4     = $k4['kelas4'];

            // Kelas 5
            $qsisw5 = mysqli_query($connection, "SELECT COUNT(id) AS kelas5 FROM siswa WHERE id_tingkat = '3' AND kelas = 'V' AND id_tajaran = '$id_tajaran'");
            while ($k5 = mysqli_fetch_array($qsisw5)) {
                $kelas5     = $k5['kelas5'];

            // Kelas 6
            $qsisw6 = mysqli_query($connection, "SELECT COUNT(id) AS kelas6 FROM siswa WHERE id_tingkat = '3' AND kelas = 'VI' AND id_tajaran = '$id_tajaran'");
            while ($k6 = mysqli_fetch_array($qsisw6)) {
                $kelas6     = $k6['kelas6'];

            ?>

            ['<?php echo $tajaran;?>',<?php echo $kelas1;?>,<?php echo $kelas2;?>,<?php echo $kelas3;?>,<?php echo $kelas4;?>,<?php echo $kelas5;?>,<?php echo $kelas6;?>],   
           <?php
            }}}}}}}
           ?>
            
        ]);

        var options = {
            chart: {
                title: 'Per-Angkatan'
            },

            bars: 'vertical' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('grafik_angkatan_siswa_mi'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
    }
</script>

<!-- grafik angkatan siswa MTS -->
<script type="text/javascript">
    google.charts.load('current', {'packages':['bar']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Tahun Angkatan', 'Kelas VII', 'Kelas VIII', 'Kelas IX'],
            // query
                <?php
                $qtahun = mysqli_query($connection, "SELECT * FROM lib_tajaran");
                while($thn = mysqli_fetch_array($qtahun)) {
                    $id_tajaran = $thn['id_tajaran'];
                    $tajaran    = $thn['tahun_ajaran'] ;

                // Kelas 1
                $qsisw7 = mysqli_query($connection, "SELECT COUNT(id) AS kelas7 FROM siswa WHERE id_tingkat = '2' AND kelas = 'VII' AND id_tajaran = '$id_tajaran'");
                while ($k7 = mysqli_fetch_array($qsisw7)) {
                    $kelas7     = $k7['kelas7'];

                // Kelas 2
                $qsisw8 = mysqli_query($connection, "SELECT COUNT(id) AS kelas8 FROM siswa WHERE id_tingkat = '2' AND kelas = 'VIII' AND id_tajaran = '$id_tajaran'");
                while ($k8 = mysqli_fetch_array($qsisw8)) {
                    $kelas8     = $k8['kelas8'];

                // Kelas 3
                $qsisw9 = mysqli_query($connection, "SELECT COUNT(id) AS kelas9 FROM siswa WHERE id_tingkat = '2' AND kelas = 'IX' AND id_tajaran = '$id_tajaran'");
                while ($k9 = mysqli_fetch_array($qsisw9)) {
                    $kelas9     = $k9['kelas9'];

                ?>
            // query

            ['<?php echo $tajaran;?>',<?php echo $kelas7;?>,<?php echo $kelas8;?>,<?php echo $kelas9;?>],   
           <?php
            }}}}
           ?>
            
        ]);

        var options = {
            chart: {
                title: 'Per-Angkatan'
            },

            bars: 'vertical' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('grafik_angkatan_siswa_mts'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
    }
</script>

<!-- grafik angkatan siswa MA -->
<script type="text/javascript">
    google.charts.load('current', {'packages':['bar']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Tahun Angkatan', 'Kelas X', 'Kelas XI', 'Kelas XII'],
            // query
                <?php
                $qtahun = mysqli_query($connection, "SELECT * FROM lib_tajaran");
                while($thn = mysqli_fetch_array($qtahun)) {
                    $id_tajaran = $thn['id_tajaran'];
                    $tajaran    = $thn['tahun_ajaran'] ;

                // Kelas 1
                $qsisw10 = mysqli_query($connection, "SELECT COUNT(id) AS kelas10 FROM siswa WHERE id_tingkat = '1' AND kelas = 'X' AND id_tajaran = '$id_tajaran'");
                while ($k10 = mysqli_fetch_array($qsisw10)) {
                    $kelas10     = $k10['kelas10'];

                // Kelas 2
                $qsisw11 = mysqli_query($connection, "SELECT COUNT(id) AS kelas11 FROM siswa WHERE id_tingkat = '1' AND kelas = 'XI' AND id_tajaran = '$id_tajaran'");
                while ($k11 = mysqli_fetch_array($qsisw11)) {
                    $kelas11     = $k11['kelas11'];

                // Kelas 3
                $qsisw12 = mysqli_query($connection, "SELECT COUNT(id) AS kelas12 FROM siswa WHERE id_tingkat = '1' AND kelas = 'XII' AND id_tajaran = '$id_tajaran'");
                while ($k12 = mysqli_fetch_array($qsisw12)) {
                    $kelas12     = $k12['kelas12'];

                ?>
            // query

            ['<?php echo $tajaran;?>',<?php echo $kelas10;?>,<?php echo $kelas11;?>,<?php echo $kelas12;?>],   
           <?php
            }}}}
           ?>
            
        ]);

        var options = {
            chart: {
                title: 'Per-Angkatan'
            },

            bars: 'vertical' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('grafik_angkatan_siswa_ma'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
    }
</script>

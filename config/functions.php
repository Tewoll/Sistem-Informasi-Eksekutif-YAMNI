
<?php function inject_checker($connection, $field){ return (htmlentities(trim(mysqli_real_escape_string($connection, $field)))); } ?>
<?php function decode_checker($field){ return (html_entity_decode($field, ENT_QUOTES)); } ?>

<?php
error_reporting(~E_NOTICE & ~E_DEPRECATED);
$config["server"]='localhost';
$config["username"]='tewoll';
$config["password"]='rizqyaja123';
$config["database_name"]='si_eksekutif';

include 'ez_sql_core.php';
include 'ez_sql_mysqli.php';

$db = new ezSQL_mysqli($config['username'], $config['password'], $config['database_name'], $config['server']);

function tgl_indo($tgl){
$tanggal = substr($tgl,8,2);
$bulan   = getBulan(substr($tgl,5,2));
$tahun   = substr($tgl,0,4);
return $tanggal.' '.$bulan.' '.$tahun;
}

function hariIndo ($hariInggris) {
  switch ($hariInggris) {
    case 'Sunday':
      return 'Minggu';
    case 'Monday':
      return 'Senin';
    case 'Tuesday':
      return 'Selasa';
    case 'Wednesday':
      return 'Rabu';
    case 'Thursday':
      return 'Kamis';
    case 'Friday':
      return 'Jumat';
    case 'Saturday':
      return 'Sabtu';
    default:
      return 'hari tidak valid';
  }
}

function getBulan($bln){
  switch ($bln){
    case 1:
    return "Januari";
    break;
    case 2:
    return "Februari";
    break;
    case 3:
    return "Maret";
    break;
    case 4:
    return "April";
    break;
    case 5:
    return "Mei";
    break;
    case 6:
    return "Juni";
    break;
    case 7:
    return "Juli";
    break;
    case 8:
    return "Agustus";
    break;
    case 9:
    return "September";
    break;
    case 10:
    return "Oktober";
    break;
    case 11:
    return "November";
    break;
    case 12:
    return "Desember";
    break;
  }
}

?>
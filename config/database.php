<?php
$connection = mysqli_connect("localhost","tewoll","rizqyaja123","si_eksekutif");

if (mysqli_connect_errno()) {
  echo "Gagal terhubung " . mysqli_connect_error();
  exit;
}

?> 
<?php
require_once "../../config/koneksi.php";

if ( isset($_POST['simpanrange']) ) {

  mysqli_query($con, "DELETE FROM range_2018") or die(mysqli_error($con));

  $jumlah = $_POST['jumlah'];
  for ( $i=1; $i<=$jumlah; $i++ ) {
    $jumlahpasien = trim(mysqli_real_escape_string($con, $_POST['jumlahpasienke-'.$i]));
    $rangeawal = trim(mysqli_real_escape_string($con, $_POST['rangeawalke-'.$i]));
    $rangeakhir = trim(mysqli_real_escape_string($con, $_POST['rangeakhirke-'.$i]));

    mysqli_query($con, "INSERT INTO range_2018 (jumlah_pasien, range_awal, range_akhir) VALUES ('$jumlahpasien', '$rangeawal', '$rangeakhir')") or die (mysqli_error($con));
  }
  echo "
    <script>
    window.location='../generate.php';
    </script>
  ";
} elseif ( isset($_POST['simpanrand']) ) {
  mysqli_query($con, "DELETE FROM rand_2018") or die (mysqli_error($con));
  $jumlah = $_POST['jumlah'];
  for ( $i=1; $i<=$jumlah; $i++ ) {
    $nomor    = trim(mysqli_real_escape_string($con, $_POST['nomorke-'.$i]));
    $id_bulan = trim(mysqli_real_escape_string($con, $_POST['id-bulanke-'.$i]));
    $rand     = trim(mysqli_real_escape_string($con, $_POST['randomke-'.$i]));

    mysqli_query($con, "INSERT INTO rand_2018 (nomor, id_bulan, bilangan_acak) VALUES ('$nomor', '$id_bulan', '$rand') ") or die(mysqli_error($con));
  }
  echo "<script>
    window.location='../empat.php';
  </script>";
  
}

?>
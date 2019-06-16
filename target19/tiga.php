<?php
require_once "../config/koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>MCSM - L3 - Target 2019</title>
    <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../lite/css/style.css" rel="stylesheet">
    <link href="../lite/css/colors/blue.css" id="theme" rel="stylesheet">
</head>
<style>
body {
  background: url(../assets/images/full-bloom.png);
}
</style>

<body class="card-no-border">
   
    <!-- <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div> -->
 
    <header class="topbar">
        <nav class="navbar top-navbar navbar-toggleable-sm navbar-light"></nav>
    </header>

        <div class="container">
        
            <div class="row page-titles">
                <div class="col-md-5 col-8 align-self-center">
                    <h3 class="text-themecolor m-b-0 m-t-0">Langkah 3</h3>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="../">Home</a></li>
                        <li class="breadcrumb-item"><a href="index.php">D</a></li>
                        <li class="breadcrumb-item"><a href="satu.php">L 1</a></li>
                        <li class="breadcrumb-item"><a href="dua.php">L 2</a></li>
                        <li class="breadcrumb-item active">Langkah 3</li>

                    </ol>
                </div>

                <div class="col-md-7 col-4 align-self-center">
                <form action="proses/proses.php" method="post">
                    <!-- <a href="tiga.php" class="btn waves-effect waves-light btn-success pull-right hidden-sm-down" data-toggle="tooltip" data-placement="top" title="Klik Untuk Melanjutkan Proses"> Next</a> -->
                    <button type="submit" class="btn waves-effect waves-light btn-success pull-right hidden-sm-down" name="simpanrange" data-toggle="tooltip" data-placement="top" title="Klik Untuk Melanjutkan Proses"> Next</button>
                    <a href="#" class="btn waves-effect waves-light btn-info pull-right hidden-sm-down disabled" style="margin-right: 20px;" data-toggle="tooltip" data-placement="top" title="Klik Untuk Lompat Ke langkah 3"> Skip</a>
                    <a href="dua.php" class="btn waves-effect waves-light btn-warning pull-right hidden-sm-down" style="margin-right: 20px;" data-toggle="tooltip" data-placement="top" title="Klik Untuk Kembali ke Halaman Sebelumnya"> Back</a>
                    <a href="../" class="btn waves-effect waves-light btn-danger pull-right hidden-sm-down" style="margin-right: 20px;" data-toggle="tooltip" data-placement="top" title="Klik Untuk Keluar"> Exit</a>

                </div>
            </div>
        
            <div class="row">
                <!-- column -->
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-block">
                            <h4 class="card-title">Tabel Interval Angka Acak</h4>
                            <h6 class="card-subtitle"><code>Monte Carlo Simulation Methods</code></h6>
                            <div class="table-responsive">
                                <table class="table table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th class="text-center">Bulan</th>
                                            <th class="text-center">Frekuensi</th>
                                            <th class="text-center">Probabilitas</th>
                                            <th class="text-center">Prob Kumulatif</th>
                                            <th colspan="2" class="text-center">Interval Angka acak</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $no = 1;
                                    $querys = mysqli_query($con, "SELECT b.nama_bulan, d.jumlah_pasien FROM tabel_bulan b, data_2018 d WHERE b.id_bulan = d.id_bulan") or die(mysqli_error($con));  
                                    $totals = mysqli_query($con, "SELECT SUM(jumlah_pasien) AS total FROM data_2018") or die(mysqli_error($con));
                                    $total = mysqli_fetch_array($totals);
                                    foreach ($querys as $query) : ?>
                                        <tr>
                                            <td><?= $no ?></td>
                                            <td class="text-center"><?= $query['nama_bulan'] ?></td>
                                            <td class="text-center"><?= number_format($query['jumlah_pasien']) ?><input type="hidden" name="jumlahpasienke-<?= $no ?>" value="<?= $query['jumlah_pasien'] ?>" class="form-control text-center input-sm" readonly></td>
                                            <td class="text-center"><?= @$disprob = round($query['jumlah_pasien'] / $total['total'], 2) ?></td>
                                            <?php @$disprobkum += $disprob ?>
                                            <?php if ( $disprobkum > 1 ) { $disprobkum = 1; } ?>
                                            <td class="text-center"><?= $disprobkum ?></td>
                                            <?php $rangeakhir = $disprobkum * 100 ?>
                                            <?php if ( $no == 1 ) {
                                                @$rangeawal = 1;
                                            } ?>
                                            <td class="text-center"><?= $rangeawal ?><input type="hidden" name="rangeawalke-<?= $no ?>" class="form-control input-sm text-center" value="<?= $rangeawal ?>" readonly></td>
                                            <?php if ( $rangeakhir > 100 ) { $rangeakhir = 100; } ?>
                                            <td class="text-center"><?= $rangeakhir ?><input type="hidden" name="rangeakhirke-<?= $no ?>" class="form-control input-sm text-center" value="<?= $rangeakhir ?>" readonly></td>
                                        </tr>
                                    <?php $no++ ?>
                                    <?php $rangeawal = $rangeakhir + 1 ?>
                                    <?php endforeach; ?>
                                    <input type="hidden" name="jumlah" value="<?= $no - 1 ?>">
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
            
        </div>

  

    <script src="../assets/plugins/jquery/jquery.min.js"></script>
    <script src="../assets/plugins/bootstrap/js/tether.min.js"></script>
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="../lite/js/jquery.slimscroll.js"></script>
    <script src="../lite/js/waves.js"></script>
    <script src="../lite/js/sidebarmenu.js"></script>
    <script src="../assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="../lite/js/custom.min.js"></script>
</body>

</html>

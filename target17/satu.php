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
    <title>MCSM - L1 - Target 2017</title>
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
   
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
 
        <header class="topbar">
            <nav class="navbar top-navbar navbar-toggleable-sm navbar-light"></nav>
        </header>

            <div class="container">
         
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Langkah 1</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="../">Home</a></li>
                            <li class="breadcrumb-item"><a href="index.php">D</a></li>
                            <li class="breadcrumb-item active">Langkah 1</li>
                        </ol>
                    </div>
                    <div class="col-md-7 col-4 align-self-center">
                        <a href="dua.php" class="btn waves-effect waves-light btn-success pull-right hidden-sm-down" data-toggle="tooltip" data-placement="top" title="Klik Untuk Lanjut Ke Langkah 2"> Next</a>
                        <a href="tiga.php" class="btn waves-effect waves-light btn-info pull-right hidden-sm-down" style="margin-right: 20px;" data-toggle="tooltip" data-placement="top" title="Klik Untuk Lompat Ke langkah 3"> Skip</a>
                        <a href="index.php" class="btn waves-effect waves-light btn-warning pull-right hidden-sm-down" style="margin-right: 20px;" data-toggle="tooltip" data-placement="top" title="Klik Untuk Kembali ke Halaman Sebelumnya"> Back</a>
                        <a href="../" class="btn waves-effect waves-light btn-danger pull-right hidden-sm-down" style="margin-right: 20px;" data-toggle="tooltip" data-placement="top" title="Klik Untuk Keluar"> Exit</a>

                    </div>
                </div>
         
                <div class="row">
                    <!-- column -->
                    <div class="col-lg-10 offset-1">
                        <div class="card">
                            <div class="card-block">
                                <h4 class="card-title">Tabel Distribusi Probabilitas</h4>
                                <h6 class="card-subtitle"><code>Monte Carlo Simulation Methods</code></h6>
                                <div class="table-responsive">
                                    <table class="table table-hover table-bordered">
                                        <thead>
                                            <tr>
                                                <th class="text-center">#</th>
                                                <th class="text-center">Bulan</th>
                                                <th class="text-center">Frekuensi</th>
                                                <th class="text-center">Distribusi Probabilitas</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $no = 1;
                                        $querys = mysqli_query($con, "SELECT b.nama_bulan, d.jumlah_pasien FROM tabel_bulan b, data_2016 d WHERE b.id_bulan = d.id_bulan") or die(mysqli_error($con));
                                        $totals = mysqli_query($con, "SELECT SUM(jumlah_pasien) AS total FROM data_2016");
                                        $total = mysqli_fetch_array($totals);
                                        foreach ($querys as $query) : ?>
                                            <tr>
                                                <td class="text-center"><?= $no++ ?></td>
                                                <td class="text-center"><?= $query['nama_bulan'] ?></td>
                                                <td class="text-center"><?= number_format($query['jumlah_pasien']) ?></td>
                                                <td class="text-center"><?= @$disprob = round($query['jumlah_pasien'] / $total['total'], 2) ?></td>
                                            </tr>
                                            <?php @$jumlah =  $total['total']; ?>
                                            <?php @$sumdisprob += $disprob ?>
                                        <?php endforeach; ?>
                                        </tbody>
                                        <tfoot class="table-active">
                                            <tr>
                                                <th colspan="2" class="text-center">Jumlah</th>
                                                <th class="text-center"> <?= number_format($jumlah) ?></th>
                                                <th class="text-center"><?= round($sumdisprob, 1) ?></th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
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

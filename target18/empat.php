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
    <title>MCSM - Finish</title>
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
                    <h3 class="text-themecolor m-b-0 m-t-0">Done</h3>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="../">Home</a></li>
                        <li class="breadcrumb-item"><a href="index.php">D</a></li>
                        <li class="breadcrumb-item"><a href="../">L 1</a></li>
                        <li class="breadcrumb-item"><a href="../">L 2</a></li>
                        <li class="breadcrumb-item"><a href="../">L 3</a></li>
                        <li class="breadcrumb-item active">Finish</li>
                        
                    </ol>
                </div>
                <div class="col-md-7 col-4 align-self-center">
                    <a href="angkaacak.php" class="btn waves-effect waves-light btn-success pull-right hidden-sm-down" data-toggle="tooltip" data-placement="top" title="Klik Untuk Melakukan Simulasi Ulang"> Repeat</a>
                    <a href="tiga.php" class="btn waves-effect waves-light btn-warning pull-right hidden-sm-down" style="margin-right: 20px;" data-toggle="tooltip" data-placement="top" title="Klik Untuk Kembali ke Halaman Sebelumnya"> Back</a>
                    <a href="../" class="btn waves-effect waves-light btn-danger pull-right hidden-sm-down" style="margin-right: 20px;" data-toggle="tooltip" data-placement="top" title="Klik Untuk Keluar"> Exit</a>

                </div>
            </div>
        
            <div class="row">
                <!-- column -->
                <div class="col-lg-10 offset-1 col-md-12">
                    <div class="card">
                        <div class="card-block">
                            <h4 class="card-title">Hasil Percobaan Simulasi</h4>
                            <h6 class="card-subtitle"><code>Hasil Simulasi Data Tahun 2017 Untuk Memprediksi Tahun 2018</code></h6>
                            <div class="table-responsive">
                                <table class="table table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th class="text-center">Bulan</th>
                                            <th class="text-center">Bilangan Acak</th>
                                            <th class="text-center">Hasil Simulasi</th>
                                            <th class="text-center">Data Real</th>
                                            <th class="text-center">Persentase</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $no = 1;
                                    $queryrand  = mysqli_query($con, "SELECT tb.nama_bulan, tb.id_bulan, r.bilangan_acak, d.jumlah_pasien FROM tabel_bulan tb, rand_2017 r, data_2018 d WHERE tb.id_bulan = r.id_bulan AND tb.id_bulan = d.id_bulan LIMIT 3") or die(mysqli_error($con));
                                    $queryrange = mysqli_query($con, "SELECT * FROM range_2017") or die(mysqli_error($con));
                                    $total      = mysqli_fetch_array($queryrand);
                                    foreach ($queryrand as $arrayrand) : ?>
                                    <tr>
                                      <td class="text-center"><?= $no++ ?></td>
                                      <form action="" method="post">
                                      <td class="text-center"><?= $arrayrand['nama_bulan'] ?></td>
                                      <td class="text-center"><?= $arrayrand['bilangan_acak'] ?></td>
                                      <?php
                                      foreach ($queryrange as $arrayrange) {
                                        //echo " | ";
                                        //echo " ( ";
                                        $random = $arrayrand['bilangan_acak'];
                                        //echo " ) ";
                                        $rangeawal = $arrayrange['range_awal'];
                                        //echo " - ";
                                        $rangeakhir = $arrayrange['range_akhir'];
                                        if ( $random >= $rangeawal && $random <= $rangeakhir ) {
                                          //echo " <code>BIGGO !</code>";
                                          $jumlahpasien = $arrayrange['jumlah_pasien'];
                                        }

                                      }
                                      ?>
                                      <td class="text-center"><code><?= number_format($jumlahpasien) ?></code></td>
                                    </form>
                                      <td class="text-center"><?= number_format($arrayrand['jumlah_pasien']) ?></td>
                                      <?php
                                        if ( $jumlahpasien > $arrayrand['jumlah_pasien'] ) {
                                            // $p = "SIMULASI > REAL";
                                            $p = $arrayrand['jumlah_pasien'] * 100 / $jumlahpasien;
                                        } else {
                                            // $p = "SIMULASI < REAL";
                                            $p = $jumlahpasien * 100 / $arrayrand['jumlah_pasien'];
                                        }
                                      ?>
                                      <td class="text-center"><?= round($p) ?> %</td>
                                    </tr>
                                    <?php @$pnew += $p ?>
                                    <?php @$totalpasien += $jumlahpasien ?>
                                    <?php endforeach; ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th class="text-center" colspan="3">Total</th>
                                            <th class="text-center"><?= number_format($totalpasien) ?></th>
                                            <th class="text-center"> - </th>
                                            <th class="text-center"> - </th>                                    
                                        </tr>
                                        <tr>
                                            <th class="text-center" colspan="3">Rata - rata</th>
                                            <th class="text-center"><?= number_format($totalpasien / ($no - 1)) ?></th>
                                            <th class="text-center"> - </th>
                                            <th class="text-center"><?= round($pnew / ($no - 1), 0) ?> % </th>                                    
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

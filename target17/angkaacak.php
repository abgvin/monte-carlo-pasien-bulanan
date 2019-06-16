<?php
require_once "../config/koneksi.php";

if ( !isset($_POST['simpan']) ) { ?>
    <script>
        window.location='generate.php';
    </script>
    <?php exit; ?>
<?php } ?>

<?php 

$a = $_POST['a'];
$z = $_POST['z'];
$c = $_POST['c'];
$m = $_POST['m'];

if ( $a > $m || $z > $m || $c > $m || $z < 0) { ?>
    <script>
        alert('Opps. Wrong Number value !');
        window.location='generate.php';
    </script>
<?php }

// if ( !isset($_GET['jumlah']) || $_GET['jumlah'] == "" || $_GET['jumlah'] == "null" ) {
//   echo "<script>window.location='generate.php';</script>";
// }
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
    <title>MCSM - Random Number Generator</title>
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
                        <h3 class="text-themecolor m-b-0 m-t-0">Random Number</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="../">Home</a></li>
                            <li class="breadcrumb-item"><a href="index.php">D</a></li>
                            <li class="breadcrumb-item"><a href="../">L 1</a></li>
                            <li class="breadcrumb-item"><a href="../">L 2</a></li>
                            <li class="breadcrumb-item"><a href="../">L 3</a></li>
                            <li class="breadcrumb-item active">Random Number</li>
                        </ol>
                    </div>
                    <div class="col-md-7 col-4 align-self-center">
                      <form action="proses/proses.php" method="post">
                        <button type="submit" class="btn waves-effect waves-light btn-success pull-right hidden-sm-down" name="simpanrand" data-toggle="tooltip" data-placement="top" title="Klik Untuk Melanjutkan Proses"> Next</button>
                        <!-- <a href="" class="btn waves-effect waves-light btn-info pull-right hidden-sm-down" style="margin-right: 20px;" data-toggle="tooltip" data-placement="top" title="Klik Untuk Mendapatkan Bilangan Acak Yang baru"> Refresh</a> -->
                        <a href="generate.php" class="btn waves-effect waves-light btn-warning pull-right hidden-sm-down" style="margin-right: 20px;" data-toggle="tooltip" data-placement="top" title="Klik Untuk Kembali ke Halaman Sebelumnya"> Back</a>
                        <a href="../" class="btn waves-effect waves-light btn-danger pull-right hidden-sm-down" style="margin-right: 20px;" data-toggle="tooltip" data-placement="top" title="Klik Untuk Keluar"> Exit</a>
                    </div>
                </div>
         
                <div class="row">
                    <!-- column -->
                    <div class="col-lg-10 offset-1">
                        <div class="card">
                            <div class="card-block">
                                <h4 class="card-title">Random Number</h4>
                                <h6 class="card-subtitle"><code>Monte Carlo Simulation Methods</code></h6>
                                <div class="table-responsive">
                                    <table class="table table-hover table-bordered">
                                        <thead>
                                            <tr>
                                                <th class="text-center">#</th>
                                                <!-- <th class="text-center">Bulan</th> -->
                                                <!-- <th class="text-center">Id Bulan</th> -->
                                                <th class="text-center">Random Number</th>
                                                <th class="text-center">Random Variate</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $no = 1;
                                        $querys = mysqli_query($con, "SELECT * FROM tabel_bulan") or die(mysqli_error($con));
                                        foreach ($querys as $query) { ?>
                                            <tr>
                                                <td class="text-center"><?= $no ?><input type="hidden" name="nomorke-<?= $no ?>" value="<?= $no ?>" class="text-center form-control input-sm" readonly></td>
                                                <input type="hidden" name="" value="<?= $query['nama_bulan'] ?>" class="text-center form-control input-sm" readonly>
                                                <input type="hidden" name="id-bulanke-<?= $no ?>" value="<?= $query['id_bulan'] ?>" class="form-control text-center" readonly>
                                                <?php  
                                                @$r = ( $a * $z + $c ) % $m;
                                                $z = $r;
                                                @$rv = round($r / $m, 4);
                                                ?>
                                                <td class="text-center"><?= $r ?><input type="hidden" name="randomke-<?= $no ?>" value="<?= $r ?>" class="form-control text-center input-sm" class="form-control input-sm text-center" readonly></td>
                                                <td class="text-center"><?= $rv ?><input type="hidden" value="<?= $rv ?>" class="form-control input-sm text-center" readonly></td>
                                            </tr>
                                        <?php $no++ ?>
                                        <?php } ?>
                                        <input type="hidden" name="jumlah" value="<?= $no - 1?>">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>


            <!-- <footer class="footer">
                © 2017 Material Pro Admin by wrappixel.com
            </footer> -->
           
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

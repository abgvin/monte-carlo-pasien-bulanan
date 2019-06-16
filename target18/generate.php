<!-- <script>
  // var jumlah = prompt('Jumlah yang ingin diprediksi ?');
  // window.location.href = "angkaacak.php?jumlah=" + jumlah ;
  window.location = "angkaacak.php;

</script> -->


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
    <title>MCSM - Random Number - Target 2017</title>
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
                        <h3 class="text-themecolor m-b-0 m-t-0">Radom Number</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="../">Home</a></li>
                            <!-- <li class="breadcrumb-item"><a href="index.php">D</a></li> -->
                            <li class="breadcrumb-item active">Random Number</li>
                        </ol>
                    </div>
                    <div class="col-md-7 col-4 align-self-center">
                        <!-- <a href="dua.php" class="btn waves-effect waves-light btn-success pull-right hidden-sm-down" data-toggle="tooltip" data-placement="top" title="Klik Untuk Lanjut Ke Langkah 2"> Next</a> -->
                        <!-- <a href="tiga.php" class="btn waves-effect waves-light btn-info pull-right hidden-sm-down disabled" style="margin-right: 20px;" data-toggle="tooltip" data-placement="top" title="Klik Untuk Lompat Ke langkah 3"> Skip</a> -->
                        <form action="angkaacak.php" method="post">
                        <button type="submit" name="simpan" class="btn waves-effect waves-light btn-primary pull-right hidden-sm-down">Simpan</button>
                        <a href="tiga.php" class="btn waves-effect waves-light btn-warning pull-right hidden-sm-down" style="margin-right: 20px;" data-toggle="tooltip" data-placement="top" title="Klik Untuk Kembali ke Halaman Sebelumnya"> Back</a>
                        <a href="../" class="btn waves-effect waves-light btn-danger pull-right hidden-sm-down" style="margin-right: 20px;" data-toggle="tooltip" data-placement="top" title="Klik Untuk Keluar"> Exit</a>
                    </div>
                </div>
         
                <div class="row">
                    <!-- column -->
                    <div class="col-lg-6 offset-3">
                        <div class="card">
                            <div class="card-block">
                                <h4 class="card-title">Linear Congruent Generator</h4>
                                <h6 class="card-subtitle"><code>Mixed Congruent Method</code></h6>
                                <div class="row">

                                

                                    <div class="col-md-10 offset-1">
                                    <div class="form-group">
                                          <label for="m">Konstanta Modulus (m) </label>
                                          <input type="number" name="m" id="m" class="form-control" data-toggle="tooltip" data-placement="top" title="m > 0" autofocus placeholder="" value="99">
                                        </div>
                                        <div class="form-group">
                                          <label for="a">Konstanta Pengali (a) </label>
                                          <input type="number" name="a" id="a" class="form-control" data-toggle="tooltip" data-placement="top" title="a < m" autofocus placeholder="" value="30">
                                        </div>
                                        <div class="form-group">
                                          <label for="c">Konstanta Pergeseran (c) </label>
                                          <input type="number" name="c" id="c" class="form-control" data-toggle="tooltip" data-placement="top" title="c < m" autofocus placeholder="" value="10">
                                        </div>
                                        <div class="form-group">
                                          <label for="z">Bilangan Awal (z) </label>
                                          <input type="number" name="z" id="z" class="form-control" data-toggle="tooltip" data-placement="top" title="0 < z < m" autofocus placeholder="" value="95">
                                        </div>
                                    </div>

                                  </form>

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


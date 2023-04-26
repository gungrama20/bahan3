<?php 
session_start();

  // cek apakah yang mengakses halaman ini sudah login
if($_SESSION['level']==""){
  header("location:../login.php?info=login");
}

?>
<?php
include '../layouts/header.php';
include '../layouts/navbar.php';
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dasboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container">
      <div class="col-lg-12">
        <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-primary">
                <div class="inner">
                  <h3>SPP</h3>

                  <p>Histori Pembayaran</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="histori_pembayaran.php" class="small-box-footer">Detail ><i class="fas fa-arrow-circle-right"></i></a>
              </div>
          </div>
      </div>
          <div class="col-lg-12">
            <div class="card card-primary card-outline">
              <div class="card-body">
                <h6 class="card-title">Selamat Datang di Aplikasi Pembayaran SPP</h6>
              </div>
            </div>
          </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php
include '../layouts/footer.php';
?>
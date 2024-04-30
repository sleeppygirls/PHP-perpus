<?php
require('controller/islogin.php');
// Menambahkan class database
require('db/database.php');
$db = new Database();

// Mengambil data no_induk menggunakan GET
$id_cus = @$_GET['id_cus'];

// Membuat query delete data
$db->query('SELECT * FROM customers WHERE id_cus = :id_cus');

// Binding data query dengan variable
$db->bind('id_cus', $id_cus);

// Execute query ke database
$customer = $db->single();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>INPUT CUSTOMER</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="main.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
  <div class="wrapper">

    <?php
    require('template/header.php');
    ?>

    <?php
    require('template/sidebar.php');
    ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="customer">CUSTOMER</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#" class="page-c">Home</a></li>
                <li class="breadcrumb-item active">
                  <?php
                  if ($id_cus) {
                    echo 'Edit Customer';
                  } else {
                    echo 'Tambah Customer';
                  }
                  ?>
                </li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">

        <form enctype="multipart/form-data" action="<?= (@$id_cus ? 'controller/update_cus.php' : 'controller/save_cus.php'); ?>" method="POST">
          <div class="container-fluid">
            <div class="row">
              <!-- left column -->
              <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">
                      <?php
                      if ($id_cus) {
                        echo 'Edit Customer';
                      } else {
                        echo 'Tambah Customer';
                      }
                      ?>
                    </h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <div class="card-body">
                    <div class="form-group">
                      <label for="id_cus">ID Customer</label>
                      <input type="text" class="form-control" name="id_cus" id="id_cus" placeholder="Masukkan ID" required <?= @$customer['id_cus'] ? 'readonly' : ''; ?> value="<?= @$customer['id_cus'] ?>">
                    </div>
                    <div class="form-group">
                      <label for="nama">Nama</label>
                      <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama" required value="<?= @$customer['nama'] ?>">
                    </div>
                    <div class="form-group">
                      <label for="alamat">Alamat</label>
                      <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Masukkan Alamat" required value="<?= @$customer['alamat'] ?>">
                    </div>
                    <div class="form-group">
                      <label for="telp">No Telp</label>
                      <input type="text" class="form-control" name="telp" id="telp" placeholder="Masukkan No Telp" required value="<?= @$customer['telp'] ?>">
                    </div>
                    <div class="form-group">
                      <label for="jk">Jenis Kelamin</label>
                      <input type="text" class="form-control" name="jk" id="jk" placeholder="Masukkan Jenis Kelamin" required value="<?= @$customer['jk'] ?>">
                    </div>
                  </div>
                  <!-- /.card-body -->

                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </div>

              </div>
            </div>
            <!-- /.row -->
          </div><!-- /.container-fluid -->
        </form>
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <?php
    require('template/footer.php');
    ?>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- bs-custom-file-input -->
  <script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <!-- Page specific script -->
  <script>
    $(function() {
      bsCustomFileInput.init();
    });
  </script>
</body>

</html>
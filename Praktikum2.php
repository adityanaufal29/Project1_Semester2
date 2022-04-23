<?php
 include_once 'header.php';
 include_once 'sidebar.php';
 ?>
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Fixed Layout</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Layout</a></li>
              <li class="breadcrumb-item active">Fixed Layout</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Title</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
              <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background-color: #87CEFA;">
    <div class="bg-primary"><br>
        <h1 class="text-center text-white">Form Belanja Online</h1>
        <br>
    </div>
    <div class="d-flex justify-content-around mt-5">
    <div class="col-6">
        <form method="POST" autocomplete="off" action="form_belanja_online_post.php">
        <div class="form-group row">
            <label for="customer" class="col-4 col-form-label">Customer</label> 
            <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fa fa-address-card"></i>
                </div>
                </div> 
                <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control" required="required">
            </div>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-4">Pilih Produk</label> 
            <div class="col-8">
            <div class="custom-control custom-radio custom-control-inline">
                <input name="pilihproduk" id="pilihproduk_0" type="radio" class="custom-control-input" value="tv"> 
                <label for="pilihproduk_0" class="custom-control-label">TV</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input name="pilihproduk" id="pilihproduk_1" type="radio" class="custom-control-input" value="kulkas"> 
                <label for="pilihproduk_1" class="custom-control-label">Kulkas</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input name="pilihproduk" id="pilihproduk_2" type="radio" class="custom-control-input" value="mesin_cuci"> 
                <label for="pilihproduk_2" class="custom-control-label">Mesin Cuci</label>
            </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
            <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fa fa-cart-plus"></i>
                </div>
                </div> 
                <input id="jumlah" name="jumlah" placeholder="Jumlah" type="number" class="form-control" required="required">
            </div>
            </div>
        </div> 
        <div class="form-group row">
            <div class="offset-4 col-8">
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
        </form>
    </div>
    <div class="card border-primary mb-3" style="max-width: 18rem;">
        <div class="text-white text-center card-header bg-primary border-primary">Daftar Harga</div>
        <div class="card-body">
            <p class="card-text">TV : 4.200.000</p><hr>
            <p class="card-text">Kulkas : 3.100.000</p><hr>
            <p class="card-text">Mesin Cuci : 3.800.000</p>
        </div>
    <div class="text-white text-center card-footer bg-primary border-primary">Harga dapat berubah setiap saat</div>
    </div>
    </div>
    <div class="m-5 border border-dark p-4 rounded">
        <?php
            if(isset($_POST['submit'])){
                $customer = $_POST['customer'];
                $pilihproduk = $_POST['pilihproduk'];
                $jumlah = $_POST['jumlah'];
                

                if($pilihproduk=='tv'){
                    $harga = 4200000;
                }
                elseif($pilihproduk=='kulkas'){
                    $harga = 3100000;
                }
                elseif($pilihproduk=='mesin_cuci'){
                    $harga = 3800000;
                }

                $hargatotal = $jumlah*$harga;

                
                switch($pilihproduk){
                    case "tv": $pilihproduk = "TV"; break;
                    case "kulkas": $pilihproduk = "Kulkas"; break;
                    case "mesin_cuci": $pilihproduk = "Mesin Cuci"; break;
                    default: "";
                }
                
            }?>
            <?php if(isset($_POST['submit'])){?>
                    <p>Nama Customer : <?= $customer?> </p>
                    <p>Pilihan Produk : <?= $pilihproduk?></p> 
                    <p>Jumlah : <?= $jumlah?></p> 
                    <p>Total Belanja : <?= $hargatotal?></p>
                <?php }else{
                    echo '<div class="alert alert-primary" role="alert"> Silahkan Isi Form Diatas Untuk Menampilkan Struk Belanja</div>';
                } ?>
    </div>
</body>
</html>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                Footer
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php
include_once 'footer.php';
?>
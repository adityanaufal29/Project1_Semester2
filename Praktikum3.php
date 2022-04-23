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
    <title>Form Penilaian</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background-color: #87CEFA;">
    <div class="bg-primary"><br>
        <h1 class="text-center text-white">Form Nilai Siswa</h1>
        <br>
    </div>
    <div class="d-flex justify-content-center mt-5">
    <div class="col-8">
      <form method="POST" autocomplete="off" action="form_penilaian.php">
        <div class="form-group row">
          <label for="text" class="col-2 col-form-label">Nama Lengkap</label> 
          <div class="col-8">
            <input id="text" name="nama" placeholder="Nama Lengkap" type="text" class="form-control" value="" style="width: 50%">
          </div>
        </div>
        <div class="form-group row">
          <label for="select" class="col-2 col-form-label">Mata Kuliah</label> 
          <div class="col-8">
            <select id="select" name="matkul" class="custom-select" style="width: 50%">
              <option value="#">Pilih Mata Kuliah</option>
              <option value="DDP">Dasar-Dasar Pemrograman</option>
              <option value="BD1">Basis Data 1</option>
              <option value="WEB1">Pemrograman Web</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="text1" class="col-2 col-form-label">Nilai UTS</label> 
          <div class="col-8">
            <input id="text1" name="nilai_uts" placeholder="Nilai UTS" type="text" class="form-control" value="" style="width: 50%">
          </div>
        </div>
        <div class="form-group row">
          <label for="text2" class="col-2 col-form-label">Nilai UAS</label> 
          <div class="col-8">
            <input id="text2" name="nilai_uas" placeholder="Nilai UAS" type="text" class="form-control" value="" style="width: 50%">
          </div>
        </div>
        <div class="form-group row">
          <label for="text3" class="col-2 col-form-label">Nilai Tugas / Praktikum</label> 
          <div class="col-8">
            <input id="text3" name="nilai_tugas" placeholder="Nilai Tugas" type="text" class="form-control" value="" style="width: 50%">
          </div>
        </div> 
        <div class="form-group row">
          <div class="offset-2 col-8">
            <button name="proses" value="Simpan" type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
      </form>
      </div>

      <div>
      <?php
        $Proses = isset ($_POST['proses']) ? $_POST['proses'] : '';
        $Nama_siswa = isset ($_POST['nama']) ? $_POST['nama'] : '';
        $Mata_kuliah = isset ($_POST['matkul']) ? $_POST['matkul'] : '';
        $Nilai_UTS = isset ($_POST['nilai_uts']) ? $_POST['nilai_uts'] : '';
        $Nilai_UAS = isset ($_POST['nilai_uas']) ? $_POST['nilai_uas'] : '';
        $Nilai_tugas = isset ($_POST['nilai_tugas']) ? $_POST['nilai_tugas'] : '';

            echo 'Proses : ' . $Proses;
            echo '<br>Nama Siswa : ' . $Nama_siswa;
            echo '<br>Mata Kuliah : ' . $Mata_kuliah;
            echo '<br>Nilai UTS : ' . $Nilai_UTS;
            echo '<br>Nilai UAS : ' . $Nilai_UAS;
            echo '<br>Nilai Tugas Praktikum : ' . $Nilai_tugas;

        $Hasil_UTS = intval($Nilai_UTS) * 0.3;
        $Hasil_UAS = intval($Nilai_UAS) * 0.35;
        $Hasil_Tugas = intval($Nilai_tugas) * 0.35;
        $Nilai_Akhir = $Hasil_UTS + $Hasil_UAS + $Hasil_Tugas;
                    
            echo "<br> <p>Nilai Anda : $Nilai_Akhir</p>";
                if( $Nilai_Akhir > 55){
                    echo "<h3>LULUS</h3>";
                }
                else{
                    echo "<h3>LULUS</h3>";
                }
                
        $Nilai_A = $Nilai_Akhir >= 85;
        $Nilai_B = $Nilai_Akhir >= 70;
        $Nilai_C = $Nilai_Akhir >= 56;
        $Nilai_D = $Nilai_Akhir >= 36;
        $Nilai_E = $Nilai_Akhir >= 0;

                if($Nilai_A){
                    echo "Grade : A";
                }
                elseif($Nilai_B){
                    echo "Grade : B";
                }
                elseif($Nilai_C){
                    echo "Grade : C";
                }
                elseif($Nilai_D){
                    echo "Grade : D";
                }
                elseif($Nilai_E){
                    echo "Grade : A";
                }
                else{
                    echo "Grade : I";
                }
                    
                switch(''){
                    case ($Nilai_A):
                        echo "<br/>Predikat : Sangat Memuaskan";
                        break;
                    case ($Nilai_B):
                        echo "<br/>Predikat : Memuaskan";
                        break;
                    case ($Nilai_C):
                        echo "<br/>Predikat : Cukup";
                        break;
                    case ($Nilai_D):
                        echo "<br/>Predikat : Kurang";
                        break;
                    case ($Nilai_E):
                        echo "<br/>Predikat : Sangat Kurang";
                        break;
                    default:
                        echo "<br/>Tidak Ada";
                }
        ?>
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
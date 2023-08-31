<?php 
include_once "../controller/update.php";
include_once "../controller/read.php";
$id=$_GET['id'];
$i=$_GET['no'];
$set=$_GET['jenis-t'];
if ($set=="pemasukan"){
  $read=read_pemasukan($id);
  if (isset($_POST["acc"]) && $_POST['jumlah']!=0 ){
    if(updateRevenue($_POST)>0){
      echo "
      <script>
      alert ('Data Berhasil Diubah!');
      document. location.href = 'read.php';
      </script>
      ";
    } else {
      echo "
      <script>
      alert ('Data Gagal Diubah!');
      document. location.href = 'read.php';
      </script>
      ";
    }
  }

} elseif ($set=="pengeluaran"){
  $read=read_pengeluaran($id);
  if (isset($_POST["acc"]) && $_POST['jumlah']!=0 ){
    if(updateExpenditure($_POST)>0){
      echo "
      <script>
      alert ('Data Berhasil Diubah!');
      document. location.href = 'read.php';
      </script>
      ";
    } else {
      echo "
      <script>
      alert ('Data Gagal Diubah!');
      document. location.href = 'read.php';
      </script>
      ";
    }
  }
}

?>
<!doctype html>
<html lang="en">

<head>
  <title>Update</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>
    <div class="container-fluid" >
        <div class="container py-5 d-flex" style="height: 80vh; justify-content: center; align-items: center;">
            <div class="row">
              <div class="col-lg-6 col-md-6" style="margin-top: 30px;">
                <h1>Anda akan mengedit jumlah <?php
                  if ($set=="pemasukan"){echo "pemasukan";}elseif($set=="pengeluaran"){echo "pengeluaran";}
                  ?> No.
                  <?php 
                  if (!isset($_GET['id'])){header('Location:read.php');exit;} else 
                  {echo $i; }
                  ?>
                </h1>
              </div>
              <div class="col-lg-5 col-md-6 offset-lg-1">
                <div class="card text-start">
                  <div class="card-body">
                    <div class="mb-3">
                    <form action="" method="post">
                    <input type="hidden" value="<?= $id; ?>" name="id">
                        <label for="jumlah" class="form-label">Masukkan Jumlah Baru</label>
                        <input type="text"
                          class="form-control" name="jumlah" id="jumlah" aria-describedby="helpId" value="<?= $read['jumlah']; ?>" required>
                        </div>
                        <button type="submit" name="acc" class="btn btn-primary ">Submit</button>
                      </form>
                      <a name="back" id="back" class="btn btn-primary" href="read.php" role="button">Back</a> 
                    </div>
                </div>
              </div>
            </div>
        </div>
    </div>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>




















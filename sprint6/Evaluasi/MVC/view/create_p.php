<?php 
include_once "../controller/create.php";
if (isset($_POST["submit"])){
  if (revenue($_POST)>0){
    echo "
       <script>
       alert ('Data Berhasil Ditambahkan!');
       document. location.href = 'read.php';
       </script>
       ";
  } else {
    echo "
      <script>
      alert ('Data Gagal Ditambahkan!');
      document. location.href = 'read.php';
      </script>
      ";
    }
}
?>
<!doctype html>
<html lang="en">

<head>
  <title>Create</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>
<style>
  .bordered{
    border: solid;
    height: 80vh;
  } 
</style>
<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>
    <div class="container-fluid">
        <div class="container py-5 d-flex" style="height: 80vh; justify-content: center; align-items: center;">
          <div class="row">
            <div class="col-lg-6 col-md-6" style="margin-top: 30px;">
              <h1>Masukkan Jumlah Pemasukan</h1>
            </div>
            <div class="col-lg-5 col-md-6 offset-lg-1">
              <form class="card text-start" action="" method="post" >
                  <div class="card-body">
                      <div class="mb-3">
                          <label for="jumlah" class="form-label">Jumlah Pemasukan Baru</label>
                          <input autofocus type="text" name="jumlah" id="jumlah" class="form-control" placeholder="" aria-describedby="helpId" required>
                      </div>
                      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                      <a name="back" id="back" class="btn btn-primary" href="read.php" role="button">Back</a> 
                  </div>
              </form>
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
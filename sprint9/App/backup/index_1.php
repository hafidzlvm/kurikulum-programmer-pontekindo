<?php 
require_once 'model/conn.php';
$query = new Query();
// $query -> index();
// $rows = $query;
var_dump($query);
$i = 1;
?>


<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <main>
  <div class="container-fluid">
        <div class="container py-5" style="height: 80vh; justify-content: center; align-items: center; margin-top: 20px;">
            <h3>Daftar Transaksi</h3>
            <div class="table-responsive">
                <table class="table table-primary">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Jenis Transaksi</th>
                      <th scope="col">Jumlah</th>
                      <th scope="col">Tanggal</th>
                      <th scope="col">Ubah | Hapus</th>
                    </tr>
                  </thead>
                  <?php foreach ($rows as $data): ?>
                    <tbody>
                      <tr class="">
                            <td scope="row"><?= $i; ?></td>
                            <td scope="row"><?= $data['jenis_t']; ?></td>
                            <td><?= $data['jumlah']; ?></td>
                            <td><?= $data['tanggal_t']; ?></td>
                            <td>
                              <a class="btn btn-primary" href="update.php?jenis-t=<?= 
                              $data["jenis_t"]."&id=".$data['id']."&no=".$i;
                              ?>">Ubah</a>
                              <a class="btn btn-primary" href="delete.php?jenis-t=<?= 
                              $data["jenis_t"]."&id=".$data['id'];
                              ?>" onclick="return confirm('Anda akan menghapus No. <?= $i;  ?> ');">Hapus</a>

                            </td>
                        </tr>
                    </tbody>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                </table>
                <a name="" id="" class="btn btn-primary" href="create_p.php" role="button">Tambah Pemasukan</a>
                <a name="" id="" class="btn btn-primary" href="create_pg.php" role="button">Tambah Pengeluaran</a>
            </div>
            
            <div class="col-4 py-4">
              <div class="card text-start">
                <div class="card-body">
                  <h4 class="card-title">Saldo</h4>
                  <p class="card-text"><?= saldo(); ?></p>
                </div>
              </div>
            </div>
        </div>
    </div>

  </main>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>
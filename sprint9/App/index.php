<?php
require_once "controller/action_index.php";
?>

<!doctype html>
<html lang="en">

<head>
  <title>myRupee2</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>

    <!-- New Create -->
        <div class="modal fade" tabindex="-1" id="AddNew">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Add New</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form action="" method="post">
                    <label for="" class="form-label">Jenis Transaksi</label>
                    <select name="jenis" class="form-select mb-2" aria-label="Default select example" required>
                      <option value="pemasukan">Pemasukan</option>
                      <option value="pengeluaran">Pengeluaran</option>
                    </select>

                    <label for="jumlah" class="form-label">Jumlah</label>
                    <input type="text" id="jumlah" name="jumlah" class="form-control">

                    <button type="submit" name="addNew" class="btn btn-primary mt-3 col-12">Submit</button>
                </form>
              </div>
            </div>
          </div>
        </div>
    <!-- End Create -->

    <!-- New Edit -->
    <!-- End Edit -->
  <header>
    <!-- place navbar here -->
  </header>
  <main>
    <div class="container">
        <div class="row mt-4">
            <div class="d-flex justify-content-center text-align-center">
                <div class="col-10" >
                    <h1 class="text-primary">Transaction</h1>
                </div>
                <div class="col-2" >
                    <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#AddNew">Add New Transaction</button>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="table-responsive">
                <table class="table table-primary text-center">
                    <thead>
                        <tr>
                          <th scope="col">No</th>
                          <th scope="col">Transaction Types</th>
                          <th scope="col">Total</th>
                          <th scope="col">Date</th>
                          <th scope="col">Edit | Delete</th>
                        </tr>
                    </thead>
                    <?= $output; ?>
                </table> 
            </div>
        </div>
        <div class="col-4 py-4">
          <div class="card text-start">
            <div class="card-body">
              <h4 class="card-title">Saldo</h4>
              <p class="card-text"><?= $db->saldo()->saldo; ?></p>
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
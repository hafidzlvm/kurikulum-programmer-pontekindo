<?php 
require_once "controller/action_delete.php";
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
                <h1>Anda akan menghapus
                    <?= $readOne->jenis_t; ?> 
                    No.
                    <?php if (!isset($_GET['id'])){header('Location:read.php');exit;} else 
                    {echo $i; } ?>
                    dengan jumlah
                    <?= $readOne->jumlah; ?>
                </h1>

              </div>

              <div class="col-lg-5 col-md-6 offset-lg-1">
                <div class="card text-start">
                  <div class="card-body">
                    <div class="">

                      <form action="" method="post">

                        <input type="hidden" value="<?= $readOne->id_p_pg; ?>" name="id">
                        <input type="hidden" value="<?= $readOne->jenis_t; ?>" name="jenis">
                        <button type="submit" name="delete" class="btn btn-primary offset-1 col-5 my-3">Submit</button>
                        <a name="back" id="back" class="btn btn-primary col-5 my-3" href="index.php" role="button">Back</a> 
                      </form>
                    </div>

                    </div>

                </div>
              </div>
            </div>
        </div>
    </div>
  </main>
  <footer>
  <div class="modal" id="exampleModal"  aria-labelledby="exampleModalLabel" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
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
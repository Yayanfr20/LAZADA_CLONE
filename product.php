<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lazada</title>
    <!-- bootstrap ccs -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous" />
    <!-- boostrap icon -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
    <!-- favicon -->
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" />
    <!-- main css -->
    <link rel="stylesheet" href="css/main.css" />
  </head>

  <body>
    <!-- navbar section -->
    <?php include "components/navigation.php"; ?>

    
    <!-- section product detail -->
    <div class="container mt-3">
      <div class="product-detail row">
        <div class="col-md-4">
            <img src="https://via.placeholder.com/300x300" width="100%"  alt="">
        </div>
        <div class="col-md-4">
            <h3>Product Name</h3>
            <hr>
            <div class="d-flex justify-content-between align-items-center">
                <small class="text-secondary">100 Sold out</small>
                <a href="" class="btn btn-light"><i class="bi bi-share-fill"></i></a>
            </div>
            <small>Category : Buku</small>
            <hr>
            <h3 style="color: #f57224;">Rp.30000</h3>
            <hr>
            <p>Ukuran:</p>
            <div class="d-flex justify-content-around">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="size" value="s" id="size-s">
                    <label class="form-check-label" for="size-s">
                        S
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="size" value="m" id="size-m">
                    <label class="form-check-label" for="size-m">
                        M
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="size" value="l" id="size-l">
                    <label class="form-check-label" for="size-l">
                        L
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="size" value="xl" id="size-xl">
                    <label class="form-check-label" for="size-xl">
                        XL
                    </label>
                </div>
            </div>
            <div class="form-group mt-3">
                    <label for="quantity">Kuantitas:</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <button class="btn btn-outline-secondary" type="button" id="button-minus">-</button>
                        </div>
                        <input type="number" class="kuantitas"  id="quantity" name="quantity" min="1" value="1">
                        <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button" id="button-plus">+</button>
                        </div>
                    </div>
                    <small class="text-secondary">Stok: 100</small>

            </div>
            <div class="row mt-3 justify-content-around">
                <div class="col-md-6 mb-2 row">
                    <button type="button" data-bs-toggle="modal" data-bs-target="#ModalLogin" class="btn text-white" style="background-color:#fdb610;">Beli Sekarang</button>
                </div>
                <div class="col-md-6 mb-2 row">
                    <a href="" class="btn text-white" style="background-color: #f57224;">Tambahkan Ke Troli</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <h6>Detail Product</h6>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quibusdam, architecto. Ab laudantium distinctio impedit sequi nulla iusto vero ex architecto voluptates repudiandae non suscipit, aut asperiores odio aperiam tempora tempore vel quod voluptatem doloribus quae error sunt quia. Laudantium, quae.</p>
        </div>
      </div>
    </div>
    <!-- sidebar -->
    <?php include "components/sidebar.php"; ?>
    <!-- Modal Search -->
    <div
      class="modal fade"
      id="formSearch"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <img src="images/logo.png" class="logo" alt="" />
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="">
              <div class="input-group mb-3">
                <input
                  type="text"
                  class="form-control"
                  placeholder="Cari di Lazada" />
                <button
                  class="btn text-white"
                  style="background-color: #f57224"
                  type="button"
                  id="button-addon2">
                  <i class="bi bi-search"></i>
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>


    <!-- modal login -->
    <div class="modal fade" id="ModalLogin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="d-flex justify-content-between mb-3">
                    <h6 id="exampleModalLabel">Selamat Datang Kembali, Silahkan Login</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="">
                    <div class="mb-3">
                        <input type="text" placeholder="Email Atau Nomor Telepon" class="form-control">
                    </div>
                    <div class="mb-3">
                        <input type="password" name="" class="form-control" placeholder="Kata sandi" id="">
                    </div>
                    <div class="mb-2 row justify-content-around">
                        <div class="col-6">
                            <button class="btn form-control text-white" style="background-color: #f57224;" type="submit">Masuk</button>
                        </div>
                        <div class="col-6">
                             <a href class="btn form-control text-white" style="background-color:#d44837;"><i class="bi bi-google"></i> Google</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    <!-- bootstrap js -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"></script>
    <script
      src="https://code.jquery.com/jquery-3.6.4.js"
      integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
      crossorigin="anonymous"></script>
      <script>
        var buttonPlus = document.getElementById("button-plus");
        var buttonMinus = document.getElementById("button-minus");
        var quantityInput = document.getElementById("quantity");

        buttonPlus.addEventListener("click", function() {
        quantityInput.value++;
        });

        buttonMinus.addEventListener("click", function() {
        if (quantityInput.value > 1) {
            quantityInput.value--;
        }
        });

      </script>
  </body>
</html>

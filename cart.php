<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lazada - Cart</title>
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
    <style>
      .cart-item {
        padding: 5px;
  border-bottom: 1px solid #ccc;
  margin-bottom: 20px;
}

.product-name {
  margin-top: 0;
  margin-bottom: 10px;
}

.product-price {
  margin-top: 0;
  margin-bottom: 10px;
  font-weight: bold;
}

.product-quantity {
  display: flex;
  align-items: center;
  margin-bottom: 10px;
}

.product-quantity button {
  border-radius: 50%;
  width: 30px;
  height: 30px;
}

.product-quantity input {
  margin: 0 10px;
  width: 50px;
  text-align: center;
}

.remove-item {
  margin-top: 10px;
}

.order-summary {
  background-color: #f7f7f7;
  padding: 20px;
}

.order-item {
  display: flex;
  justify-content: space-between;
  margin-bottom: 10px;
}

.order-item p {
  margin: 0;
}

.order-price {
  font-weight: bold;
}

    </style>
  </head>

  <body>
    <!-- navbar section -->
    <?php include "components/navigation.php"; ?>

    
    <!-- section cart -->
    <div class="container mt-5">
  <div class="row " style="background-color: white; padding: 10px;box-sizing: border-box;">
    <div class="col-lg-8">
      <h2>My Cart</h2>
      <div class="cart-items">
        <div class="cart-item row">
          <div class="col-md-4">
            <img src="https://via.placeholder.com/150x150" alt="Product Image">
          </div>
          <div class="col-md-8">
            <h5 class="product-name">Product Name</h5>
            <p class="product-price">$10.00</p>
            <div class="product-quantity">
              <button class="btn btn-sm btn-primary">-</button>
              <input type="text" class="form-control" value="1">
              <button class="btn btn-sm btn-primary">+</button>
            </div>
            <button class="btn btn-sm btn-danger remove-item">Remove</button>
          </div>
        </div>
        <div class="cart-item row">
          <div class="col-md-4">
            <img src="https://via.placeholder.com/150x150" alt="Product Image">
          </div>
          <div class="col-md-8">
            <h5 class="product-name">Product Name</h5>
            <p class="product-price">$10.00</p>
            <div class="product-quantity">
              <button class="btn btn-sm btn-primary">-</button>
              <input type="text" class="form-control" value="1">
              <button class="btn btn-sm btn-primary">+</button>
            </div>
            <button class="btn btn-sm btn-danger remove-item">Remove</button>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <h2>Order Summary</h2>
      <div class="order-summary">
        <div class="order-item">
          <p>Subtotal</p>
          <p class="order-price">$10.00</p>
        </div>
        <div class="order-item">
          <p>Shipping</p>
          <p class="order-price">$5.00</p>
        </div>
        <div class="order-item">
          <p>Total</p>
          <p class="order-price">$15.00</p>
        </div>
        <button class="btn btn-primary btn-block checkout-btn">Checkout</button>
      </div>
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
      // Mendapatkan semua tombol plus dan minus
      var quantityButtons = document.querySelectorAll('.product-quantity button');

      // Menambahkan event listener untuk setiap tombol plus dan minus
      quantityButtons.forEach(function(button) {
        button.addEventListener('click', function() {
          var input = this.parentNode.querySelector('input');
          var currentValue = parseInt(input.value);
          var newValue;

          if (this.innerText === '+') {
            newValue = currentValue + 1;
          } else if (this.innerText === '-') {
            newValue = currentValue - 1 < 1 ? 1 : currentValue - 1;
          }

          input.value = newValue;
        });
      });
    </script>

  </body>
</html>

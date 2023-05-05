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
    <?php include "components/loader.php"; ?>
  </head>

  <body>
    <!-- navbar section -->
    <?php include "components/navigation.php"; ?>

    <!-- slider -->
    <div class="container mt-3">
      <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"></button>
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="1"
            aria-label="Slide 2"></button>
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="2"
            aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img
              src="images/slider/slider1.jpg"
              class="d-block w-100"
              alt="..." />
          </div>
          <div class="carousel-item">
            <img
              src="images/slider/slider2.webp"
              class="d-block w-100"
              alt="..." />
          </div>
          <div class="carousel-item">
            <img
              src="images/slider/slider3.webp"
              class="d-block w-100"
              alt="..." />
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>

    <!-- card botton -->
    <div class="container mt-3">
      <div class="row">
        <h3><i class="bi bi-list-nested"></i> Kategori</h3>
      </div>
      <div class="d-flex justify-content-around row">
        <a
          style="width: 10rem"
          id="Pakaian"
          class="btn btn-white mb-3 d-flex justify-content-center align-items-center"
          ><img src="images/kategori/pakaian.svg" width="30" alt="" />
          Pakaian</a
        >
        <a
          style="width: 10rem"
          id="Aksesoris"
          class="btn btn-white mb-3 d-flex justify-content-center align-items-center"
          ><img src="images/kategori/sepatu.svg" width="30" alt="" />
          Aksesoris</a
        >
        <a
          style="width: 10rem"
          id="Alat-Tulis"
          data-category="Alat-Tulis"
          class="btn btn-white mb-3 d-flex justify-content-center align-items-center"
          ><img src="images/kategori/sandal.png" width="30" alt="" /> Alat
          Tulis</a
        >
        <a
          style="width: 10rem"
          id="Elektronik"
          data-category="Elektronik"
          class="btn btn-white mb-3 d-flex justify-content-center align-items-center"
          ><img src="images/kategori/elektronik.png" width="30" alt="" />
          Elektronik</a
        >
        <a
          style="width: 10rem"
          id="Olahraga"
          data-category="Olahraga"
          class="btn btn-white mb-3 d-flex justify-content-center align-items-center"
          ><img src="images/kategori/makanan.jpeg" width="30" alt="" />
          Olahraga</a
        >
        <a
          style="width: 10rem"
          id="Buku"
          data-category="Buku"
          class="btn btn-white mb-3 d-flex justify-content-center align-items-center"
          ><img src="images/kategori/buku.jpg" width="30" alt="" /> Buku</a
        >
        <a
          style="width: 10rem"
          id="SemuaCategory"
          class="btn btn-white mb-3 d-flex justify-content-center align-items-center">
          Semua</a
        >
      </div>
    </div>
    <!-- section product populer -->
    <div class="container mt-3">
      <div class="row">
        <h3><i class="bi bi-list-nested"></i> Paling Populer</h3>
      </div>
      <div id="loading" class="mt-5 d-flex justify-content-center">
        <div class="spinner-border" style="color: #f57224" role="status">
          <span class="visually-hidden">Loading...</span>
        </div>
      </div>
      <div class="row d-none justify-content-around" id="box-products"></div>
      <div class="d-flex justify-content-center mt-3">
        <a
          href="#"
          id="MoreData"
          class="btn text-white"
          style="background-color: #f57224"
          >More</a
        >
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
    <!-- bootstrap js -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"></script>
    <script
      src="https://code.jquery.com/jquery-3.6.4.js"
      integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
      crossorigin="anonymous"></script>
    <script src="js/index.js"></script>
    <script src="js/loader.js"></script>
  </body>
</html>

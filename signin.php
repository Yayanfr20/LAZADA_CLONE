<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lazada - Signin</title>
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
      .form-login {
      width: 700px;
      height: auto;
      background-color: white;
      padding: 20px;
      box-sizing: border-box;
    }
    button {
    max-width: 320px;
    display: flex;
    padding: 0.5rem 1.4rem;
    font-size: 0.875rem;
    line-height: 1.25rem;
    font-weight: 700;
    text-align: center;
    text-transform: uppercase;
    vertical-align: middle;
    align-items: center;
    border-radius: 0.5rem;
    border: 1px solid rgba(0, 0, 0, 0.25);
    gap: 0.75rem;
    color: rgb(65, 63, 63);
    background-color: #fff;
    cursor: pointer;
    transition: all .6s ease;
  }

  .button svg {
    height: 24px;
  }

  button:hover {
    transform: scale(1.02);
  }

    @media screen and (max-width: 768px) {
      .form-login {
        width: 90%;
      }
    }
    </style>
  </head>
<?php  include "components/loader.php"; ?>
  <body>
    <!-- navbar section -->
    <?php include "components/navigation.php"; ?>

    
    <!-- section product detail -->
    <div class="container mt-3 d-flex justify-content-center">
      <div class="row form-login">
        <div class="col-md-8 mt-3">
        <h6>Selamat Datang kembali, Silahkan Login!</h6>
        <form action="">
                    <div class="mb-3">
                        <input type="text" placeholder="Email Atau Nomor Telepon" class="form-control">
                    </div>
                    <div class="mb-3">
                        <input type="password" name="" class="form-control" placeholder="Kata sandi" id="">
                    </div>
                    <div class="mb-3">
                      <button class="btn form-control text-white" style="background-color: #f57224;" type="submit">Masuk</button>
                    </div>
              </form>
        </div>
        <div class="col-md-4 mt-3">
              <div class="row">
              <button class="button">
                  <svg xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" viewBox="0 0 256 262">
                  <path fill="#4285F4" d="M255.878 133.451c0-10.734-.871-18.567-2.756-26.69H130.55v48.448h71.947c-1.45 12.04-9.283 30.172-26.69 42.356l-.244 1.622 38.755 30.023 2.685.268c24.659-22.774 38.875-56.282 38.875-96.027"></path>
                  <path fill="#34A853" d="M130.55 261.1c35.248 0 64.839-11.605 86.453-31.622l-41.196-31.913c-11.024 7.688-25.82 13.055-45.257 13.055-34.523 0-63.824-22.773-74.269-54.25l-1.531.13-40.298 31.187-.527 1.465C35.393 231.798 79.49 261.1 130.55 261.1"></path>
                  <path fill="#FBBC05" d="M56.281 156.37c-2.756-8.123-4.351-16.827-4.351-25.82 0-8.994 1.595-17.697 4.206-25.82l-.073-1.73L15.26 71.312l-1.335.635C5.077 89.644 0 109.517 0 130.55s5.077 40.905 13.925 58.602l42.356-32.782"></path>
                  <path fill="#EB4335" d="M130.55 50.479c24.514 0 41.05 10.589 50.479 19.438l36.844-35.974C195.245 12.91 165.798 0 130.55 0 79.49 0 35.393 29.301 13.925 71.947l42.211 32.783c10.59-31.477 39.891-54.251 74.414-54.251"></path>
                </svg>
                  Continue with Google
                </button>
              </div>
              <div class="row mt-3">
                <p>Belum Punya Akun?</p>
                <a href="signup">buat akun</a>
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

      <script src="js/loader.js"></script>
  </body>
</html>

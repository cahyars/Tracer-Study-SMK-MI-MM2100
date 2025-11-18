<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register Page | Tracer Study SMK MI MM2100</title>
  <link rel="shortcut icon" type="image/png" href="<?= base_url(); ?>/assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/styles.min.css" />
</head>

<body>
<!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
      class="position-relative overflow-hidden text-bg-light min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <h1 class="text-center">Registrasi Akun</h1>
                <br>
                <p class="text-center">Silakan mengisi form untuk membuat akun</p>
                <form method="post">
                  <div class="mb-3">
                    <label for="exampleInputtext1" class="form-label">Name</label>
                    <input type="text" name="nama" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" required>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email Address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
                  </div>
                  <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Sign Up</button>
                  <div class="d-flex align-items-center justify-content-center">
                    <p class="fs-4 mb-0 fw-medium">Sudah punya Akun?</p>
                    <a class="text-primary fw-medium ms-2" href="<?= base_url('auth/login'); ?>">Sign In</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<script src="<?= base_url(); ?>/assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="<?= base_url(); ?>/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!-- solar icons -->
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
</body>

</html>  
 <!-- BACKEND  -->
 <!-- <form method="post">
    <input type="text" name="nama" placeholder="Nama Lengkap" required>
    <br>
    <input type="email" name="email" placeholder="Email" required>
    <br>
    <input type="password" name="password" placeholder="Password" required>
    <br>
    <button type="submit">Register</button>
  </form>
  <br>
  
  <a href="<?= base_url('auth/login') ?>">
    <button>< Kembali ke Login</button>
  </a> -->

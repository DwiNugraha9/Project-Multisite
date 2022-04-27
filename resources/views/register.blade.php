<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register Akun</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body style="background-color : #bed5fa;">


    <div>
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom" style="background-color : #fff;">
            <a href="/" class="align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                <img src="/img/logodms.png" style="height: 40px;  width: 75px;">
            </a>
            
            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li><a href="#" class="nav-link px-2 link-secondary">Produk</a></li>
                <li><a href="#" class="nav-link px-2 link-dark">Layanan</a></li>
                <li><a href="#" class="nav-link px-2 link-dark">Integrasi</a></li>
                <li><a href="#" class="nav-link px-2 link-dark">Lainnya</a></li>
            </ul>

            <div class="col-md-2 text-end">
                <button type="button" class="btn btn-outline-primary me-2">Masuk</button>
                <button type="button" class="btn btn-primary">Daftar</button>
            </div>
        </header>
    </div>

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-7">
                        <img src="/img/pic2.png" style="margin-left: -5px;  width: 100%;">
                    </div>
                    <div class="col-lg-5">
                        <div class="p-5">
                            <div class="text-left">
                                <h3 class="h4 text-gray-900 mb-4">Pendaftaran Akun Baru</h3>
                            </div>
                            <form class="user">
                                <div class="form-group">
                                <label class="control-label control-label-bold">Email :</label>
                                    <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Contoh@gmail.com">
                                </div>
                                <div class="form-group">
                                <label class="control-label control-label-bold">Nama Lengkap :</label>
                                    <input type="name" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Nama Lengkap Kamu">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label class="control-label control-label-bold">Password :</label>
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Password">
                                    </div>
                                    <div class="col-sm-6">
                                    <label class="control-label control-label-bold">Konfirmasi Password :</label>
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleRepeatPassword" placeholder="Ulangi Password">
                                    </div>
                                </div>
                                <div class="text-left small">
                                    <p class="small">Gunakan kombinasi huruf dan angka dan minimal 1 karakter khusus</p>
                                </div>
                                <a href="/login" class="btn btn-warning btn-user btn-block">
                                    Daftar
                                </a>
                                <hr>
                                <a href="/login" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Daftar dengan Google
                                </a>
                                <a href="/login" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Daftar dengan Facebook
                                </a>
                            </form>
                            <hr>
                            <div class="text-left">
                                <p class="small">Sudah punya akun? <a href="/login">Login!</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

<footer style="background-color: #002866;">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2022 Copyright:
    <a class="text-white" href="#">PT. Digital Multisite Indonesia</a>
  </div>
  <!-- Copyright -->
</footer>

</html>
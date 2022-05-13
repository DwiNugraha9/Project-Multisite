<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

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
    <section id="nav">
        <nav class="navbar navbar-expand-lg" style="background-color: #fff;">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img src="/img/logodms.png" style="height: 40px;  width: 70px;">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto mr-sm-4">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Produk
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Produk 1</a>
                                <a class="dropdown-item" href="#">Produk 2</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Lainnya</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Layanan
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Integrasi 1</a>
                                <a class="dropdown-item" href="#">Integrasi 2</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Lainnya</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Integrasi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Lainnya</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <a href="/login" class="btn btn-outline-primary my-2 mr-sm-2" type="submit">Login</a>
                    </form>
                    <form class="form-inline my-2 my-lg-0">
                        <a href="/register" class="btn btn-primary my-2 my-sm-0" type="submit">Daftar </a>
                    </form>
                </div>
            </div>
        </nav>
    </section>
    </div>



    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-11 col-lg-10 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0   ">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-md-6">
                               <img src="/img/pic1.png" style="margin-left: -15px; margin-bottom: -15px; width: 100%;">
                            </div>
                            <div class="col-md-5" style="height: 550px;">
                                <img src="img/logodms.png" style="margin-top: 30px; width: 70px;">

                                <h4 style="color: #004DC3; margin-top: 19px; font-weight: bolder; ">Login</h4>
                                    <label style="margin-top: 17px; color: #2674ED;">Email</label>
                                    <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>

                                    <label style="margin-top: 30px; color: #2674ED;">Password</label>
                                    <input type="password" id="pass" class="form-control" placeholder="Password" required autofocus>
                                <br>

                                <div class="custom-control custom-checkbox small">
                                    <input type="checkbox" class="custom-control-input" id="customCheck">
                                    <label class="custom-control-label" for="customCheck">Ingatkan saya</label>
                                </div>

                                <br>

                                <div class="text-left">
                                    <a class="small" href="/forgot-password">Lupa Password?</a>
                                </div>
                                
                                <a href="/index" class="btn btn-warning btn-user btn-block">
                                Login
                                </a>

                                <hr>
                                
                                <div class="text-left">
                                    <p class="small">Belum punya akun? <a href="/register">Daftar untuk mencoba DMS (Gratis!)</a></p>
                                </div>
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
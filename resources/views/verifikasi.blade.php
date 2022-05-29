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
    <style type="text/css">
        .site-footer
            {
            background-color:#26272b;
            padding:45px 0 20px;
            font-size:15px;
            line-height:24px;
            color:#737373;
            }
            .site-footer hr
            {
            border-top-color:#bbb;
            opacity:0.5
            }
            .site-footer hr.small
            {
            margin:20px 0
            }
            .site-footer h6
            {
            color:#fff;
            font-size:16px;
            text-transform:uppercase;
            margin-top:5px;
            letter-spacing:2px
            }
            .site-footer a
            {
            color:#737373;
            }
            .site-footer a:hover
            {
            color:#3366cc;
            text-decoration:none;
            }
            .footer-links
            {
            padding-left:0;
            list-style:none
            }
            .footer-links li
            {
            display:block
            }
            .footer-links a
            {
            color:#737373
            }
            .footer-links a:active,.footer-links a:focus,.footer-links a:hover
            {
            color:#3366cc;
            text-decoration:none;
            }
            .footer-links.inline li
            {
            display:inline-block
            }
            .site-footer .social-icons
            {
            text-align:right
            }
            .site-footer .social-icons a
            {
            width:40px;
            height:40px;
            line-height:40px;
            margin-left:6px;
            margin-right:0;
            border-radius:100%;
            background-color:#33353d
            }
            .copyright-text
            {
            margin:0
            }
            @media (max-width:991px)
            {
            .site-footer [class^=col-]
            {
                margin-bottom:30px
            }
            }
            @media (max-width:767px)
            {
            .site-footer
            {
                padding-bottom:0
            }
            .site-footer .copyright-text,.site-footer .social-icons
            {
                text-align:center
            }
            }
            .social-icons
            {
            padding-left:0;
            margin-bottom:0;
            list-style:none
            }
            .social-icons li
            {
            display:inline-block;
            margin-bottom:4px
            }
            .social-icons li.title
            {
            margin-right:15px;
            text-transform:uppercase;
            color:#96a2b2;
            font-weight:700;
            font-size:13px
            }
            .social-icons a{
            background-color:#eceeef;
            color:#818a91;
            font-size:16px;
            display:inline-block;
            line-height:44px;
            width:44px;
            height:44px;
            text-align:center;
            margin-right:8px;
            border-radius:100%;
            -webkit-transition:all .2s linear;
            -o-transition:all .2s linear;
            transition:all .2s linear
            }
            .social-icons a:active,.social-icons a:focus,.social-icons a:hover
            {
            color:#fff;
            background-color:#29aafe
            }
            .social-icons.size-sm a
            {
            line-height:34px;
            height:34px;
            width:34px;
            font-size:14px
            }
            .social-icons a.facebook:hover
            {
            background-color:#3b5998
            }
            .social-icons a.twitter:hover
            {
            background-color:#00aced
            }
            .social-icons a.linkedin:hover
            {
            background-color:#007bb6
            }
            .social-icons a.dribbble:hover
            {
            background-color:#ea4c89
            }
            @media (max-width:767px)
            {
            .social-icons li.title
            {
                display:block;
                margin-right:0;
                font-weight:600
            }
            }
    </style>
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

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-11 col-lg-10 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5" style="background-color : #004DC3;">
                    <div class="card-body p-0">

                        <!-- Nested Row within Card Body -->
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="col-md-4 right-column">
                                        <h3 class="h4 text-gray-900 ">Login</h3>
                                    </div>
                                    <br>
                                    <form class="user">
                                        <div class="form-group">
                                            <label class="control-label control-label-bold" style="color: #fff;">Kode OTP</label>
                                            <input type="email" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Masukkan alamat email anda ...">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label control-label-bold">Password</label>
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" aria-describedby="passwordHelp"
                                                placeholder="Masukkan password ...">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Ingatkan saya</label>
                                            </div>
                                        </div>
                                        <div>
                                        <div class="text-left">
                                            <a class="small" href="/forgot-password">Lupa Password?</a>
                                        </div>
                                        <br>
                                        </div>
                                        <a href="/" class="btn btn-warning btn-user btn-block">
                                            Login
                                        </a>
                                    </form>
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

    </div>
    @include("footer")
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
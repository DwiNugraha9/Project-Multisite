<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

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
    <title>Landing Page</title>
  </head>
  <body>
    
    <!--navbar-->
    <section id="nav">
        <nav class="navbar navbar-expand-lg" style="background-color: #fff;">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img src="img/logodms.png" style="height: 40px;  width: 75px;">
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
                            <a class="nav-link dropdown-toggle" href="/login" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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

    <!-- Banner -->
    <section id="banner">
        <div class="banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="title">Platform omni-channel terpercaya</h4>
                        <p>Otomasi proses bisnis dari terima pesanan, sinkronisasi stok, integrasi marketplace,
                            aplikasi kasir, jasa pengiriman, hingga pencatatan akuntansi.
                        </p>
                        <a href="/register" class="btn btn-warning">Coba Gratis!</a>
                    </div>
                    <div class="col-md-6">
                        <img src="img/laptop.png" style="height: 383px;  width: 380px;">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--Icon-->
    <section id="icon">
        <div class="icon">
            <div class="container">
                <div class="row">
                      <div class="col-sm">
                        <img src="img/efisien.png" style="height: 90px;  width: 90px;">
                        <h6 class="title mt-5">Bisnis Lebih Efisien</h6>
                        <p>
                            Kelola bisnis dari semua
                            marketplace dan channel
                            lain dalam satu dashboard.
                        </p>
                      </div>
                      <div class="col-sm">
                        <img src="img/pelanggan.png" style="height: 90px;  width: 90px;">
                        <h6 class="title mt-5">Kepuasan Pelanggan</h6>
                        <p>
                            Pelanggan inti dari segala jenis bisnis.
                            Tingkatkan loyalitas pelanggan dengan DMS.
                        </p>
                      </div>
                      <div class="col-sm">
                        <img src="img/risetdata.png" style="height: 90px;  width: 90px;">
                        <h6 class="title mt-5">Berbasis Data</h6>
                        <p>
                            Pantau seluruh data penjualan dan pelanggan.
                            Buat keputusan terbaik setiap saat.
                        </p>
                      </div>
                </div>
            </div>
        </div>
    </section>

    <section id="fitur">
        <div class="fitur">
            <div class="container">
                <div style="text-align: center; color: white;">
                    <h4 style="text-transform: uppercase; font-weight: bolder;">Fitur DMS Omni-Channel</h4>
                </div>
                
                <div class="row">
                    <div class="col-md-3">
                        <ul class="menu">
                                <a class="btn btn-primary btn-block" style="text-align: left" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    Katalog
                                </a>
                            
                                <a class="btn btn-primary btn-block" style="text-align: left" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    Pesanan
                                </a>
                            
                            
                                <a class="btn btn-primary btn-block" style="text-align: left" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    Persediaan
                                </a>
                            
                            
                                <a class="btn btn-primary btn-block" style="text-align: left" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    Manajemen Gudang
                                </a>
                        </ul>
                    </div>
                    <div class="col-md-8">
                        <div class="collapse" id="collapseExample">
                            <div class="card card-body" style="color: black;">
                              <img src="img/katalog.png" style="height: 400px;  width: 660px;">
                            </div>
                        </div>
                    </div>


                </div> 
        
            </div>
        </div> 
    </section>


    <!--coba-->
    <section id="coba">
        <div class="coba">
            <div class="container">
                <div style="text-align: center; color: #002866;">
                    <h4 style="font-weight: bolder;">Jualan Online, Offline dan Kelola Gudang dalam satu sistem</h4>
                </div>
                <br>
                <form style="text-align: center;">
                    <a href="/register" class="btn btn-warning">Coba Gratis!</a>
                </form>
            </div>
        </div> 
    </section>

    <section id="foot">
        <div class="foot">
            <div class="container">
                <div class="row">
                    <div class="col-sm">
                    <img src="img/logodms.png" style="height: 70px;  width: 120px;">
                        <p class="title mt-2" style="color: #002866; font-weight: bolder;" >PT. Digital Multisite Indonesia</p>
                        <p style="color: #002866;" >DKI Jakarta, Indonesia</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- footer -->
    @include("footer")

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>

</html>
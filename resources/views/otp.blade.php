<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>OTP</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
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
    <style>
        .back_color {
            background-color: #BED5FA;
        }

        .back_gradasi {
            background-image: linear-gradient(to right, #4C88FC, #0C56CC);
        }

        .judul_atas{
            background-color: #083170; 
            width: 450px; 
            margin-left: auto; 
            margin-right: auto;
            margin-top: 20px;
            padding: 5px;
            color: white; 
            text-align: center;
            border-radius: 5px;
            font-size: 16pt;
        }

        .container_tulisan{
            width: 530px;
            margin-top: 10px; 
            margin-left: auto; 
            margin-right: auto;
            color: white;
        }

        .tulisan1{
            width: 530px;
            margin-top: 10px; 
            margin-left: auto; 
            margin-right: auto;
            text-align: center;
            color: white;
            font-size: 20px;
        }

        .tulisan2{
            width: 530px;
            margin-top: 10px; 
            margin-left: auto; 
            margin-right: auto;
            text-align: center;
            color: white;
            font-size: 13px;
        }

        .wadah3{
            width: 600px;
            margin-top: 10px; 
            margin-left: auto; 
            margin-right: auto;
            margin-bottom: 10px;
            font-size: 13px;
        }

        .wadah4{
            width: 320px;
            margin-top: 30px; 
            margin-left: auto; 
            margin-right: auto;
            margin-bottom: 60px;
        }

    </style>

    <!-- untuk slider -->
    <style>
        .slidecontainer {
            width: 500px;
            margin-left: auto; 
            margin-right: auto;
            margin-top: 40px;
            margin-bottom: 5px;
        }

        .slider {
            -webkit-appearance: none;
            width: 100%;
            height: 5px;
            border-radius: 5px;
            background: white;
            outline: none;
            opacity: 1;
            -webkit-transition: .2s;
            transition: opacity .2s;
        }

        .slider:hover {
            opacity: 1;
        }

        .slider::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: #083170;
            cursor: pointer;
        }

        .slider::-moz-range-thumb {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: #083170;
            cursor: pointer;
        }

    </style>
</head>

<body class="back_color">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-11 col-lg-10 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0 back_gradasi">
                        <div class="judul_atas">
                            <b>VERIFIKASI EMAIL</b>
                        </div>
                        
                        <div class="slidecontainer">
                            <input type="range" min="1" max="100" value="0" class="slider">
                        </div>

                        <div class="container_tulisan">
                            <div class="row">
                                <div class="col-xs-6">
                                    <b>OTP</b>
                                </div>
                                <div class="col-xs-6">
                                    <div class="pull-right"><b>Sukses</b></div>
                                </div>
                            </div>

                            <div class="row">
                            <div class="col-xs-12" style="text-align: center;">
                                <img src="img/otp.png">
                            </div>
                            </div>

                            <div class="tulisan1">
                                <b>VERIFIKASI E-MAIL</b>
                            </div>

                            <div class="tulisan2">
                                Silahkan masukkan kode verifikasi yang kamu terima lewat email
                            </div>

                            <div class="wadah3">
                                <div class="row">
                                    <div class="col-xs-4" style="color: white; font-size : 12pt; padding-top: 5px;">
                                        <label class="pull-right">Masukkan Kode OTP</label>
                                    </div>
                                    <div class="col-xs-8">
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-xs-4"></div>
                                    <div class="col-xs-8">
                                        <label style="color:black; margin-top: 5px; font-size: 8pt;">Kirim Ulang OTP</label>
                                        &nbsp;&nbsp;
                                        <label style="color: white; font-size: 7pt;"><i>Kamu bisa mengirim ulang kode verifikasi kamu setelah 30d</i></label>
                                    </div>
                                </div>
                            </div>
                            <div class="wadah4">
                                <button class="btn" style="background-color: white; color:black; width: 150px;"><b>Batal</b></button>
                                &nbsp;&nbsp;
                                <button class="btn" style="background-color: #083170; color:white; width: 150px;"><b>Selanjutnya</b></button>
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
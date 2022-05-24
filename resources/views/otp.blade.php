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
  <div class="text-center p-3" style="margin-top: 10px; height: 55px; background-color: rgba(0, 0, 0, 0.2);">
    <span style="color: #858796;">© 2022 Copyright:</span>
    <a class="text-white" href="#">PT. Digital Multisite Indonesia</a>
  </div>
  <!-- Copyright -->
</footer>
</html>
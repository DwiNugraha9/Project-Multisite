<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <title>Multisite</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/starter-template.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>
    <style>
        body{
            background-color: #BED5FA;
        }

        .outside {
            position: relative;
            width: 100%;
            margin-top: 50px;;
            height: 70px;
            text-align: center;
            color: white;
            padding: 25px 0;
            background-color: #004DC3; /*to make it visible*/
        }
    </style>
  </head>

  <body>

  <nav class="navbar navbar-default navbar-fixed-top" style="background-color : #fff;">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><img src="img/logoml.png" style="width:60px; height: auto;"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: #5B7DB1;">Produk <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: #5B7DB1;">Layanan <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
            <li><a href="../navbar/" style="color: #5B7DB1;">Integrasi</a></li>
            <li><a href="../navbar-static-top/" style="color: #5B7DB1;">Lainnya</a></li>
            <li><button class="btn btn-default" style="margin-top: 7px;color: #5B7DB1;">Masuk</button></li>
            <li><button class="btn btn-primary" style="margin-top: 7px; margin-left: 10px;">Daftar</button></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container" style="background-color: white; margin-top: 50px; border-radius: 15px; height: 550px;">
        <div class="row">
            <div class="col-md-7" style="background-image: url('img/pic1.png'); height: 550px; background-repeat: no-repeat;
  background-size: 100% 100%; border-radius: 15px;">
                
            </div>
            <div class="col-md-5" style="height: 550px;">
                <img src="img/logoml.png" style="margin-top: 30px; width: 70px;">

                <h4 style="color: #004DC3; margin-top: 19px; ">Login</h4>
                <label style="margin-top: 17px; color: #2674ED;">Email</label>
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>

                <label style="margin-top: 30px; color: #2674ED;">Password</label>
                <input type="password" id="pass" class="form-control" placeholder="Password">
                <br>
                <b style="color: #002866; margin-top: 50px;">Lupa Password?</b> 

                <br><br>
                
                <button class="btn btn-sm btn-warning btn-block" type="submit">Masuk</button>
                <button class="btn btn-sm btn-warning btn-block" style="background-color: 
                #c90f02;" type="submit">Masuk Dengan Google</button>
                <button class="btn btn-sm btn-warning btn-block" style="background-color: #2674ED;" type="submit">Masuk Dengan Facebook</button>
                <br>

                <p>
                    <strong style="color: #7F7F7F; font-size: 10px;">Belum Punya Akun?</strong><b style="color: #004DC3; font-size: 10px;">&nbsp;&nbsp;Daftar untuk mencoba DMS (Gratis!)</b> 
   
                </p>


            </div>
        </div>
        
    </div>
    
    <div class="outside">
      <p>© 2022 PT. Digital Multisite Indonesia</p>
    </div>

    <script src="jsjquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

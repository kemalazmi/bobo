<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Boboyuk</title>

  <!-- Bootstrap Core CSS -->
  <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/animate.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/jquery-ui.min.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/jquery-ui.theme.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/lightslider.css">




  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->


  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="../assets/js/bootstrap.min.js"></script>
  <script src="../assets/js/jquery-ui.min.js"></script>
  <script src="../assets/js/smooth-scroll.min.js"></script>
  <script src="../assets/js/main.js"></script>
  <script src="../assets/js/lightslider.js"></script>


</head>

<body>
  <div class="overlay-login"> 
</div>
<div class="container">
  <div class="row">
  <nav class="navbar navbar-default navbar-boboyuk">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
          aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="brand" href="index.php">
          <img src="../assets/img/logo.png" class="img-responsive">
        </a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="#" style="padding-right:5px;">Bahasa</a>

          </li>
          <li>

            <a href="#" style="padding-left:0;">| English</a>
          </li>

          <li>
            <a href="#">
              <i class="icon-nav1"></i>
              Promo
            </a>
          </li>
          <li>
            <a href="#" class="clearfix">
              <i class="icon-nav2"></i>
              Cek Pemesanan
            </a>
          </li>

          <li class="dropdown">
            <a href="#" class="dropdown-toggle clearfix" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
              <i class="icon-nav3"></i>
              Akun Saya
              <i class="glyphicon glyphicon-menu-down" aria-hidden="true"></i>
            </a>
            <ul id="login-dp" class="dropdown-menu">
              <li class="login">
                <div class="row">
                  <div class="col-xs-12">
                    <div class="gabung">Login ke Akun Anda</div>
                    <div class="social-buttons">
                      <a href="#" class="btn btn-fb">
                        <i class="fa fa-facebook"></i> &nbsp;&nbsp;Login dengan Facebook</a> 
                    </div>
                    <div class="social-buttons">
                      <a href="#" class="btn btn-google">
                        <i class="fa fa-google-plus"></i> &nbsp;&nbsp;Login dengan Google</a> 
                    </div> 
                    <form class="form login" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email">
                      </div>
                      <div class="form-group">
                        <div class="row">
                          <div class="col-xs-6">
                            <label for="password">Kata sandi</label>
                          </div>
                          <div class="col-xs-6">
                            <div class="help-block text-right">
                              <a href="">Lupa kata sandi?</a>
                            </div>
                          </div>
                        </div>  
                        <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required> 
                      </div>
                      <div class="row">
                        <div class="col-xs-3">
                          <div class="form-group">
                            <button type="submit" class="btn btn-blue">Login</button>
                          </div> 
                        </div>
                        <div class="col-xs-9">
                          <div class="daftar"> 
                          Belum Punya Akun ? <a href="#">Daftar</a>
                          </div>
                        </div>
                      </div> 
                    </form>
                  </div> 
                </div>
              </li>

              <li class="signup">
                <div class="row">
                  <div class="col-xs-12">
                    <div class="gabung">Ayo, gabung jadi member</div>
                    <div class="social-buttons">
                      <a href="#" class="btn btn-fb">
                        <i class="fa fa-facebook"></i> &nbsp;&nbsp;Login dengan Facebook</a> 
                    </div>  
                    <form class="form signup" role="form" method="post" action="signup" accept-charset="UTF-8" id="signup-nav">
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email">
                      </div>
                      <div class="form-group"> 
                        <label for="password">Kata sandi</label>   
                        <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                        <p>Kata sandi bersifat sensitif terhadap huruf besar dan kecil dan harus berjumlah paling tidak 8 karakter.</p> 
                      </div>
                      <div class="form-group">
                        <label for="namadepan">Nama Depan</label>
                        <input type="text" class="form-control" id="namadepan">
                      </div> 
                      <div class="form-group">
                        <label for="damabelakang">Nama Belakang</label>
                        <input type="text" class="form-control" id="namabelakang">
                      </div> 
                      <div class="checkbox">
                       <label>
                       <input type="checkbox"> Berlangganan info penawaran & promosi spesial
                       </label>
                      </div> 
                      <div class="form-group">
                        <button type="submit" class="btn btn-blue">Daftar</button>
                      </div>   
                      <div class="setuju">
                        Dengan melakukan pendaftaran, saya setuju dengan <span>Ketentuan Penggunaan</span> dan <span>Kebijakan Privasi boboyuk.</span>
                      </div>
                      <div class="daftar text-center"> 
                        Sudah Punya Akun ? <a href="#">Login</a>
                      </div>
                    </form>
                  </div> 
                </div>
              </li>
            </ul>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
  </nav>
</div>
  </div>

<!DOCTYPE html>
<html lang="en">
    <head>        
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Vestuario</title>
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon
      <link rel="icon" href="images/fevicon.png" type="image/gif" /> -->
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    </head>
    <!-- body -->
    <body class="main-layout">
      <!-- loader  -->
        <div class="loader_bg">
           <div class="loader"><img src="images/loading.gif" alt="#" /></div>
        </div>
      <!-- end loader -->
      <!-- header -->
      <header>
            <div class="header">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-5 col-md-9 col-sm-9">
                            <nav class="navigation navbar navbar-expand-md navbar-dark ">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                            </nav>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-3 col-sm-3 col logo_section">
                            <div class="full">
                                <div class="center-desk">
                                    <div class="logo">
                                      <a href="index.php"><img src="images/logo.png" alt="#" /></a>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
                    <!-- END HEADER -->
    <body>
        <div id="login" class="login">
            <div class="container">
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4"> <br><br><br><br><br>
                      <div class="card">
                        <div class="card-header">
                            Inicio de sesion
                        </div>
                        <div class="card-body">
                            <form action="control/indexControl.php" method="POST">
                                <div class = "form-group">
                                    <label for="exampleInputEmail1">Nombre de usuario:</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="txtusuario" placeholder="Ingresa tu usuario" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Contraseña:</label>
                                    <input type="password" class="form-control" name="txtpassword" placeholder="Password" required>
                                </div>
                                <button type="submit" name="btnLogin" class="btn btn-primary">Iniciar sesion</button>
                            </form>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
                  <!-- FOOTER -->
    <footer id="contact">
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p>© 2023 Todos los derechos reservados. <a href="http://intranet.vtv.gov.ve/">Venezolana de TeleVisión</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script>
         $('a[href^="#"]').on('click', function(event) {

          var target = $(this.getAttribute('href'));

          if( target.length ) {
              event.preventDefault();
              $('html, body').stop().animate({
                  scrollTop: target.offset().top
              }, 2000);
          }

         });
      </script>
</html>